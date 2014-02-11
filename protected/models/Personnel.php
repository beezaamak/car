<?php

class Personnel extends PersonnelBase {

    public function rules() {
        return array(
            array('name, position_id, tel, create_at', 'required'),
            array('position_id', 'numerical', 'integerOnly' => true),
            array('name, pic', 'length', 'max' => 255),
            array('tel', 'length', 'max' => 11),
            array('personnel_id, name, position_id, tel, pic, create_at', 'safe', 'on' => 'search'),
            // เพิ่มเติม
            array('name', 'unique', 'message' => '{value} มีอยู่ในระบบแล้ว กรุณาตรวจสอบ'),
            array('tel', 'length', 'max' => 10),
        );
    }
    

    public function getPositionANDname() {
        return "({$this->position->name})  {$this->name}";
    }

    public function relations() {
        return array(
            'cars' => array(self::HAS_MANY, 'Car', 'personnel_id'),
            'position' => array(self::BELONGS_TO, 'Position', 'position_id'),
        );
    }

    public function attributeLabels() {
        return array(
            'personnel_id' => 'รหัส',
            'name' => 'ชื่อ - นามสกุล คนขับรถ',
            'position_id' => 'ตำแหน่ง',
            'tel' => 'โทรศัทพ์',
            'create_at' => 'บันทึกเมื่อ',
            'pic' => 'รูปภาพ',
        );
    }

    public function scopes() {
        return array(
            'desc' => array(
                'order' => 't.personnel_id desc'
            ),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;
        $criteria->scopes = array('desc');

        $criteria->compare('personnel_id', $this->personnel_id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('position_id', $this->position_id);
        $criteria->compare('tel', $this->tel);
        $criteria->compare('create_at', $this->create_at, true);

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
