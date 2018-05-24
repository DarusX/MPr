<nav class="navbar is-link" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
            <strong>
                <i class="fas fa-compass"></i>
            </strong>
        </a>

        <a role="button" class="navbar-burger  has-text-white" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div class="navbar-menu">
        <div class="navbar-start">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="/documentation/overview/start/">
                    Docs
                </a>
                <div class="navbar-dropdown is-boxed">
                    <a class="navbar-item" href="/documentation/overview/start/">
                        Overview
                    </a>
                </div>
            </div>
        </div>
        <div class="navbar-end">
            @if(Auth::guest())
            <a href="{{route('login')}}" class="navbar-item">Login</a>
            <a href="{{route('register')}}" class="navbar-item">Registro</a>
            @else
            <div class="navbar-item has-dropdown is-hoverable">
                <a href="" class="navbar-link">{{Auth::user()->name}}</a>
            </div>
            @endif
        </div>
    </div>
</nav>