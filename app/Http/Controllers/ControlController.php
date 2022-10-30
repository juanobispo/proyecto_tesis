<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*use App\Models\Core\MenuModel;*/
use App\Models\ControlModel;

class ControlController extends Controller{
    
    public function __construct(ControlModel $ControlModel)
    {   
        $this->ControlModel = $ControlModel;
        $this->middleware('auth');
    }

    //empleado
    public function cpanel_empleado(){
      $result = array();
      $result['title'] = "Empleado";
      //$manufacturers = $this->ControlModel->paginator(5);
      //return view("pages.empleado.dashboard")->with('manufacturers',$manufacturers);
      return view("pages.admin.empleado.dashboard")->with('result',$result);
    }

    public function add_empleado(Request $request){
      //dd($request);
      $nombre = $request->name;
      $apellido = $request->last_name;
      $correo = $request->email;
      $telefono = $request->telefono;
      $dui = $request->dui;
      $nit = $request->nit;
      $direccion = $request->direccion;
      $rol = $request->rol;
      $password = $request->password;
      
      $result = array();
      $result['title'] = "Empleado";  
      $result['rsl'] = $this->ControlModel->Add_empleado($nombre,$apellido,$correo,$telefono,$dui,$nit,$direccion,$rol,$password);

      return $result;
      //return view("pages.admin.cliente.dashboard")->with('result',$result);
    }

     //cliente 
    public function cpanel_cliente(){
      $result = array();
      $result['title'] = "Cliente";
      return view("pages.admin.cliente.dashboard")->with('result',$result);
    }

    public function add_cliente(Request $request){
      //dd($request);
      $nombre = $request->nombre;
      $apellido = $request->apellido;
      $correo = $request->correo;
      $telefono = $request->telefono;
      $dui = $request->dui;
      $nit = $request->nit;
      $direccion = $request->direccion;
      $result = array();
      
      $result['title'] = "Cliente"; 
      //insert 
      $id = $this->ControlModel->Add_cliente($nombre,$apellido,$correo,$telefono,$dui,$nit,$direccion);
      //codigo
      $cd           = $this->GenerateCode(5);
      $codigo       = "CL".$id.$cd;

      $result['rsl'] = $this->ControlModel->Add_cod_cliente($codigo,$id);

      return $result;
      //return view("pages.admin.cliente.dashboard")->with('result',$result);
    }

    public function buscar_cliente(Request $request){
      $term         = utf8_encode($request->term);
      $rsl          = $this->ControlModel->search_clientes($term);

      $data         = [];
      foreach ($rsl as $row) {
        $data[]     = [
            'label' => $row->nombre." ".$row->apellido,
            'cod'   => $row->codigo_cliente,
            'id'    => $row->id_cliente
        ];
      }

      return $data;
    }
    public function buscar_empleado(Request $request){
      $term         = utf8_encode($request->term);
      $rsl          = $this->ControlModel->search_empleados($term);

      $data         = [];
      foreach ($rsl as $row) {
        $data[]     = [
            'label' => $row->name." ".$row->last_name,
            //'cod'   => $row->codigo_cliente,
            'id'    => $row->id
        ];
      }

      return $data;
    }
    public function buscar_empleado_imp(Request $request){
      $term         = utf8_encode($request->term);
      $rsl          = $this->ControlModel->search_empleados_imp($term);

      $data         = [];
      foreach ($rsl as $row) {
        $data[]     = [
            'label' => $row->name." ".$row->last_name,
            //'cod'   => $row->codigo_cliente,
            'id'    => $row->id
        ];
      }

      return $data;
    }
    public function buscar_empleado_corte(Request $request){
      $term         = utf8_encode($request->term);
      $rsl          = $this->ControlModel->search_empleados_corte($term);

      $data         = [];
      foreach ($rsl as $row) {
        $data[]     = [
            'label' => $row->name." ".$row->last_name,
            //'cod'   => $row->codigo_cliente,
            'id'    => $row->id
        ];
      }

      return $data;
    }
    

    public function asociar_cliente(Request $request){

      $id_producto = $request->idproduct_asociar;
      $id_cliente = $request->idCliente_asociar;

      $id_asociar = $this->ControlModel->validar_product($id_cliente,$id_producto);
      if(!isset($id_asociar)){
        $id_asociar_insert = $this->ControlModel->validar_product_insert($id_cliente,$id_producto);
        $rsl['rsl'] = $id_asociar_insert;
      }else{
        $rsl['rsl'] = 0; 
      }

      return $rsl;
    }

