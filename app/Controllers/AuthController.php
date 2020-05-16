<?php 
namespace App\Controllers;

use App\Models\User;
use CodeIgniter\Controller;

class AuthController extends Controller{
    public function create(){
        $user   = new User();
        $data   = [
            'title'     => "Save Using"
        ];
        $add    = $user->insert($data);
        $id     = $user->insertID;
        if ($add) {
            echo "Good, add to ID => $id";
        }else{
            echo "Nooo";
        }
    }
    
    public function findAll(){
        $user = new User();
        $find = $user->findAll();
        foreach ($find as $all) {
            echo $all['title']."<br>";
        }
    }

    public function find($id){
        $user = new User();
        $find = $user->find($id);
        if ($find == null) {
            return "Tidak ada Data";
        }
        echo $find->title;
    }

    public function update($id){
        $user   = new User();
        $update = $user->save([
            'id'        => $id,
            'title'     => 'UPDATED'
        ]);
        if ($update) {
            echo "Goood Update";
        }else{
            echo "Nooo";
        }
    }

    public function delete($id){
        $user   = new User();
        $delete = $user->delete($id);
        if ($delete) {
            echo "Goood Deleted";
        }else{
            echo "Nooo";
        }
    }

}