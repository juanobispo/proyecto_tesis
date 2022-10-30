<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Support\Facades\Hash;

class HomeModel extends Model
{
	public function ordenes(){
   	  	$rsl = DB::table('orden')->select('*')->get();
    	return $rsl;
   }
}