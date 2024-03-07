<nav id="site-navigation" class="main-navigation">
    <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    <div id="myNav" class="overlay">
    <!-- fermer le menu -->
    <div class="banner__menu__open">
        <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        <a href="javascript:void(0)" class="close__burger__btn" onclick="closeNav()">&times;</a>
    </div>
    <!-- menu -->
    <div class="overlay-content"> 
        
        <ul>
            <li ><div class="burger-link"><a  onclick="closeNav() "href="#story">Histoire</a></div></li>
            <li ><div class="burger-link"><a onclick="closeNav() " href="#characters">Personnages</a></div></li>
            <li ><div class="burger-link"><a onclick="closeNav() "href="#place">Lieu</a></div></li>
            <li ><div class="burger-link"><a onclick="closeNav() "href="#studio">Studio <span>Koukaki</span></a></div></li>
        </ul>
        <p>Studio Koukaki</p>
    </div>

    </div>
    <!-- ouvrir le menu -->
<img class="burger__btn" src="<?php echo get_theme_file_uri() . '/assets/images/burger-menu.svg'; ?> " alt="burger du menu" onclick="openNav()">

</nav><!-- #site-navigation -->
