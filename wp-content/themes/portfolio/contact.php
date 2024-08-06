<?php

/*
Template Name: contact
*/

get_header()

?>

<main class="main-dark-background">
    <section class="landing">
        <div class="wrapper">
            <h1 class="landing__titre">Contactez&nbsp;-&nbsp;moi</h1>
            <p class="landing__description">
                Vous voulez prendre contact avec moi&nbsp;?
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
                <img src="http://portfolio-v2.test/wp-content/uploads/2024/07/fleche.svg"
                     alt="fleche pointant vers le bas"
                     class="landing__arrow-container__arrow">
            </div>
        </div>
    </section>



</main>
