<?php 
namespace App\Models;
use CodeIgniter\Model;


class UserModel extends Model
{

  public function __construc(){
    $this->load->database();

    $db      = \Config\Database::connect();
$builder = $db->table('users');
  }
    protected $table = 'users';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'surname', 'email','role_id', 'contacto', 'password'];


      public function getuseroles(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('roles ', 'users.role_id = roles.id_role ');
        $this->db->group_by('users.id');
      }

      public function user_roles(){
    
        $builder = $db->table('users');
        $builder->select('*');
        $builder->join('roles', 'users.role_id = roles.id', 'left');
        $query = $builder->get();
  
      }


      public function role()
    {
        return $this->hasOne('name', 'App\Models\RoleModel');
        // $this->hasOne('propertyName', 'model', 'foreign_key', 'local_key');
    }


    public function getusersroles(){
      $query = $this->db->select('*')
                  ->from('roles')
                  ->join('users', 'users.id_role = roles.name')
                  ->get();

return $query;
    }


     

}