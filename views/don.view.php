<?php ob_start() ?><!--Contenu-->
<div class="container mt-5">
        <h1 class="text-center text-success">Ensemble, Construisons un Monde Inclusif !</h1>
        <p class="text-center">Chers amis, membres et bienfaiteurs de l’association La Team,</p>
        <p>Nous avons besoin de votre soutien pour continuer à faire la différence dans la vie des personnes en situation de handicap. Notre mission est claire : favoriser l’inclusion, la réinsertion et le maintien dans l’emploi pour tous, indépendamment des obstacles que la vie peut parfois mettre sur notre chemin.</p>
        <h2>Pourquoi donner à La Team ?</h2>
        <ul>
            <li>Impact Immédiat : Chaque don, quel que soit son montant, a un impact immédiat sur la vie de nos bénéficiaires. Il permet de financer des formations, des équipements adaptés et des opportunités d’emploi.</li>
            <li>Expériences Immersives : Nous utilisons des technologies innovantes telles que la réalité virtuelle pour offrir des expériences uniques à nos bénéficiaires. Votre don contribue à créer ces moments magiques.</li>
            <li>Solidarité et Inclusion : En donnant à La Team, vous rejoignez une communauté engagée pour un monde plus inclusif et bienveillant. Chaque personne compte !</li>
        </ul>
        <p>Votre don fait la différence ! <br>Nous tenons à remercier chaleureusement tous nos donateurs et partenaires qui nous soutiennent dans cette belle aventure. Ensemble, nous pouvons construire un monde où le handicap n’est pas un obstacle, mais une opportunité de grandir, d’apprendre et de partager.</p>
        <p>Chaque euro compte !<br> Faites partie de cette belle histoire en faisant un don dès aujourd’hui.</p>
        <p>Merci de votre générosité et de votre confiance.</p>
        <p class="text-center">L’équipe de l’association La Team 🌟🤝</p>
    </div>
<div class="pt-5">
    <div class="my-5 mx-3">
    <iframe id="haWidget" allowtransparency="true" scrolling="auto" src="https://www.helloasso.com/associations/gnut-06/formulaires/1/widget" style="width: 100%; height: 1500px; border: none;"></iframe>
    </div>
</div>
<?php $contenu = ob_get_clean()  ?>
<?php require_once 'views/gabarit.php'; ?>