<?php
	namespace App\Models;
	use CodeIgniter\Model;
	class AuthModel extends Model
		{
			//cek $builder dimana username dari database mengambil data $username
		 function get_data_login($username, $tbl)
			 {
			 $builder = $this->db->table($tbl);
			 $builder->where('username', $username);
			 $log = $builder->get()->getRow();
			 return $log;
		 }
	}
?>