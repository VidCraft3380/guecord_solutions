<footer>
    <nav class="footer__nav">
        <figure class="nav__logo">
            <a href="<?php echo $urls['home']; ?>" class="item__link">
                <img src="<?php echo $url . 'assets/logo/logo.jpg'; ?>" alt="Logo de Guecord Solutions" class="logo__image">
            </a>
        </figure>
        <div class="nav__columns">
            <menu class="columns__menu">
                <li class="menu__col">
                    <span class="col__title">Contacto</span>
                </li>
                <li class="menu__col">
                    <a class="col__item" href="mailto:<?php echo $data['contact_email']; ?>"><?php echo $data['contact_email']; ?></a>
                </li>
                <li class="menu__col">
                    <a class="col__item" href="tel:+<?php echo $data['tel']; ?>"><?php echo $data['tel']; ?></a>
                </li>
            </menu>
            <menu class="columns__menu">
                <li class="menu__col menu__col-title">
                    <span class="col__title">Síguenos</span>
                </li>
                <li class="menu__col">
                    <a class="col__item" aria-label="Nuestro Facebook" href="<?php echo $social['fb']; ?>">
                    <i class='bx bxl-facebook' ></i></a>
                </li>
                <li class="menu__col">
                    <a class="col__item" aria-label="Nuestro Instagram" href="<?php echo $social['ig']; ?>">
                        <i class='bx bxl-instagram' ></i>
                    </a>
                </li>
                <li class="menu__col">
                    <a class="col__item" aria-label="Nuestro twitter" href="<?php echo $social['tw']; ?>">
                        <i class='bx bxl-twitter' ></i>
                    </a>
                </li>
                <li class="menu__col">
                    <a class="col__item" aria-label="Nuestro TikTok" href="<?php echo $social['tk']; ?>"><i class='bx bxl-tiktok' ></i></a>
                </li>
            </menu>
        </div>
    </nav>
</footer>