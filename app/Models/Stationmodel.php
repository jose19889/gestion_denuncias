<?php 
namespace App\Models;
use CodeIgniter\Model;
class StationModel extends Model
{
    protected $table = 'comisarias';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'comisario_jefe','contacto', 'email','contacto_jefe','province_id',
    'city_id' ,'barrio_id' , 'contacto_adjunto', 'segundo_encargado'];
    protected $useAutoIncrement = true;
    

    public function __construc(){
        $this->load->database();
      
        $db      = \Config\Database::connect();
        $builder = $db->table('Comisarias');
      }




    public function user()
    {
        return $this->belongsTo('name', 'App\Models\UserModel');
        // $this->belongsTo('propertyName', 'model', 'foreign_key', 'owner_key');
    }


}