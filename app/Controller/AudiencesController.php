<?php
    class AudiencesController extends AppController {
        
        public function add() {
            if ($this->request->is('post')) {
                $this->Audience->save($this->request->data);
            }
        }
    }
?>