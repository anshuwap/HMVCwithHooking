<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Daily_report extends AdminController
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('DailyReport_model');
        // if (!is_admin()) {
        //     access_denied('Menu Setup');
        // }
    }

    /* Daily report functions */
    public function index()
    {
        if ($this->input->post() && $this->input->is_ajax_request()) {
            $data    = $this->input->post();
            $success = $this->DailyReport_model->event($data);
            $message = '';
            if ($success) {
                if (isset($data['eventid'])) {
                    $message = _l('event_updated');
                } else {
                    $message = _l('new_daily_report_added_successfully');
                }
            }
            echo json_encode([
                'success' => $success,
                'message' => $message,
            ]);
            die();
        }
        $data['google_ids_calendars'] = $this->misc_model->get_google_calendar_ids();
        $data['google_calendar_api']  = get_option('google_calendar_api_key');
        $data['title']                = _l('daily_report');
        // print_r($data);exit;
        add_calendar_assets();
        $this->app_scripts->add('daily-report-js', 'modules/daily_report/assets/js/daily_report.js?'.rand(000, 9999), "admin");

        $this->load->view('daily_report', $data);
    }

    public function get_calendar_data()
    {
        if ($this->input->is_ajax_request()) {
            echo json_encode($this->DailyReport_model->get_calendar_data(
                $this->input->post('start'),
                $this->input->post('end'),
                '',
                '',
                $this->input->post()
            ));
            die();
        }
    }

    public function view_event($id)
    {
        $data['event'] = $this->DailyReport_model->get_event($id);
        $this->load->view('admin/utilities/event', $data);
    }

    public function delete_event($id)
    {
        if ($this->input->is_ajax_request()) {
            $event = $this->DailyReport_model->get_event_by_id($id);
            if ($event->userid != get_staff_user_id() && !is_admin()) {
                echo json_encode([
                    'success' => false,
                ]);
                die;
            }
            $success = $this->DailyReport_model->delete_event($id);
            $message = '';
            if ($success) {
                $message = _l('daily_report_deleted_successfully');
            }
            echo json_encode([
                'success' => $success,
                'message' => $message,
            ]);
            die();
        }
    }
}