    //orden
    public function cpanel_orden(){
      $result = array();
      $result['title'] = "Orden";
      return view("pages.admin.orden.dashboard")->with('result',$result);
    }

    public function add_orden(Request $request){
   
      $code_orden     = $request->code_orden;
      $id_producto    = $request->id_producto;
      $id_cliente     = $request->id_cliente;
      
      $id_orden = $this->ControlModel->validar_orden($code_orden);
      //$users = DB::select('select * from users where active = ?', [1]);

      if(!isset($id_orden)){
        $id_asociar = DB::table('asociar')->where('id_cliente',$id_cliente)->where('id_producto',$id_producto)->get();
        
        $id_orden_add   = $this->ControlModel->Add_orden($code_orden,$id_asociar[0]->id_asociar);

        $rsl['rsl'] = $id_orden_add;
      }else{
        $rsl['rsl'] = 0; 
      }

      return $rsl; 
    }

    public function buscar_orden(Request $request){
      $term         = utf8_encode($request->term);
      $rsl          = $this->ControlModel->search_ordenes($term);

      $data         = [];
      foreach ($rsl as $row) {
        $data[]     = [
            'label' => $row->n_orden,
            'id'    => $row->id_orden,
        ];
      }

      return $data;
    }

    public function buscar_orden_active(Request $request){
      $id     = $request->id_orden;
      $rsl    = $this->ControlModel->search_orden_prod($id);

      $data   = array();
      $ext    = 0;
      $imp    = 0;
      $cort   = 0;
      $c      = 0;
      $e      = 0;
      $i      = 0;


      if($rsl){
        foreach ($rsl as $row) {
          if($row->id_area_rol==2){
          $ext = $ext+$row->total;
          }
          if($row->id_area_rol==3){
          $imp = $imp+$row->total;
          }
          if($row->id_area_rol==4){
          $cort = $cort+$row->total;
          }
          $c = $row->cant_bolsas;
          $e = $row->lbs_producir;
          $i = $row->lbs_producir;
        }

        $data     = array ( 
          'cant_bolsas'     => $c,
          'lbs_producir'    => $e,
          'lbs_produc_imp'  => $i,
          'corte'           => $cort,
          'imp'             => $imp,
          'ext'             => $ext,
        );

      }


    
      $res = json_encode($data);
     
      return $res;
    }

    public function edit_orden(Request $request){
      $id_orden              = $request->id_orden_add;
      $data['orden']         = $this->ControlModel->edit_ordenes($id_orden);
      $data['production']    = $this->ControlModel->edit_production($id_orden);

      return view("pages.admin.orden.edit")->with('result',$data);
      //return view("pages.admin.orden.edit");
      
    }

    public function update_orden(Request $request){
      $id_orden     = $request->id_orden_up;
      $n_maqna_e    = $request->n_maqna_e;
      $lbs_pro      = $request->lbs_pro;
      $o_ext        = $request->o_ext;
      $n_maqna_i    = $request->n_maqna_i;
      $o_imp        = $request->o_imp;
      $n_maqna_c    = $request->n_maqna_c;
      $cant_bolsa   = $request->cant_bolsa;
      $fecha_entr   = $request->fecha_entr;
      $o_cort       = $request->o_cort;

      $update = DB::table('orden')
      ->where('id_orden', $id_orden)
      ->update(['mq_extrucion'     => $n_maqna_e,
                'mq_corte'          => $n_maqna_c,
                'mq_impresion'      => $n_maqna_i,
                'observacion_ext'   => $o_ext,
                'observacion_cort'  => $o_cort,
                'observacion_imp'   => $o_imp,
                'cant_bolsas'        => $cant_bolsa,
                'lbs_producir'      => $lbs_pro,
                'fecha_entrega'     => $fecha_entr,
        ]);

      
      if($update>0){
        $rsl          = $this->ControlModel->edit_ordenes($id_orden);
        return view("pages.admin.orden.edit")->with('result',$rsl);
      }

      //$id_orden        = $request->id_orden_add;
      //$rsl          = $this->ControlModel->update_ordenes($id_orden);

      
      //return view("pages.admin.orden.edit");
      
    }

