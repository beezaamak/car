<?php

class Position extends PositionBase {

    public function rules() {
        return array(
            array('name', 'required'),
            array('name', 'length', 'max' => 255),
            array('position_id, name', 'safe', 'on' => 'search'),
        );
    }

    public function relations() {
        return array(
            'personnels' => array(self::HAS_MANY, 'Personnel', 'position_id'),
        );
    }

    public function scopes() {
        return array(
            'desc' => array(
                'order' => 't.position_id desc'
            ),
        );
    }

    public function attributeLabels() {
        return array(
            'position_id' => 'รหัส',
            'name' => 'ตำแหน่ง',
        );
    }

    public function search() {
        $criteria = new CDbCriteria;
        $criteria->scopes = array('desc');

        $criteria->compare('position_id', $this->position_id);
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
