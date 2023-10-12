<header id="header">
    <nav class="header__nav">
        <figure class="nav__logo">
            <a href="<?php echo $urls['home']; ?>" class="item__link">
                <img src="<?php echo $url . 'assets/logo/logo.jpg'; ?>" alt="Logo de Guecord Solutions" class="logo__image">
            </a>
        </figure>
        <section class="nav__button">
            <button class="button__item" aria-label="menu" id="open_menu" onclick="openMenu()">
                <img src="<?php echo $url. "assets/media/icons/menu_icon.jpg";?>" alt="Menu icon" width="24" height="24" ></img>
            </button>
        </section>
        <menu class="nav__menu" id="menu">
            <li class="menu__item">
                <a href="<?php echo $urls['home']; ?>" class="item__link">Inicio</a>
            </li>
            <li class="menu__item">
                <a href="<?php echo $urls['services']; ?>" class="item__link">Servicios</a>
            </li>
            <li class="menu__item">
                <a href="<?php echo $urls['about']; ?>" class="item__link">Acerca de</a>
            </li>
            <li class="menu__item">
                <a href="<?php echo $urls['contact']; ?>" class="item__link">Contacto</a>
            </li>
            <li class="menu__item">
                <a href="<?php echo $urls['projects']; ?>" class="item__link">Proyectos</a>
            </li>
        </menu>
    </nav>
</header>