<?php

class PersonnelBase extends CActiveRecord {

    public function tableName() {
        return 'tbl_personnel';
    }

    public function rules() {
        return array(
            array('name, position_id, tel, create_at', 'required'),
            array('position_id', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 255),
            array('tel', 'length', 'max' => 11),
            array('personnel_id, name, position_id, tel, create_at', 'safe', 'on' => 'search'),
        );
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
            'name' => 'ชื่อ - นามสกุล',
            'position_id' => 'ตำแหน่ง',
            'tel' => 'โทรศัทพ์',
            'create_at' => 'บันทึกเมื่อ',
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
        $criteria->compare('tel', $this->tel, true);
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
