<?php ob_start() ?>
<!-- New Front -->
<div class="container-fluid">
  <div class="text-center fs-4">
    </p>Bienvenue à notre programme d’animations et de promotions culturelles !<br> Nous nous engageons à offrir des activités éducatives enrichissantes et accessibles à tous, en particulier aux personnes défavorisées ou en situation de dépendance.
    <br>Rejoignez nous pour découvrir, apprendre et partager des moments de convivialité et de solidarité.</p>
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
  </div>
  <div class="my-5 mx-3">
    <iframe id="haWidget" allowtransparency="true" scrolling="auto" src="https://www.helloasso.com/associations/lateam/adhesions/adhesions-a-la-team/widget" style="width: 100%; height: 1200px; border: none;"></iframe>
  </div>
</div>
<?php $contenu = ob_get_clean()  ?>

<?php require_once 'views/gabarit.php'; ?>