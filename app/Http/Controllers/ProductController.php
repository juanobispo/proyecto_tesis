<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\InventarioModel;
use App\Models\ProductModel;
use App\Models\ControlModel;

class ProductController extends Controller
{
    public function __construct(ProductModel $ProductModel,InventarioModel $InventarioModel,ControlModel $ControlModel)
    {
        $this->ProductModel     = $ProductModel;
        $this->InventarioModel  = $InventarioModel;
        $this->ControlModel     = $ControlModel;
        $this->middleware('auth');
    }

    //ext
    public function cpanel_ext(){
      $result = array();
      $result['title'] = "Ext";
      return view("pages.control.ext.dashboard")->with('result',$result);
    }

    public function insert_production(Request $request){
      
      $id_rol       = $request->id_rol;
      $comentarios  = $request->comentarios;
      $desperdicio  = $request->desperdicio;
      $grupo        = $request->grupo;
      $id_empleado  = $request->id_empleado;
      $id_orden_ext = $request->id_orden_ext;
      $product_ext  = $request->product_ext;
      $turno        = $request->turno;

      $result = array();
      
      $result['rsl'] = $this->ProductModel->product_add_area($id_rol,$comentarios,$desperdicio,$grupo,$id_empleado,$id_orden_ext,$product_ext,$turno);

      return $result;

      //return view("pages.control.ext.dashboard")->with('result',$result);
    }

    public function bovina_ext(Request $request){
      $data = array();
      $id_orden           = $request->id_orden;
      $id_rol_user        = auth()->user()->role; 
      $data['id_orden']   = $id_orden;
      $data['orden']      = $this->ProductModel->select_orden_all($id_orden,$id_rol_user);
      $data['bovina']     = $this->InventarioModel->select_inventario_orden_all($id_orden,$id_rol_user);
      
      return view("layouts.action.ext_bovina")->with('result',$data); 
    }

    public function cpanel_ext_super(){
      $data = array();
      $data['title']         = "Supervisor Ext";
      $id_supervisor         = auth()->user()->id;
      $data['prodc_super']   = $this->ProductModel->select_production_ext($id_supervisor);
      return view("pages.control.ext.supervisor")->with('result',$data);
    }

    public function produccion_ext(Request $request){

      $id_supervisor    = $request->id_supervisor;  
      $des_ad           = $request->des_ad;
      $des_bd           = $request->des_bd;
      $duro_ad          = $request->duro_ad;
      $duro_bd          = $request->duro_bd;
      $id_orden_search  = $request->id_orden_search;
      $lbs_ext          = $request->lbs_ext;
      $n_maquina        = $request->n_maquina;
      $comentario       = $request->comentario;
      //$orden_search     = $request->orden_search;

      if($des_ad==""){
        $des_ad =0;      
      }
      if($des_bd==""){
        $des_bd =0;      
      }
      if($duro_ad==""){
        $duro_ad =0;      
      }
      if($duro_bd==""){
        $duro_bd =0;      
      }


      $dataSet[] = [
        'id_prog'         => 1,
        'id_orden'        => $id_orden_search,
        'id_supervisor'   => $id_supervisor,
        'mq_ext'          => $n_maquina,
        'lbs_ext'         => $lbs_ext,
        'desperdicio_bd'  => $des_bd,
        'desperdicio_ad'  => $des_ad,
        'desperdicio_dbd' => $duro_bd,
        'desperdicio_dad' => $duro_ad,
        'comen'           => $comentario,
      ];

      $result['rsl'] = $this->ProductModel->product_ext($dataSet);
      

      return $result;
      /*
      $result = array();
      $result['title'] = "Supervisor Ext";
      return view("pages.control.ext.supervisor")->with('result',$result);*/
    }

    
    public function produccion_ext_orden(Request $request){
      /*Borrar seguir hilo*/  
      $id_orden              = $request->id_orden_add;
      $data['orden']         = $this->ControlModel->edit_ordenes($id_orden);
      $data['production']    = $this->ControlModel->edit_production($id_orden);
      $id_supervisor         = auth()->user()->id;
      $data['prodc_super']   = $this->ProductModel->select_production_ext($id_supervisor);

      return view("pages.control.ext.report_super")->with('result',$data);

    }
    
    //corte
    public function cpanel_corte(){
      $result = array();
      $result['title'] = "Corte";
      return view("pages.control.corte.dashboard")->with('result',$result);
    }
    public function cpanel_corte_super(){
      $data = array();
      $data['title'] = "Supervisor Corte";
      $id_supervisor         = auth()->user()->id;
      $data['prodc_super']   = $this->ProductModel->select_production_corte($id_supervisor);
      return view("pages.control.corte.supervisor")->with('result',$data);
    }
    public function produccion_corte(Request $request){

      $coment                    = $request->coment;
      $desecho                   = $request->desecho;
      //$empleado_search_corte     = $request->empleado_search_corte;
      $id_empleado_search_corte  = $request->id_empleado_search_corte;
      $id_orden_search           = $request->id_orden_search;
      $id_supervisor             = $request->id_supervisor;
      $lbs_corte                 = $request->lbs_corte;
      $n_maquina                 = $request->n_maquina;
      
      $n_pista                   = $request->n_pista;
          
      $dataSet[] = [
        'id_prog'         => 1,
        'id_orden'        => $id_orden_search,
        'id_supervisor'   => $id_supervisor,
        'id_empleado'     => $id_empleado_search_corte,
        'mq_corte'        => $n_maquina,
        'lbs_corte'       => $lbs_corte,
        'desperdicio'     => $desecho,
        'n_pistas'        => $n_pista,
        'coment'          => $coment,
      ];

      $result['rsl'] = $this->ProductModel->product_corte($dataSet);
      
      return $result;
    }

    //imp
    public function cpanel_imp(){
      $result = array();
      $result['title'] = "Imp";
      return view("pages.control.imp.dashboard")->with('result',$result);
    }
    public function cpanel_imp_super(){
      $data = array();
      $data['title']         = "Supervisor Imp";
      $id_supervisor         = auth()->user()->id;
      $data['prodc_super']   = $this->ProductModel->select_production_imp($id_supervisor);
      return view("pages.control.imp.supervisor")->with('result',$data);
    }
    public function produccion_imp(Request $request){

      //return $request;

      $id_orden_search        = $request->id_orden_search;
      $id_supervisor          = $request->id_supervisor;
      $id_empleado_search_imp = $request->id_empleado_search_imp;
      $n_maquina              = $request->n_maquina;
      //$n_orden_imp            = $request->n_orden_imp;
      $n_bovina               = $request->n_bovina;
      $lbs_imp                = $request->prodct_lbs;
      $time_end               = $request->time_end;
      $time_star              = $request->time_star;
      $coment_imp             = $request->coment_imp;
      $desperdicio            = $request->desperdicio;
      //$empleado_search_imp    = $request->empleado_search_imp;

     
      $dataSet[] = [
        'id_prog'         => 1,
        'id_orden'        => $id_orden_search,
        'id_supervisor'   => $id_supervisor,
        'id_empleado'     => $id_empleado_search_imp,
        'mq_imp'          => $n_maquina,
        'lbs_imp'         => $lbs_imp,
        'nbovinas'        => $n_bovina,
        'desperdicio'     => $desperdicio,
        'comen'           => $coment_imp,
        'inicio'          => $time_star,
        'final'           => $time_end,
        //'comen'           => $comentario,
      ];

      $result['rsl'] = $this->ProductModel->product_imp($dataSet);
      
      return $result;
    }
    

}
