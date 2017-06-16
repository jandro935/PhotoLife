<nav id="mainNav" class="navbar navbar-default navbar-fixed brand-center center-side bootsnav">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}" title="Home"><img src="/assets/imgs/logo.png" class="logo logo-scrolled" alt=""></a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" data-in="" data-out="">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li class="dropdown megamenu-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Megamenu</a>
                    <ul class="dropdown-menu megamenu-content" role="menu">
                        <li>
                            <div class="row">
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Title Menu One</h6>
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div>
                                </div><!-- end col-3 -->
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Title Menu Two</h6>
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div>
                                </div><!-- end col-3 -->
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Title Menu Three</h6>
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Title Menu Four</h6>
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div>
                                </div><!-- end col-3 -->
                            </div><!-- end row -->
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdowns</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sub Menu</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Custom Menu</a></li>
                                <li><a href="#">Custom Menu</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sub Menu</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Custom Menu</a></li>
                                        <li><a href="#">Custom Menu</a></li>
                                        <li><a href="#">Custom Menu</a></li>
                                        <li><a href="#">Custom Menu</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Custom Menu</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                    </ul>
                </li>
                <li><a href="#">Portfolio</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('user.show', Auth::user()->id) }}" title="Profile">Profile</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" title="Logout">logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                        </li>
                    </ul>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
