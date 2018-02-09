<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        @if(\Illuminate\Support\Facades\Auth::user()->photo == null)
                            <img src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" alt="...">
                        @else
                            <img src="{{ asset(\Illuminate\Support\Facades\Auth::user()->photo)}}" alt="...">
                        @endif
                        {{ \Illuminate\Support\Facades\Auth::user()->user }}
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="{{route('profile')}}"><i class="fa fa-user"></i> Perfil </a></li>
                        <li><a href="javascript:;"><i class="fa fa-info-circle"></i> Ayuda</a></li>
                        <li><a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> Salir
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>