<?php
    class Audience extends AppModel {
        public $validate = array(
            'name' => array('rule' => 'notEmpty')
        );
        /**
        public $belongsTo = array(
            'Pd'
        );**/
    }
?>