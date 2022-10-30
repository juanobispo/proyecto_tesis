
<!-- basic modal -->
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog card card-dark">
    <div class="modal-content ">
      <div class="modal-header card-header">
        <h4 class="modal-title" id="myModalLabel">Basic Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>Modal Body</h3>
        <form id="form_asociar" name="form_asociar" action="{{URL::to('clientes/asociar')}} ">
          @csrf
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1">
                  <i class="fas fa-box"></i>
                </span>
                <div class="info-box-content">
                  <span class="info-box-text">Productos</span>
                  <div class="input-group">
                    <input type="text" id="product_search" name="product_search"  class="form-control">
                    <input type="hidden" name="idproduct_asociar" id="idproduct_asociar" value="">
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-12 col-md-12">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Clientes</span>
                  <div class="input-group">
                    <input type="text" name="cliente_search" id="cliente_search" class="form-control">
                    <input type="hidden" name="idCliente_asociar" id="idCliente_asociar" value="">
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
          </div>
        </form>

      </div>
      <div class="modal-footer card-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="add_asociar">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Extruden insert modal -->
<div class="modal fade" id="AddEXTModal" tabindex="-1" role="dialog" aria-labelledby="AddEXTModal" aria-hidden="true">
  <div class="modal-dialog card card-dark">
    <div class="modal-content ">
      <div class="modal-header card-header">
        <h4 class="modal-title" id="myModalLabel">Ingresar producción</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="registrar_extruden"  action="{{URL::to('ext/add')}}" class="mt-3 mx-auto col-12 col-lg-11">
                    @csrf
                    <div class="row">
                      <input type="hidden" name="id_orden_ext" id="id_orden_ext">
                      <input type="hidden" name="id_empleado" id="id_empleado" value="{{auth()->user()->id}}">
                      <input type="hidden" name="id_rol" id="id_rol" value="{{auth()->user()->role}}">
                    </div>
                    <div class="row">
                          <div class="col-12 col-sm-6">
                            <div class="form-group">
                              <label for="inputState">Turno</label>
                              <select id="turno" name="turno" class="form-control">
                                <option value="DIA">DIA</option>
                                <option value="NOCHE">NOCHE</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-12 col-sm-6">
                            <div class="form-group">
                              <label for="inputState">Grupo</label>
                              <select id="grupo" name="grupo" class="form-control">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                              </select>
                            </div>
                          </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group has-feedback">
                                <i class="fas fa-box-open form-control-feedback"></i>
                                <label for="inputEmail">Producción</label>
                                <input id="product_ext" type="text" class="form-control" name="product_ext" required >
                            </div>
                        </div>      
                        <div class="col-12 col-sm-6">
                              <div class="form-group has-feedback">
                                <i class="fas fa-trash form-control-feedback"></i>
                                <label for="inputTel">Desperdicio</label>
                                <input type="text" id="desperdicio" name="desperdicio" class="form-control" required />
                              </div>
                        </div>
                    </div>
                    <div class="row">
                          <div class="col-12 col-sm-12">
                                <div class="form-group has-feedback">
                                  <i class="fas fa-edit form-control-feedback"></i>
                                  <label for="inputdireccion">Comentarios</label>
                                  <input type="text" id="comentarios" name="comentarios"  class="form-control" />
                                </div>
                          </div>
                    </div>
            </form>
      </div>
      <div class="modal-footer card-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="add_extruden">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Extruden insert modal supervisor -->
