<?php

class Search extends CFormModel {

    public $start;
    public $end;

    public function rules() {
        return array(
            array('start, end', 'required'),
            array('start', 'checkDate'),
        );
    }

    public function attributeLabels() {
        return array(
            'start' => 'วันที่เริ่มต้น',
            'end' => 'วันที่สิ้นสุด',
        );
    }

    public function checkDate() {
        if (!$this->hasErrors())
            if ($this->start > $this->end) {
                $this->addError('start', 'วันที่เริ่มต้นต้องไม่มากว่าวันที่สิ้นสุด');
            }
    }

}
