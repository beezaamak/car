<?php

class FileOther extends CFormModel {

    public $file;

    public function rules() {
        return array(
            array('file', 'file',
                'types' => 'jpg,png,gif,pdf,doc,xls',
                'maxSize' => 1024 * 1024 * 1,
                'tooLarge' => 'ไฟล์มีขนาดเกิน 1 MB กรุณาตรวจสอบ',
                'allowEmpty' => true
            ),
        );
    }

    public function attributeLabels() {
        return array(
            'file' => 'ไฟล์แนบ'
        );
    }

}
