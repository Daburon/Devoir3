<?php
    class Model_Connexion extends CI_Model
    {
        function getAllRegions($nom)
        {
            $sql = $this->db->query("SELECT statutUser FROM user WHERE nom =".$nom);
            return $sql->result();
        }

    }
?>