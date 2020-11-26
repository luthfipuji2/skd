<?php
namespace App\Models;
use CodeIgniter\Model;

	class UserModel extends Model
{
	//nampung data sesuai tabel dan kolom database
 protected $table = 'users';
 protected $allowedFields = ['username', 'password', 'nomor_hp', 'alamat','role'];
}

?>