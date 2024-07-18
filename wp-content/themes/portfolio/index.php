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
            <a href="<?= get_field('button-about', 10); ?>" title="Aller vers la page a propos" class="landing__btn-container__btn">
                Me découvrir
            </a>
        </div>
    </section>

    <section class="cartes-projets">
        <h1 class="cartes-projets__titre">Mes plus gros projets</h1>

        <article class="carte">
            <a href="#">
                <img src="<?= $picture1 ?>" srcset="<?= $picture1 ?>, <?= $carte_cv['sizes']['large'] ?> 2x" alt="<?= $alt_cv ?>">
            </a>
            <h2 class="carte__titre">
                Projet CV
            </h2>
        </article>

        <article class="carte">
            <a href="#">
                <img src="<?= $picture2 ?>"  alt="<?= $alt_portfolio ?>">
            </a>
            <h2 class="carte__titre">
                Portfolio
            </h2>
        </article>

        <article class="carte">
            <a href="#">
                <img src="<?= $picture3 ?>"  alt="<?= $alt_sef ?>">
            </a>
            <h2 class="carte__titre">
                Projet SEF
            </h2>
        </article>
    </section>

    <div>
        <a href="<?= get_field('button-projets', 10); ?>" title="Aller vers la page a propos">
            Plus de projets
        </a>
    </div>

</main>

<?php get_footer() ?>
