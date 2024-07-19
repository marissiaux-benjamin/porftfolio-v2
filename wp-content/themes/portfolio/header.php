<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Benjamin Marissiaux">
    <meta name="description" content="Voici le portfolio du designer web Benjamin Marissiaux">
    <meta name="keywords"
          content="web design, Benjamin, Benjamin Marissiaux, Marissiaux, porfolio, portfolio Benjamin Marissiaux">
    <link rel="stylesheet" href="<?= dw_asset('css/reset.css'); ?>">
    <link rel="stylesheet" href="<?= dw_asset('css/fonts.css'); ?>">
    <link rel="stylesheet" href="<?= dw_asset('css/style.css'); ?>">
    <title><?= get_the_title() ?></title>
</head>
<body >
<header class="header">
    <h1 class="header__icon">
        <a href="http://portfolio-v2.test/accueil/">
            <img src="http://portfolio-v2.test/wp-content/uploads/2024/07/logo.svg"
                 alt="Logo de Benjamin Marissiaux représentant un B et un M majustcule" height="40" width="40">
        </a>
    </h1>
    <nav class="mobile-menu reveal">
        <h2 class="hidden-title">navigation principale</h2>
        <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
        <label for="checkbox" class="mobile-menu__btn">
            <span class="mobile-menu__icon"></span>
        </label>
        <div class="mobile-menu__container">
            <ul class="mobile-menu__list">
                <li class="mobile-menu__item">
                    <a href="http://portfolio-v2.test/accueil/" title="Aller vers la page d'accueil"
                       class="mobile-menu__link">
                        Accueil
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a href="http://portfolio-v2.test/A propos/" title="Aller vers la page a propos"
                       class="mobile-menu__link">
                        A propos
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a href="http://portfolio-v2.test/Projets/" title="Aller vers la page projets"
                       class="mobile-menu__link">
                        Projets
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a href=" http://portfolio-v2.test/contact/" title="Aller vers la page contact"
                       class="mobile-menu__link">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>


