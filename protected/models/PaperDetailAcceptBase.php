<?php

class PaperDetailAcceptBase extends CActiveRecord {

    public function tableName() {
        return 'tbl_paper_detail_accept';
    }

    public function rules() {
        return array(
            array('paper_id, member_id, car_id, create_at', 'required'),
            array('paper_id, member_id, car_id', 'numerical', 'integerOnly' => true),
            array('paper_detail_accept_id, paper_id, member_id, car_id, create_at', 'safe', 'on' => 'search'),
        );
    }

    public function relations() {
        return array(
            'car' => array(self::BELONGS_TO, 'Car', 'car_id'),
            'paper' => array(self::BELONGS_TO, 'PaperApproval', 'paper_id'),
            'member' => array(self::BELONGS_TO, 'Member', 'member_id'),
        );
    }

    public function attributeLabels() {
        return array(
            'paper_detail_accept_id' => 'รหัส',
            'paper_id' => 'เลขที่หนังสือ',
            'member_id' => 'ผู้พิจารณา',
            'car_id' => 'รถที่มอบหมาย',
            'create_at' => 'Create At',
        );
    }

    public function scopes() {
        return array(
            'desc' => array(
                'order' => 't.paper_detail_accept_id desc'
            ),
        );
    }

    public function search() {

        $criteria = new CDbCriteria;
        $criteria->scopes = array('desc');

        $criteria->compare('paper_detail_accept_id', $this->paper_detail_accept_id);
        $criteria->compare('paper_id', $this->paper_id);
        $criteria->compare('member_id', $this->member_id);
        $criteria->compare('car_id', $this->car_id);
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
