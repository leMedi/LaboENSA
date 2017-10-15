    <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <div class="sidenav-header-inner text-center"><img src="img/avatar-1.jpg" alt="person" class="img-fluid rounded-circle">
                <h2 class="h5 text-uppercase">{{ $user->first_name . ' ' . $user->last_name }}</h2>
                <span class="text-uppercase">{{ $user->email }}</span>
            </div>
        </div> <!-- .sidenav-header -->

        <div class="main-menu">
            <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li class="active"><a href="index.html"> <i class="icon-home"></i><span>Home</span></a></li>
            </ul>
        </div> <!-- .main-menu -->
    </div> <!-- .side-navbar-wrapper -->
