<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Utility\Text;

class PrestatairesTable extends Table
{
    public function initialize(array $config) {
        parent::initialize($config);
        $this->addBehavior('Timestamp');
    }
    public function beforeSave($event,$entity,$option){
        if($entity->isNew() && !$entity->slug){
            $sluggedNom = Text::slug($entity->nom);
            // On ne garde que le nombre de caractère correspondant à la longueur
            // maximum définie dans notre schéma
            $entity->slug= substr($sluggedNom, 0, 35);
        }
    }
}
