<?php

/*
Template Name: accueil
*/

$carte_cv = get_field('image-projet-cv');
$carte_portfolio = get_field('projet-portfolio');
$carte_sef = get_field('projet-sef');

$picture1 = $carte_cv['sizes']['medium'];
$picture2 = $carte_portfolio['sizes']['medium'];
$picture3 = $carte_sef['sizes']['medium'];

$alt_cv = $carte_cv['alt'];
$alt_portfolio = $carte_portfolio['alt'];
$alt_sef = $carte_sef['alt'];

get_header();
?>

<main class="main-dark-background">
    <section class="landing">
        <div class="wrapper">
            <h1 class="landing__titre" data-animation="show">Benjamin <span>Marissiaux</span></h1>
            <p class="landing__description" data-animation="show">
                Un jeune Web Designer
            </p>
            <div class="landing__btn-container" data-animation="show">
                <a href="<?= get_field('button-about', 10); ?>" title="Aller vers la page a propos" class="btn">
                    Me découvrir
                </a>
            </div>
            <div class="landing__arrow-container" data-animation="show2">
                <p>
                    <?= get_field('text') ?>
                </p>
                <img src="http://portfolio-v2.test/wp-content/uploads/2024/07/fleche.svg"
                     alt="fleche pointant vers le bas"
                     class="landing__arrow-container__arrow">
            </div>
        </div>
    </section>

    <section class="cartes-projets">
        <div class="wrapper">
            <h1 class="section-titres" data-animation="show">Mes plus gros projets</h1>

            <div class="cartes-projets__carte-container" >
                <article class="cartes-projets__carte-container__carte" data-animation="show">
                    <a href="http://portfolio-v2.test/cv/">
                        <h2 class="cartes-projets__carte-container__carte__titre">Projet CV</h2>
                        <img src="<?= $picture1 ?>" srcset="<?= $picture1 ?>, <?= $carte_cv['sizes']['large'] ?> 2x"
                             alt="<?= $alt_cv ?>" class="cartes-projets__carte-container__carte__image carte-cv">
                    </a>
                </article>

                <article class="cartes-projets__carte-container__carte" data-animation="show2">
                    <a href="#">
                        <h2 class="cartes-projets__carte-container__carte__titre">Portfolio</h2>
                        <img src="<?= $picture2 ?>" alt="<?= $alt_portfolio ?>"
                             class="cartes-projets__carte-container__carte__image carte-portfolio">
                    </a>
                </article>

                <article class="cartes-projets__carte-container__carte" data-animation="show3">
                    <a href="#">
                        <h2 class="cartes-projets__carte-container__carte__titre">Projet SEF</h2>
                        <img src="<?= $picture3 ?>" alt="<?= $alt_sef ?>"
                             class="cartes-projets__carte-container__carte__image carte-sef">
                    </a>
                </article>
            </div>
        </div>
    </section>

    <div class="landing__btn-container" data-animation="show3">
        <a href="<?= get_field('boutton-projets', 10); ?>" title="Aller vers la page a propos" class="btn">
            Plus de projets
        </a>
    </div>

</main>

<?php get_footer() ?>
