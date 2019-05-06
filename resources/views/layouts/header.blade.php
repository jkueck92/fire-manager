<header class="main-header">
    <a href="index2.html" class="logo">
        <span class="logo-mini"><b>F</b>MG</span>
        <span class="logo-lg"><b>FIRE</b>MANAGER</span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            @if (Auth::check())
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">{{ Auth()->user()->firstname }} {{ Auth()->user()->lastname }}</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            @endif
        </div>
    </nav>
</header>