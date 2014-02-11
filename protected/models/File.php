<?php

class File extends CFormModel {

    public $file;

    public function rules() {
        return array(
            array('file', 'file', 'types' => 'jpg,png,gif', 'allowEmpty' => true),
        );
    }

    public function attributeLabels() {
        return array(
            'file' => 'รูปภาพ'
        );
    }

}
