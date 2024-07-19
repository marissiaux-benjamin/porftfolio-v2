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
        <h1 class="landing__titre">Benjamin <span>Marissiaux</span></h1>
        <p class="landing__description">
            Un jeune Web Designer
        </p>
        <div class="landing__btn-container">
            <a href="<?= get_field('button-about', 10); ?>" title="Aller vers la page a propos" class="btn">
                Me découvrir
            </a>
        </div>
        <div class="landing__arrow-container">
            <p>
                <?= get_field('text') ?>
            </p>
            <img src="http://portfolio-v2.test/wp-content/uploads/2024/07/fleche.svg" alt="fleche pointant vers le bas"
                 class="landing__arrow-container__arrow">
        </div>
    </section>

    <section class="cartes-projets">
        <h1 class="cartes-projets__titre">Mes plus gros projets</h1>

        <div class="cartes-projets__carte-container">
            <div class="cartes-projets__carte-container__carte">

                <a href="#">
                    <span class="cartes-projets__carte-container__carte__titre">Projet CV</span>
                    <img src="<?= $picture1 ?>" srcset="<?= $picture1 ?>, <?= $carte_cv['sizes']['large'] ?> 2x"
                         alt="<?= $alt_cv ?>" class="cartes-projets__carte-container__carte__image carte-cv">
                </a>
            </div>

            <div class="cartes-projets__carte-container__carte">
                <a href="#">
                    <span class="cartes-projets__carte-container__carte__titre">Portfolio</span>
                    <img src="<?= $picture2 ?>" alt="<?= $alt_portfolio ?>"
                         class="cartes-projets__carte-container__carte__image carte-portfolio">
                </a>
            </div>

            <div class="cartes-projets__carte-container__carte">
                <a href="#">
                    <span class="cartes-projets__carte-container__carte__titre">Projet SEF</span>
                    <img src="<?= $picture3 ?>" alt="<?= $alt_sef ?>"
                         class="cartes-projets__carte-container__carte__image carte-sef">
                </a>
            </div>
        </div>
    </section>

    <div class="landing__btn-container">
        <a href="<?= get_field('button-projets', 10); ?>" title="Aller vers la page a propos" class="btn">
            Plus de projets
        </a>
    </div>

</main>

<?php get_footer() ?>
