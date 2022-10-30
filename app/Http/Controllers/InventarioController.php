<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Models\Core\MenuModel;
use App\Models\InventarioModel;

class InventarioController extends Controller
{
    public function __construct(InventarioModel $InventarioModel)
    {
        $this->InventarioModel = $InventarioModel;
        $this->middleware('auth');
    }
    //fardo
    public function cpanel_fardos(){
      $result = array();
      $result['title'] = "fardos";
      return view("pages.inventario.fardos.dashboard")->with('result',$result);
    }
    
     //bobina
    public function cpanel_bobina(){
      $result = array();
      $result['title'] = "bobina";
      return view("pages.inventario.bobina.dashboard")->with('result',$result);
    }

    public function add_bovina(Request $request){

      $id_orden     = $request->id_orden_bobina;
      $lbs          = $request->lbs_bobina;
      $id_rol_user  = $request->id_rol_user;

      $id_numero_bobina = $this->InventarioModel->select_inventario_orden($id_orden,$id_rol_user);


      if(is_null($id_numero_bobina)){
          $id_orden_bobina = $this->InventarioModel->insert_inventario_orden($id_rol_user,$id_orden,$lbs,1);
          return $id_orden_bobina;
      }else{
          $numero = $id_numero_bobina+1;
          $id_orden_bobina = $this->InventarioModel->insert_inventario_orden($id_rol_user,$id_orden,$lbs,$numero);
          return $id_orden_bobina;
      }

    }
   
}
