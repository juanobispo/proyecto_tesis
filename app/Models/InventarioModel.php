<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Support\Facades\Hash;

class InventarioModel extends Model
{

    /*public function __construct()
    {
        $varsetting = new SiteSettingController();
        $this->varsetting = $varsetting;
    }*/

   //insertar produccion de area de extruccion
    
  public function product_ext($comentarios,$desperdicio,$grupo,$id_empleado,$id_orden_ext,$product_ext,$turno){

   	  $rsl = DB::table('area_extrusion')
                ->insertGetId([
                    'id_empleado' => $id_empleado,
                    'id_orden'    => $id_orden_ext,
                    'turno'       => $turno,
                    'grupo'       => $grupo,
                    'total'       => $product_ext,
                    'desperdicio' => $desperdicio,
                    'comentarios' => $comentarios,
                  ]);

    	return $rsl;
  }

  public function select_inventario_orden($id_orden,$id_rol_user){
      $rsl = DB::table('inventario')
      ->select('numero')
      ->where('id_orden', $id_orden)
      ->where('id_area_rol', $id_rol_user)
      ->max('numero');
      return $rsl;
  }

  public function select_inventario_orden_all($id_orden,$id_rol_user){
      $rsl = DB::table('inventario')
      ->where('id_orden', $id_orden)
      ->where('id_area_rol', $id_rol_user)
      ->select('*')
      ->get();

      return $rsl;
  }

  public function insert_inventario_orden($id_rol_user,$id_orden,$lbs,$numero){
      $rsl = DB::table('inventario')
                ->insertGetId([
                    'id_orden'    => $id_orden,
                    'id_area_rol' => $id_rol_user,
                    'numero'      => $numero,
                    'peso_bovina' => $lbs,
                  ]);

      return $rsl;
  }

    
}

