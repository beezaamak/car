<?php

class ConditionAccept extends CFormModel {

    public $condition;

    public function rules() {
        return array(
            array('condition', 'required'),
        );
    }

    public function attributeLabels() {
        return array(
            'condition' => 'เงื่อนไข',
        );
    }

}
