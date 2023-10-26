<?php
namespace App\Controllers;
use App\Models\RoleModel;
use CodeIgniter\Controller;


class Roles extends BaseController
{

    public function __construc(){
        $this->load->database();
        $db  = \Config\Database::connect();
        $builder = $db->table('roles');
      }
      

    public function index(): string{
        $RoleModel = new RoleModel();
       $data['roles'] = $RoleModel->orderBy('id', 'DESC')->findAll();
   
        return view('roles/index', $data);
    }

    public function create(): string{
        
        $RoleModel = new RoleModel();
        return view('roles/create');
    }

    public function insert(){
       $data = [];
        helper(['form']);
        if ($this->request->getMethod() == "post") {
            $validation =  \Config\Services::validation();
    
            $rules = [
                "name" => [
                    "label" => "First Name", 
                    "rules" => "required|min_length[3]|max_length[20]"
                ],
                "descp" => [
                    "label" => "Last Name", 
                    "rules" => "required|min_length[3]|max_length[20]"
                ],
         
            ];
            if ($this->validate($rules)) {
    
                $role = new RoleModel();
                $roledata = [
                    "name" => $this->request->getVar("name"),
                    "descp" => $this->request->getVar("descp"),
                  
                ];
                $role->save($roledata);
                var_dump($roledata);
                $session = session();
                 echo $session->setFlashdata('success', '<p class="text-success">Roles creado con exito!<p/>');
                return $this->response->redirect(site_url('/roles-list'));

            } else {
                $session = session();
                $session->setFlashData("danger", '<p class="text-success"> Cuidado los datos no se insertaron  </p>');
                return $this->response->redirect(site_url('/roles-create'));

            }
        }
       

    }

    // show single user
    public function edit($id = null){
        $roleModel = new RoleModel();
        $data['role_obj'] = $roleModel->where('id', $id)->first();
        return view('roles/edit', $data);
    }


     // update user data

    

     public function update(){
       

        $rules = [
            "name" => [
                "label" => "First Name", 
                "rules" => "required|min_length[3]|max_length[20]"
            ],
            "descp" => [
                "label" => "Last Name", 
                "rules" => "required|min_length[3]|max_length[20]"
            ],
     
        ];
        

        if ($this->validate($rules)) {
            
           
                // $role_model = new RoleModel();
                // $roles =$role_model->where('id', $this->request->getVar("id"))->first();
                // $roles->name= $this->request->getVar("name");
                // $roles->descp= $this->request->getVar("descp");

   $model = new RoleModel();
   $id = $this->request->getVar('id');
   $data = ['name' => $this->request->getVar('name'),
   'descp' => $this->request->getVar('descp'),
   
];
//$this->where(['key1'=>1,'key2'=>2])->update($array);
//$model->update($id, $data)
  if($model->update($id, $data)){
                
                $session = session();
                 echo $session->setFlashdata('success', '<p class="text-success">Roles actualizado con exito!<p/>');
                return $this->response->redirect(site_url('/roles-list'));

            } else {
                $session = session();
                $session->setFlashData("danger", '<p class="text-success"> Cuidado los datos no se insertaron  </p>');
                return $this->response->redirect(site_url('/roles-create'));

            }
        
        
    }
}

    public function delete($id = null){
        $roleModel = new RoleModel();
        $data['role'] = $roleModel->where('id', $id)->delete($id);
        $session = \Config\Services::session();
        echo $session->setFlashdata('danger', '<p class="small">Cuidado el registro fue borrado !</>');
        return $this->response->redirect(site_url('/roles-list'));
    }    



    
}
