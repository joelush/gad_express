<h1>Ajouter un prestataire</h1>
<?php

echo $this->Form->create($prestataire);
echo $this->Form->control('nom');
echo $this->Form->control('postnom');
echo $this->Form->control('prenom');
echo $this->Form->control('adresse');
echo $this->Form->control('email');
echo $this->Form->control('telephone');
//echo $this->Form->control('body', ['rows' => '3']);
echo $this->Form->button(__('Enregistrer le prestataire'));
echo $this->Form->end();

?>