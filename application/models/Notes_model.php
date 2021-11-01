<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Notes_model extends App_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get lead
     * @param  string $id Optional - leadid
     * @return mixed
     */
    public function get($id = '', $where = [])
    {
        $this->db->select('*,' . db_prefix() . 'leads.name, ' . db_prefix() . 'leads.id,' . db_prefix() . 'leads_status.name as status_name,' . db_prefix() . 'leads_sources.name as source_name');
        $this->db->join(db_prefix() . 'leads_status', db_prefix() . 'leads_status.id=' . db_prefix() . 'leads.status', 'left');
        $this->db->join(db_prefix() . 'leads_sources', db_prefix() . 'leads_sources.id=' . db_prefix() . 'leads.source', 'left');

        $this->db->where($where);
        if (is_numeric($id)) {
            $this->db->where(db_prefix() . 'leads.id', $id);
            $lead = $this->db->get(db_prefix() . 'leads')->row();
            return $lead;
        }

        return $this->db->get(db_prefix() . 'leads')->result_array();
    }


    public function get_all_notes($rel_type="", $rel_id="")
    {
        $this->db->join(db_prefix() . 'staff', db_prefix() . 'staff.staffid=' . db_prefix() . 'notes.addedfrom');
        if($rel_id!="")
            $this->db->where('rel_id', $rel_id);
        if($rel_type!="")
            $this->db->where('rel_type', $rel_type);
        $this->db->order_by('dateadded', 'desc');

        $notes = $this->db->get(db_prefix() . 'notes')->result_array();

        return hooks()->apply_filters('get_notes', $notes, ['rel_id' => $rel_id, 'rel_type' => $rel_type]);
    }

    public function get_sale_agents()
    {
        return $this->db->query('SELECT DISTINCT(addedfrom) as sale_agent, CONCAT(firstname, \' \', lastname) as full_name FROM ' . db_prefix() . 'notes JOIN ' . db_prefix() . 'staff ON ' . db_prefix() . 'staff.staffid=' . db_prefix() . 'notes.addedfrom WHERE addedfrom != 0')->result_array();
    }
}
