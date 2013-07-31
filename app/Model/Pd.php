<?php

class Pd extends AppModel {
    public $validate = array(
        'title' => array('rule' => 'notEmpty'),
        'description' => array('rule' => 'notEmpty'),
        'audience' => array('rule' => 'notEmpty'),
        'conducted' => array('rule' => 'notEmpty')
    );
/**
    public $hasMany = array (
        'Audience'
    );
**/
}