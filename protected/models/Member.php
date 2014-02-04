<?php

class Member extends MemberBase {

    public function rules() {
        return array(
            array('name, address, tel, email, status, create_at', 'required'),
            array('status', 'numerical', 'integerOnly' => true),
            array('name, address, email', 'length', 'max' => 255),
            array('tel', 'length', 'max' => 10),
            array('member_id, name, address, tel, email, status, create_at', 'safe', 'on' => 'search'),
        );
    }

    public function relations() {
        return array(
            'paperApprovals' => array(self::HAS_MANY, 'PaperApproval', 'member_id'),
        );
    }

    public function attributeLabels() {
        return array(
            'member_id' => 'รหัส',
            'name' => 'ชื่อ - นามสกุล',
            'address' => 'ที่อยู่',
            'tel' => 'โทรศัพท์',
            'email' => 'อีเมล์',
            'status' => 'สถานะ',
            'create_at' => 'สร้างเมื่อ',
        );
    }

    public function scopes() {
        return array(
            'admin' => array(
                'condition' => 't.status = 0',
            ),
            'manager' => array(
                'condition' => 't.status = 1',
            ),
            'member' => array(
                'condition' => 't.status = 2',
            ),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('member_id', $this->member_id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('tel', $this->tel, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('status', $this->status);
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
