 @include('layouts.header')

@include('layouts.preloader')  

  <nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  @include('layouts.menu')
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        @include('layouts.tools')
        <!-- /.row -->
        <div id="zona_word">
           @if( auth()->user()->role == 0)
              <!-- Main row -->
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h5 class="card-title">Monthly Recap Report</h5>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <div class="btn-group">
                          <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-wrench"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right" role="menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <a class="dropdown-divider"></a>
                            <a href="#" class="dropdown-item">Separated link</a>
                          </div>
                        </div>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-8">
                          <p class="text-center">
                            <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                          </p>

                          <div class="chart">
                            <!-- Sales Chart Canvas -->
                            <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                          </div>
                          <!-- /.chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                          <p class="text-center">
                            <strong>Goal Completion</strong>
                          </p>

                          <div class="progress-group">
                            Add Products to Cart
                            <span class="float-right"><b>160</b>/200</span>
                            <div class="progress progress-sm">
                              <div id="ext_bar" class="progress-bar bg-primary" style="width:0%">
                              </div>
                            </div>
                          </div>
                          <!-- /.progress-group -->

                          <div class="progress-group">
                            Complete Purchase
                            <span class="float-right"><b>310</b>/400</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-danger" style="width: 75%"></div>
                            </div>
                          </div>

                          <!-- /.progress-group -->
                          <div class="progress-group">
                            <span class="progress-text">Visit Premium Page</span>
                            <span class="float-right"><b>480</b>/800</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-success" style="width: 60%"></div>
                            </div>
                          </div>

                          <!-- /.progress-group -->
                          <div class="progress-group">
                            Send Inquiries
                            <span class="float-right"><b>250</b>/500</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-warning" style="width: 50%"></div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- ./card-body -->
                    <div class="card-footer">
                      <div class="row">
                        <div class="col-sm-3 col-6">
                          <div class="description-block border-right">
                            <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                            <h5 class="description-header">$35,210.43</h5>
                            <span class="description-text">TOTAL REVENUE</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                          <div class="description-block border-right">
                            <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                            <h5 class="description-header">$10,390.90</h5>
                            <span class="description-text">TOTAL COST</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                          <div class="description-block border-right">
                            <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                            <h5 class="description-header">$24,813.53</h5>
                            <span class="description-text">TOTAL PROFIT</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                          <div class="description-block">
                            <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                            <h5 class="description-header">1200</h5>
                            <span class="description-text">GOAL COMPLETIONS</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Main row -->
              <div class="row">
                <!-- Left col -->
                <div class="col-md-8">
                  <!-- MAP & BOX PANE -->
                  
                  <!-- /.card -->
                  <div class="row">
                    <div class="col-md-6">
                      <!-- DIRECT CHAT -->
                      
                      <!--/.direct-chat -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-6">
                      <!-- USERS LIST -->
                      
                      <!--/.card -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <!-- TABLE: LATEST ORDERS -->
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">DataTable with minimal features & hover style</h3>
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example2" class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                  <th>Order ID</th>
                                  <th>Fecha de entrega</th>
                                  <th>Status</th>
                                  <th>Popularity</th>
                              </tr>
                            </thead>
                            <tbody>
                              {{-- dd($result['orden']) --}}
                              @foreach ($result['orden'] as $item)
                              <tr>
                                <td>{{$item->n_orden}}</td>
                                <td>{{$item->fecha_entrega}}</td>
                                <td><span class="badge badge-success">{{$item->status}}</span></td>
                                <td>
                                  <button type="button" class="btn btn-block btn-outline-secondary btn-sm" onclick="ver_prod('{{$item->id_orden}}');">
                                    <i class="fas fa-edit"></i> Ver producción
                                  </button>
                                </td>
                              </tr>                  
                              @endforeach
                            </tbody>
                            <tfoot>
                              <tr>
                                  <th>Order ID</th>
                                  <th>Item</th>
                                  <th>Status</th>
                                  <th>Popularity</th>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                    </div>
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->

                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">PRODUCCIÓN</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="progress-group">
                            SOLICITADO EN EXTRUCION
                            <span class="float-right"><b id="ext_star">0</b>/<b id="ext_end">0</b></span>
                            <div class="progress progress-sm">
                              <div id="ext_bar" class="progress-bar bg-primary" style="width:0%">
                              </div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
                          <div class="progress-group">
                            SOLICITADO EN IMPRESION
                            <span class="float-right"><b id="imp_star">0</b>/<b id="imp_end">0</b></span>
                            <div class="progress progress-sm">
                              <div id="imp_bar" class="progress-bar bg-danger" style="width: 0%"></div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
                          <div class="progress-group">
                            SOLICITADO EN SELLO Y CORTE
                            <span class="float-right"><b id="cort_star">0</b>/<b id="cort_end">0</b></span>
                            <div class="progress progress-sm">
                              <div id="cort_bar" class="progress-bar bg-success" style="width: 0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer bg-light p-0">
                    </div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            @else
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h5 class="card-title">Monthly Recap Report</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-8 mx-auto">
                          <p class="text-center">
                            <strong>Bienvenido</strong>
                          </p>

                          
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- ./card-body -->
                    <div class="card-footer">
                      <div class="row">
                        
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
            @endif

        </div>

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->



 @include('layouts.footer')
 <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

 <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
 <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
 <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
 <script>
    $(function () {
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
     function ver_prod(id){
        $.ajax({
          headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
          url:'{{route("search.orden_active")}}',
          type: "post",
          //dataType: 'json',
          data:{
            id_orden:id
          },
          success: function (data) {
            
            var datos = JSON.parse(data);

            $("#cort_end").html(datos['cant_bolsas']);
            $("#cort_star").html(datos['corte']);

            $("#imp_end").html(datos['lbs_produc_imp']);
            $("#imp_star").html(datos['imp']);

            $("#ext_end").html(datos['lbs_producir']);
            $("#ext_star").html(datos['ext']);

            if(datos['cant_bolsas']==0 && datos['corte']== 0 && datos['lbs_produc_imp']==0 && datos['imp'] ==0 &&datos['lbs_producir']==0 && datos['ext']==0)
            {   var cort  = 0;
                var imp  = 0;
                var ext = 0;
            }else{
                var cort  = (datos['corte']*100)/datos['cant_bolsas'];
                var imp  = (datos['imp']*100)/datos['lbs_produc_imp'];
                var ext = (datos['ext']*100)/datos['lbs_producir'];
            }

            

            console.log(cort,imp,ext);
            setTimeout(function(){
              $("div#ext_bar").css("width", ""+ext+"%");
                      setTimeout(function(){
                          $("div#imp_bar").css("width", ""+imp+"%");
                              setTimeout(function(){
                                  $("div#cort_bar").css("width", ""+cort+"%");
                              },500);
                      },600);
            },700);

            /*setTimeout(function(){
    $("div#ext_bar").css("width", "70%");
            setTimeout(function(){
                $("div#imp_bar").css("width", "70%");
                    setTimeout(function(){
                        $("div#cort_bar").css("width", "70%");
                    },500);
            },600);
  },700);*/

          },
          error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
            console.log(ajaxOptions);
          }
            });
      }
 </script>
  