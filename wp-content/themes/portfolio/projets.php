<?php

/*
Template Name: projets
*/

get_header()
?>

<main>
    <section class="landing">
        <div class="wrapper">
            <h1 class="landing__titre">
                Mes projets
            </h1>
            <p>
                Cette page regroupe l&rsquo;ensemble de mes projets et peut vous donner une id&eacute;e de ma façon de
                faire et de
                voir
                les choses &agrave; travers les diff&eacute;rents projets que vous allez voir.
            </p>
        </div>
    </section>
    <div class="projets-container">
        <div class="wrapper">
            <section class="projets-container__projet">
                <h1>
                    Projet SEF
                </h1>
                <p>
                    <?= get_field('description-porjet', 16) ?>
                    <a href="#" title="Aller sur la page du projet">Lire la suite</a>
                </p>
            </section>
        </div>
    </div>

</main>

<?php get_footer() ?>
