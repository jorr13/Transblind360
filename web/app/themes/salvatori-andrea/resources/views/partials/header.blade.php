<nav role="navigation" aria-label="main navigation" id="menu-primary">
    <div class="menu-principal">
        <div class="image-contenedor-header">
            <a href="{{ home_url('/') }}">
                <img src="{{ home_url('app/uploads/2018/09/logo-transblind.png') }} " alt="">
            </a>
        </div>
        @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'sage-menu']) !!}
        @endif

    </div>
</nav>
<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" id="boton-menu-responsive">
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
</a>
<div class="menu-responsive">
    <div class="menu-container">
        <nav class="nav-mobile">
            <a href="{{home_url('/')}}"><img class="img-menu" src="{{ home_url('app/uploads/2018/09/logo-transblind.png') }}"></a>
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-mobile']) !!}
            @endif
        </nav>
    </div>
</div>
