<?php
    class Logs_model extends CI_Model
    {
        public function __construct()
        {
        parent::__construct();
        $this->load->database();
        }
        public function getLogs($id = false)
        {
            $filter['device_id'] = $id;

            $db = $this->db->get_where('logs_current', $filter);

            return $db->row();
        }
    }