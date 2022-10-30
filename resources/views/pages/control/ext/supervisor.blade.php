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
                  <span class="float-right text-sm text-danger">
                    <i class="fas fa-star"></i>
                  </span>
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
              <a href="#" data-toggle="modal" data-target="#AddEXTModalSP">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-primary elevation-1">
                    <i class="fas fa-dolly-flatbed"></i>
                  </span>
                  <div class="info-box-content">
                    <span class="info-box-text">Ingresar producción de Extrucción</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
               </a>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md">
              <div class="info-box">
                <div class="form-inline mx-3">
                  
                </div>
                <!-- /.info-box-content -->
              </div>

              <!-- /.info-box -->
            </div>
        </div>
        <!-- /.row -->

        <!-- zona word -->
        <div id="zona_word" class="row">
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
                        <table class='table table-bordered' border='0' >
                          <tbody>
                            <tr> 
                              <td colspan = 12>REPORTE DE EXTRUSION</td>
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
                        <table class='table table-bordered' border='0' CELLPADDING=0 CELLSPACING=0>
                          <tbody>
                            <tr>
                              <td >FECHA</td>
                              <td >".$fecha."</td>
                              <td  colspan = 4>OPERARIO</td>
                              <td >{{auth()->user()->name}}</td>
                              <td >TURNO</td>
                              <td ></td>
                              <td >GRUPO</td>
                              <td >".$grupo."</td>
                            </tr>
                            <tr > 
                              <td colspan = 6 >
                              </td>
                              <td colspan = 6 ></td>
                            </tr>
                            <tr  >
                              <td  colspan = 6 ></td>
                              <td   rowspan = 2 >
                                PRODUCCION <br>
                                DEL DIA
                              </td>
                              <td  colspan = 2>DESP.</td>
                              <td  colspan = 2>DURO</td>
                            </tr>
                            <tr> 
                              <td >MAQ.</td>
                              <td  colspan = 5>DETALLES DE CLIENTE</td>
                              <td >B/D</td>
                              <td >A/D</td>
                              <td >B/D</td>
                              <td >A/D</td>
                            </tr>
                            <tr> 
                              <td>1</td>
                              <td  colspan = 5>
                                  {{-- dd($result['prodc_super']) --}}
                                        @php 
                                          $total_lbs  = 0;
                                          $total_bd   = 0; 
                                          $total_ad   = 0;
                                          $total_dbd  = 0;
                                          $total_dad  = 0;
                                        @endphp
                                        @foreach ($result['prodc_super'] as $item)
                                          @if($item->mq_ext==1)
                                            @php 

                                            $total_lbs  = $total_lbs+$item->lbs_ext; 
                                            $total_bd   = $total_bd+$item->desperdicio_bd; 
                                            $total_ad   = $total_ad+$item->desperdicio_ad;
                                            $total_dbd  = $total_dbd+$item->desperdicio_dbd;
                                            $total_dad  = $total_dad+$item->desperdicio_dad;

                                            @endphp
                                          @endif
                                        @endforeach
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3></h3>
                                    <p></p>
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <div class="icon">
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <a href="#" class="small-box-footer" data-toggle="modal" data-target="#ext1">
                                    Ver detalles <i class="fas fa-arrow-circle-right"></i>
                                  </a>
                                </div>
                              </td>
                              <td>{{$total_lbs}} LB</td>
                              <td>{{$total_bd}} LB</td>
                              <td>{{$total_ad}} LB</td>
                              <td>{{$total_dbd}} LB</td>
                              <td>{{$total_dad}} LB</td>
                            </tr>
                            <tr> 
                              <td  >2</td>
                              <td  colspan = 5>
                                        @php 
                                          $total_lbs  = 0;
                                          $total_bd   = 0; 
                                          $total_ad   = 0;
                                          $total_dbd  = 0;
                                          $total_dad  = 0;
                                        @endphp
                                        @foreach ($result['prodc_super'] as $item)
                                          @if($item->mq_ext==2)
                                            @php 

                                            $total_lbs  = $total_lbs+$item->lbs_ext; 
                                            $total_bd   = $total_bd+$item->desperdicio_bd; 
                                            $total_ad   = $total_ad+$item->desperdicio_ad;
                                            $total_dbd  = $total_dbd+$item->desperdicio_dbd;
                                            $total_dad  = $total_dad+$item->desperdicio_dad;

                                            @endphp
                                         
                                          @endif
                                        @endforeach
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3></h3>
                                    <p></p>
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <div class="icon">
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <a href="#" class="small-box-footer" data-toggle="modal" data-target="#ext2">
                                    Ver detalles <i class="fas fa-arrow-circle-right"></i>
                                  </a>
                                </div>
                              </td>
                              <td>{{$total_lbs}} LB</td>
                              <td>{{$total_bd}} LB</td>
                              <td>{{$total_ad}} LB</td>
                              <td>{{$total_dbd}} LB</td>
                              <td>{{$total_dad}} LB</td>
                            </tr>
                            <tr> 
                              <td >3</td>
                              <td colspan = 5>
                                        @php 
                                          $total_lbs  = 0;
                                          $total_bd   = 0; 
                                          $total_ad   = 0;
                                          $total_dbd  = 0;
                                          $total_dad  = 0;
                                        @endphp
                                        @foreach ($result['prodc_super'] as $item)
                                          @if($item->mq_ext==3)
                                            @php 

                                            $total_lbs  = $total_lbs+$item->lbs_ext; 
                                            $total_bd   = $total_bd+$item->desperdicio_bd; 
                                            $total_ad   = $total_ad+$item->desperdicio_ad;
                                            $total_dbd  = $total_dbd+$item->desperdicio_dbd;
                                            $total_dad  = $total_dad+$item->desperdicio_dad;

                                            @endphp
                                          @endif
                                        @endforeach
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3></h3>
                                    <p></p>
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <div class="icon">
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <a href="#" class="small-box-footer" data-toggle="modal" data-target="#ext3">
                                    Ver detalles <i class="fas fa-arrow-circle-right"></i>
                                  </a>
                                </div>
                              </td>
                              <td>{{$total_lbs}} LB</td>
                              <td>{{$total_bd}} LB</td>
                              <td>{{$total_ad}} LB</td>
                              <td>{{$total_dbd}} LB</td>
                              <td>{{$total_dad}} LB</td>
                            </tr>
                            <tr> 
                              <td>4</td>
                              <td  colspan = 5>
                                        @php 
                                          $total_lbs  = 0;
                                          $total_bd   = 0; 
                                          $total_ad   = 0;
                                          $total_dbd  = 0;
                                          $total_dad  = 0;
                                        @endphp
                                        @foreach ($result['prodc_super'] as $item)
                                          @if($item->mq_ext==4)
                                            @php 

                                            $total_lbs  = $total_lbs+$item->lbs_ext; 
                                            $total_bd   = $total_bd+$item->desperdicio_bd; 
                                            $total_ad   = $total_ad+$item->desperdicio_ad;
                                            $total_dbd  = $total_dbd+$item->desperdicio_dbd;
                                            $total_dad  = $total_dad+$item->desperdicio_dad;

                                            @endphp
                                          @endif
                                        @endforeach
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3></h3>
                                    <p></p>
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <div class="icon">
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <a href="#" class="small-box-footer" data-toggle="modal" data-target="#ext4">
                                    Ver detalles <i class="fas fa-arrow-circle-right"></i>
                                  </a>
                                </div>
                              </td>
                              <td>{{$total_lbs}} LB</td>
                              <td>{{$total_bd}} LB</td>
                              <td>{{$total_ad}} LB</td>
                              <td>{{$total_dbd}} LB</td>
                              <td>{{$total_dad}} LB</td>
                            </tr>
                            <tr> 
                              <td>5</td>
                              <td colspan = 5>
                                      @php 
                                          $total_lbs  = 0;
                                          $total_bd   = 0; 
                                          $total_ad   = 0;
                                          $total_dbd  = 0;
                                          $total_dad  = 0;
                                        @endphp
                                        @foreach ($result['prodc_super'] as $item)
                                          @if($item->mq_ext==5)
                                            @php 

                                            $total_lbs  = $total_lbs+$item->lbs_ext; 
                                            $total_bd   = $total_bd+$item->desperdicio_bd; 
                                            $total_ad   = $total_ad+$item->desperdicio_ad;
                                            $total_dbd  = $total_dbd+$item->desperdicio_dbd;
                                            $total_dad  = $total_dad+$item->desperdicio_dad;

                                            @endphp
                                          @endif
                                        @endforeach
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3></h3>
                                    <p></p>
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <div class="icon">
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <a href="#" class="small-box-footer" data-toggle="modal" data-target="#ext5">
                                    Ver detalles <i class="fas fa-arrow-circle-right"></i>
                                  </a>
                                </div>
                              </td>
                              <td>{{$total_lbs}} LB</td>
                              <td>{{$total_bd}} LB</td>
                              <td>{{$total_ad}} LB</td>
                              <td>{{$total_dbd}} LB</td>
                              <td>{{$total_dad}} LB</td>
                            </tr>
                            <tr> 
                              <td>6</td>
                              <td colspan = 5>
                                @php 
                                          $total_lbs  = 0;
                                          $total_bd   = 0; 
                                          $total_ad   = 0;
                                          $total_dbd  = 0;
                                          $total_dad  = 0;
                                        @endphp
                                        @foreach ($result['prodc_super'] as $item)
                                          @if($item->mq_ext==6)
                                            @php 

                                            $total_lbs  = $total_lbs+$item->lbs_ext; 
                                            $total_bd   = $total_bd+$item->desperdicio_bd; 
                                            $total_ad   = $total_ad+$item->desperdicio_ad;
                                            $total_dbd  = $total_dbd+$item->desperdicio_dbd;
                                            $total_dad  = $total_dad+$item->desperdicio_dad;

                                            @endphp
                                          @endif
                                        @endforeach
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3></h3>
                                    <p></p>
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <div class="icon">
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <a href="#" class="small-box-footer" data-toggle="modal" data-target="#ext6">
                                    Ver detalles <i class="fas fa-arrow-circle-right"></i>
                                  </a>
                                </div>
                              </td>
                              <td>{{$total_lbs}} LB</td>
                              <td>{{$total_bd}} LB</td>
                              <td>{{$total_ad}} LB</td>
                              <td>{{$total_dbd}} LB</td>
                              <td>{{$total_dad}} LB</td>
                            </tr>
                            <tr> 
                              <td>7</td>
                              <td colspan = 5>
                                @php 
                                          $total_lbs  = 0;
                                          $total_bd   = 0; 
                                          $total_ad   = 0;
                                          $total_dbd  = 0;
                                          $total_dad  = 0;
                                        @endphp
                                        @foreach ($result['prodc_super'] as $item)
                                          @if($item->mq_ext==7)
                                            @php 

                                            $total_lbs  = $total_lbs+$item->lbs_ext; 
                                            $total_bd   = $total_bd+$item->desperdicio_bd; 
                                            $total_ad   = $total_ad+$item->desperdicio_ad;
                                            $total_dbd  = $total_dbd+$item->desperdicio_dbd;
                                            $total_dad  = $total_dad+$item->desperdicio_dad;

                                            @endphp
                                          @endif
                                        @endforeach
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3></h3>
                                    <p></p>
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <div class="icon">
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <a href="#" class="small-box-footer" data-toggle="modal" data-target="#ext7">
                                    Ver detalles <i class="fas fa-arrow-circle-right"></i>
                                  </a>
                                </div>
                              </td>
                              <td>{{$total_lbs}} LB</td>
                              <td>{{$total_bd}} LB</td>
                              <td>{{$total_ad}} LB</td>
                              <td>{{$total_dbd}} LB</td>
                              <td>{{$total_dad}} LB</td>
                            </tr>
                            <tr> 
                              <td>8</td>
                              <td colspan = 5>
                                      @php 
                                          $total_lbs  = 0;
                                          $total_bd   = 0; 
                                          $total_ad   = 0;
                                          $total_dbd  = 0;
                                          $total_dad  = 0;
                                        @endphp
                                        @foreach ($result['prodc_super'] as $item)
                                          @if($item->mq_ext==8)
                                            @php 

                                            $total_lbs  = $total_lbs+$item->lbs_ext; 
                                            $total_bd   = $total_bd+$item->desperdicio_bd; 
                                            $total_ad   = $total_ad+$item->desperdicio_ad;
                                            $total_dbd  = $total_dbd+$item->desperdicio_dbd;
                                            $total_dad  = $total_dad+$item->desperdicio_dad;

                                            @endphp
                                          @endif
                                        @endforeach
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3></h3>
                                    <p></p>
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <div class="icon">
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <a href="#" class="small-box-footer" data-toggle="modal" data-target="#ext8">
                                    Ver detalles <i class="fas fa-arrow-circle-right"></i>
                                  </a>
                                </div>
                              </td>
                              <td>{{$total_lbs}} LB</td>
                              <td>{{$total_bd}} LB</td>
                              <td>{{$total_ad}} LB</td>
                              <td>{{$total_dbd}} LB</td>
                              <td>{{$total_dad}} LB</td>
                            </tr>
                            <tr> 
                              <td>9</td>
                              <td colspan = 5>
                                @php 
                                          $total_lbs  = 0;
                                          $total_bd   = 0; 
                                          $total_ad   = 0;
                                          $total_dbd  = 0;
                                          $total_dad  = 0;
                                        @endphp
                                        @foreach ($result['prodc_super'] as $item)
                                          @if($item->mq_ext==9)
                                            @php 

                                            $total_lbs  = $total_lbs+$item->lbs_ext; 
                                            $total_bd   = $total_bd+$item->desperdicio_bd; 
                                            $total_ad   = $total_ad+$item->desperdicio_ad;
                                            $total_dbd  = $total_dbd+$item->desperdicio_dbd;
                                            $total_dad  = $total_dad+$item->desperdicio_dad;

                                            @endphp
                                          @endif
                                        @endforeach
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3></h3>
                                    <p></p>
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <div class="icon">
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <a href="#" class="small-box-footer" data-toggle="modal" data-target="#ext9">
                                    Ver detalles <i class="fas fa-arrow-circle-right"></i>
                                  </a>
                                </div>
                              </td>
                              <td>{{$total_lbs}} LB</td>
                              <td>{{$total_bd}} LB</td>
                              <td>{{$total_ad}} LB</td>
                              <td>{{$total_dbd}} LB</td>
                              <td>{{$total_dad}} LB</td>
                            </tr>
                            <tr> 
                              <td>10</td>
                              <td colspan = 5>
                                        @php 
                                          $total_lbs  = 0;
                                          $total_bd   = 0; 
                                          $total_ad   = 0;
                                          $total_dbd  = 0;
                                          $total_dad  = 0;
                                        @endphp
                                        @foreach ($result['prodc_super'] as $item)
                                          @if($item->mq_ext==10)
                                            @php 

                                            $total_lbs  = $total_lbs+$item->lbs_ext; 
                                            $total_bd   = $total_bd+$item->desperdicio_bd; 
                                            $total_ad   = $total_ad+$item->desperdicio_ad;
                                            $total_dbd  = $total_dbd+$item->desperdicio_dbd;
                                            $total_dad  = $total_dad+$item->desperdicio_dad;

                                            @endphp
                                          @endif
                                        @endforeach
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3></h3>
                                    <p></p>
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <div class="icon">
                                    <i class="fas fa-dolly-flatbed"></i>
                                  </div>
                                  <a href="#" class="small-box-footer" data-toggle="modal" data-target="#ext10">
                                    Ver detalles <i class="fas fa-arrow-circle-right"></i>
                                  </a>
                                </div>
                              </td>
                              <td>{{$total_lbs}} LB</td>
                              <td>{{$total_bd}} LB</td>
                              <td>{{$total_ad}} LB</td>
                              <td>{{$total_dbd}} LB</td>
                              <td>{{$total_dad}} LB</td>
                            </tr>
                            <tr>
                              <td colspan=5></td>
                              <td>Total</td>
                                        @php 
                                          $total_lbs  = 0;
                                          $total_bd   = 0; 
                                          $total_ad   = 0;
                                          $total_dbd  = 0;
                                          $total_dad  = 0;
                                        @endphp
                                        @foreach ($result['prodc_super'] as $item)
                                         
                                            @php 

                                            $total_lbs  = $total_lbs+$item->lbs_ext; 
                                            $total_bd   = $total_bd+$item->desperdicio_bd; 
                                            $total_ad   = $total_ad+$item->desperdicio_ad;
                                            $total_dbd  = $total_dbd+$item->desperdicio_dbd;
                                            $total_dad  = $total_dad+$item->desperdicio_dad;

                                            @endphp
                                          
                                        @endforeach
                              <td>{{$total_lbs}} LB</td>
                              <td>{{$total_bd}} LB</td>
                              <td>{{$total_ad}} LB</td>
                              <td>{{$total_dbd}} LB</td>
                              <td>{{$total_dad}} LB</td>
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
          <!-- /.col -->
        </div>
      
        <!-- /.row -->

        <!-- Main row -->
        
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- modal -->
  <div class="modal fade" id="ext1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro de producción</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">

            {{-- dd($result['prodc_super']) --}}
                           <div class="col-2">
                            <div class="card text-white bg-info mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">Nº DE ORDEN</p>
                              <p class="card-text">CLIENTE</p>
                              <p class="card-text">MEDIDA Y GG</p>
                              <p class="card-text">MAT. Y COLOR</p>
                              <p class="card-text">LBS EXTRUIDAS</p>
                              <p class="card-text">DESPERDICIO</p>
                              </div>
                            </div>
                          </div>             
                        @foreach ($result['prodc_super'] as $item)
                          @php  
                                $material ="";
                                if($item->material_bd){
                                  $material = "BD"; 
                                }else{
                                  $material = "AD";
                                }
                                $tipo_desp ="";
                                $desp = "";

                                if(($item->desperdicio_bd == 0) && ($item->desperdicio_dbd == 0)){
                                  $tipo_desp = "AD";
                                  if($item->desperdicio_ad == 0){
                                     $desp = $item->desperdicio_dad;
                                  }else{
                                     $desp = $item->desperdicio_ad; 
                                  }
                                }else{
                                  $tipo_desp = "BD";
                                  if($item->desperdicio_bd == 0){
                                     $desp = $item->desperdicio_dbd;
                                  }else{
                                     $desp = $item->desperdicio_bd; 
                                  }
                                }

                          @endphp
                          @if($item->mq_ext==1)
                          <div class="col-2">
                            <div class="card text-white bg-primary mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">{{$item->n_orden}}</p>
                              <p class="card-text">{{$item->nombre}} </p>
                              <p class="card-text">{{$item->ancho}} y {{$item->calibre}}</p>
                              <p class="card-text">{{$material}} y {{$item->color_material}}</p>
                              <p class="card-text">{{$item->lbs_ext}} Lbs</p>
                              <p class="card-text">{{$desp}} Lbs {{$tipo_desp}}</p>
                              </div>
                            </div>
                          </div>
                          @endif
                        @endforeach
            </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ext2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro de producción</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">

            {{-- dd($result['prodc_super']) --}}
                           <div class="col-2">
                            <div class="card text-white bg-info mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">Nº DE ORDEN</p>
                              <p class="card-text">CLIENTE</p>
                              <p class="card-text">MEDIDA Y GG</p>
                              <p class="card-text">MAT. Y COLOR</p>
                              <p class="card-text">LBS EXTRUIDAS</p>
                              <p class="card-text">DESPERDICIO</p>
                              </div>
                            </div>
                          </div>             
                        @foreach ($result['prodc_super'] as $item)
                          @php  
                                $material ="";
                                if($item->material_bd){
                                  $material = "BD"; 
                                }else{
                                  $material = "AD";
                                }
                                $tipo_desp ="";
                                $desp = "";

                                if(($item->desperdicio_bd == 0) && ($item->desperdicio_dbd == 0)){
                                  $tipo_desp = "AD";
                                  if($item->desperdicio_ad == 0){
                                     $desp = $item->desperdicio_dad;
                                  }else{
                                     $desp = $item->desperdicio_ad; 
                                  }
                                }else{
                                  $tipo_desp = "BD";
                                  if($item->desperdicio_bd == 0){
                                     $desp = $item->desperdicio_dbd;
                                  }else{
                                     $desp = $item->desperdicio_bd; 
                                  }
                                }

                          @endphp
                          @if($item->mq_ext==2)
                          <div class="col-2">
                            <div class="card text-white bg-primary mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">{{$item->n_orden}}</p>
                              <p class="card-text">{{$item->nombre}} </p>
                              <p class="card-text">{{$item->ancho}} y {{$item->calibre}}</p>
                              <p class="card-text">{{$material}} y {{$item->color_material}}</p>
                              <p class="card-text">{{$item->lbs_ext}} Lbs</p>
                              <p class="card-text">{{$desp}} Lbs {{$tipo_desp}}</p>
                              </div>
                            </div>
                          </div>
                          @endif
                        @endforeach
            </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ext3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro de producción</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">

            {{-- dd($result['prodc_super']) --}}
                           <div class="col-2">
                            <div class="card text-white bg-info mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">Nº DE ORDEN</p>
                              <p class="card-text">CLIENTE</p>
                              <p class="card-text">MEDIDA Y GG</p>
                              <p class="card-text">MAT. Y COLOR</p>
                              <p class="card-text">LBS EXTRUIDAS</p>
                              <p class="card-text">DESPERDICIO</p>
                              </div>
                            </div>
                          </div>             
                        @foreach ($result['prodc_super'] as $item)
                            @php  
                                $material ="";
                                if($item->material_bd){
                                  $material = "BD"; 
                                }else{
                                  $material = "AD";
                                }
                                $tipo_desp ="";
                                $desp = "";

                                if(($item->desperdicio_bd == 0) && ($item->desperdicio_dbd == 0)){
                                  $tipo_desp = "AD";
                                  if($item->desperdicio_ad == 0){
                                     $desp = $item->desperdicio_dad;
                                  }else{
                                     $desp = $item->desperdicio_ad; 
                                  }
                                }else{
                                  $tipo_desp = "BD";
                                  if($item->desperdicio_bd == 0){
                                     $desp = $item->desperdicio_dbd;
                                  }else{
                                     $desp = $item->desperdicio_bd; 
                                  }
                                }

                          @endphp
                          @if($item->mq_ext==3)
                          <div class="col-2">
                            <div class="card text-white bg-primary mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">{{$item->n_orden}}</p>
                              <p class="card-text">{{$item->nombre}} </p>
                              <p class="card-text">{{$item->ancho}} y {{$item->calibre}}</p>
                              <p class="card-text">{{$material}} y {{$item->color_material}}</p>
                              <p class="card-text">{{$item->lbs_ext}} Lbs</p>
                              <p class="card-text">{{$desp}} Lbs {{$tipo_desp}}</p>
                              </div>
                            </div>
                          </div>
                          @endif
                        @endforeach
            </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ext4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro de producción</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">

            {{-- dd($result['prodc_super']) --}}
                           <div class="col-2">
                            <div class="card text-white bg-info mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">Nº DE ORDEN</p>
                              <p class="card-text">CLIENTE</p>
                              <p class="card-text">MEDIDA Y GG</p>
                              <p class="card-text">MAT. Y COLOR</p>
                              <p class="card-text">LBS EXTRUIDAS</p>
                              <p class="card-text">DESPERDICIO</p>
                              </div>
                            </div>
                          </div>             
                        @foreach ($result['prodc_super'] as $item)
                            @php  
                                $material ="";
                                if($item->material_bd){
                                  $material = "BD"; 
                                }else{
                                  $material = "AD";
                                }
                                $tipo_desp ="";
                                $desp = "";

                                if(($item->desperdicio_bd == 0) && ($item->desperdicio_dbd == 0)){
                                  $tipo_desp = "AD";
                                  if($item->desperdicio_ad == 0){
                                     $desp = $item->desperdicio_dad;
                                  }else{
                                     $desp = $item->desperdicio_ad; 
                                  }
                                }else{
                                  $tipo_desp = "BD";
                                  if($item->desperdicio_bd == 0){
                                     $desp = $item->desperdicio_dbd;
                                  }else{
                                     $desp = $item->desperdicio_bd; 
                                  }
                                }

                          @endphp
                          @if($item->mq_ext==4)
                          <div class="col-2">
                            <div class="card text-white bg-primary mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">{{$item->n_orden}}</p>
                              <p class="card-text">{{$item->nombre}} </p>
                              <p class="card-text">{{$item->ancho}} y {{$item->calibre}}</p>
                              <p class="card-text">{{$material}} y {{$item->color_material}}</p>
                              <p class="card-text">{{$item->lbs_ext}} Lbs</p>
                              <p class="card-text">{{$desp}} Lbs {{$tipo_desp}}</p>
                              </div>
                            </div>
                          </div>
                          @endif
                        @endforeach
            </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ext5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro de producción</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">

            {{-- dd($result['prodc_super']) --}}
                           <div class="col-2">
                            <div class="card text-white bg-info mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">Nº DE ORDEN</p>
                              <p class="card-text">CLIENTE</p>
                              <p class="card-text">MEDIDA Y GG</p>
                              <p class="card-text">MAT. Y COLOR</p>
                              <p class="card-text">LBS EXTRUIDAS</p>
                              <p class="card-text">DESPERDICIO</p>
                              </div>
                            </div>
                          </div>             
                        @foreach ($result['prodc_super'] as $item)
                            @php  
                                $material ="";
                                if($item->material_bd){
                                  $material = "BD"; 
                                }else{
                                  $material = "AD";
                                }
                                $tipo_desp ="";
                                $desp = "";

                                if(($item->desperdicio_bd == 0) && ($item->desperdicio_dbd == 0)){
                                  $tipo_desp = "AD";
                                  if($item->desperdicio_ad == 0){
                                     $desp = $item->desperdicio_dad;
                                  }else{
                                     $desp = $item->desperdicio_ad; 
                                  }
                                }else{
                                  $tipo_desp = "BD";
                                  if($item->desperdicio_bd == 0){
                                     $desp = $item->desperdicio_dbd;
                                  }else{
                                     $desp = $item->desperdicio_bd; 
                                  }
                                }

                          @endphp
                          @if($item->mq_ext==5)
                          <div class="col-2">
                            <div class="card text-white bg-primary mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">{{$item->n_orden}}</p>
                              <p class="card-text">{{$item->nombre}} </p>
                              <p class="card-text">{{$item->ancho}} y {{$item->calibre}}</p>
                              <p class="card-text">{{$material}} y {{$item->color_material}}</p>
                              <p class="card-text">{{$item->lbs_ext}} Lbs</p>
                              <p class="card-text">{{$desp}} Lbs {{$tipo_desp}}</p>
                              </div>
                            </div>
                          </div>
                          @endif
                        @endforeach
            </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ext6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro de producción</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">

            {{-- dd($result['prodc_super']) --}}
                           <div class="col-2">
                            <div class="card text-white bg-info mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">Nº DE ORDEN</p>
                              <p class="card-text">CLIENTE</p>
                              <p class="card-text">MEDIDA Y GG</p>
                              <p class="card-text">MAT. Y COLOR</p>
                              <p class="card-text">LBS EXTRUIDAS</p>
                              <p class="card-text">DESPERDICIO</p>
                              </div>
                            </div>
                          </div>             
                        @foreach ($result['prodc_super'] as $item)
                            @php  
                                $material ="";
                                if($item->material_bd){
                                  $material = "BD"; 
                                }else{
                                  $material = "AD";
                                }
                                $tipo_desp ="";
                                $desp = "";

                                if(($item->desperdicio_bd == 0) && ($item->desperdicio_dbd == 0)){
                                  $tipo_desp = "AD";
                                  if($item->desperdicio_ad == 0){
                                     $desp = $item->desperdicio_dad;
                                  }else{
                                     $desp = $item->desperdicio_ad; 
                                  }
                                }else{
                                  $tipo_desp = "BD";
                                  if($item->desperdicio_bd == 0){
                                     $desp = $item->desperdicio_dbd;
                                  }else{
                                     $desp = $item->desperdicio_bd; 
                                  }
                                }

                          @endphp
                          @if($item->mq_ext==6)
                          <div class="col-2">
                            <div class="card text-white bg-primary mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">{{$item->n_orden}}</p>
                              <p class="card-text">{{$item->nombre}} </p>
                              <p class="card-text">{{$item->ancho}} y {{$item->calibre}}</p>
                              <p class="card-text">{{$material}} y {{$item->color_material}}</p>
                              <p class="card-text">{{$item->lbs_ext}} Lbs</p>
                              <p class="card-text">{{$desp}} Lbs {{$tipo_desp}}</p>
                              </div>
                            </div>
                          </div>
                          @endif
                        @endforeach
            </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ext7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro de producción</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">

            {{-- dd($result['prodc_super']) --}}
                           <div class="col-2">
                            <div class="card text-white bg-info mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">Nº DE ORDEN</p>
                              <p class="card-text">CLIENTE</p>
                              <p class="card-text">MEDIDA Y GG</p>
                              <p class="card-text">MAT. Y COLOR</p>
                              <p class="card-text">LBS EXTRUIDAS</p>
                              <p class="card-text">DESPERDICIO</p>
                              </div>
                            </div>
                          </div>             
                        @foreach ($result['prodc_super'] as $item)
                            @php  
                                $material ="";
                                if($item->material_bd){
                                  $material = "BD"; 
                                }else{
                                  $material = "AD";
                                }
                                $tipo_desp ="";
                                $desp = "";

                                if(($item->desperdicio_bd == 0) && ($item->desperdicio_dbd == 0)){
                                  $tipo_desp = "AD";
                                  if($item->desperdicio_ad == 0){
                                     $desp = $item->desperdicio_dad;
                                  }else{
                                     $desp = $item->desperdicio_ad; 
                                  }
                                }else{
                                  $tipo_desp = "BD";
                                  if($item->desperdicio_bd == 0){
                                     $desp = $item->desperdicio_dbd;
                                  }else{
                                     $desp = $item->desperdicio_bd; 
                                  }
                                }

                          @endphp
                          @if($item->mq_ext==7)
                          <div class="col-2">
                            <div class="card text-white bg-primary mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">{{$item->n_orden}}</p>
                              <p class="card-text">{{$item->nombre}} </p>
                              <p class="card-text">{{$item->ancho}} y {{$item->calibre}}</p>
                              <p class="card-text">{{$material}} y {{$item->color_material}}</p>
                              <p class="card-text">{{$item->lbs_ext}} Lbs</p>
                              <p class="card-text">{{$desp}} Lbs {{$tipo_desp}}</p>
                              </div>
                            </div>
                          </div>
                          @endif
                        @endforeach
            </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ext8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro de producción</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">

            {{-- dd($result['prodc_super']) --}}
                           <div class="col-2">
                            <div class="card text-white bg-info mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">Nº DE ORDEN</p>
                              <p class="card-text">CLIENTE</p>
                              <p class="card-text">MEDIDA Y GG</p>
                              <p class="card-text">MAT. Y COLOR</p>
                              <p class="card-text">LBS EXTRUIDAS</p>
                              <p class="card-text">DESPERDICIO</p>
                              </div>
                            </div>
                          </div>             
                        @foreach ($result['prodc_super'] as $item)
                            @php  
                                $material ="";
                                if($item->material_bd){
                                  $material = "BD"; 
                                }else{
                                  $material = "AD";
                                }
                                $tipo_desp ="";
                                $desp = "";

                                if(($item->desperdicio_bd == 0) && ($item->desperdicio_dbd == 0)){
                                  $tipo_desp = "AD";
                                  if($item->desperdicio_ad == 0){
                                     $desp = $item->desperdicio_dad;
                                  }else{
                                     $desp = $item->desperdicio_ad; 
                                  }
                                }else{
                                  $tipo_desp = "BD";
                                  if($item->desperdicio_bd == 0){
                                     $desp = $item->desperdicio_dbd;
                                  }else{
                                     $desp = $item->desperdicio_bd; 
                                  }
                                }

                          @endphp
                          @if($item->mq_ext==8)
                          <div class="col-2">
                            <div class="card text-white bg-primary mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">{{$item->n_orden}}</p>
                              <p class="card-text">{{$item->nombre}} </p>
                              <p class="card-text">{{$item->ancho}} y {{$item->calibre}}</p>
                              <p class="card-text">{{$material}} y {{$item->color_material}}</p>
                              <p class="card-text">{{$item->lbs_ext}} Lbs</p>
                              <p class="card-text">{{$desp}} Lbs {{$tipo_desp}}</p>
                              </div>
                            </div>
                          </div>
                          @endif
                        @endforeach
            </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ext9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro de producción</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">

            {{-- dd($result['prodc_super']) --}}
                           <div class="col-2">
                            <div class="card text-white bg-info mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">Nº DE ORDEN</p>
                              <p class="card-text">CLIENTE</p>
                              <p class="card-text">MEDIDA Y GG</p>
                              <p class="card-text">MAT. Y COLOR</p>
                              <p class="card-text">LBS EXTRUIDAS</p>
                              <p class="card-text">DESPERDICIO</p>
                              </div>
                            </div>
                          </div>             
                        @foreach ($result['prodc_super'] as $item)
                            @php  
                                $material ="";
                                if($item->material_bd){
                                  $material = "BD"; 
                                }else{
                                  $material = "AD";
                                }
                                $tipo_desp ="";
                                $desp = "";

                                if(($item->desperdicio_bd == 0) && ($item->desperdicio_dbd == 0)){
                                  $tipo_desp = "AD";
                                  if($item->desperdicio_ad == 0){
                                     $desp = $item->desperdicio_dad;
                                  }else{
                                     $desp = $item->desperdicio_ad; 
                                  }
                                }else{
                                  $tipo_desp = "BD";
                                  if($item->desperdicio_bd == 0){
                                     $desp = $item->desperdicio_dbd;
                                  }else{
                                     $desp = $item->desperdicio_bd; 
                                  }
                                }

                          @endphp
                          @if($item->mq_ext==9)
                          <div class="col-2">
                            <div class="card text-white bg-primary mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">{{$item->n_orden}}</p>
                              <p class="card-text">{{$item->nombre}} </p>
                              <p class="card-text">{{$item->ancho}} y {{$item->calibre}}</p>
                              <p class="card-text">{{$material}} y {{$item->color_material}}</p>
                              <p class="card-text">{{$item->lbs_ext}} Lbs</p>
                              <p class="card-text">{{$desp}} Lbs {{$tipo_desp}}</p>
                              </div>
                            </div>
                          </div>
                          @endif
                        @endforeach
            </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ext10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro de producción</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">

            {{-- dd($result['prodc_super']) --}}
                           <div class="col-2">
                            <div class="card text-white bg-info mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">Nº DE ORDEN</p>
                              <p class="card-text">CLIENTE</p>
                              <p class="card-text">MEDIDA Y GG</p>
                              <p class="card-text">MAT. Y COLOR</p>
                              <p class="card-text">LBS EXTRUIDAS</p>
                              <p class="card-text">DESPERDICIO</p>
                              </div>
                            </div>
                          </div>             
                        @foreach ($result['prodc_super'] as $item)
                            @php  
                                $material ="";
                                if($item->material_bd){
                                  $material = "BD"; 
                                }else{
                                  $material = "AD";
                                }
                                $tipo_desp ="";
                                $desp = "";

                                if(($item->desperdicio_bd == 0) && ($item->desperdicio_dbd == 0)){
                                  $tipo_desp = "AD";
                                  if($item->desperdicio_ad == 0){
                                     $desp = $item->desperdicio_dad;
                                  }else{
                                     $desp = $item->desperdicio_ad; 
                                  }
                                }else{
                                  $tipo_desp = "BD";
                                  if($item->desperdicio_bd == 0){
                                     $desp = $item->desperdicio_dbd;
                                  }else{
                                     $desp = $item->desperdicio_bd; 
                                  }
                                }

                          @endphp
                          @if($item->mq_ext==10)
                          <div class="col-2">
                            <div class="card text-white bg-primary mb-3">
                              <div class="card-header"></div>
                              <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">{{$item->n_orden}}</p>
                              <p class="card-text">{{$item->nombre}} </p>
                              <p class="card-text">{{$item->ancho}} y {{$item->calibre}}</p>
                              <p class="card-text">{{$material}} y {{$item->color_material}}</p>
                              <p class="card-text">{{$item->lbs_ext}} Lbs</p>
                              <p class="card-text">{{$desp}} Lbs {{$tipo_desp}}</p>
                              </div>
                            </div>
                          </div>
                          @endif
                        @endforeach
            </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!--aside class="control-sidebar control-sidebar-dark">
  </aside-->
  @else 
  <div>Error</div>
  @endif 

@include('layouts.footer')