<div class="modal fade" id="AddEXTModalSP" tabindex="-1" role="dialog" aria-labelledby="AddEXTModalSP" aria-hidden="true">
  <div class="modal-dialog card card-dark">
    <div class="modal-content ">
      <div class="modal-header card-header">
        <h4 class="modal-title" id="myModalLabel">Ingresar producción extrucción</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="registrar_prodct_ext"  action="{{URL::to('ext/produccion')}}" class="mt-3 mx-auto col-12 col-lg-11">
                        @csrf
                        <div class="row">
                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                      <label for="inputName">Numero de Orden</label>
                                      <input id="orden_search" type="text" class="form-control orden_search" name="orden_search" required  autofocus>
                                      <input type="hidden" class="id_orden_add" id="id_orden_add" name="id_orden_search">
                                      <input type="hidden" id="id_supervisor" name="id_supervisor" value="{{auth()->user()->id}}">
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                      <label for="inputName">Lbs extruidas</label>
                                      <input id="lbs_ext" name="lbs_ext" type="text" class="form-control"  required  autofocus>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">  
                                    <div class="form-group ">
                                      <label for="inputApe"># Maquina</label>
                                      <input id="n_maquina" type="text" class="form-control" name="n_maquina" required >
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                              <div class="col-6">
                                <label for="">Desperdicio</label>
                                  <div class="row">
                                      <div class="col-12 col-sm-6">
                                          <div class="form-group ">
                                            <label for="inputdui">B/D</label>
                                            <input type="text" id="des_bd" name="des_bd" class="form-control" />
                                          </div>
                                      </div>
                                      <div class="col-12 col-sm-6">
                                            <div class="form-group ">
                                              <label for="inputdui">A/D</label>
                                              <input type="text" id="des_ad" name="des_ad" class="form-control" />
                                            </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-6">
                                <label for="">Duro</label>
                                  <div class="row">
                                      <div class="col-12 col-sm-6">
                                          <div class="form-group ">
                                            <label for="inputdui">B/D</label>
                                            <input type="text" id="duro_bd" name="duro_bd" class="form-control" />
                                          </div>
                                      </div>
                                      <div class="col-12 col-sm-6">
                                            <div class="form-group ">
                                              <label for="inputdui">A/D</label>
                                              <input type="text" id="duro_ad" name="duro_ad" class="form-control" />
                                            </div>
                                      </div>
                                  </div>
                              </div>
                        </div>
                        <div class="row">
                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                      <label for="inputName">Comentarios</label>
                                      <input id="comentario" name="comentario" type="text" class="form-control" required  autofocus>
                                    </div>
                                </div>
                        </div>
                    </form>
      </div>
      <div class="modal-footer card-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="add_product_ext">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Impresion insert modal supervisor -->
<div class="modal fade" id="AddIMPTModalSP" tabindex="-1" role="dialog" aria-labelledby="AddIMPModalSP" aria-hidden="true">
  <div class="modal-dialog card card-dark">
    <div class="modal-content ">
      <div class="modal-header card-header">
        <h4 class="modal-title" id="myModalLabel">Ingresar producción impresión</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="registrar_prodct_imp"  action="{{URL::to('imp/produccion')}}" class="mt-3 mx-auto col-12 col-lg-11">
                        @csrf
                        <div class="row">
                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                      <label for="inputName">Operario</label>
                                      <input id="empleado_search_imp" type="text" class="form-control empleado_search_imp" name="empleado_search_imp" required  autofocus>
                                      <input id="id_empleado_search_imp" type="hidden" class="form-control id_empleado_search_imp" name="id_empleado_search_imp" >
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                      <label for="inputName">N° de Orden</label>
                                      <input id="n_orden_imp" type="text" class="form-control orden_search" name="n_orden_imp" required  autofocus>
                                      <input type="hidden" class="id_orden_add" id="id_orden_add" name="id_orden_search">
                                      <input type="hidden" id="id_supervisor" name="id_supervisor" value="{{auth()->user()->id}}">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">  
                                    <div class="form-group ">
                                      <label for="inputApe"># Maquina</label>
                                      <input id="n_maquina" type="text" class="form-control" name="n_maquina" required >
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                              <div class="col-12">
                                <label for="">Tiempo de Bovina</label>
                                  <div class="row">
                                      <div class="col-12 col-sm-6">
                                          <div class="form-group ">
                                            <label for="inputdui">Inicio</label>
                                            <input type="time" id="time_star" name="time_star" class="form-control" />
                                          </div>
                                      </div>
                                      <div class="col-12 col-sm-6">
                                            <div class="form-group ">
                                              <label for="inputdui">Final</label>
                                              <input type="time" id="time_end" name="time_end" class="form-control" />
                                            </div>
                                      </div>
                                  </div>
                              </div>
                        </div>
                        <div class="row">
                              <div class="col-12">
                                <label for="">Produccion</label>
                                  <div class="row">
                                      <div class="col-12 col-lg-4">
                                          <div class="form-group ">
                                            <label for="inputdui">Lbs </label>
                                            <input type="text" id="prodct_lbs" name="prodct_lbs" class="form-control" />
                                          </div>
                                      </div>
                                      <div class="col-12 col-lg-4">
                                            <div class="form-group ">
                                              <label for="inputdui"># bovina</label>
                                              <input type="text" id="n_bovina" name="n_bovina" class="form-control" />
                                            </div>
                                      </div>
                                      <div class="col-12 col-lg-4">
                                            <div class="form-group ">
                                              <label for="inputdui">Desperdicio</label>
                                              <input type="text" id="desperdicio" name="desperdicio" class="form-control" />
                                            </div>
                                      </div>
                                  </div>
                              </div>
                        </div>
                        <div class="row">
                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                      <label for="inputName">Comentarios</label>
                                      <input id="coment_imp" type="text" class="form-control" name="coment_imp" required  autofocus>
                                    </div>
                                </div>
                        </div>
            </form>
      </div>
      <div class="modal-footer card-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="add_product_imp">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Corte insert modal supervisor -->
