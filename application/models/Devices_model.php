<?php
    class Devices_model extends CI_Model
    {
        public function __construct()
        {
        parent::__construct();
        $this->load->database();
        }
        public function getDevices($editId = FALSE)
        {
            $filter = array(
                'is_deleted' => 0,
            );

            $db = $this->db
            ->get_where('devices', $filter);

            if($editId){
                $filter["id"] = $editId;

                return $db->row();
            }
            
            return $db->result();

        }
    }