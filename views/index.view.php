<?php ob_start() ?>
<!-- New Front -->
<div class="container-fluid">
<div class="text-center fs-4">
 </p>Bienvenue à notre programme d’animations et de promotions culturelles !<br> Nous nous engageons à offrir des activités éducatives enrichissantes et accessibles à tous, en particulier aux personnes défavorisées ou en situation de dépendance.
        <br>Rejoignez nous pour découvrir, apprendre et partager des moments de convivialité et de solidarité.</p>
</div>
        <div class="my-5 mx-3">
          <iframe id="haWidget" allowtransparency="true" scrolling="auto" src="https://www.helloasso.com/associations/lateam/adhesions/adhesions-a-la-team/widget" style="width: 100%; height: 100vh; border: none;"></iframe>
        </div>
  </div>
  <?php $contenu = ob_get_clean()  ?>



  <?php require_once 'views/gabarit.php'; ?>