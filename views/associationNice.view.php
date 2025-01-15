<?php ob_start() ?>
<!--Contenu-->
<div class="container-fluid mt-5 px-4 text center">
    <h2 class="my-5 text-success text-center">Associations pour les personnes en situation de handicap à Nice</h2>

    <div class="row align-items-start">
    <!-- Carte pour Azur Oxalis -->
    <div class="col-12 col-md-3 col-lg-2 d-flex justify-content-around my-3">
        <div class="card logoAsso">
            <img src="https://azuroxalis.fr/wp-content/uploads/2023/05/Azur-Oxalis-logo-sans-slogan.png" class="card-img-top" alt="Logo Azur Oxalis">
            <div class="card-body text-center text-center">
                <h5 class="card-title">Azur Oxalis</h5>
                <p class="card-text">L'équipe de bénévoles d'AZUR OXALIS vous propose avec authenticité, humilité et intelligence l'écoute, le soutien, l'accompagnement des personnes malades, ...</p>
                <a href="https://azuroxalis.fr/" target="_blank" class="btn btn-warning">En savoir plus</a>
            </div>
        </div>
    </div>  
    <!-- Carte pour APF -->
        <div class="col-12 col-md-3 col-lg-2 d-flex justify-content-around my-3">
            <div class="card logoAsso">
                <img src="https://www.apf-francehandicap.org/themes/custom/customer/images/logo.svg" class="card-img-top" alt="Logo APF">
                <div class="card-body text-center">
                    <h5 class="card-title">Association des Paralysés de France (APF)</h5>
                    <p class="card-text">Une des plus importantes associations françaises de personnes handicapées.</p>
                    <a href="https://www.apf-francehandicap.org/" target="_blank" class="btn btn-warning">En savoir plus</a>
                </div>
            </div>
        </div>
        <!-- Carte pour France Alzheimer 06 -->
        <div class="col-12 col-md-3 col-lg-2 d-flex justify-content-around my-3">
            <div class="card logoAsso">
                <img src="https://www.francealzheimer.org/alpesmaritimes/wp-content/uploads/sites/44/2018/01/visuel-tmp.png" class="card-img-top" alt="Logo France Alzheimer 06">
                <div class="card-body text-center">
                    <h5 class="card-title">France Alzheimer Alpes-Maritimes</h5>
                    <p class="card-text">Aide et soutien aux personnes atteintes d'Alzheimer et à leurs proches.</p>
                    <a href="https://www.francealzheimer.org/alpesmaritimes/" target="_blank" class="btn btn-warning">En savoir plus</a>
                </div>
            </div>
        </div>
        <!-- Carte pour Autisme PACA -->
        <div class="col-12 col-md-3 col-lg-2 d-flex justify-content-around my-3">
            <div class="card logoAsso">
                <img src="https://autismepaca.yj.fr/data/img/logo-ceraa-provence.jpg" class="card-img-top" alt="Logo Autisme PACA">
                <div class="card-body text-center">
                    <h5 class="card-title">Autisme PACA</h5>
                    <p class="card-text">Aide aux personnes autistes et à leurs familles dans la région PACA.</p>
                    <a href="https://autismepaca.yj.fr/" target="_blank" class="btn btn-warning">En savoir plus</a>
                </div>
            </div>
        </div>
        <!-- Carte pour Handisport Nice -->
        <div class="col-12 col-md-3 col-lg-2 d-flex justify-content-around my-3">
            <div class="card logoAsso">
                <img src="https://gnut06.org/images/tableau/Logo_Handisport_Nice.PNG" class="card-img-top  bg-dark" alt="Logo Handisport Nice">
                <div class="card-body text-center">
                    <h5 class="card-title">Handisport Nice</h5>
                    <p class="card-text">Promotion et développement du sport pour personnes en situation de handicap.</p>
                    <a href="https://sports.nice.fr/handisport/" target="_blank" class="btn btn-warning">En savoir plus</a>
                </div>
            </div>
        </div>
        <!-- Carte pour Union Nationale des Aveugles et Déficients Visuels -->
        <div class="col-12 col-md-3 col-lg-2 d-flex justify-content-around my-3">
            <div class="card logoAsso">
                <img src="https://www.unadev.com/wp-content/themes/unadev/img/logo-nouveau-blanc.png" class="card-img-top bg-primary" alt="Logo UNADV">
                <div class="card-body text-center">
                    <h5 class="card-title">Union Nationale des Aveugles et Déficients Visuels</h5>
                    <p class="card-text">Association de défense et de représentation des aveugles et déficients visuels.</p>
                    <a href="https://www.unadev.com/" target="_blank" class="btn btn-warning">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $contenu = ob_get_clean()  ?>
<?php require_once 'views/gabarit.php'; ?>