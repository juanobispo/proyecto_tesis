{{-- dd($result['bovina']) --}}
{{-- dd($result['orden'][0]) --}}
<div class="container mt-3">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nº DE ORNDE</th>
        <th>{{$result['orden'][0]->n_orden}}</th>
        <th>LBS solicitadas</th>
        <th>{{$result['orden'][0]->lbs_producir}} Lbs</th>
        <th>Fecha de entrega</th>
        <th>{{$result['orden'][0]->fecha_entrega}}</th>
      </tr>
    </thead>
    <tbody>
		
    </tbody>
  </table>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>
            @if( auth()->user()->role == 2)
                  Nº DE BOVINA
            @elseif( auth()->user()->role == 4)
                  Nº DE FARDOS
            @else
            @endif
        </th>
        <th>Peso</th>
      </tr>
    </thead>
    <tbody>
    	@php $total=0; @endphp
		@foreach ($result['bovina'] as $bovina)
			<tr>
				<td>{{$bovina->numero}}</td>
				<td>{{$bovina->peso_bovina}} Lb</td>
				@php $total = $bovina->peso_bovina+$total; @endphp
			</tr>
		@endforeach
		<tr>
			<td>Total</td>
			<td>{{$total}} Lbs</td>
		</tr>

    </tbody>
  </table>
</div>