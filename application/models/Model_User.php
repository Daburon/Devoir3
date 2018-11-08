<?php

class Model_User extends CI_Model{

    public function getUser()
    {
        $sql = $this->db->select('*')->from('user');
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
}
?>