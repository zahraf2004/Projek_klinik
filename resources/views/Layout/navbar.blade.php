<div id="navbar-wrapper">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: #92bce0;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img src="{{ asset('img/Logo.png') }}" alt="logo" height="45px" >
                    <div class="clinic-name">
                        <div class="clinic-title">Klinik Pratama</div>
                        <div class="doctor-name">Dokter Yanti</div>
                    </div>
                   
                </div>
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a id="user-profile" href="#" class="dropdown-toggle" data-toggle="dropdown"><img
                                    src="{{ asset('img/user.png') }}" class="img-responsive img-thumbnail img-circle">
                                Username</a>
                            <ul class="dropdown-menu dropdown-block" role="menu">
                                <li>
                                    <!-- Form Logout -->
                                    <form id="logout-form" action="" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                    <a href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</div>