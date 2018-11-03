<?php
class m_kabupaten extends CI_Model{

      function tampil_data(){

            $tampil=$this->db->query("SELECT * FROM kecamatan");

            return $tampil;

      }

}
