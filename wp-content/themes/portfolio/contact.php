<?php

/*
Template Name: contact
*/

get_header()

?>

<main class="main-dark-background">
    <section class="landing">
        <div class="wrapper">
            <h1 class="landing__titre">
                Contactez&nbsp;-&nbsp;moi&nbsp;!
            </h1>
            <p class="landing__texte">
                Êtes&nbsp;-&nbsp;vous int&eacute;r&eacute;ss&eacute; par mes services&nbsp;? Contactez moi grâce au
                formulaire ci&nbsp;-&nbsp;dessous.
            </p>
            <p>
                Attention, tous les champs sont obligatoires.
            </p>
        </div>
    </section>

    <section class="formulaire">
        <div class="wrapper">

            <form action="#" method="get">
                <label for="nom">Nom et pr&eacute;nom *</label>
                <input type="text" id="nom" class="input" placeholder="exemple&nbsp;: Charles Palu">

                <label for="mail">Votre mail *</label>
                <input type="text" id="mail" class="input" placeholder="exemple&nbsp;: charle@gmail.com">

                <label for="message">Votre message *</label>
                <textarea name="message" id="message" cols="30" rows="10" class="input"
                          placeholder="Bonjour, j'ai vu votre travail et j'aimerais vous contacter pour..."></textarea>

                <input type="submit" value="Envoyer" class="">
            </form>
        </div>
    </section>
</main>

<?= get_footer() ?>



