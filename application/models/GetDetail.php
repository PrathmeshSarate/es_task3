<?php 
class GetDetail extends CI_Model{
    //Constructor
    public function __construct()
    {
        parent::__construct();        
        $this->db = $this->load->database('default',TRUE);
        
    }

    public function save_quali($rows)
    {
        foreach($rows as $row){
            $this->db->insert('user', $row);
        }
        return true;
    }

    public function fetch()
    {
        $result_set=$this->db->get("user");
        return $result_set->result();        
    }

    public function get_by_id($id)
    {
        $query=$this->db->query("select * from `user` where `u_id`='".$id."'");
        return $query->result();
    }


}