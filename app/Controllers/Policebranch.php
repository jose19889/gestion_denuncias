<?php

namespace App\Controllers;
use App\Models\ProvinceModel;
use App\Models\CityModel;
use App\Models\StationModel;
use App\Models\BarrioModel;
class Policebranch extends BaseController
{
    public function index(): string
    {
        $Station = new StationModel();
        $data['stations'] = $Station->findAll();
 
        $Province = new ProvinceModel();
        $data['provinces'] = $Province->findAll();
 
        $City = new CityModel();
        $data['cities'] = $City->findAll();
 
        $Barrio = new BarrioModel();
        $data['barrios'] = $Barrio->findAll();
        return view('police-branch/index', $data);
    }

    public function create(): string
    {
       $Province = new ProvinceModel();
       $data['provinces'] = $Province->findAll();

       $City = new CityModel();
       $data['cities'] = $City->findAll();

       $Barrio = new BarrioModel();
       $data['barrios'] = $Barrio->findAll();
        return view('police-branch/create',$data);
    }


    public function insert(){
        $data = [];
         helper(['form']);
         if ($this->request->getMethod() == "post") {
             $validation =  \Config\Services::validation();
     
             $rules = [
                 "name" => [
                    "label" => "insertar texto",  
                     "rules" => "required"
                 ],
                 "city_id" => [
                    "label" => "insertar texto",  
                     "rules" => "required"
                 ],
                 "email" => [
                     "label" => "insertar texto", 
                    "rules" => "required"
                ],
                "contacto" => [
                     "label" => "insertar texto", 
                    "rules" => "required|min_length[9]|max_length[20]"
                ],
                "comisario_jefe" => [
                     "label" => "insertar texto", 
                    "rules" => "required"
                ],
                "contacto_jefe" => [
                    "label" => "Last Name", 
                    "rules" => "required|min_length[9]|max_length[20]"
                ],
                "segundo_encargado" => [
                    "label" => "insertar texto", 
                    "rules" => "required"
                ],
                "province_id" => [
                    "label" => "insertar texto", 
                    "rules" => "required"
                ],

                "barrio_id" => [
                    "label" => "insertar texto", 
                    "rules" => "required"
                ],

          
             ];
             if ($this->validate($rules)) {
     
                 $policestation = new StationModel();
                 $policedata = [
                     "name" => $this->request->getVar("name"),
                     "city_id" => $this->request->getVar("city_id"),
                     "email" => $this->request->getVar("email"),
                     "comisario_jefe" => $this->request->getVar("comisario_jefe"),
                     "contacto_jefe" => $this->request->getVar("contacto_jefe"),
                     "contacto" => $this->request->getVar("contacto"),
                     "segundo_encargado" => $this->request->getVar("segundo_encargado"),
                     "contacto_adjunto" => $this->request->getVar("contacto_adjunto"),
                     "province_id" => $this->request->getVar("province_id"),
                     "barrio_id" => $this->request->getVar("barrio_id"),
                   
                 ];
                 $policestation->save($policedata);
                 
                 $session = session();
                  echo $session->setFlashdata('success', '<p class="text-success">Registros creado con exito!<p/>');
                 return $this->response->redirect(site_url('/polistation-list'));
 
             } else {
                 $session = session();
                 $session->setFlashData("danger", '<p class="text-danger"> Cuidado los datos no se insertaron  </p>');
                 return $this->response->redirect(site_url('/polistation-create'));
 
             }
         }
        
 
     }

     
    public function delete($id = null){
        $stationModel = new StationModel();
        $data['station'] = $stationModel->where('id', $id)->delete($id);
        $session = \Config\Services::session();
        echo $session->setFlashdata('danger', '<p class="text-danger">Cuidado el registro fue borrado !</>');
        return $this->response->redirect(site_url('/polistation-list'));
    }    

 
}
