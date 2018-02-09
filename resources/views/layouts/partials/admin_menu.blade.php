    <div class="clearfix"></div>
    <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_pic">
            @if(\Illuminate\Support\Facades\Auth::user()->photo == null)
                <img src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" alt="..." class="img-circle profile_img">
            @else
                <img src="{{ asset(\Illuminate\Support\Facades\Auth::user()->photo)}}" alt="..." class="img-circle profile_img">
            @endif
        </div>
        <div class="profile_info">
            <span>Bienvenido (@)</span>
            <h2>{{ \Illuminate\Support\Facades\Auth::user()->personalInformation->name }}</h2>
            <p>Tipo de Cuenta {{ \Illuminate\Support\Facades\Auth::user()->role->role}}</p>
        </div>
    </div>
    <!-- /menu profile quick info -->
    <br />
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>Menu General</h3>
            <ul class="nav side-menu">
                <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Inicio</a></li>
                <li><a><i class="fa fa-user"></i> Perfil <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{route('profile')}}"><i class="fa fa-user"></i> Perfil</a></li>
                        <li><a href="{{route('profile-photo')}}"><i class="fa fa-camera-retro"></i> Foto Perfil</a></li>
                        <li><a href="{{route('profile-edit')}}"><i class="fa fa-edit"></i> Editar Perfil</a></li>
                    </ul>
                </li>
                @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 or \Illuminate\Support\Facades\Auth::user()->role_id == 2  )
                    <hr>
                    <h3 class="text-center">Administracion</h3>
                    <hr>
                    <li><a ><i class="fa fa-tags"></i> Publicaciones <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('admin/post/create')}}">Agregar Publicacion</a></li>
                            <li><a href="{{url('admin/post')}}">Consultar Todos</a></li>
                        </ul>
                    </li>
                    <li><a ><i class="fa fa-edit"></i> Categorias <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('admin/category/create')}}">Agregar Categoria</a></li>
                            <li><a href="{{url('admin/category')}}">Consultar Todos</a></li>
                        </ul>
                    </li>
                    <li><a ><i class="fa fa-university"></i> Datos Academicos <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('admin/academic-data/create')}}">Agregar Dato Academico</a></li>
                            <li><a href="{{url('admin/academic-data')}}">Consultar Todos</a></li>
                        </ul>
                    </li>

                    <li><a ><i class="fa fa-edit"></i> Roles <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('admin/roles/create')}}">Agregar Rol</a></li>
                            <li><a href="{{url('admin/roles')}}">Consultar Todos</a></li>
                        </ul>
                    </li>
                    <li><a ><i class="fa fa-users"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('admin/user/create')}}">Agregar Publicacion</a></li>
                            <li><a href="{{url('admin/user')}}">Consultar Todos</a></li>
                        </ul>
                    </li>

                @endif
            </ul>
        </div>
    </div>
    <!-- /sidebar menu -->