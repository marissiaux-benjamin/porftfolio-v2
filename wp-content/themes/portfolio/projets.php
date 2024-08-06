<?php

/*
Template Name: projets
*/

$carte_sef = get_field('projet-sef');
$picture3 = $carte_sef['sizes']['medium'];
$alt_sef = $carte_sef['alt'];

$carte_cv = get_field('image-projet-cv');
$picture1 = $carte_cv['sizes']['medium'];
$alt_cv = $carte_sef['alt'];

$carte_portfolio = get_field('projet-portfolio');
$picture2 = $carte_portfolio['sizes']['medium'];
$alt_portfolio = $carte_sef['alt'];

$carte_paint_your_day = get_field('projet-paint-your-day');
$picture4 = $carte_paint_your_day['sizes']['medium'];
$alt_paint_your_day = $carte_paint_your_day['alt'];

$carte_soundtrekker = get_field('projet-soundtrekker');
$picture5 = $carte_soundtrekker['sizes']['medium'];
$alt_soundtrekker = $carte_soundtrekker['alt'];


get_header()
?>

<main class="main-dark-background">
    <section class="landing">
        <div class="wrapper">
            <h1 class="landing__titre">
                Mes projets
            </h1>
            <p class="landing__texte">
                Cette page regroupe l&rsquo;ensemble de mes projets et peut vous donner une id&eacute;e de ma façon de
                faire et de
                voir
                les choses &agrave; travers les diff&eacute;rents projets que vous allez voir.
            </p>
        </div>
    </section>

    <div class="wrapper">
        <section class="liste-projets">
            <h1 class="section-titres">Liste de mes projets</h1>
            <div class="projets-container">
                <article class="projets-container__projet">
                        <h2 class="projets-container__projet__titre">
                            <?= get_field('titre-projet-sef', 16) ?>
                        </h2>
                        <img src="<?= $picture3 ?>" srcset="<?= $picture3 ?>, <?= $carte_sef['sizes']['large'] ?> 2x"
                             alt="<?= $alt_sef ?>" class="projets-container__projet__img"/>
                    <p class="projet__texte">
                        <?= get_field('description-projet-sef', 16) ?>
                        <a href="http://portfolio-v2.test/portfolio/" title="Aller sur la page du projet" class="projets-container__projet__link">D&eacute;couvrir</a>
                    </p>
                </article>

                <article class="projets-container__projet">
                        <h2 class="projets-container__projet__titre">
                            <?= get_field('titre-projet-cv', 16) ?>
                        </h2>
                        <img src="<?= $picture1 ?>" srcset="<?= $picture1 ?>, <?= $carte_cv['sizes']['large'] ?> 2x"
                             alt="<?= $alt_cv ?>" class="projets-container__projet__img"/>
                    <p>
                        <?= get_field('description-projet-cv', 16) ?>
                        <a href="http://portfolio-v2.test/cv/" title="Aller sur la page du projet"
                           class="projets-container__projet__link">D&eacute;couvrir</a>
                    </p>
                </article>

                <article class="projets-container__projet">

                    <h2 class="projets-container__projet__titre">
                        <?= get_field('titre-projet-portfolio', 16) ?>
                    </h2>
                    <img src="<?= $picture2 ?>"
                         srcset="<?= $picture2 ?>, <?= $carte_portfolio['sizes']['large'] ?> 2x"
                         alt="<?= $alt_portfolio ?>" class="projet-container__projet__img"/>
                    <p>
                        <?= get_field('description-projet-portfolio', 16) ?>
                        <a href="http://portfolio-v2.test/portfolio-2/" title="Aller sur la page du projet" class="projets-container__projet__link">D&eacute;couvrir</a>
                    </p>
                </article>

                <article class="projets-container__projet">
                        <h2 class="projets-container__projet__titre">
                            <?= get_field('titre-projet-paint-your-day', 16) ?>
                        </h2>
                        <img src="<?= $picture4 ?>"
                             srcset="<?= $picture4 ?>, <?= $carte_paint_your_day['sizes']['large'] ?> 2x"
                             alt="<?= $alt_paint_your_day ?>" class="projet-container__projet__img"/>
                    <p>
                        <?= get_field('description-projet-paint-your-day', 16) ?>
                        <a href="http://portfolio-v2.test/paint-your-day/" title="Aller sur la page du projet" class="projets-container__projet__link">D&eacute;couvrir</a>
                    </p>
                </article>

                <article class="projets-container__projet">
                        <h2 class="projets-container__projet__titre">
                            <?= get_field('titre-projet-soundtrekker', 16) ?>
                        </h2>
                        <img src="<?= $picture5 ?>"
                             srcset="<?= $picture5 ?>, <?= $carte_soundtrekker['sizes']['large'] ?> 2x"
                             alt="<?= $alt_soundtrekker ?>" class="projets-container__projet__img"/>
                    <p>
                        <?= get_field('description-projet-soundtrekker', 16) ?>
                        <a href="http://portfolio-v2.test/soundtrekker/" title="Aller sur la page du projet" class="projets-container__projet__link">D&eacute;couvrir</a>
                    </p>
                </article>
            </div>
        </section>
    </div>
</main>

<?php get_footer() ?>
