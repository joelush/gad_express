<h1>Prestataires</h1>
<table>
<tr>
<th>Nom</th>
<th>Postnom</th>
<th>Prenom</th>
<th>Adresse</th>
<th>Email</th>
<th>Telephone</th>
</tr>
<!-- C'est ici que nous bouclons sur notre objet Query $articles pour afficher
˓→les informations de chaque article -->
<?php foreach ($prestataires as $prestataire): ?>
<tr>
<td>
<?= $this->Html->link($prestataire->nom, ['action' => 'view', $prestataire->slug]) ?>
</td>
<td>
<?= $prestataire->postnom ?>
</td>
<td>
<?= $prestataire->prenom ?>
</td>
<td>
<?= $prestataire->adresse ?>
</td>
<td>
<?= $prestataire->email ?>
</td>
<td>
<?= $prestataire->telephone ?>
</td>
</tr>
<?php endforeach; ?>
</table>