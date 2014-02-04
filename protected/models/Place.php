<?php

class Place extends PlaceBase {

    public function rules() {
        return array(
            array('name', 'required'),
            array('name', 'length', 'max' => 255),
            array('place_id, name', 'safe', 'on' => 'search'),
            // เพิ่มเติม
            array('name', 'unique', 'message' => '{value} มีอยู่ในระบบแล้ว กรุณาตรวจสอบ'),
        );
    }

    public function relations() {
        return array(
            'paperApprovals' => array(self::HAS_MANY, 'PaperApproval', 'place_id'),
        );
    }

    public function scopes() {
        return array(
            'desc' => array(
                'order' => 't.place_id desc'
            ),
        );
    }

    public function attributeLabels() {
        return array(
            'place_id' => 'รหัส',
            'name' => 'จุดนัดขึ้นรถ',
        );
    }

    public function search() {
        $criteria = new CDbCriteria;
        $criteria->scopes = array('desc');

        $criteria->compare('place_id', $this->place_id);
        $criteria->compare('name', $this->name, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => Yii::app()->params['pageSize'],
            ),
        ));
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