    //producto
    public function cpanel_producto(){
      $result = array();
      $result['title'] = "Producto";
      return view("pages.admin.producto.dashboard")->with('result',$result);
    }

    public function add_producto(Request $request){
      //name producto
      $name_product = utf8_decode($request->producto);

      //material
      $ancho        = $request->ancho;
      $ldpe         = $request->ldpe;
      $bd           = $request->bd;
      $si           = $request->si;
      $hdpe         = $request->hdpe;
      $ad           = $request->ad;
      $no           = $request->no;
      $lldpe        = $request->lldpe;
      $limpbd       = $request->limpbd;
      $calibre      = $request->calibre;
      $limpad       = $request->limpad;
      $decaras      = $request->decaras;
      $peletisado   = $request->peletisado;
      $fuelle       = $request->fuelle;
      $chicloso     = $request->chicloso;
      $colorm       = $request->colorm;
      $pigmento     = $request->pigmento;
      $tubo         = $request->tubo;
      $lamina       = $request->lamina;
      $aditivo      = $request->aditivo;

      //imprecion  
      $producto     = $name_product;
      $color        = $request->color;
      $kg           = $request->kg;
      $uni          = $request->uni;
      $viscocidad   = $request->viscocidad;
      $codigo       = $request->codigo;
      $proveedor    = $request->proveedor;
      $anilox       = $request->anilox;
      $solvente     = $request->solvente;

      //corte
      $tipo         = $request->tipo;
      $anchocorte   = $request->anchocorte;
      $troquel      = $request->troquel;
      $largo        = $request->largo;
      $ojo          = $request->ojo;
      $fuellefon    = $request->fuellefon;
      $fuellevoca   = $request->fuellevoca;
      $intr         = $request->intr;
      $exter        = $request->exter;
      $pestana      = $request->pestana;
      $lat          = $request->lat;
      $fondo        = $request->fondo;
      $agujeros     = $request->agujeros;
      $diame        = $request->diame;
      $cinta        = $request->cinta;
      $formaempa    = $request->formaempa;
      $upfardo      = $request->upfardo;
      $peso         = $request->peso;


      $result = array();
      $result['title'] = "Producto";  
      
      $id_producto = $this->ControlModel->Add_producto($name_product);

      if(isset($id_producto)){
        //codigo
        $cd           = $this->GenerateCode(5);
        $codigo       = "PRDC".$id_producto.$cd;

        $result['rsl'] = $this->ControlModel->Add_cod_producto($codigo,$id_producto);

        //insert material
         $id_producto_caracteristicas = $this->ControlModel->Add_producto_material($id_producto,$ancho,$bd,$ad,$si,$no,$calibre,$decaras,$fuelle,$colorm,$tubo,$lamina,$ldpe,$hdpe,$lldpe,$limpbd,$limpad,$peletisado,$chicloso,$pigmento,$aditivo);

        //insert impreso
        $id_producto_caracteristicas = $this->ControlModel->Add_producto_impreso($id_producto,$color,$kg,$uni,$viscocidad,$codigo,$proveedor,$anilox,$solvente);

        //insert corte
        $id_producto_caracteristicas = $this->ControlModel->Add_producto_corte($id_producto,$tipo,$anchocorte,$troquel,$largo,$ojo,$fuellefon,$fuellevoca,$intr,$exter,$pestana,$lat,$fondo,$agujeros,$diame,$cinta,$formaempa,$upfardo,$peso);

      }

      return $result;
    }

    public function buscar_producto(Request $request){
      $term         = utf8_encode($request->term);
      $rsl          = $this->ControlModel->search_productos($term);

      $data         = [];
      foreach ($rsl as $row) {
        $data[]     = [
            'label' => $row->nombre_producto,
            'cod'   => $row->codigo_producto,
            'id'    => $row->id_producto,
        ];
      }

      return $data;
    }

    public function asociar_producto(Request $request){
        
        $id_cliente = $request->idCliente_prodct;
        $result['id_cliente'] = $id_cliente;
        $result['producto']   = $this->ControlModel->select_product($id_cliente);

        return view("layouts.action.select_product")->with('result',$result);  
    }

    //funcion de codigo
    public function GenerateCode($length = 10) { 
      return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
    } 

}
