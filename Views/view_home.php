<?php require('view_begin.php'); ?>

<script type="text/javascript" src="JS/HomeScript.js"></script>
<h1 id="test">a</h1>
<p>Selectionner un test</p>

<div>
  <input type="checkbox" id="QUESTIONS_RESEAUX" name="reseaux">
  <label for="reseaux">Réseaux</label>
</div>

<div>
  <input type="checkbox" id="QUESTIONS_SECU" name="secu">
  <label for="secu">Sécurité</label>
</div>

<div>
  <input type="checkbox" id="QUESTIONS_GEST" name="gest">
  <label for="gest">Gestion de projet</label>
</div>

<div>
  <button id="btn_launch">Lancer</button>
</div>

<p id="info_error"></p>

<?php require('view_end.php'); ?>
