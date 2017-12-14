<!-- Fichier : src/Template/Prestataires/view.ctp -->
<h1><?= h($prestataire->nom) ?></h1>
<p><?= h($prestataire->prenom) ?></p>
<p><small>Lieu d'habitation : <?= $prestataire->adresse ?></small></p>
<p><?= $this->Html->link('Modifier', ['action' => 'edit', $prestataire->slug]) ?></p>