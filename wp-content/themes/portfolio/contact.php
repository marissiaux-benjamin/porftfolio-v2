<?php

/*
Template Name: contact
*/

get_header()

?>

<main class="main-dark-background">
    <section class="landing">
        <div class="wrapper">
            <div class="landing__info-contact">

                <h1 class="landing__titre">
                    Contactez&nbsp;-&nbsp;moi&nbsp;!
                </h1>

                <p>
                    Faites bien attention &aacute; remplir tous les champs avant d'envoyer votre demande.
                </p>
            </div>
            <div class="formulaire">
                <form action="#" method="get">
                    <div class="container-champs" data-animation="show">
                        <input type="text" id="nom" class="input" placeholder="exemple&nbsp;: Charles Palu" required>
                        <label for="nom">Nom et pr&eacute;nom *</label>
                    </div>

                    <div class="container-champs" data-animation="show2">
                        <input type="email" id="mail" class="input" placeholder="exemple&nbsp;: charles@gmail.com"
                               required>
                        <label for="mail">Votre mail *</label>
                    </div>
                    <div class="container-champs" data-animation="show3">
                        <textarea name="message" id="message" cols="30" rows="10" class="input"
                                  placeholder="Bonjour, j'ai vu votre travail et j'aimerais vous contacter pour..."
                                  required></textarea>
                        <label for="message" class="label-message">Votre message *</label>
                    </div>

                    <input type="submit" value="Envoyer" data-animation="show3">
                </form>
            </div>
        </div>
    </section>
</main>

<?= get_footer() ?>



