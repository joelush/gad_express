<?php

namespace App\Controller;

class PrestatairesController extends AppController
{
    public function initialize() {
        parent::initialize();
        
        $this->loadComponent('Paginator');
        $this->loadComponent('Flash');
    }
    public function index(){
        $prestataires = $this->Paginator->paginate($this->Prestataires->find());
        $this->set(compact('prestataires'));
    }
    public function view($slug = null){
        $presatataire = $this->Prestataires->findBySlug($slug)->firstOrFail();
        $this->set(compact('presatataire'));
    }
    
    public function add(){
        $prestataire = $this->Prestataires->newEntity();
        if ($this->request->is('post')){
            $prestataire= $this->Prestataires
                    ->patchEntity($prestataire, $this->request->getData());
            $prestataire->user_id = 1;
            
            if($this->Prestataires->save($prestataire)){
                $this->Flash->success(__('Le prestataire a été sauvegardé.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible d\'ajouter le prestataire.'));
        }
        $this->set('prestataire', $prestataire);
    }
    
    public function edit($slug){
        $prestataire = $this->findBySlug($slug)->firstOrFail();
        if ($this->request->is(['post','put'])){
            $this->Prestataires->patchEntity($prestataire, $this->request->getData());
            if ($this->Prestataires->save($prestataire)) {
                $this->Flash->success(__('Le prestataire a été mis à jour.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible de mettre à jour le prestataires.'));
        }
        $this->set('prestataire', $prestataire);
    }    
}