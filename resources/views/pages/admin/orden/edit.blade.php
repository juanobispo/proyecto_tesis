{{-- dd($result) --}}
{{-- dd($result['orden'][0]->id_orden) --}}
{{-- dd($result['production']) --}}

<div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                          <h5 class="card-title"></h5>
                          <div class="card-tools">
                          	<div class="col">
                          		@if(auth()->user()->role == 0)
                          		<p class="card-title px-2"> EDITAR ORDEN  <i class="fas fa-edit px-1"></i></p>
                          
                          		<input id="editar_checked" name="editar_checked" type="checkbox" value="1"  data-size="small" data-on-color ='success' data-on-text = "YES" data-off-color="danger" data-off-text = "NO" />
                          		@endif
                          	</div>
                          	<!--i class="fas fa-edit"></i>
                          	<input type="checkbox" id="editar_checked" name="editar_checked" data-size="sm"-->
                          	<!--div class="row">
                          		<div class="col-sm-12">
                          			<div class="form-group">
                          				<p class='control-label'>READ</p>
                          				<div class="col-sm-12">
                          					<input id="editar_checked" name="editar_checked" type="checkbox" value="1"  data-size ='medium', data-on-color ='success' data-on-text = "YES" data-off-text = "NO" />
                          				</div>
                          			</div>
                          		</div>
                          	</div-->
                          </div>
                        </div>
                          <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 justify-content-cente">
                                	
									<form class="col-md-11 mx-auto" name='edit_formorden' id='edit_formorden' action=" {{URL::to('ordenes/update')}} ">
											@csrf
											<div class='table-responsive'>
												<div class='container' align='center'>
													<table class='table table-bordered' border='0' cellpadding='3' cellspacing='1' >
													<tbody>
													<tr>
													<td class='titulo'><span style='text-align: center;'><h1>BOLPACK</h1></span></td>
													</tr>
													</tbody>
													</table>
												</div>
											</div>
											<div class='table-responsive'>
												<div class='container text-center' >
													<table class='table table-bordered' border='0' cellpadding='3' cellspacing='1' >
														<tbody>
														<tr>
														<td>FECHA</td>
														<td>{{$result['orden'][0]->fecha_creacion}}</td>
														<td align='center'>ORDEN DE PRODUCCIÓN</td>
														<td>{{$result['orden'][0]->status}}</td>
														<td>ORDEN Nº</td>
														<td >
														<input  type='hidden' name='id_orden_up' id='id_orden_up' value='{{$result["orden"][0]->id_orden}}'>
														<input class='col' type='text' name='n_orden_up' id='n_orden_up' value='{{$result["orden"][0]->n_orden}}' disabled>
														</td>
														</tr>
														</tbody>
													</table>	
												</div>
											</div>
											@if(auth()->user()->role == 2 || auth()->user()->role == 0)
											<div class='table-responsive'>
												<div class='container' align='center'>
													<table class='table table-bordered' cellpadding='2' cellspacing='1'>
														<tbody>
														<tr>
														<td class='encabezado' COLSPAN=7>
														AREA DE EXTRUSION
														</td>
														<td COLSPAN=2>MAQ. Nº</td>
														<td class='tdbox' >
														<input class='col' type='text' id='n_maqna_e' name='n_maqna_e' value='{{$result["orden"][0]->mq_extrucion}}' disabled>
														</td>
														</tr>
														<tr>
														<td>CLIENTE</td>
														<td COLSPAN=4>{{$result['orden'][0]->nombre}} {{$result['orden'][0]->apellido}}</td>
														<td COLSPAN=2>MEZCLA EN %</td>
														<td COLSPAN=3>PRODUCIDO</td>
														</tr>
														<tr>
														<td>ANCHO</td>
														<td COLSPAN=2>MATERIAL</td>
														<td COLSPAN=2>IMPRESA</td>
														<td>LDPE</td>
														<td>{{$result['orden'][0]->ldpe}}
														</td>
														<td ROWSPAN=9 COLSPAN=3 style='width: 52%!important;padding: 0px;'>

															<table class='table table-bordered' >
																<tr>
																	<th>OPERARIO</th>
																	<th>TURNO</th>
																	<th>GRUPO</th>
																	<th>TOTAL</th>
																	<th>DESP.</th>
																	<th>FECHA</th>
																</tr>
																@foreach ($result['production'] as $product)
																	@if($product->id_area_rol == 2)
																	<tr>
																		<td>{{$product->name}}</td>
																		<td>{{$product->turno}}</td>
																		<td>{{$product->grupo}}</td>
																		<td>{{$product->total}}</td>
																		<td>{{$product->desperdicio}}</td>
																		<td>{{$product->time}}</td>
																	</tr>
																	@endif
																@endforeach
															</table>


														</td>	
														</tr>
														<tr>
														<td ROWSPAN=2>{{$result['orden'][0]->ancho}}</td>
														<td>B/D</td>
														<td>
														<input type='hidden' id='bd_up' name='bd_up' value='{{$result["orden"][0]->material_bd}}'>
														{{$result['orden'][0]->material_bd}}
														</td>
														<td>SI</td>
														<td>{{$result['orden'][0]->impresa_si}}</td>
														<td>HDPE</td>
														<td>{{$result['orden'][0]->hdpe}}</td>
														</tr>
														<tr>
														<td>A/D</td>
														<td>
															<input type='hidden' id='ad_up' name='ad_up' value='{{$result["orden"][0]->material_ad}}'>
															{{$result['orden'][0]->material_ad}}
														</td>
														<td>NO</td>
														<td>{{$result['orden'][0]->impresa_no}}</td>
														<td>LLDPE</td>
														<td>{{$result['orden'][0]->lldpe}}</td>
														</tr>
														<tr>
														<td>CALIBRE</td>
														<td ROWSPAN=2>LBS. A PRODUCIR</td>			
														<td ROWSPAN=2 COLSPAN=3 class='tdbox'>
														<input class='col' name='lbs_pro' id='lbs_pro' type='text' value='{{$result["orden"][0]->lbs_producir}}' disabled>
														</td>
														<td>MOL. LIMP. B/D</td>
														<td>{{$result['orden'][0]->mol_limp_bd}}</td>
														</tr>
														<tr>
														<td>
														<input type='hidden' id='calibre_up' name='calibre_up' value='{{$result["orden"][0]->calibre}}'>{{$result['orden'][0]->calibre}}
														</td>
														<td>MOL.LIMP.A/D</td>
														<td>{{$result['orden'][0]->mol_limp_ad}} </td>
														</tr>
														<tr>
														<td COLSPAN=2>Nº DECARAS A TRATAR</td>
														<td COLSPAN=3>{{$result['orden'][0]->n_decaras}}</td>
														<td>PELETISADO</td>
														<td>{{$result['orden'][0]->peletisado}}</td>
														</tr>
														<tr>
														<td COLSPAN=2>FUELLE LATERAL DE</td>
														<td COLSPAN=3>{{$result['orden'][0]->fuelle_lateral}}</td>
														<td>CHICLOSO</td>
														<td>{{$result['orden'][0]->chicloso}}</td>
														</tr>
														<tr>
														<td COLSPAN=2>COLOR DEL MATERIAL</td>
														<td COLSPAN=3>{{$result['orden'][0]->color_material}}</td>
														<td>PIGMENTO</td>
														<td>{{$result['orden'][0]->pigmento}}</td>
														</tr>
														<tr>
														<td>TUBO</td>
														<td>{{$result['orden'][0]->tubo}}</td>
														<td>LAMINA</td>
														<td COLSPAN=2>{{$result['orden'][0]->lamina}}</td>
														<td>ADITIVO</td>
														<td>{{$result['orden'][0]->aditivo}}</td>
														</tr>
														<tr>
														<td>OBSERVACIONES</td>
														<td COLSPAN=9 class='tdbox'>
															<input class='col' type='text' name='o_ext' id='o_ext' value='{{$result["orden"][0]->observacion_ext}}' disabled>
														</td>
														</tr>
														</tbody>
													</table>
												</div>
											</div>
											@endif									
											@if(auth()->user()->role == 3 || auth()->user()->role == 0)
											<div class='table-responsive'>
												<div class='container' align='center'>
													<table class='table table-bordered' cellpadding='2' cellspacing='1' >
														<tbody>
														<tr>
														<td class='encabezado'  COLSPAN='2'>DEPARTAMENTO DE IMPRESIÓN</td>
														<td>MAQ. Nº</td>
														<td class='tdbox' style='width: 12px!important;'>
															<input class='col' id='n_maqna_i' name='n_maqna_i' value='{{$result["orden"][0]->mq_impresion}}' disabled>
														</td>
														</tr>
														<tr>
														<td COLSPAN='2'>PRODUCTO</td> 
														<td ROWSPAN='2' COLSPAN='2' style='width: 52%!important;padding: 0px;'>
															<table class='table table-bordered' >
																<tr>
																	<th>OPERARIO</th>
																	<th>TURNO</th>
																	<th>GRUPO</th>
																	<th>TOTAL</th>
																	<th>DESP.</th>
																	<th>FECHA</th>
																</tr>
																@foreach ($result['production'] as $product)
																	@if($product->id_area_rol == 3)
																	<tr>
																		<td>{{$product->name}}</td>
																		<td>{{$product->turno}}</td>
																		<td>{{$product->grupo}}</td>
																		<td>{{$product->total}}</td>
																		<td>{{$product->desperdicio}}</td>
																		<td>{{$product->time}}</td>
																	</tr>
																	@endif
																@endforeach
															</table>
														</td>
														</tr>
														<tr>
														<td class='encabezado' COLSPAN='2'>{{$result['orden'][0]->nombre_producto}}</td>
														</tr>
														<tr>
														<td>REPETICIOINES POR ANCHO</td>
														<td>DESAROLLO DE RODILLO</td>
														<td ROWSPAN='2' COLSPAN='2' class="m-0 p-0">

															<div class='bloquelista'>
																<div class ='tab' align='center'>
																	<table class='bordes' cellpadding='0' cellspacing='1' >
																		<tbody>
																		<tr>

																		<td>COLOR</td>
																		<td>KG</td>
																		<td>UNI.</td>
																		<td>VISCOCIDAD</td>
																		<td>CODIGO</td>
																		<td>PROVEEDOR</td>
																		<td>ANILOX</td>
																		<td>SOLVENTE</td>

																		</tr>

																		<tr>
																		<td>{{$result['orden'][0]->color}} </td>
																		<td>{{$result['orden'][0]->kg}} </td>
																		<td>{{$result['orden'][0]->unidad}} </td>
																		<td>{{$result['orden'][0]->viscocidad}} </td>
																		<td>{{$result['orden'][0]->codigo}} </td>
																		<td>{{$result['orden'][0]->proveedor}} </td>
																		<td>{{$result['orden'][0]->anilox}} </td>
																		<td>{{$result['orden'][0]->solvente}} </td>
																		</tr> 
																		
																		</tbody>
																	</table>
																</div>
															</div>

														</td>
														</tr>
														<tr>
														<td></td>
														<td></td>

														</tr>
														<tr>
														<td >OBSERVACION</td>
														<td COLSPAN=8 class='tdbox'>
															<input class='col' type='text' name='o_imp' id='o_imp' value='{{$result["orden"][0]->observacion_imp}}' disabled>
														</td>

														</tr>
														</tbody>
													</table>
												</div>
											</div>
											@endif
											@if(auth()->user()->role == 4 || auth()->user()->role == 0)
											<div class='table-responsive'>
												<div class='container' align='center'>	
													<table class='table table-bordered'  cellpadding='2' cellspacing='1' >
														<tbody>
														<tr>
														<td class='encabezado' COLSPAN=5>AREA DE CORTE Y SELLO</td>
														<td COLSPAN=4>MAQ. Nº</td>
														<td class='tdbox'>
															<input class='col' id='n_maqna_c' name='n_maqna_c' value='{{$result["orden"][0]->mq_corte}}' disabled>
														</td>
														</tr>
														<tr>
														<td COLSPAN=5>MEDIDAS DE LA BOLSA Y DETALLES</td>
														<td COLSPAN=5>CONTROL DE CORTE</td>
														</tr>
														<tr>
														<td>TIPO</td>
														<td COLSPAN=4>{{$result['orden'][0]->tipo}}</td>
														<td ROWSPAN=2 COLSPAN=2>CANTIDAD DE BOLSAS</td>
														<td ROWSPAN=2 COLSPAN=2 class='tdbox'>
															<input class='col' name='cant_bolsa' id='cant_bolsa' value='{{$result["orden"][0]->cant_bolsas}}' disabled>
														</td>
														<td ROWSPAN=2>BLS</td>
														</tr>
														<tr>
														<td>ANCHO</td>
														<td COLSPAN=2 ><input type='hidden' id='ancho_up' name='ancho_up' value='{{$result["orden"][0]->ancho}}'>{{$result['orden'][0]->ancho}}</td>
														<td>TROQUEL</td>
														<td>{{$result['orden'][0]->troquel}}</td>
														</tr>
														<tr>
														<td>LARGO</td>
														<td COLSPAN=2>
															<input type='hidden' id='largo_up' name='largo_up' value='{{$result["orden"][0]->largo}}'>{{$result['orden'][0]->largo}}
														</td>
														<td>OJO CHINO</td>
														<td>{{$result['orden'][0]->ojo_chino}}</td>
														<td ROWSPAN=10 COLSPAN=5 style='width: 52%!important;padding: 0px;'>
															<table class='table table-bordered' >
																<tr>
																	<th>OPERARIO</th>
																	<th>TURNO</th>
																	<th>GRUPO</th>
																	<th>TOTAL</th>
																	<th>DESP.</th>
																	<th>FECHA</th>
																</tr>
																@foreach ($result['production'] as $product)
																	@if($product->id_area_rol == 4)
																	<tr>
																		<td>{{$product->name}}</td>
																		<td>{{$product->turno}}</td>
																		<td>{{$product->grupo}}</td>
																		<td>{{$product->total}}</td>
																		<td>{{$product->desperdicio}}</td>
																		<td>{{$product->time}}</td>
																	</tr>
																	@endif
																@endforeach
															</table>


														</tr>
														<tr>
														<td>FUELLE DE FON.</td>
														<td COLSPAN=2>{{$result['orden'][0]->fuelle_fon}}</td>

														<td>FUELLE VOCA</td>
														<td>{{$result['orden'][0]->fuelle_voca}}</td>

														</tr>
														<tr>
														<td>SOLAPA</td>
														<td>INT.</td>
														<td>{{$result['orden'][0]->solapa_int}}</td>
														<td>EXTER.</td>
														<td>{{$result['orden'][0]->solapa_exter}}</td>
														</tr>
														<tr>
														<td>PESTAÑA</td>
														<td COLSPAN=4>{{$result['orden'][0]->pestana}}</td>
														</tr>
														<tr>
														<td>SELLO</td>
														<td>LAT.</td>
														<td>{{$result['orden'][0]->sello_lat}}</td>
														<td>FONDO</td>
														<td>{{$result['orden'][0]->sello_fondo}}</td>

														</tr>
														<tr>
														<td>AGUJEROS</td>
														<td COLSPAN=2>{{$result['orden'][0]->agujero}}</td>

														<td>DIAME.</td>
														<td>{{$result['orden'][0]->diame}}</td>

														</tr>
														<tr>
														<td>CINTA ADHE.</td>
														<td COLSPAN=4>{{$result['orden'][0]->cinta_adhe}}</td>

														</tr>
														<tr>
														<td>FORMA DE EMPAQUE</td>
														<td COLSPAN=4>{{$result['orden'][0]->forma_empaq}}</td>

														</tr>
														<tr>
														<td>U/P FARDO</td>
														<td>{{$result['orden'][0]->up_fardo}}</td>
														<td>BLS</td>
														<td>PESO</td>
														<td>{{$result['orden'][0]->peso}}</td>

														</tr>
														<tr>
														<td>FECHA DE ENTREGA</td>
														<td class='tdbox' COLSPAN=2>
															<input class='col' type='date' name='fecha_entr' id='fecha_entr' value='{{$result["orden"][0]->fecha_entrega}}' disabled>
														</td>
														<td></td>
														<td>LBS</td>

														</tr>
														<tr>
														<td>OBSERVACIONES</td>
														<td COLSPAN=9 class='tdbox'>
															<input class='col' type='text' name='o_cort' id='o_cort' value='{{$result["orden"][0]->observacion_cort}}' disabled>
														</td>
														</tr>				
														</tbody>
													</table>
												</div>
											</div>
											@endif
											@if(auth()->user()->role == 0)
												<div class="my-4">
													<button type="button" id="edit_product_orden" class="btn btn-primary">
														Actualizar 
													</button>
												</div>
											 @endif

									</form>

                                </div>
                              <!-- /.col -->
                            </div>
                          <!-- /.row -->
                        </div>
                          <!-- ./card-body -->
                        <div class="card-footer">
                          <!-- /.row -->
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
</div>

