{{-- dd($result['orden']) --}}
<div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">
           @if( auth()->user()->role == 2)
              Reporte de bovinas
           @elseif( auth()->user()->role == 4)
              Reporte de fardo
           @else
           @endif
        </h5>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-2">
            <div class="info-box">
              <div class="info-box-content">
                <p>
                    <strong>
                      @if( auth()->user()->role == 2)
                        Lbs de bovinas
                      @elseif( auth()->user()->role == 4)
                        Lbs de fardos
                      @else
                      @endif
                    </strong>
                </p>
                <form  id="form_bobina" name="form_bobina" action="{{URL::to('bobina/add')}}" >
                  @csrf
                  <div class="input-group">
                    <input type="text" name="lbs_bobina" id="lbs_bobina" class="form-control">
                    <input type="hidden" id="id_orden_bobina" name="id_orden_bobina" value="{{$result['orden'][0]->id_orden}}">
                    <input type="hidden" id="id_rol_user" name="id_rol_user" value="{{ auth()->user()->role }}">
                    <span class="input-group-append">
                      <button type="button" class="btn btn-primary" id="btn_bobina">
                        <i class="fas fa-dolly-flatbed"></i>
                      </button>
                    </span>
                  </div>
                </form>
              </div>                    
            </div>
            <!-- /.progress-group -->
          </div>
          <!-- /.col -->
          <div class="col-md-10">
            
              <div id="card_select_product" class="card">
                
                    <div class="card-header">
                      <h3 class="card-title">
                        @if( auth()->user()->role == 2)
                          Bovinas de orden
                        @elseif( auth()->user()->role == 4)
                          Fardos de orden
                        @else
                        @endif
                      </h3>
                      <div class="card-tools">
                        <!-- Buttons, labels, and many other things can be placed here! -->
                        <!-- Here is a label for example -->
                        
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" id="card_body_prodct">
                      
                      @include('layouts.action.table_bovina')

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      
                    </div>
                    <!-- /.card-footer -->

                  <!--div id="carga_card" class="overlay dark">
                    <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                  </div-->
                  <!-- carga-->
              </div>
              <!-- /.card -->
          
            <!-- /.chart-responsive -->
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
      $("#btn_bobina").click(function(e){
          e.preventDefault();
          $("#id_orden_ext").val($("#id_orden_add").val());
          var action   = $("form#form_bobina").attr("action");
          var formData = $("form#form_bobina").serialize();
          console.log(formData);
          $.ajax({
              url: action,
              type: "POST",
              data: formData,
              beforeSend:function(response){ 
                //$("#buscar_orden").attr('disabled','disabled');
                //$("#carga_card").show();
              },
              success: function (e) {
                //$("#carga_card").hide();
                //$("#buscar_orden").removeAttr('disabled');
                console.log(e);
                //$("#zona_word").html(e);
                if(e>0){
                  $("form#form_bobina")[0].reset();
                    Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: 'Producto asignado exitosamente',
                      showConfirmButton: false,
                      timer: 3500
                    });
                     $("#add_bovina_ext").click()
                    //$("#card_body_prodct").html('h');
                }
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