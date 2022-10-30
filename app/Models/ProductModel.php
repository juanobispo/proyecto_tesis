<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Support\Facades\Hash;

class ProductModel extends Model
{

    /*public function __construct()
    {
        $varsetting = new SiteSettingController();
        $this->varsetting = $varsetting;
    }*/

   // insert 
   public function product_add_area($id_rol,$comentarios,$desperdicio,$grupo,$id_empleado,$id_orden_ext,$product_ext,$turno){

   	  $rsl = DB::table('area_production')
                ->insertGetId([
                    'id_empleado' => $id_empleado,
                    'id_orden'    => $id_orden_ext,
                    'id_area_rol' => $id_rol,
                    'turno'       => $turno,
                    'grupo'       => $grupo,
                    'total'       => $product_ext,
                    'desperdicio' => $desperdicio,
                    'comentarios' => $comentarios,
                  ]);

    	return $rsl;
      
   }

    public function product_ext($data){ 
         $rsl = DB::table('bodega_ext')->insert($data);
         return $rsl;
    }

    public function product_imp($data){ 
         $rsl = DB::table('bodega_imp')->insert($data);
         return $rsl;
    }
    public function product_corte($data){ 
         $rsl = DB::table('bodega_corte')->insert($data);
         return $rsl;
    }

    public function select_orden_all($id_orden){ 
         $rsl = DB::table('orden')
                ->where('id_orden', $id_orden)
                ->select('*')
                ->get();
        return $rsl;
    }

    /*public function select_production_ext($id_supervisor){ 
         $rsl = DB::table('bodega_ext')
                ->join('orden', 'orden.id_orden', '=', 'bodega_ext.id_orden')
                ->join('asociar', 'asociar.id_asociar', '=', 'orden.id_asociar')
                ->join('cliente', 'cliente.id_cliente', '=', 'asociar.id_cliente')
                ->join('asociar', 'asociar.id_cliente', '=', 'cliente.id_cliente')
                ->join('producto', 'producto.id_producto', '=', 'asociar.id_producto')
                ->join('asociar', 'asociar.id_producto', '=', 'producto.id_producto')
                ->join('cliente', 'cliente.id_orden', '=', 'bodega_ext.id_orden')
                ->where('id_supervisor',$id_supervisor)
                ->select('cliente.*','producto.*','bodega_ext.*','orden.n_orden')
                ->get();
        return $rsl;
    }*/
    public function select_production_ext($id_supervisor){ 
         $rsl = DB::table('bodega_ext')
                ->join('orden', 'orden.id_orden', '=', 'bodega_ext.id_orden')
                ->join('asociar', 'asociar.id_asociar', '=', 'orden.id_asociar')
                ->join('cliente', 'cliente.id_cliente', '=', 'asociar.id_cliente')
                //->join('asociar', 'asociar.id_cliente', '=', 'cliente.id_cliente')
                ->join('producto_material', 'producto_material.id_producto', '=', 'asociar.id_producto')
                /*->join('asociar', 'asociar.id_producto', '=', 'producto.id_producto')
                ->join('cliente', 'cliente.id_orden', '=', 'bodega_ext.id_orden')*/
                ->where('orden.status','ACTIVA')
                ->where('bodega_ext.id_supervisor',$id_supervisor)
                ->select('producto_material.material_bd','producto_material.material_ad','producto_material.color_material','producto_material.calibre','producto_material.ancho','cliente.nombre','asociar.*','bodega_ext.*','orden.n_orden')
                ->get();
        return $rsl;
    }
    public function select_production_imp($id_supervisor){ 
         $rsl = DB::table('bodega_imp')
                ->join('orden', 'orden.id_orden', '=', 'bodega_imp.id_orden')
                ->join('asociar', 'asociar.id_asociar', '=', 'orden.id_asociar')
                ->join('cliente', 'cliente.id_cliente', '=', 'asociar.id_cliente')
                ->join('users', 'users.id', '=', 'bodega_imp.id_empleado')
                ->join('producto_material', 'producto_material.id_producto', '=', 'asociar.id_producto')
                /*->join('asociar', 'asociar.id_producto', '=', 'producto.id_producto')
                ->join('cliente', 'cliente.id_orden', '=', 'bodega_ext.id_orden')*/
                ->where('orden.status','ACTIVA')
                ->where('bodega_imp.id_supervisor',$id_supervisor)
                ->select('users.name','producto_material.material_bd','producto_material.material_ad','producto_material.color_material','producto_material.calibre','producto_material.ancho','cliente.nombre','asociar.*','bodega_imp.*','orden.n_orden')
                ->get();
        return $rsl;
    }
    public function select_production_corte($id_supervisor){ 
         $rsl = DB::table('bodega_corte')
                ->join('orden', 'orden.id_orden', '=', 'bodega_corte.id_orden')
                ->join('asociar', 'asociar.id_asociar', '=', 'orden.id_asociar')
                ->join('cliente', 'cliente.id_cliente', '=', 'asociar.id_cliente')
                ->join('users', 'users.id', '=', 'bodega_corte.id_empleado')
                ->join('producto_material', 'producto_material.id_producto', '=', 'asociar.id_producto')
                ->join('producto', 'producto.id_producto', '=', 'producto_material.id_producto')
                //->join('cliente', 'cliente.id_orden', '=', 'bodega_ext.id_orden')
                ->where('orden.status','ACTIVA')
                ->where('bodega_corte.id_supervisor',$id_supervisor)
                ->select('producto.nombre_producto','users.name','producto_material.material_bd','producto_material.material_ad','producto_material.color_material','producto_material.calibre','producto_material.ancho','cliente.nombre','asociar.*','bodega_corte.*','orden.n_orden')
                ->get();
        return $rsl;
    }

    

   /*public function Add_cliente($nombre,$apellido,$correo,$telefono,$dui,$nit,$direccion){
      $rsl = DB::table('cliente')
                ->insertGetId([
                    'nombre' => $nombre,
                    'apellido' => $apellido,
                    'telefono' => $telefono,
                    'dui' => $dui,
                    'nit' => $nit,
                    'correo' => $correo,
                    'direccion' => $direccion,
                  ]);

      return $rsl;
   }*/
    
}