<script>
	$(document).ready(function(){
		$("#editar_checked").bootstrapSwitch();
		$('#editar_checked').on('switchChange.bootstrapSwitch',function () {
			var check = $('.bootstrap-switch-on');
			if (check.length > 0) {
				$('#n_orden_up').removeAttr("disabled");
				$('#n_maqna_e').removeAttr("disabled");
				$('#lbs_pro').removeAttr("disabled");
				$('#o_ext').removeAttr("disabled");
				$('#n_maqna_i').removeAttr("disabled");
				$('#o_imp').removeAttr("disabled");
				$('#n_maqna_c').removeAttr("disabled");
				$('#cant_bolsa').removeAttr("disabled");
				$('#fecha_entr').removeAttr("disabled");
				$('#o_cort').removeAttr("disabled");
				console.log('ACTIVO');
			} else {
				$('#n_orden_up').attr('disabled', 'disabled');
				$('#n_maqna_e').attr('disabled', 'disabled');
				$('#lbs_pro').attr('disabled', 'disabled');
				$('#o_ext').attr('disabled', 'disabled');
				$('#n_maqna_i').attr('disabled', 'disabled');
				$('#o_imp').attr('disabled', 'disabled');
				$('#n_maqna_c').attr('disabled', 'disabled');
				$('#cant_bolsa').attr('disabled', 'disabled');
				$('#fecha_entr').attr('disabled', 'disabled');
				$('#o_cort').attr('disabled', 'disabled');
				console.log('OFF');
			}
		});
		$("#edit_product_orden").click(function(e){
			e.preventDefault();
					$('#editar_checked').bootstrapSwitch('state', true);
					var action = $("form#edit_formorden").attr("action");
					var formData = $("form#edit_formorden").serialize();
					console.log(formData);
					$.ajax({
							url: action,
							type: "POST",
							data: formData,
							beforeSend:function(response){ 
								
							},
							success: function (e) {
								
							},
							error: function (xhr, ajaxOptions, thrownError) {
								console.log(xhr.status);
								console.log(thrownError);
								console.log(ajaxOptions);
							}
					});
		});
	});
</script>