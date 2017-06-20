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
                <li><a href="{{ route('home') }}" title="Latest Photos">Latest</a></li>
                <li><a href="{{ route('album') }}" title="Your Album">Album</a></li>
                <li><a href="{{ route('upload') }}" title="Upload Photo">Upload</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('profile', Auth::user()->id) }}" title="Profile">Profile</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" title="Logout">logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
