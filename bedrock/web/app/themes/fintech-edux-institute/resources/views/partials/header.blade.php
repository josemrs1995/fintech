<header class="banner">
    <nav class="nav-primary">
      <img class="logo" src="@asset('images/FEI-logotipo.png')">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
</header>

