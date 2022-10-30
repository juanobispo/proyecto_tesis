{{-- dd($result) --}}
{{-- dd($result['orden'][0]->id_orden) --}}
{{-- dd($result['production']) --}}
{{ dd($result['prodc_super']) }}

<div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <h5 class="card-title"></h5>
                          <div class="card-tools">
                          	
                          </div>
                        </div>
                          <!-- /.card-header -->
                        <div class="card-body">
                            	<div class="row">
	                                <div class="col-12 justify-content-cente">
	                                	 <div class='table-responsive'>
											<div class='container' align='center'>
												<table class='table table-bordered' border='0' CELLPADDING=0 CELLSPACING=0 >
													<tbody>
													<tr> 
													<td  class='linea titulo' colspan = 12>REPORTE DE EXTRUSION</td>
													</tr>
													<tr> 
													<td  class='nover' colspan = 12></td>
													</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class='table-responsive'>
											<div class='container' align='center'>
												<table class='table table-bordered' border='0' CELLPADDING=0 CELLSPACING=0>
												<tbody>
													<tr>
														<td class='linea' >FECHA</td>
														<td class='linea' >".$fecha."</td>
														<td class='linea' colspan = 4>OPERARIO</td>
														<td class='linea'  >".$Noperario."</td>
														<td class='linea' >TURNO</td>
														<td class='linea' >".$turno."</td>
														<td class='linea' >GRUPO</td>
														<td class='linea' >".$grupo."</td>
													</tr>
													<tr class='nover'> 
														<td colspan = 6 >
														</td>
														<td colspan = 6 ></td>
													</tr>
													<tr class='nover' >
														<td  colspan = 6 ></td>
														<td  class='linea titulo' rowspan = 2 style='width: 120px;'>
															PRODUCCION DEL DIA
														</td>
														<td  class='linea ' colspan = 2>DESP.</td>
														<td  class='linea ' colspan = 2>DURO</td>
													</tr>
													<tr> 
														<td  class='linea'>MAQ.</td>
														<td  class='linea ancho' colspan = 5>DETALLES DE CLIENTE</td>
														<td  class='linea'>B/D</td>
														<td  class='linea'>A/D</td>
														<td  class='linea'>B/D</td>
														<td  class='linea'>A/D</td>
													</tr>
													<tr> 
														<td  class='linea titulo'>1</td>
														<td  class='linea cj' colspan = 5>
															<div class='bloque'>
															Nº DE ORDEN <br>
															CLIENTE <br>
															MEDIDA Y GG <br>
															MAT. Y COLOR <br>
															LBS EXTRUIDAS <br>
															DESPERDICIO <br>
															</div>
															<div class='bloque'>
															</div>
														</td>
														<td  class='linea titulo'>".$prod_dia1." LB</td>
														<td  class='linea titulo'>".$bd1." LB</td>
														<td  class='linea titulo'>".$ad1." LB</td>
														<td  class='linea titulo'>".$dbd1." LB</td>
														<td  class='linea titulo'>".$dad1." LB</td>
													</tr>
													<tr> 
														<td  class='linea titulo'>2</td>
														<td  class='linea cj' colspan = 5>
															<div class='bloque'>
															Nº DE ORDEN <br>
															CLIENTE <br>
															MEDIDA Y GG <br>
															MAT. Y COLOR <br>
															LBS EXTRUIDAS <br>
															DESPERDICIO <br>
															</div>
															<div class='bloque'></div>
														</td>
														<td  class='linea titulo'>".$prod_dia2." LB</td>
														<td  class='linea titulo'>".$bd2." LB</td>
														<td  class='linea titulo'>".$ad2." LB</td>
														<td  class='linea titulo'>".$dbd2." LB</td>
														<td  class='linea titulo'>".$dad2." LB</td>
													</tr>
													<tr> 
														<td  class='linea titulo'>3</td>
														<td  class='linea cj' colspan = 5>
															<div class='bloque'>
															Nº DE ORDEN <br>
															CLIENTE <br>
															MEDIDA Y GG <br>
															MAT. Y COLOR <br>
															LBS EXTRUIDAS <br>
															DESPERDICIO <br>
															</div>
															<div class='bloque'>
															</div>
														</td>
														<td  class='linea titulo'>".$prod_dia3." LB</td>
														<td  class='linea titulo'>".$bd3." LB</td>
														<td  class='linea titulo'>".$ad3." LB</td>
														<td  class='linea titulo'>".$dbd3." LB</td>
														<td  class='linea titulo'>".$dad3." LB</td>
													</tr>
													<tr> 
														<td  class='linea titulo'>4</td>
														<td  class='linea cj' colspan = 5>
															<div class='bloque'>
															Nº DE ORDEN <br>
															CLIENTE <br>
															MEDIDA Y GG <br>
															MAT. Y COLOR <br>
															LBS EXTRUIDAS <br>
															DESPERDICIO <br>
															</div>
															<div class='bloque'></div>
														</td>
														<td  class='linea titulo'>".$prod_dia4." LB</td>
														<td  class='linea titulo'>".$bd4." LB</td>
														<td  class='linea titulo'>".$ad4." LB</td>
														<td  class='linea titulo'>".$dbd4." LB</td>
														<td  class='linea titulo'>".$dad4." LB</td>
													</tr>
													<tr> 
														<td  class='linea titulo'>5</td>
														<td  class='linea cj' colspan = 5>
															<div class='bloque'>
															Nº DE ORDEN <br>
															CLIENTE <br>
															MEDIDA Y GG <br>
															MAT. Y COLOR <br>
															LBS EXTRUIDAS <br>
															DESPERDICIO <br>
															</div>
															<div class='bloque'></div>
														</td>
														<td  class='linea titulo'>".$prod_dia5." LB</td>
														<td  class='linea titulo'>".$bd5." LB</td>
														<td  class='linea titulo'>".$ad5." LB</td>
														<td  class='linea titulo'>".$dbd5." LB</td>
														<td  class='linea titulo'>".$dad5." LB</td>
													</tr>
													<tr> 
														<td  class='linea titulo'>6</td>
														<td  class='linea cj' colspan = 5>
															<div class='bloque'>
															Nº DE ORDEN <br>
															CLIENTE <br>
															MEDIDA Y GG <br>
															MAT. Y COLOR <br>
															LBS EXTRUIDAS <br>
															DESPERDICIO <br>
															</div>
															<div class='bloque'></div>
														</td>
														<td  class='linea titulo'>".$prod_dia6." LB</td>
														<td  class='linea titulo'>".$bd6." LB</td>
														<td  class='linea titulo'>".$ad6." LB</td>
														<td  class='linea titulo'>".$dbd6." LB</td>
														<td  class='linea titulo'>".$dad6." LB</td>
													</tr>
													<tr> 
														<td  class='linea titulo'>7</td>
														<td  class='linea cj' colspan = 5>
															<div class='bloque'>
															Nº DE ORDEN <br>
															CLIENTE <br>
															MEDIDA Y GG <br>
															MAT. Y COLOR <br>
															LBS EXTRUIDAS <br>
															DESPERDICIO <br>
															</div>
															<div class='bloque'></div> 
														</td>
														<td  class='linea titulo'>".$prod_dia7." LB</td>
														<td  class='linea titulo'>".$bd7." LB</td>
														<td  class='linea titulo'>".$ad7." LB</td>
														<td  class='linea titulo'>".$dbd7." LB</td>
														<td  class='linea titulo'>".$dad7." LB</td>
													</tr>
													<tr> 
														<td  class='linea titulo'>8</td>
														<td  class='linea cj' colspan = 5>
															<div class='bloque'>
															Nº DE ORDEN <br>
															CLIENTE <br>
															MEDIDA Y GG <br>
															MAT. Y COLOR <br>
															LBS EXTRUIDAS <br>
															DESPERDICIO <br>
															</div>
															<div class='bloque'></div>
														</td>
														<td  class='linea titulo'>".$prod_dia8." LB</td>
														<td  class='linea titulo'>".$bd8." LB</td>
														<td  class='linea titulo'>".$ad8." LB</td>
														<td  class='linea titulo'>".$dbd8." LB</td>
														<td  class='linea titulo'>".$dad8." LB</td>
													</tr>
													<tr> 
														<td  class='linea titulo'>9</td>
														<td  class='linea cj' colspan = 5>
															<div class='bloque'>
															Nº DE ORDEN <br>
															CLIENTE <br>
															MEDIDA Y GG <br>
															MAT. Y COLOR <br>
															LBS EXTRUIDAS <br>
															DESPERDICIO <br>
															</div>
															<div class='bloque'>
															</div>
														</td>
														<td  class='linea titulo'>".$prod_dia9." LB</td>
														<td  class='linea titulo'>".$bd9." LB</td>
														<td  class='linea titulo'>".$ad9." LB</td>
														<td  class='linea titulo'>".$dbd9." LB</td>
														<td  class='linea titulo'>".$dad9." LB</td>
													</tr>
													<tr> 
														<td  class='linea titulo'>10</td>
														<td  class='linea cj' colspan = 5>
															<div class='bloque'>
															Nº DE ORDEN <br>
															CLIENTE <br>
															MEDIDA Y GG <br>
															MAT. Y COLOR <br>
															LBS EXTRUIDAS <br>
															DESPERDICIO <br>
															</div>
															<div class='bloque'></div>
														</td>
														<td  class='linea titulo'>".$prod_dia10." LB</td>
														<td  class='linea titulo'>".$bd10." LB</td>
														<td  class='linea titulo'>".$ad10." LB</td>
														<td  class='linea titulo'>".$dbd10." LB</td>
														<td  class='linea titulo'>".$dad10." LB</td>
													</tr>
													<tr>
														<td colspan=5></td>
														<td>Total</td>
														<td>".$totallbs." LB</td>
														<td>".$tbd." LB</td>
														<td>".$tad." LB</td>
														<td>".$tdbd." LB</td>
														<td>".$tdad." LB</td>
													</tr>
													<tr>
														<td>OBSERVACIONES</td>
														<td colspan=11>
														</td>
													</tr>
												</tbody>
												</table>
											</div>
										</div>
									</div>
                                </div>
                        </div>
                          <!-- /.row -->
                       
                          <!-- ./card-body -->
                        <div class="card-footer">
                          <!-- /.row -->
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
</div>