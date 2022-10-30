<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Support\Facades\Hash;

class ControlModel extends Model
{

    /*public function __construct()
    {
        $varsetting = new SiteSettingController();
        $this->varsetting = $varsetting;
    }*/

   // insert clientes
   public function Add_cliente($nombre,$apellido,$correo,$telefono,$dui,$nit,$direccion){
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
   }

   //codigo
   public function Add_cod_cliente($codigo,$id){
      $rsl = DB::table('cliente')
            ->where('id_cliente',$id)
            ->update(['codigo_cliente' => $codigo]);
      return $rsl;
   }

   //buscar clientes
   public function search_clientes($term){
      $rsl = DB::table('cliente')->orwhere('nombre','LIKE','%'.$term.'%')->orwhere('apellido','LIKE','%'.$term.'%')->get();
      return $rsl;
   }

   //buscar empleado
   public function search_empleados($term){
      $rsl = DB::table('users')->where('role','>',1)->where(function($query) use ($term) {
          $query->orwhere('name','LIKE','%'.$term.'%')->orwhere('last_name','LIKE','%'.$term.'%');
      })->get();

      return $rsl;
   }

   public function search_empleados_imp($term){
     $rsl = DB::table('users')->where('role','=',3)->where(function($query) use ($term) {
          $query->orwhere('name','LIKE','%'.$term.'%')->orwhere('last_name','LIKE','%'.$term.'%');
      })->get();

      return $rsl;
   }

   public function search_empleados_corte($term){

      $rsl = DB::table('users')->where('role','=',4)->where(function($query) use ($term) {
          $query->orwhere('name','LIKE','%'.$term.'%')->orwhere('last_name','LIKE','%'.$term.'%');
      })->get();

      return $rsl;
   }

   // insert empleado
   public function Add_empleado($nombre,$apellido,$correo,$telefono,$dui,$nit,$direccion,$rol,$password){
      $rsl = DB::table('users')
                ->insertGetId([
                    'name' => $nombre,
                    'last_name' => $apellido,
                    'telefono' => $telefono,
                    'dui' => $dui,
                    'nit' => $nit,
                    'email' => $correo,
                    'direccion' => $direccion,
                    'role' => $rol,
                    'password' => Hash::make($password)
                  ]);

      return $rsl;
   }

    // insert producto
   public function Add_producto($name_product){
      $rsl = DB::table('producto')
                ->insertGetId([
                    'nombre_producto' => $name_product,
                  ]);

      return $rsl;
   }

   //codigo
   public function Add_cod_producto($codigo,$id){
      $rsl = DB::table('producto')
            ->where('id_producto',$id)
            ->update(['codigo_producto' => $codigo]);
      return $rsl;
   }

   public function Add_producto_material($id_producto,$ancho,$bd,$ad,$si,$no,$calibre,$decaras,$fuelle,$colorm,$tubo,$lamina,$ldpe,$hdpe,$lldpe,$limpbd,$limpad,$peletisado,$chicloso,$pigmento,$aditivo){
      $rsl = DB::table('producto_material')
                ->insertGetId([
                    'id_producto'     => $id_producto,
                    'ancho'           => $ancho,
                    'material_bd'     => $bd,
                    'material_ad'     => $ad,
                    'impresa_si'      => $si,
                    'impresa_no'      => $no,
                    'calibre'         => $calibre,
                    'n_decaras'       => $decaras,
                    'fuelle_lateral'  => $fuelle,
                    'color_material'  => $colorm,
                    'tubo'            => $tubo,
                    'lamina'          => $lamina,
                    'ldpe'            => $ldpe,
                    'hdpe'            => $hdpe,
                    'lldpe'           => $lldpe,
                    'mol_limp_bd'     => $limpbd,
                    'mol_limp_ad'     => $limpad,
                    'peletisado'      => $peletisado,
                    'chicloso'        => $chicloso,
                    'pigmento'        => $pigmento,
                    'aditivo'         => $aditivo,
                  ]);

      return $rsl;
   }

   public function Add_producto_impreso($id_producto,$color,$kg,$uni,$viscocidad,$codigo,$proveedor,$anilox,$solvente){
      $rsl = DB::table('producto_impreso')
                ->insertGetId([
                      'id_producto'  => $id_producto,
                      'color'        => $color,
                      'kg'           => $kg,
                      'unidad'       => $uni,
                      'viscocidad'   => $viscocidad,
                      'codigo'       => $codigo,
                      'proveedor'    => $proveedor,
                      'anilox'       => $anilox,
                      'solvente'     => $solvente,
                  ]);

      return $rsl;
   }

