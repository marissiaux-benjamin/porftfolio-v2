<footer class="footer">
    <h2 class="hidden_title">footer</h2>
    <section class="footer__section">
        <h3 class="footer__section__title">Coordonnées</h3>
        <ul class="footer__section__list">
            <li class="footer__section__list__item">
                tel&nbsp;:&nbsp;<a href="tel:+32474405122" title="Téléphoner à Benjamin Marissiaux"
                                   class="footer__section__list__item__link">+32&nbsp;474&nbsp;40&nbsp;51&nbsp;22</a>
            </li>
            <li class="footer__section__list__item">
                mail&nbsp;:&nbsp;<a href="mailto:ben.marissiaux@gmail.com" class="footer__section__list__item__mail">ben.marissiaux@gmail.com</a>
            </li>
            <li class="footer__section__list__item">
                Adresse&nbsp;:&nbsp;Grand&lsquo;Route 342,
                <br>4347 Fexhe-le-haut-Clocher
            </li>
        </ul>
    </section>
    <section class="footer__section">
        <h3 class="footer__section__title">Navigation</h3>
        <ul class="footer__section__list">
            <?php foreach (dw_get_navigation_links('footer') as $link): ?>
                <li class="footer__section__list__item">
                    <a class="footer__section__list__item__nav" href="<?= $link->url ?>"
                       title="Aller vers la page <?= $link->label ?>"><?= $link->label ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="footer__section">
        <h3 class="footer__section__title">Réseaux</h3>
        <ul class="footer__section__socials-list">
            <li class="footer__section__socials-list__item">
                <a href="https://www.instagram.com/ben.m.0_o/" title="Aller sur l'instagram de Benjamin Marissiaux"
                   class="footer__section__socials-list__item__insta-link">
                    insta
                </a>
            </li>
            <li class="footer__section__socials-list__item">
                <a href="https://github.com" title="Aller sur le github de Benjamin Marissiaux"
                   class="footer__section__socials-list__item__github-link">
                    github
                </a>
            </li>
            <li class="footer__section__socials-list__item">
                <a href="https://www.linkedin.com/in/benjamin-marissiaux-2aa7bb309/"
                   title="Aller sur le linkedin de Benjamin Marissiaux"
                   class="footer__section__socials-list__item__linkedin-link">
                    linkedin
                </a>
            </li>
        </ul>
    </section>
</footer>
<div class="legal-notice-container">
    <p class="legale-notice-container__credits">
        © 2024 Benjamin Marissiaux. Tous droits réservés. Créé par Benjamin Marissiaux.
    </p>
    <a href="http://portfolio.test/mentions-legales">Voir les mentions légales</a>
</div>
</body>
</html>

