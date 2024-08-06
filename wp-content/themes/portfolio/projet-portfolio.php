<?php
/*
Template Name: projet-portfolio
*/

$photo_cv = get_field('etape-1-cv');
$picture = $photo_cv['sizes']['medium'];
$alt = $photo_cv['alt'];

$photo_cv_2 = get_field('etape-2-cv');
$picture2 = $photo_cv_2['sizes']['medium'];
$alt2 = $photo_cv_2['alt'];

$photo_cv_3 = get_field('etape-3-cv');
$picture3 = $photo_cv_3['sizes']['medium'];
$alt3 = $photo_cv_3['alt'];

$screen_cv_1 = get_field('image-galerie-1');
$screen1 = $screen_cv_1['sizes']['medium'];
$alt_screen1 = $screen_cv_1['alt'];

$screen_cv_2 = get_field('image-galerie-2');
$screen2 = $screen_cv_2['sizes']['medium'];
$alt_screen2 = $screen_cv_2['alt'];

$screen_cv_3 = get_field('image-galerie-3');
$screen3 = $screen_cv_3['sizes']['medium'];
$alt_screen3 = $screen_cv_3['alt'];

$screen_cv_4 = get_field('image-galerie-4');
$screen4 = $screen_cv_4['sizes']['medium'];
$alt_screen4 = $screen_cv_4['alt'];

get_header()

?>

<main class="main-dark-background">
    <section class="landing-projet-detail">
        <div class="wrapper">
            <h1 class="landing__titre landing-projet-detail__titre">
                <?= get_field('titre-page', 324) ?>
            </h1>
            <p class="landing__presentation__texte">
                <?= get_field('description', 324) ?>
            </p>

        </div>
    </section>
    <section class="progression">
        <div class="wrapper">
            <h1 class="section-titres">
                Étapes du projet
            </h1>
            <div class="etape-container">
                <div>
                    <img src="<?= $picture ?>" srcset="<?= $picture ?>, <?= $photo_cv['sizes']['large'] ?> 2x"
                         alt="<?= $alt ?>" class="projets-container__projet__img"/>
                </div>
                <p>
                    <?= get_field('etape-1', 324) ?>
                </p>
            </div>
            <div class="etape-container">
                <p>
                    <?= get_field('etape-2', 324) ?>
                </p>
                <div>
                    <img src="<?= $picture2 ?>" srcset="<?= $picture2 ?>, <?= $photo_cv_2['sizes']['large'] ?> 2x"
                         alt="<?= $alt2 ?>" class="projets-container__projet__img"/>
                </div>
            </div>
            <div class="etape-container">
                <div>
                    <img src="<?= $picture3 ?>" srcset="<?= $picture3 ?>, <?= $photo_cv_3['sizes']['large'] ?> 2x"
                         alt="<?= $alt3 ?>" class="projets-container__projet__img"/>
                </div>
                <p>
                    <?= get_field('etape-3', 324) ?>
                </p>
            </div>
        </div>
    </section>
    <section class="galerie">
        <div class="wrapper">

            <h1 class="section-titres">
                Galerie
            </h1>
            <div class="galerie__grille">
                <img alt="<?= $alt_screen1 ?>" src="<?= $screen1 ?>" srcset="<?= $screen1 ?>, <?= $screen_cv_1['sizes']['large'] ?> 2x"/>
                <img alt="<?= $alt_screen2 ?>" src="<?= $screen2 ?>" srcset="<?= $screen2 ?>, <?= $screen_cv_2['sizes']['large'] ?> 2x"/>
                <img alt="<?= $alt_screen3 ?>" src="<?= $screen3 ?>" srcset="<?= $screen3 ?>, <?= $screen_cv_3['sizes']['large'] ?> 2x"/>
                <img alt="<?= $alt_screen4 ?>" src="<?= $screen4 ?>" srcset="<?= $screen4 ?>, <?= $screen_cv_4['sizes']['large'] ?> 2x"/>
            </div>
            <a href="http://portfolio-v2.test/projets/" title="Revenir à la page précédente" class="galerie__retour-btn">Retour aux projets</a>
        </div>
    </section>
</main>

<?= get_footer() ?>


