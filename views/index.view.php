<?php ob_start() ?>
<!-- New Front -->
<div class="container">
  <div class="text-center fs-4">
    <p>Bienvenue à notre programme d’animations et de promotions culturelles !<br> Nous nous engageons à offrir des activités éducatives enrichissantes et accessibles à tous, en particulier aux personnes défavorisées ou en situation de dépendance.
      <br>Rejoignez nous pour découvrir, apprendre et partager des moments de convivialité et de solidarité.
    </p>
    <div id="carouselLaTeam" class="carousel slide carousel-fade my-5" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselLaTeam" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselLaTeam" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselLaTeam" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselLaTeam" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselLaTeam" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/IMG_6274.jpg" class="d-block w-100" alt="inclusion">
          <div class="carousel-caption d-md-block">
            <h5><strong class="fs-1">Concert</strong></h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/IMG_6286.jpg" class="d-block w-100" alt="femme avec casque vr">
          <div class="carousel-caption d-md-block">
            <h5><strong class="fs-1">Concert</strong></h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/IMG_6327.jpg" class="d-block w-100" alt="ourson peluche dans hopital">
          <div class="carousel-caption d-md-block">
            <h5><strong class="fs-1">Concert</strong></h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/IMG_6329.jpg" class="d-block w-100" alt="ourson peluche dans hopital">
          <div class="carousel-caption d-md-block">
            <h5><strong class="fs-1">Concert</strong></h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/IMG_6332.jpg" class="d-block w-100" alt="ourson peluche dans hopital">
          <div class="carousel-caption d-md-block">
            <h5><strong class="fs-1">Concert</strong></h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselLaTeam" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselLaTeam" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <hr style="border: 3px solid; width: 30%; margin: auto;" class="text-primary">
    <div class="mt-4">
      <h5>Économies :</h5>
      <p>Profitez de tarifs réduits sur une variété d’événements culturels et éducatifs.</p>
    </div>
    <div class="mt-4">
      <h5>Accès Prioritaire :</h5>
      <p>Soyez les premiers informés et inscrits à nos événements les plus populaires.</p>
    </div>
    <div class="mt-4">
      <h5>Communauté Dynamique :</h5>
      <p>Rejoignez un réseau de passionnés de culture et d’éducation.</p>
    </div>
    <div class="mt-4">
      <h5>Impact Positif :</h5>
      <p>Soutenez nos initiatives en faveur des personnes défavorisées et en situation de dépendance.</p>
    </div>
    <div class="my-5 mx-3">
      <iframe id="haWidget" allowtransparency="true" scrolling="auto" src="https://www.helloasso.com/associations/lateam/adhesions/adhesions-a-la-team/widget" style="width: 100%; height: 1200px; border: none;"></iframe>
    </div>
  </div>
</div>
<?php $contenu = ob_get_clean()  ?>

<?php require_once 'views/gabarit.php'; ?>