   public function Add_producto_corte($id_producto,$tipo,$anchocorte,$troquel,$largo,$ojo,$fuellefon,$fuellevoca,$intr,$exter,$pestana,$lat,$fondo,$agujeros,$diame,$cinta,$formaempa,$upfardo,$peso){
      $rsl = DB::table('producto_caracteristicas')
                ->insertGetId([

                      'id_producto'   => $id_producto,
                      'tipo'          => $tipo,
                      'ancho'         => $anchocorte,
                      'troquel'       => $troquel,
                      'largo'         => $largo,
                      'ojo_chino'     => $ojo,
                      'fuelle_fon'    => $fuellefon,
                      'fuelle_voca'   => $fuellevoca,
                      'solapa_int'    => $intr,
                      'solapa_exter'  => $exter,
                      'pestana'       => $pestana,
                      'sello_lat'     => $lat,
                      'sello_fondo'   => $fondo,
                      'agujero'       => $agujeros,
                      'diame'         => $diame,
                      'cinta_adhe'    => $cinta,
                      'forma_empaq'   => $formaempa,
                      'up_fardo'      => $upfardo,
                      'peso'          => $peso,
                  ]);

      return $rsl;
   }

    //buscar clientes
   public function search_productos($term){
      $rsl = DB::table('producto')->where('nombre_producto','LIKE','%'.$term.'%')->get();
      return $rsl;
   }
   

   public function select_product($id_cliente){

      $rsl = DB::table('asociar')
       ->select(['asociar.id_cliente', 'producto.id_producto', 'producto.nombre_producto'])
       ->join('producto', 'producto.id_producto', '=', 'asociar.id_producto')
       ->where('asociar.id_cliente',$id_cliente)
       ->get();

      return $rsl;
   }

   public function validar_product($id_cliente,$id_producto){
      $rsl = DB::table('asociar')->where('id_producto',$id_producto)->where('id_cliente',$id_cliente)->first();
      return $rsl;
   }

   public function validar_product_insert($id_cliente,$id_producto){
      $rsl = DB::table('asociar')
                  ->insertGetId([
                    'id_producto' => $id_producto,
                    'id_cliente' => $id_cliente,
                  ]);

      return $rsl;
   }

    //orden
   public function validar_orden($code_orden){
      $rsl = DB::table('orden')->where('n_orden',$code_orden)->first();
      
      return $rsl;
   }

   public function Add_orden($code_orden,$id_asociar){
      $rsl = DB::table('orden')
                  ->insertGetId([
                    'n_orden'     => $code_orden,
                    'id_asociar'  => $id_asociar,
                    'status'  => 'ACTIVA',

                  ]);
      return $rsl;
   }

   public function search_ordenes($term){
      $rsl = DB::table('orden')->where('n_orden','LIKE','%'.$term.'%')->get();
      return $rsl;
   }
   public function search_orden_prod($id){
      $rsl = DB::table('orden')
        ->join('area_production', 'orden.id_orden', '=', 'area_production.id_orden')
        ->where('orden.id_orden',$id)
        ->select('*')
        ->get();
      return $rsl;
   }

   public function edit_ordenes($id_orden){
      
       $rsl = DB::table('orden')
       ->join('asociar', 'orden.id_asociar', '=', 'asociar.id_asociar')
       ->join('cliente', 'asociar.id_cliente', '=', 'cliente.id_cliente')
       ->join('producto', 'asociar.id_producto', '=', 'producto.id_producto')
       ->join('producto_caracteristicas', 'producto.id_producto', '=', 'producto_caracteristicas.id_producto')
       ->join('producto_impreso', 'producto.id_producto', '=', 'producto_impreso.id_producto')
       ->join('producto_material', 'producto.id_producto', '=', 'producto_material.id_producto')
       ->where('orden.id_orden',$id_orden)
       ->select('*')
       ->get();

      return $rsl;
   }

   public function edit_production($id_orden){
      
       $rsl = DB::table('area_production')
       ->join('users', 'area_production.id_empleado', '=', 'users.id')
       ->where('area_production.id_orden',$id_orden)
       ->select('*')
       ->get();

      return $rsl;
   }

   /*public function update_ordenes($codigo,$id){
      $rsl = DB::table('producto')
            ->where('id_producto',$id)
            ->update(['codigo_producto' => $codigo]);
      return $rsl;
   }*/



    
}

