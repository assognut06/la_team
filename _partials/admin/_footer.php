<footer class="container-fluid logoBack text-light mt-5">
  <div class="py-3 text-center col-12">
    <ul class="list-inline text-center">
      <li class="list-inline-item text-light"><?php
                                              $jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
                                              $mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
                                              echo "Nous sommes le " . $jours[date('N') - 1] . ' ' . date('j') . ' ' . $mois[date('n') - 1] . ' ' . date('Y'); ?> - </li>
      <li class="list-inline-item"><a href="https://gnut06.org" target="_blank" class="link-light">&copy; Association La Team 2025 - Version 2.3.0</a></li>
      <li class="list-inline-item">&middot;</li>
      <li class="list-inline-item"><a href="?page=rgpd" class="link-light">Mentions légales</a></li>
    </ul>
  </div>
</footer>
<!-- Fin google map -->