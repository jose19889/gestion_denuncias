<?php 
namespace App\Models;
use CodeIgniter\Model;
class RoleModel extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'descp'];
    protected $useAutoIncrement = true;
    

    public function __construc(){
        $this->load->database();
      
        $db      = \Config\Database::connect();
        $builder = $db->table('Roles');
      }




    public function user()
    {
        return $this->belongsTo('name', 'App\Models\UserModel');
        // $this->belongsTo('propertyName', 'model', 'foreign_key', 'owner_key');
    }


}