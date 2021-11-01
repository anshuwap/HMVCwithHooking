<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cron extends App_Controller
{
    public function index($key = '')
    {
        update_option('cron_has_run_from_cli', 1);

        if (defined('APP_CRON_KEY') && (APP_CRON_KEY != $key)) {
            header('HTTP/1.0 401 Unauthorized');
            die('Passed cron job key is not correct. The cron job key should be the same like the one defined in APP_CRON_KEY constant.');
        }

        $last_cron_run                  = get_option('last_cron_run');
        $seconds = hooks()->apply_filters('cron_functions_execute_seconds', 300);

        if ($last_cron_run == '' || (time() > ($last_cron_run + $seconds))) {
            $this->load->model('cron_model');
            $this->cron_model->run();
        }
    }
    
    public function add_leads_from_web()
    {
        $this->load->model('leads_model');
        $leads = 0;
        $cron_status = "failed";
        $lead_data = (object)$this->input->post();
        if($lead_data && $lead_data->mobile!=""):
            $source = 11; //11, 15
            $lead = array("status" => 2, "source" => $source, "assigned" => "");
            if($lead_data->product_name!="")
                $lead["tags"] = $lead_data->product_name;
            $lead["name"] = $lead_data->name;
            $lead["title"] = "";//$lead_data->title;
            $lead["email"] = $lead_data->email;
            $lead["website"] = "";
            $lead["phonenumber"] = $lead_data->mobile;
            $lead["company"] = "";
            $lead["address"] = "";
            $lead["city"] = "";
            $lead["state"] = "";
            $lead["country"] = 102; //IN
            $lead["zip"] = "";
            $lead["default_language"] = "";
            $lead["description"] = $lead_data->description;
            $lead["custom_contact_date"] = "";
            $lead["is_public"] = 1;
            $where = array(db_prefix() . 'leads.source' => $source, db_prefix() . 'leads.name' => $lead_data->SENDERNAME, db_prefix() . 'leads.phonenumber' => $lead_data->MOB);
            $lead_clash = $this->leads_model->getCronDetails('', $where);
            if(empty($lead_clash)):
                $leads++;
                $this->leads_model->add($lead);
                // echo "done";
            endif;
            $cron_status = "success";
        endif;
        if($cron_status == "success")
            log_activity('Lead add from website completed ['.$leads.' Lead Added]');
        else
            log_activity('Lead add from website failed, Check API or Website Admin. ['.$leads.' Lead Added]');
        echo $cron_status;
    }

    public function test($key = '')
    {
        $this->load->model('leads_model');
        $leads_data = json_decode(file_get_contents('https://mapi.indiamart.com/wservce/enquiry/listing/GLUSR_MOBILE/7617855680/GLUSR_MOBILE_KEY/MTYwMDI0NTI5MS43ODcyIzM4OTE0NDE4/'));
        //APPPATH.'indiamart_leads_data.php'
        $leads = array();
        foreach($leads_data as $lead_data):
            $lead = array("status" => 2, "source" => 3, "assigned" => "");
            if($lead_data->PRODUCT_NAME!="")
                $lead["tags"] = $lead_data->PRODUCT_NAME;
            $lead["name"] = $lead_data->SENDERNAME;
            $lead["title"] = "";
            $lead["email"] = $lead_data->SENDEREMAIL;
            $lead["website"] = "";
            $lead["phonenumber"] = $lead_data->MOB;
            $lead["company"] = $lead_data->GLUSR_USR_COMPANYNAME;
            $lead["address"] = $lead_data->ENQ_ADDRESS;
            $lead["city"] = $lead_data->ENQ_CITY;
            $lead["state"] = $lead_data->ENQ_STATE;
            $lead["country"] = ($lead_data->COUNTRY_ISO=="IN")?102:"";
            $lead["zip"] = "";
            $lead["default_language"] = "";
            $lead["description"] = $lead_data->ENQ_MESSAGE;
            $lead["custom_contact_date"] = ($lead_data->QTYPE=="B")?date('d-m-Y H:i', strtotime($lead_data->DATE_TIME_RE)):""; //17-09-2020 23:00
            $lead["is_public"] = 1;
            $where = array(db_prefix() . 'leads.source' => 3, db_prefix() . 'leads.name' => $lead_data->SENDERNAME, db_prefix() . 'leads.phonenumber' => $lead_data->MOB);
            $lead_clash = $this->leads_model->getCronDetails('', $where);
            if(empty($lead_clash)):
                print_r($this->db->last_query());exit;
                $leads[] = $lead;
                //$this->leads_model->add($lead);
            endif;
        endforeach;
        echo "<HR>";
        print_r($leads);
        //{"status":"2","source":"3","assigned":"","tags":"Academy Website Designing Service","name":"Anshu Gupta","title":"Position","email":"anshuwap1@gmail.com","website":"binplus.in","phonenumber":"7617855680","company":"Binplus","address":"Shivaji Nagar Jhansi","city":"Jhansi","state":"UP","country":"102","zip":"284001","default_language":"","description":"Test Leads","custom_contact_date":""}
        //[4] => stdClass Object ( [RN] => 5 [QUERY_ID] => 252807709 [QTYPE] => B [SENDERNAME] => Balandar Shakhar Vishwakarma [SENDEREMAIL] => goluvish43@gmail.com [SUBJECT] => Requirement for Mobile Application Development [DATE_RE] => 16 Sep 2020 [DATE_R] => 16-Sep-20 [DATE_TIME_RE] => 16-Sep-2020 09:59:24 AM [GLUSR_USR_COMPANYNAME] => farmeng [READ_STATUS] => [SENDER_GLUSR_USR_ID] => [MOB] => +91-7987304493 [COUNTRY_FLAG] => https://1.imimg.com/country-flags/small/in_flag_s.png [QUERY_MODID] => DIRECT [LOG_TIME] => 20200916095924 [QUERY_MODREFID] => [DIR_QUERY_MODREF_TYPE] => [ORG_SENDER_GLUSR_ID] => [ENQ_MESSAGE] => I am looking for Mobile Application Development. Kindly send me price and other details.Probable Unit Price : 20,000 to 50,000  Probable Requirement Type : Business Use [ENQ_ADDRESS] => Indore, Madhya Pradesh [ENQ_CALL_DURATION] => [ENQ_RECEIVER_MOB] => [ENQ_CITY] => Indore [ENQ_STATE] => Madhya Pradesh [PRODUCT_NAME] => Mobile Application Development [COUNTRY_ISO] => IN [EMAIL_ALT] => [MOBILE_ALT] => [PHONE] => [PHONE_ALT] => [IM_MEMBER_SINCE] => [TOTAL_COUNT] => 60 )
        
    }
}
