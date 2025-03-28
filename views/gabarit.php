<?php require_once '_partials/_header.php'; ?>

<body>
    <header>
        <?php require_once '_partials/_nav.php' ?>
    </header>
    <main role="main">
        <!-- class="container bg-warning-subtle text-emphasis-warning py-5 fs-5" -->
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/banniere.jpg" class="d-block w-100" alt="inclusion">
                    <div class="carousel-caption d-md-block">
                        <h5><strong class="fs-1 text-dark"></strong></h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/FB_IMG_1739261212588.jpg" class="d-block w-100" alt="femme avec casque vr">
                    <div class="carousel-caption d-md-block">
                        <h5><strong class="fs-1">Concert</strong></h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/FB_IMG_1739261220573.jpg" class="d-block w-100" alt="ourson peluche dans hopital">
                    <div class="carousel-caption d-md-block">
                        <h5><strong class="fs-1">Concert</strong></h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Utiliser la classe "ratio" pour une vidéo pleine grandeur et fluide -->
        <!-- <div class="ratio ratio-16x9 my-5 mx-5 px-5">
            <iframe src="https://www.youtube.com/embed/Ic81Hrta_gg?si=48aYON94VIX_8wyA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            
        </div> -->

        <!-- <div class="ratio ratio-16x9 my-5 mx-3">
              <iframe id="oVideoYouTubeiFrame" src="https://www.youtube.com/embed/Djl-1wj80CE?si=HYwsLIjhoXjoSGny?autoplay=1" allowfullscreen></iframe>
            </div> -->
        <!--Contenu-->

        <p class="text-center my-5 text-primary shadow-lg fs-1 fw-bold">Association La Team</p>
        <div class="text-center my-5">
            <a href="https://framevr.io/la-team" target="_blank" class="btn btn-danger btn-lg fs-3 fw-bold">Visitez notre espace VR</a>
        </div>
        <!-- Bouton pour ouvrir la vidéo -->
        <!-- <div class="text-center">
                <button type="button" class="btn btn-success text-bg-success p-4 my-5 text-uppercase text-center" data-bs-toggle="modal" data-bs-target="#oModalYouTube">
        <h1>Association La Team</h1>
    </button>
                </div> -->


        <!-- Fenêtre modale -->
        <!-- <div class="modal fade" id="oModalYouTube" tabindex="-1" aria-labelledby="oModalYouTubeTitre" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="oModalYouTubeTitre">Association La Team</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body">
            Utiliser la classe "ratio" pour une vidéo pleine grandeur et fluide
            <div class="ratio ratio-16x9">
              <iframe id="oVideoYouTubeiFrame" src="https://www.youtube.com/embed/Djl-1wj80CE?si=HYwsLIjhoXjoSGny?autoplay=1" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div> -->
        <h2 class="text-center mb-4 text-info">Tremplin des échanges de l'art musical</h2>
        <!-- <?php
        if (empty($_GET['page']) || (!empty($_GET['page']) && $_GET['page'] != "adhesion")) {
        ?>

            <h3 class="text-center mb-5 fs-1"><a href="?page=adhesion" class="badge text-bg-success p-4 text-uppercase">Adhérer</a></h3>
        <?php
        } ?> -->


        <?= $contenu;  ?>

    </main>

    <?php require_once '_partials/_footer.php'; ?>
    <?php require_once '_partials/_scripts.php'; ?>
</body>

</html>