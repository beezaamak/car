<?php

class Brand extends BrandBase {

    public function rules() {
        return array(
            array('name', 'required'),
            array('name', 'length', 'max' => 255),
            array('brand_id, name', 'safe', 'on' => 'search'),
            //เพิ่มเติม
            array('name', 'unique', 'message' => '{value} มีอยู่ในระบบแล้ว กรุณตรวจสอบ'),
        );
    }

    public function relations() {
        return array(
            'cars' => array(self::HAS_MANY, 'Car', 'brand_id'),
        );
    }

    public function scopes() {
        return array(
            'desc' => array(
                'order' => 't.brand_id desc'
            ),
        );
    }

    public function attributeLabels() {
        return array(
            'brand_id' => 'รหัส',
            'name' => 'ยี่ห้อ',
        );
    }

    public function search() {

        $criteria = new CDbCriteria;
        $criteria->scopes = array('desc');

        $criteria->compare('brand_id', $this->brand_id);
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
