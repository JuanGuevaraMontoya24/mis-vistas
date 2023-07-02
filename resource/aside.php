<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img src="./dist/img/hh.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8;" />
    <span class="brand-text font-weight-light">Admin CRAI</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar"> 

    <!-- SidebarSearch Form -->
    <div class="form-inline mt-4">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
        <div class="input-group-append"><button class="btn btn-sidebar"><i class="fas fa-search fa-fw"></i></button></div>
      </div>
    </div> <!-- /.ujnwrcfpeiurfiebnrviubrfip -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column /*nav-flat*/" data-widget="treeview" role="menu" data-accordion="false">

     
          <!-- ESCRITORIO -->
          <li class="nav-item">
            <a href="index.php" class="nav-link pl-2" id="mEscritorio">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Escritorio
                <span class="right badge badge-danger">Home</span>
              </p>
            </a>
          </li>
     
      
          <!-- DATOS -->
          <li class="nav-item  b-radio-3px" id="bloc_datos_generales">
            <a href="#" class="nav-link pl-2" id="mAccesos">
              <i class="nav-icon fa-sharp fa-solid fa-city"></i>
              <p>
                CRAI-Tarapoto
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">5</span>
              </p>
            </a>
            <ul class="nav nav-treeview ">

              <!--  Datos Generales  -->
              <li class="nav-item ">
                <a href="" class="nav-link " id="ldatosgenerales">
                  <i class="nav-icon fa-solid fa-gears"></i>
                  <p> Datos Generales </p>
                </a>
              </li>

              <!--  Misión y Visión  -->
              <li class="nav-item ">
                <a href="" class="nav-link" id="lmision_vision">
                  <i class="nav-icon fa-solid fa-record-vinyl"></i>
                  <p> Misión y Visión </p>
                </a>
              </li>    

              <!--  reseña  -->
              <li class="nav-item ">
                <a href="" class="nav-link" id="lceo_resenia">
                  <i class="nav-icon fa-solid fa-globe"></i>
                  <p>Historia</p>
                </a>
              </li>  

              <!-- valores -->
              <li class="nav-item ">
                <a href="" class="nav-link" id="lvalores">
                  <i class="nav-icon fa-solid fa-lightbulb"></i>
                  <p>Valores</p>
                </a>
              </li>

            </ul>
          </li>
       
          <!-- ACCESOS -->
          <li class="nav-item  b-radio-3px" id="bloc_Accesos">
            <a href="#" class="nav-link pl-2" id="mAccesos">
              <i class="nav-icon fas fa-shield-alt"></i>
              <p>
                Accesos
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview ">

              <!-- Administradores del sistema -->
              <li class="nav-item ">
                <a href="AdmiS_l.php" class="nav-link ">
                  <i class="nav-icon fas fa-users-cog"></i>
                  <p>Administradores</p>
                </a>
              </li>

              <!-- Permisos de los usuarios del sistema -->
              <li class="nav-item ">
                <a href="permiso.php" class="nav-link" id="lPermiso">
                  <i class="nav-icon fas fa-lock"></i>
                  <p>Permisos</p>
                </a>
              </li>

            </ul>
          </li>
       
          <!-- PARTICIPANTES -->
          <li class="nav-item  b-radio-3px">
            <a href="#" class="nav-link pl-2">
              <i class="nav-icon fas fa-project-diagram"></i>
              <p>
                Participantes <i class="fas fa-angle-left right"></i> <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview ">

              <!-- Estudantes Inscritos -->
              <li class="nav-item ">
                <a href="estudiantes" class="nav-link" id="lEstudiantes">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Estudiantes </p>
                </a>
              </li>          
              
              <!-- Visitantes del CRAI -->
              <li class="nav-item ">
                <a href="visitantes" class="nav-link" id="lOtros">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Visitantes</p>
                </a>
              </li>

              <!-- Proveedores de libros -->
              <li class="nav-item ">
                <a href="./views/proveedores.php" class="nav-link" id="lOtros">
                  <i class="nav-icon fas fa-coins"></i>
                  <p>Proveedores</p>
                </a>
              </li>

            </ul>
          </li>

          <!-- Recursos -->
          <li class="nav-item  b-radio-3px" id="bloc_Recurso">
              <a href="Otros.php" class="nav-link pl-2" id="mRecurso">
                <i class="nav-icon fas fa-project-diagram"></i>
                <p> Recuros Adicionales </p>
              </a>
          </li>

          <!-- Papelera de Datos -->
          <li class="nav-item">
            <a href="papelera.php" class="nav-link pl-2" id="mPapelera">
              <i class="nav-icon fas fa-trash-alt"></i>
              <p>Papelera</p>
            </a>
          </li>
    
        <li class="nav-header">MÓDULOS</li>
        
          <!-- Módulo de Adquisición -->      
          <li class="nav-item " id="bloc_LogisticaPaquetes">
            <a href="#" class="nav-link bg-color-2c2c2c" id="mLogisticaPaquetes" style="padding-left: 7px;">
              <i class="nav-icon far fa-circle"></i>
              <p class="font-size-14px">ADQUISICIÓN<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">

                <!-- libros -->      
                <li class="nav-item  b-radio-3px" id="bloc_lPaquetes">
                  <a href="books" class="nav-link pl-2" id="mlPaquetes">
                  <i class="fa-solid fa-boxes-stacked"></i>
                    <p>Libros</p>
                  </a>
                </li>
              
                <!-- Categoría de libros -->      
                <li class="nav-item  b-radio-3px" id="bloc_ComprasGrano">
                  <a href="#" class="nav-link pl-2" id="mlPaquetesMedida">
                  <i class="fa-solid  fas fa-passport"></i>
                    <p>Categoría de Libros</p>
                  </a>
                </li>

                <!-- Bases de Datos -->      
                <li class="nav-item  b-radio-3px" id="bloc_lTours">
                  <a href="#" class="nav-link pl-2" id="mlTours">
                  <i class="fa-solid fas fa-sun"></i>
                    <p>Bases de Datos</p>
                  </a>
                </li>

            </ul>
          </li> 

          <!-- Módulo de Circulación -->   
          <li class="nav-item " id="bloc_ContableFinanciero">
            <a href="#" class="nav-link bg-color-2c2c2c" id="mContableFinanciero" style="padding-left: 7px;">
              <i class="nav-icon far fa-circle"></i>
              <p class="font-size-14px">CIRCULACIÓN<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">

                <!-- Préstamo de Libros -->
                <li class="nav-item ">
                  <a href="prestamo" class="nav-link pl-2" id="lPrestamo">
                    <i class="nav-icon fas fa-book-reader"></i>
                    <p>Préstamo</p>
                  </a>
                </li>
            
                <!-- Devolución de Libros -->
                <li class="nav-item ">
                  <a href="devolucion" class="nav-link pl-2" id="lOtroIngreso">             
                    <i class="nav-icon fas fa-book"></i>
                    <p>Devolución</p>
                  </a>
                </li>

                <!-- Renovación de Libros -->
                <li class="nav-item ">
                  <a href="renovacion" class="nav-link pl-2" id="lOtroIngreso">             
                    <i class="nav-icon fas fa-history"></i>
                    <p>Renovación</p>
                  </a>
                </li>

            </ul>
          </li>

          <!-- Módulo de Servicios -->   
          <li class="nav-item " id="bloc_ContableFinanciero">
            <a href="#" class="nav-link bg-color-2c2c2c" id="mContableFinanciero" style="padding-left: 7px;">
              <i class="nav-icon far fa-circle"></i>
              <p class="font-size-14px">SERVICIOS<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">

              
                <!-- Tutoría -->
                <li class="nav-item ">
                  <a href="TutoriaAC.php" class="nav-link pl-2" id="lPagoTrabajador">
                    <i class="nav-icon fa-solid fa-lightbulb"></i>
                    <p>Tutoría Académica</p>
                  </a>
                </li>
              

                <!-- Asesoría -->
                <li class="nav-item ">
                  <a href="AcesoriaAC.php" class="nav-link pl-2" id="lOtroIngreso">             
                    <i class="nav-icon fa-solid fa-lightbulb"></i>
                    <p>Asesoría Académica </p>
                  </a>
                </li>
            
              
            </ul>
          </li>

          <!-- Módulo de Reportes -->   
          <li class="nav-item " id="bloc_ContableFinanciero">
            <a href="#" class="nav-link bg-color-2c2c2c" id="mContableFinanciero" style="padding-left: 7px;">
              <i class="nav-icon far fa-circle"></i>
              <p class="font-size-14px">REPORTES<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">

              
                <!-- Reporte Prestamo -->
                <li class="nav-item ">
                  <a href="pago_trabajador.php" class="nav-link pl-2" id="lPagoTrabajador">
                    <i class="nav-icon fas fa-coins"></i>
                    <p>Préstamos</p>
                  </a>
                </li>
              

              
                <li class="nav-item ">
                  <a href="otro_ingreso.php" class="nav-link pl-2" id="lOtroIngreso">             
                    <i class="nav-icon fas fa-hand-holding-usdnav-icon fas fa-coins"></i>
                    <p>Servicios </p>
                  </a>
                </li>
            
              
            </ul>
          </li>

        <li class="nav-header">OTROS</li>

      </ul>      
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
