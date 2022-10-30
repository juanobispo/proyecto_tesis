
@if(empty($result))
<li class="breadcrumb-item" aria-current="page">No hay</li>
@else
<div class="custom-control">
	<input type="hidden" name="id_cliente" value="{{$result['id_cliente']}}">
</div>
@foreach ($result['producto'] as $item)
  <div class="custom-control custom-radio custom-control-inline m-2">
  	<input type="radio" id="{{$item->id_producto}}" name="id_producto" class="custom-control-input" value="{{$item->id_producto}}">
  	<label class="custom-control-label" for="{{$item->id_producto}}">{{$item->nombre_producto}}</label>
  </div>
@endforeach
@endif