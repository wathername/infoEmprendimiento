<div class="sidebar-footer hidden-small">

    <a data-toggle="tooltip" data-placement="top" title="Salir" href="{{ url('/logout') }}"
       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</div>