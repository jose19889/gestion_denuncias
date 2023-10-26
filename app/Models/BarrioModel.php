<?php 
namespace App\Models;
use CodeIgniter\Model;
class BarrioModel extends Model
{
    protected $table = 'barrios';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'city_id'];
    protected $useAutoIncrement = true;
    

    public function __construc(){
        $this->load->database();
      
        $db      = \Config\Database::connect();
        $builder = $db->table('Barrios');
      }





}