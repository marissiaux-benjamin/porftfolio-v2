<?php
/*
Template Name: A propos
*/

$photo_presentation = get_field('image-presentation');
$picture = $photo_presentation['sizes']['medium'];
$alt_cv = $photo_presentation['alt'];

$image_etude = get_field('image-etude');
$picture_etude = $image_etude['sizes']['medium'];
$alt_sapin = $image_etude['alt'];

$image_passions = get_field('image-passions');
$picture_passions = $image_passions['sizes']['medium'];
$alt_passions = $image_passions['alt'];


get_header();
?>

<main class="main-dark-background">
    <section class="landing">
        <div class="wrapper">
            <h1 class="landing__titre">
                Qui suis-je&nbsp;?
            </h1>
            <div class="landing__presentation">
                <div class="landing__presentation__image-container">
                    <img src="<?= $picture ?>" srcset="<?= $picture ?>, <?= $photo_presentation['sizes']['large'] ?> 2x"
                         alt="<?= $alt_cv ?>" class="landing__presentation__image-container__image">
                </div>
                <p class="landing__presentation__texte">
                    <?= get_field('presentation', 14) ?>
                </p>
            </div>
        </div>
    </section>
    <section class="etudes">
        <div class="wrapper">
            <h1 class="etudes__titre">
                La foret du savoir
            </h1>
            <div class="etudes-container">
                <img src="<?= $picture_etude ?>"
                     alt="<?= $alt_cv ?>"
                     class="landing__presentation__image">
                <div>
                    <article class="etudes__info">
                        <h2 class="etudes__info__titre">
                            <?= get_field('2023-2024', 14) ?>
                        </h2>
                        <p class="etudes__info__texte">
                            <?= get_field('2023-2024-texte', 14) ?>
                        </p>
                    </article>
                    <article class="etudes__info">
                        <h2 class="etudes__info__titre">
                            <?= get_field('2022-2023', 14) ?>
                        </h2>
                        <p class="etudes__info__texte">
                            <?= get_field('2022-2023-texte', 14) ?>
                        </p>
                    </article>
                    <article class="etudes__info">
                        <h2 class="etudes__info__titre">
                            <?= get_field('2020-2022', 14) ?>
                        </h2>
                        <p class="etudes__info__texte">
                            <?= get_field('2020-2022-texte', 14) ?>
                        </p>
                    </article>
                    <article class="etudes__info">
                        <h2 class="etudes__info__titre">
                            <?= get_field('2019-2020', 14) ?>
                        </h2>
                        <p class="etudes__info__texte">
                            <?= get_field('2019-2020-texte', 14) ?>
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="competences">
        <div class="wrapper">
            <h1 class="competences__titre">
                Mes compétences
            </h1>
            <div class="langages-container">
                <article class="langage">
                    <h2 class="langage__titre">
                        <?= get_field('langage-css', 14) ?>
                    </h2>
                    <p class="langage__description">
                        <?= get_field('description-css', 14) ?>
                    </p>
                </article>
                <article class="langage">
                    <h2 class="langage__titre">
                        <?= get_field('langage-scss', 14) ?>
                    </h2>
                    <p class="langage__description">
                        <?= get_field('description-scss', 14) ?>
                    </p>
                </article>
                <article class="langage">
                    <h2 class="langage__titre">
                        <?= get_field('langage-javascript', 14) ?>
                    </h2>
                    <p class="langage__description">
                        <?= get_field('description-javascript', 14) ?>
                    </p>
                </article>
                <article class="langage">
                    <h2 class="langage__titre">
                        <?= get_field('langage-sql', 14) ?>
                    </h2>
                    <p class="langage__description">
                        <?= get_field('description-sql', 14) ?>
                    </p>
                </article>
                <article class="langage">
                    <h2 class="langage__titre">
                        <?= get_field('langage-php', 14) ?>
                    </h2>
                    <p class="langage__description">
                        <?= get_field('description-php', 14) ?>
                    </p>
                </article>
                <aside class="langage-container__contact langage">
                    <h2 class="langages-container__contact__titre">
                        Voulez&nbsp;-&nbsp;vous travailler avec moi?
                    </h2>
                    <p>
                        <a href="" class="btn-secondaire">Contacter</a>
                    </p>
                </aside>
            </div>
        </div>
    </section>
    <section class="passions">
        <div class="wrapper">
            <h1 class="passions__titre">
                Mes passions
            </h1>
            <div class="passions-container">
                <div>
                    <img src="<?= $picture_passions ?>"
                         srcset="<?= $picture_passions ?>, <?= $image_passions['sizes']['large'] ?> 2x"
                         alt="<?= $alt_passions ?>">
                </div>
                <p>
                    <?= get_field('texte-passions', 14) ?>
                </p>
            </div>
        </div>
    </section>
</main>
<?= get_footer() ?>