<div class="modal fade" id="AddCORTETModalSP" tabindex="-1" role="dialog" aria-labelledby="AddCORTEModalSP" aria-hidden="true">
  <div class="modal-dialog card card-dark">
    <div class="modal-content ">
      <div class="modal-header card-header">
        <h4 class="modal-title" id="myModalLabel">Ingresar producción corte</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="registrar_prodct_corte"  action="{{URL::to('corte/produccion')}}" class="mt-3 mx-auto col-12 col-lg-11">
                        @csrf
                        <div class="row">
                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                      <label for="inputName">Operario</label>
                                      <input id="empleado_search_corte" type="text" class="form-control empleado_search_corte" name="empleado_search_corte" required  autofocus>
                                      <input id="id_empleado_search_corte" type="hidden" class="form-control id_empleado_search_corte" name="id_empleado_search_corte" >
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                      <label for="inputName">N° Orden</label>
                                      <input id="n_orden_corte" type="text" class="form-control orden_search" name="n_orden_corte" required  autofocus>
                                      <input type="hidden" class="id_orden_add" id="id_orden_corte" name="id_orden_search">
                                      <input type="hidden" id="id_supervisor" name="id_supervisor" value="{{auth()->user()->id}}">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">  
                                    <div class="form-group ">
                                      <label for="inputApe">N° Maquina</label>
                                      <input id="n_maquina" type="text" class="form-control" name="n_maquina" required >
                                    </div>
                                </div>
                                
                        </div>
                        <div class="row">
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                      <label for="inputName">Produccion</label>
                                      <input id="lbs_corte" type="text" class="form-control" name="lbs_corte" required  autofocus>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">  
                                    <div class="form-group ">
                                      <label for="inputApe">N° Pistas</label>
                                      <input id="n_pista" type="text" class="form-control" name="n_pista" required >
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">  
                                    <div class="form-group ">
                                      <label for="inputApe">Desecho</label>
                                      <input id="desecho" type="text" class="form-control" name="desecho" required >
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                      <label for="inputName">Comentarios</label>
                                      <input id="coment" type="text" class="form-control" name="coment" required  autofocus>
                                    </div>
                                </div>
                        </div>
            </form>
      </div>
      <div class="modal-footer card-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="add_product_corte">Ingresar</button>
      </div>
    </div>
  </div>
</div>

