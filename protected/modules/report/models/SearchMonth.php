<?php

class SearchMonth extends CFormModel {

    public $month;
    public $year;

    public function rules() {
        return array(
            array('year, month', 'required'),
        );
    }

    public function attributeLabels() {
        return array(
            'month' => 'เดือน',
            'year' => 'ปี',
        );
    }

}