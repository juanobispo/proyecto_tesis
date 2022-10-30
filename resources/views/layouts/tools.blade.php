 @if( auth()->user()->role == 0)
  <div class="row">
        <div class="col-12 col-sm-6 col-md">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Empleados</span>
              <span class="info-box-number">
                0
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1">
              <i class="fas fa-box"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Productos</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>
        
        <div class="col-12 col-sm-6 col-md">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Clientes</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md">
          <a href="#" data-toggle="modal" data-target="#basicModal">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1">
                <i class="fas fa-user-tag"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Asociar</span>
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
@elseif( auth()->user()->role == 1)
  
@elseif( auth()->user()->role == 2)
  <div class="row">
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>
        
        <div class="col-12 col-sm-6 col-md">
          <a href="#" data-toggle="modal" data-target="#AddEXTModal">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1">
                <i class="fas fa-dolly-flatbed"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Ingresar producción</span>
              </div>
              <!-- /.info-box-content -->
            </div>
           </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md">
          <a id="add_bovina_ext" href="#">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1">
                <i class="nav-icon fas fa-boxes"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Inventario de bovina</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>
          <!-- /.info-box -->
        </div>
  </div>
@elseif( auth()->user()->role == 3)
  <div class="row">
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>
        
        <div class="col-12 col-sm-6 col-md">
          <a href="#" data-toggle="modal" data-target="#AddEXTModal">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1">
                <i class="fas fa-dolly-flatbed"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Ingresar producción</span>
              </div>
              <!-- /.info-box-content -->
            </div>
           </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md">
          <a id="add_bovina_ext" href="#">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1">
                <i class="nav-icon fas fa-boxes"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Inventario de bovina</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>
          <!-- /.info-box -->
        </div>
  </div>
@elseif( auth()->user()->role == 4)
  <div class="row">
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>
        
        <div class="col-12 col-sm-6 col-md">
          <a href="#" data-toggle="modal" data-target="#AddEXTModal">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1">
                <i class="fas fa-dolly-flatbed"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Ingresar producción</span>
              </div>
              <!-- /.info-box-content -->
            </div>
           </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md">
          <a id="add_bovina_ext" href="#">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1">
                <i class="nav-icon fas fa-boxes"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Inventario de fardos</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>
          <!-- /.info-box -->
        </div>
  </div>

@else

@endif

