<?php 
namespace App\Models;

use CodeIgniter\Model;

class User extends Model{
    protected $table      = 'user';
    protected $primaryKey = 'id';
    // Uncomment below if you want add primary key
    protected $allowedFields = ['title'];


}