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
  @if ($result)
  {{-- dd($result) --}}
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard {{ $result['title'] }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="{{ URL::to('/home')}}">Home</a>
              </li>
              <li class="breadcrumb-item active">{{ $result['title'] }}</li>
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
        <div class="row">
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
            
            <div class="col-12 col-sm-6 col-md">
              <a href="#" data-toggle="modal" data-target="#AddCORTETModalSP">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-primary elevation-1">
                    <i class="fas fa-dolly-flatbed"></i>
                  </span>
                  <div class="info-box-content">
                    <span class="info-box-text">Ingresar producción de corte</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
               </a>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md">
              <a href="#">
                <div class="info-box">
                  <span class="info-box-icon bg-info elevation-1">
                    <i class="fas fa-cogs"></i>
                  </span>
                  <div class="info-box-content">
                    <span class="info-box-text">Tools</span>
                    <span class="info-box-number">
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
              </a>
              <!-- /.info-box -->
            </div>
        </div>
        <!-- /.row -->

        <!-- zona word -->
        <div id="zona_word" class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Registro de empleado</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-12 justify-content-cente">
                      <div class='table-responsive'>
                        <div class='container' align='center'>
                          <table class='table table-bordered' border='0'>
                            <tbody>
                              <tr> 
                                <td colspan = 12>REPORTE DE CORTE Y SELLO</td>
                              </tr>
                              <tr> 
                                <td colspan = 12></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class='table-responsive'>
                        <div class='container' align='center'>
                          <table class='table table-bordered' border='0'>
                              <tbody>
                                <tr>
                                  <td >FECHA</td>
                                  <td >".$fecha."</td>
                                  <td colspan = 4>SUPERVISOR</td>
                                  <td  >".$Nsuper."</td>
                                  <td >TURNO</td>
                                  <td >".$turno."</td>
                                  <td >GRUPO</td>
                                  <td >".$grupo."</td>
                                </tr>
                                <tr>
                                  <td colspan = 11>
                                    <div class="row">
                                       {{-- dd($result['prodc_super']) --}}
                                        <div class="col-3">
                                          <div class="card text-white bg-info mb-3">
                                            <div class="card-header">
                                                MAQ.
                                                  <div class="card-tools">
                                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                  </button>
                                                  </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"></h5>
                                                <p class="card-text m-0">Nº DE ORDEN</p>
                                                <p class="card-text m-0">CLIENTE</p>
                                                <p class="card-text m-0">OPERARIO</p>
                                                <p class="card-text m-0">PRODUCTO</p>
                                                <p class="card-text m-0">MEDIDA</p>
                                                <p class="card-text m-0">MAT. Y COLOR</p>
                                                <p class="card-text m-0">N° PISTA</p>
                                            </div>
                                            <h5 class="card-title card-h4">
                                              PRODUCCION 
                                            </h5>
                                            <div class="card-footer">
                                                <p class="card-text m-0">DESPERDICIO </p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-3">
                                          <div class="card text-white bg-primary mb-3">
                                            <div class="card-header">
                                                MAQ.1
                                                <div class="card-tools">
                                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                  </button>
                                                </div>
                                            </div>
                                            {{-- dd($result['prodc_super']) --}}
                                            @foreach ($result['prodc_super'] as $item)
                                                @php  
                                                  $material ="";
                                                  if($item->material_bd){
                                                    $material = "BD"; 
                                                  }else{
                                                    $material = "AD";
                                                  }
                                                if($item->mq_corte==1){
                                                  $mq_corte = $item->mq_corte;
                                                  $n_orden = $item->n_orden;
                                                  $nombre = $item->nombre;
                                                  $name = $item->name;
                                                  $nombre_producto = $item->nombre_producto;
                                                  $ancho = $item->ancho;
                                                  $color = $item->color_material;
                                                  $pista = $item->n_pistas;
                                                }
                                                @endphp
                                            @endforeach
                                                @if($mq_corte==1)
                                                  <div class="card-body">
                                                      <h5 class="card-title"></h5>
                                                      <p class="card-text m-0">{{$n_orden}}</p>
                                                      <p class="card-text m-0">{{$nombre}}</p>
                                                      <p class="card-text m-0">{{$name}}</p>
                                                      <p class="card-text m-0">{{$nombre_producto}}</p>
                                                      <p class="card-text m-0">{{$ancho}}</p>
                                                      <p class="card-text m-0">{{$material}} Y  {{$color}}</p>
                                                      <p class="card-text m-0">{{$pista}}</p>
                                                  </div>
                                                @endif

                                                @php  $desp = 0; $lbs_c = 0; @endphp
                                                @foreach ($result['prodc_super'] as $item)
                                                  @if($item->mq_corte==1)
                                                    @php 
                                                      $desp   = $desp+$item->desperdicio;
                                                      $lbs_c  = $lbs_c+$item->lbs_corte;
                                                    @endphp
                                                  @endif
                                                @endforeach
                                                  <h5 class="card-title card-h4">
                                                    PRODUCCION {{$lbs_c}} Lbs
                                                  </h5>
                                                  <div class="card-footer">
                                                     <p class="card-text m-0">DESPERDICIO {{$desp}} Lbs</p>
                                                  </div>
                                               
                                           
                                          </div>
                                        </div>
                                        <div class="col-3">
                                          <div class="card text-white bg-primary mb-3">
                                            <div class="card-header">
                                                MAQ.2
                                                <div class="card-tools">
                                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                  </button>
                                                </div>
                                            </div>
                                            {{-- dd($result['prodc_super']) --}}
                                            @foreach ($result['prodc_super'] as $item)
                                                @php  
                                                  $material ="";
                                                  if($item->material_bd){
                                                    $material = "BD"; 
                                                  }else{
                                                    $material = "AD";
                                                  }
                                                if($item->mq_corte==2){
                                                  $mq_corte = $item->mq_corte;
                                                  $n_orden = $item->n_orden;
                                                  $nombre = $item->nombre;
                                                  $name = $item->name;
                                                  $nombre_producto = $item->nombre_producto;
                                                  $ancho = $item->ancho;
                                                  $color = $item->color_material;
                                                  $pista = $item->n_pistas;
                                                }
                                                @endphp
                                            @endforeach
                                                @if($mq_corte==2)
                                                  <div class="card-body">
                                                      <h5 class="card-title"></h5>
                                                      <p class="card-text m-0">{{$n_orden}}</p>
                                                      <p class="card-text m-0">{{$nombre}}</p>
                                                      <p class="card-text m-0">{{$name}}</p>
                                                      <p class="card-text m-0">{{$nombre_producto}}</p>
                                                      <p class="card-text m-0">{{$ancho}}</p>
                                                      <p class="card-text m-0">{{$material}} Y  {{$color}}</p>
                                                      <p class="card-text m-0">{{$pista}}</p>
                                                  </div>
                                                @endif

                                                @php  $desp = 0; $lbs_c = 0; @endphp
                                                @foreach ($result['prodc_super'] as $item)
                                                  @if($item->mq_corte==2)
                                                    @php 
                                                      $desp   = $desp+$item->desperdicio;
                                                      $lbs_c  = $lbs_c+$item->lbs_corte;
                                                    @endphp
                                                  @endif
                                                @endforeach
                                                  <h5 class="card-title card-h4">
                                                    PRODUCCION {{$lbs_c}} Lbs
                                                  </h5>
                                                  <div class="card-footer">
                                                     <p class="card-text m-0">DESPERDICIO {{$desp}} Lbs</p>
                                                  </div>
                                          </div>
                                        </div>
                                        <div class="col-3">
                                          <div class="card text-white bg-primary mb-3">
                                            <div class="card-header">
                                                MAQ.3
                                                  <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                      <i class="fas fa-minus"></i>
                                                    </button>
                                                  </div>
                                            </div>
                                            {{-- dd($result['prodc_super']) --}}
                                            @foreach ($result['prodc_super'] as $item)
                                                @php  
                                                  $material ="";
                                                  if($item->material_bd){
                                                    $material = "BD"; 
                                                  }else{
                                                    $material = "AD";
                                                  }
                                                if($item->mq_corte==3){
                                                  $mq_corte = $item->mq_corte;
                                                  $n_orden = $item->n_orden;
                                                  $nombre = $item->nombre;
                                                  $name = $item->name;
                                                  $nombre_producto = $item->nombre_producto;
                                                  $ancho = $item->ancho;
                                                  $color = $item->color_material;
                                                  $pista = $item->n_pistas;
                                                }
                                                @endphp
                                            @endforeach
                                                @if($mq_corte==3)
                                                  <div class="card-body">
                                                      <h5 class="card-title"></h5>
                                                      <p class="card-text m-0">{{$n_orden}}</p>
                                                      <p class="card-text m-0">{{$nombre}}</p>
                                                      <p class="card-text m-0">{{$name}}</p>
                                                      <p class="card-text m-0">{{$nombre_producto}}</p>
                                                      <p class="card-text m-0">{{$ancho}}</p>
                                                      <p class="card-text m-0">{{$material}} Y  {{$color}}</p>
                                                      <p class="card-text m-0">{{$pista}}</p>
                                                  </div>
                                                @endif

                                                @php  $desp = 0; $lbs_c = 0; @endphp
                                                @foreach ($result['prodc_super'] as $item)
                                                  @if($item->mq_corte==3)
                                                    @php 
                                                      $desp   = $desp+$item->desperdicio;
                                                      $lbs_c  = $lbs_c+$item->lbs_corte;
                                                    @endphp
                                                  @endif
                                                @endforeach
                                                  <h5 class="card-title card-h4">
                                                    PRODUCCION {{$lbs_c}} Lbs
                                                  </h5>
                                                  <div class="card-footer">
                                                     <p class="card-text m-0">DESPERDICIO {{$desp}} Lbs</p>
                                                  </div>
                                          </div>
                                        </div>
                                        <div class="col-3">
                                          <div class="card text-white bg-primary mb-3">
                                            <div class="card-header">
                                                MAQ.4
                                                  <div class="card-tools">
                                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                  </button>
                                                </div>
                                            </div>
                                            {{-- dd($result['prodc_super']) --}}
                                            @foreach ($result['prodc_super'] as $item)
                                                @php  
                                                  $material ="";
                                                  if($item->material_bd){
                                                    $material = "BD"; 
                                                  }else{
                                                    $material = "AD";
                                                  }
                                                if($item->mq_corte==4){
                                                  $mq_corte = $item->mq_corte;
                                                  $n_orden = $item->n_orden;
                                                  $nombre = $item->nombre;
                                                  $name = $item->name;
                                                  $nombre_producto = $item->nombre_producto;
                                                  $ancho = $item->ancho;
                                                  $color = $item->color_material;
                                                  $pista = $item->n_pistas;
                                                }
                                                @endphp
                                            @endforeach
                                                @if($mq_corte==4)
                                                  <div class="card-body">
                                                      <h5 class="card-title"></h5>
                                                      <p class="card-text m-0">{{$n_orden}}</p>
                                                      <p class="card-text m-0">{{$nombre}}</p>
                                                      <p class="card-text m-0">{{$name}}</p>
                                                      <p class="card-text m-0">{{$nombre_producto}}</p>
                                                      <p class="card-text m-0">{{$ancho}}</p>
                                                      <p class="card-text m-0">{{$material}} Y  {{$color}}</p>
                                                      <p class="card-text m-0">{{$pista}}</p>
                                                  </div>
                                                @endif

                                                @php  $desp = 0; $lbs_c = 0; @endphp
                                                @foreach ($result['prodc_super'] as $item)
                                                  @if($item->mq_corte==4)
                                                    @php 
                                                      $desp   = $desp+$item->desperdicio;
                                                      $lbs_c  = $lbs_c+$item->lbs_corte;
                                                    @endphp
                                                  @endif
                                                @endforeach
                                                  <h5 class="card-title card-h4">
                                                    PRODUCCION {{$lbs_c}} Lbs
                                                  </h5>
                                                  <div class="card-footer">
                                                     <p class="card-text m-0">DESPERDICIO {{$desp}} Lbs</p>
                                                  </div>
                                          </div>
                                        </div>
                                        <div class="col-3">
                                          <div class="card text-white bg-primary mb-3">
                                            <div class="card-header">
                                                MAQ.5
                                                  <div class="card-tools">
                                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                  </button>
                                                  </div>
                                            </div>
                                            {{-- dd($result['prodc_super']) --}}
                                            @foreach ($result['prodc_super'] as $item)
                                                @php  
                                                  $material ="";
                                                  if($item->material_bd){
                                                    $material = "BD"; 
                                                  }else{
                                                    $material = "AD";
                                                  }
                                                if($item->mq_corte==5){
                                                  $mq_corte = $item->mq_corte;
                                                  $n_orden = $item->n_orden;
                                                  $nombre = $item->nombre;
                                                  $name = $item->name;
                                                  $nombre_producto = $item->nombre_producto;
                                                  $ancho = $item->ancho;
                                                  $color = $item->color_material;
                                                  $pista = $item->n_pistas;
                                                }
                                                @endphp
                                            @endforeach
                                                @if($mq_corte==5)
                                                  <div class="card-body">
                                                      <h5 class="card-title"></h5>
                                                      <p class="card-text m-0">{{$n_orden}}</p>
                                                      <p class="card-text m-0">{{$nombre}}</p>
                                                      <p class="card-text m-0">{{$name}}</p>
                                                      <p class="card-text m-0">{{$nombre_producto}}</p>
                                                      <p class="card-text m-0">{{$ancho}}</p>
                                                      <p class="card-text m-0">{{$material}} Y  {{$color}}</p>
                                                      <p class="card-text m-0">{{$pista}}</p>
                                                  </div>
                                                @endif

                                                @php  $desp = 0; $lbs_c = 0; @endphp
                                                @foreach ($result['prodc_super'] as $item)
                                                  @if($item->mq_corte==5)
                                                    @php 
                                                      $desp   = $desp+$item->desperdicio;
                                                      $lbs_c  = $lbs_c+$item->lbs_corte;
                                                    @endphp
                                                  @endif
                                                @endforeach
                                                  <h5 class="card-title card-h4">
                                                    PRODUCCION {{$lbs_c}} Lbs
                                                  </h5>
                                                  <div class="card-footer">
                                                     <p class="card-text m-0">DESPERDICIO {{$desp}} Lbs</p>
                                                  </div>
                                          </div>
                                        </div>
                                        <div class="col-3">
                                          <div class="card text-white bg-primary mb-3">
                                            <div class="card-header">
                                                MAQ.6
                                                  <div class="card-tools">
                                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                  </button>
                                                  </div>
                                            </div>
                                            {{-- dd($result['prodc_super']) --}}
                                            @foreach ($result['prodc_super'] as $item)
                                                @php  
                                                  $material ="";
                                                  if($item->material_bd){
                                                    $material = "BD"; 
                                                  }else{
                                                    $material = "AD";
                                                  }
                                                if($item->mq_corte==6){
                                                  $mq_corte = $item->mq_corte;
                                                  $n_orden = $item->n_orden;
                                                  $nombre = $item->nombre;
                                                  $name = $item->name;
                                                  $nombre_producto = $item->nombre_producto;
                                                  $ancho = $item->ancho;
                                                  $color = $item->color_material;
                                                  $pista = $item->n_pistas;
                                                }
                                                @endphp
                                            @endforeach
                                                @if($mq_corte==6)
                                                  <div class="card-body">
                                                      <h5 class="card-title"></h5>
                                                      <p class="card-text m-0">{{$n_orden}}</p>
                                                      <p class="card-text m-0">{{$nombre}}</p>
                                                      <p class="card-text m-0">{{$name}}</p>
                                                      <p class="card-text m-0">{{$nombre_producto}}</p>
                                                      <p class="card-text m-0">{{$ancho}}</p>
                                                      <p class="card-text m-0">{{$material}} Y  {{$color}}</p>
                                                      <p class="card-text m-0">{{$pista}}</p>
                                                  </div>
                                                @endif

                                                @php  $desp = 0; $lbs_c = 0; @endphp
                                                @foreach ($result['prodc_super'] as $item)
                                                  @if($item->mq_corte==6)
                                                    @php 
                                                      $desp   = $desp+$item->desperdicio;
                                                      $lbs_c  = $lbs_c+$item->lbs_corte;
                                                    @endphp
                                                  @endif
                                                @endforeach
                                                  <h5 class="card-title card-h4">
                                                    PRODUCCION {{$lbs_c}} Lbs
                                                  </h5>
                                                  <div class="card-footer">
                                                     <p class="card-text m-0">DESPERDICIO {{$desp}} Lbs</p>
                                                  </div>
                                          </div>
                                        </div>
                                        <div class="col-3">
                                          <div class="card text-white bg-primary mb-3">
                                            <div class="card-header">
                                                MAQ.7
                                                  <div class="card-tools">
                                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                  </button>
                                                  </div>
                                            </div>
                                            {{-- dd($result['prodc_super']) --}}
                                            @foreach ($result['prodc_super'] as $item)
                                                @php  
                                                  $material ="";
                                                  if($item->material_bd){
                                                    $material = "BD"; 
                                                  }else{
                                                    $material = "AD";
                                                  }
                                                if($item->mq_corte==7){
                                                  $mq_corte = $item->mq_corte;
                                                  $n_orden = $item->n_orden;
                                                  $nombre = $item->nombre;
                                                  $name = $item->name;
                                                  $nombre_producto = $item->nombre_producto;
                                                  $ancho = $item->ancho;
                                                  $color = $item->color_material;
                                                  $pista = $item->n_pistas;
                                                }
                                                @endphp
                                            @endforeach
                                                @if($mq_corte==7)
                                                  <div class="card-body">
                                                      <h5 class="card-title"></h5>
                                                      <p class="card-text m-0">{{$n_orden}}</p>
                                                      <p class="card-text m-0">{{$nombre}}</p>
                                                      <p class="card-text m-0">{{$name}}</p>
                                                      <p class="card-text m-0">{{$nombre_producto}}</p>
                                                      <p class="card-text m-0">{{$ancho}}</p>
                                                      <p class="card-text m-0">{{$material}} Y  {{$color}}</p>
                                                      <p class="card-text m-0">{{$pista}}</p>
                                                  </div>
                                                @endif

                                                @php  $desp = 0; $lbs_c = 0; @endphp
                                                @foreach ($result['prodc_super'] as $item)
                                                  @if($item->mq_corte==7)
                                                    @php 
                                                      $desp   = $desp+$item->desperdicio;
                                                      $lbs_c  = $lbs_c+$item->lbs_corte;
                                                    @endphp
                                                  @endif
                                                @endforeach
                                                  <h5 class="card-title card-h4">
                                                    PRODUCCION {{$lbs_c}} Lbs
                                                  </h5>
                                                  <div class="card-footer">
                                                     <p class="card-text m-0">DESPERDICIO {{$desp}} Lbs</p>
                                                  </div>
                                          </div>
                                        </div>
                                        <div class="col-3">
                                          <div class="card text-white bg-primary mb-3">
                                            <div class="card-header">
                                                MAQ.8
                                                  <div class="card-tools">
                                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                  </button>
                                                  </div>
                                            </div>
                                            {{-- dd($result['prodc_super']) --}}
                                            @foreach ($result['prodc_super'] as $item)
                                                @php  
                                                  $material ="";
                                                  if($item->material_bd){
                                                    $material = "BD"; 
                                                  }else{
                                                    $material = "AD";
                                                  }
                                                if($item->mq_corte==8){
                                                  $mq_corte = $item->mq_corte;
                                                  $n_orden = $item->n_orden;
                                                  $nombre = $item->nombre;
                                                  $name = $item->name;
                                                  $nombre_producto = $item->nombre_producto;
                                                  $ancho = $item->ancho;
                                                  $color = $item->color_material;
                                                  $pista = $item->n_pistas;
                                                }
                                                @endphp
                                            @endforeach
                                                @if($mq_corte==8)
                                                  <div class="card-body">
                                                      <h5 class="card-title"></h5>
                                                      <p class="card-text m-0">{{$n_orden}}</p>
                                                      <p class="card-text m-0">{{$nombre}}</p>
                                                      <p class="card-text m-0">{{$name}}</p>
                                                      <p class="card-text m-0">{{$nombre_producto}}</p>
                                                      <p class="card-text m-0">{{$ancho}}</p>
                                                      <p class="card-text m-0">{{$material}} Y  {{$color}}</p>
                                                      <p class="card-text m-0">{{$pista}}</p>
                                                  </div>
                                                @endif

                                                @php  $desp = 0; $lbs_c = 0; @endphp
                                                @foreach ($result['prodc_super'] as $item)
                                                  @if($item->mq_corte==8)
                                                    @php 
                                                      $desp   = $desp+$item->desperdicio;
                                                      $lbs_c  = $lbs_c+$item->lbs_corte;
                                                    @endphp
                                                  @endif
                                                @endforeach
                                                  <h5 class="card-title card-h4">
                                                    PRODUCCION {{$lbs_c}} Lbs
                                                  </h5>
                                                  <div class="card-footer">
                                                     <p class="card-text m-0">DESPERDICIO {{$desp}} Lbs</p>
                                                  </div>
                                          </div>
                                        </div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                          </table>
                        </div>
                    </div>
                  </div>  
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
          <!-- /.col -->
        </div>
      
        <!-- /.row -->

        <!-- Main row -->
        
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  @else 
  <div>Error</div>
  @endif 

@include('layouts.footer')

