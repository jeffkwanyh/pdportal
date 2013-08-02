<?php

class Pd extends AppModel {
    
    public $name = 'pds';
    
    // Validation rules
    public $validate = array(
        'title' => 'notEmpty',
        'description' => 'notEmpty',
        'audience' => 'notEmpty',
        'conducted' => 'notEmpty',
        'attachment' => array(
            // http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::uploadError
            'uploadError' => array(
                'rule' => 'uploadError',
                'message' => 'Something went wrong with the file upload.',
                'required' => FALSE,
                'allowEmpty' => TRUE,
            ),
            // http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::mimeType
            'mimeType' => array(
                'rule' => array('mimeType', array('application/msword', 'application/pdf')),
                'message' => 'Invalid file. Only PDF or MSWord documents allowed.',
                'required' => FALSE,
                'allowEmpty' => TRUE,
            ),
            // custom callback to deal with the file upload
            'processUpload' => array(
                'rule' => 'processUpload',
                'message' => 'Something went wrong processing your file.',
                'required' => FALSE,
                'allowEmpty' => TRUE,
                'last' => TRUE,
            )
        )
    );

     /**
     * Upload Directory relative to WWW_ROOT
     * @param string
     */
    public $uploadDir = 'files';
    
    /**
     * Process the Upload
     * @param array $check
     * @return boolean
     */
    public function processUpload($check=array()) {
        // deal with uploaded file
        if (!empty($check['attachment']['tmp_name'])) {
    
            // check file is uploaded
            if (!is_uploaded_file($check['attachment']['tmp_name'])) {
                return FALSE;
            }
    
            // build full filename
            $filename = WWW_ROOT . $this->uploadDir . DS . Inflector::slug(pathinfo($check['attachment']['name'], PATHINFO_FILENAME)).'.'.pathinfo($check['attachment']['name'], PATHINFO_EXTENSION);
    
            // @todo check for duplicate filename
    
            // try moving file
            if (!move_uploaded_file($check['attachment']['tmp_name'], $filename)) {
                return FALSE;
    
            // file successfully uploaded
            } else {
                // save the file path relative from WWW_ROOT e.g. uploads/example_filename.jpg
                $this->data[$this->alias]['filepath'] = str_replace(DS, "/", str_replace(WWW_ROOT, "", $filename) );
            }
        }
    
        return TRUE;
    }
    
    /**
     * Before Save Callback
     * @param array $options
     * @return boolean
     */
    public function beforeSave($options = array()) {
        // a file has been uploaded so grab the filepath
        if (!empty($this->data[$this->alias]['filepath'])) {
            $this->data[$this->alias]['attachment'] = $this->data[$this->alias]['filepath'];
        }
        
        return parent::beforeSave($options);
    }
    
    /**
     * Before Validation
     * @param array $options
     * @return boolean
     */
    public function beforeValidate($options = array()) {
        // ignore empty file - causes issues with form validation when file is empty and optional
        if (!empty($this->data[$this->alias]['attachment']['error']) && $this->data[$this->alias]['attachment']['error']==4 && $this->data[$this->alias]['attachment']['size']==0) {
            unset($this->data[$this->alias]['attachment']);
        }
    
        parent::beforeValidate($options);
    }
}