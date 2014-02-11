<?php

class SearchMonth extends CFormModel {

    public $month;
    public $year;

    public function rules() {
        return array(
            array('year', 'required', 'message' => 'กรุณาเลือก {attribute}'),
        );
    }

    public function attributeLabels() {
        return array(
            'month' => 'เดือน',
            'year' => 'ปี',
        );
    }

}