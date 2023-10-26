<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\RoleModel;
use CodeIgniter\Controller;

class Users extends Controller
{

   
    
    public function index()
    {
        $UserModel= new UserModel();
        $RoleModel= new RoleModel();

        $data=[
            'users'=>$UserModel->orderBy('id', 'DESC')->findAll(),
            'roles'=>$RoleModel->orderBy('id', 'DESC')->findAll(),
            'query'=>$UserModel->getusersroles(),
        ];
       // $data['users'] = $UserModel->orderBy('id', 'DESC')->findAll();
        //$data['users'] = $UserModel->getuseroles()->get();

       
        return view('users/index', $data);
    }

    public function create()
    {

        $UserModel= new UserModel();
        $RoleModel= new RoleModel();

        $data=[
            'users'=>$UserModel->orderBy('id', 'DESC')->findAll(),
            'roles'=>$RoleModel->orderBy('id', 'DESC')->findAll(),
        ];
        //$data['usersroles'] = $UserModel->orderBy('id', 'DESC')->findAll();
        return view('users/create', $data);

    }

    public function insert(){
        $data = [];
        helper(['form']);
        if ($this->request->getMethod() == "post") {
            $validation =  \Config\Services::validation();
    
            $rules = [
                "name" => [
                    "label" => "name", 
                    "rules" => "required"
                   
                ],
                "surname" => [
                    "label" => "surname", 
                    "rules" => "required"
                    
                ],
                "email" => [
                    "label" => "email", 
                    "rules" => "required"
                    
                ],
                "role_id" => [
                    "label" => "role_id", 
                    "rules" => "required"
                    
                ],
                "contacto" => [
                    "label" => "contacto", 
                    "rules" => "required"
                    
                ],
                "password" => [
                    "label" => "password", 
                    "rules" => "required|min_length[6]|max_length[15]"
                   
                ],
         
            ];

            
            if ($this->validate($rules)) {
    
                $user = new UserModel();
            
                $userdata = [
                    "name" => $this->request->getVar("name"),
                    "surname" => $this->request->getVar("surname"),
                    "email" => $this->request->getVar("email"),
                    'role_id' =>$this->request->getVar("role_id"),
                    "contacto" => $this->request->getVar("contacto"), 
                    "password" => $this->request->getVar("password"),
                
                ];

                $user->save($userdata);
                $session = session();
             
                 echo $session->setFlashdata('success', '<p class="text-success">Usuarios creado con exito!<p/>');
                return $this->response->redirect(site_url('/users-list'));

            } else {
                $session = session();
                $session->setFlashData("danger", '<p class="text-danger" >Disculpa, los datos no se insertaron ,Prueba de neuvo !</p>');
               
                $data["validation"] = $validation->getErrors();
                //var_dump($validation);
               return $this->response->redirect(site_url('/users-create'));

              

            }
        }
        

    }

    public function edit($id = null){
        $roleModel = new UserModel();
        $data['role_obj'] = $userModel->where('id', $id)->first();
        return view('edit/edit', $data);
    }


    public function delete($id = null){
        $userModel = new UserModel();
        $data['users'] = $userModel->where('id', $id)->delete($id);
        $session = \Config\Services::session();
        echo $session->setFlashdata('danger', '<p class="small">Cuidado el registro fue borrado !</>');
        return $this->response->redirect(site_url('/users-list'));
    }    
}
