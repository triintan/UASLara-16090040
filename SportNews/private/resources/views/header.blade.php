<section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="#" class="logo"><b>News Sport</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="{{url('login')}}">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href=""><img src="template/assets/img/images.png" class="" width="60"></a></p>
              	  <h5 class="centered">Tri Intan</h5>
              	  	

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Postingan</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('post')}}">Tulis Postingan</a></li>
                          <li><a  href="{{url('list-post')}}">Lihat Postingan</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="{{url('profil')}}" >
                          <i class="fa fa-user"></i>
                          <span>Profil</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{url('pengunjung')}}" >
                          <i class="fa fa-book"></i>
                          <span>Lihat Data Pengunjung</span>
                      </a>
                  </li>

                      <li class="sub-menu">
                      <a href="{{url('aktivitas')}}" >
                          <i class="fa fa-book"></i>
                          <span>Log Aktivitas</span>
                      </a>
                  </li>
              </ul>
          </div>

      </aside>

      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

      <!--main content end-->
      <!--footer start-->
       <!-- <footer class="site-footer">
          <div class="text-center">
              News Sport
          </div>
      </footer> -->
      <!--footer end -->
  </section>