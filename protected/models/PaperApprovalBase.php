<?php

class PaperApprovalBase extends CActiveRecord {

    public function tableName() {
        return 'tbl_paper_approval';
    }

    public function rules() {
        return array(
            array('paper_no, member_id, tel, go, request, length_go, num_person, responsible, place_id, departure_time, back_time, status, create_at', 'required'),
            array('member_id, responsible, place_id, status', 'numerical', 'integerOnly' => true),
            array('paper_no', 'length', 'max' => 100),
            array('tel, go, request, length_go', 'length', 'max' => 255),
            array('num_person', 'length', 'max' => 10),
            array('paper_approval_id, paper_no, member_id, tel, go, request, length_go, num_person, responsible, place_id, departure_time, back_time, status, create_at', 'safe', 'on' => 'search'),
        );
    }

    public function relations() {
        return array(
            'member' => array(self::BELONGS_TO, 'Member', 'member_id'),
            'place' => array(self::BELONGS_TO, 'Place', 'place_id'),
        );
    }

    public function attributeLabels() {
        return array(
            'paper_approval_id' => 'Paper Approval',
            'paper_no' => 'เลขที่หนังสือ',
            'member_id' => 'ผู้ยื่นคำร้อง',
            'tel' => 'เบอร์โทรศัพท์',
            'go' => 'ไปราชการที่',
            'request' => 'ความจำเป็นเพื่อ',
            'length_go' => 'ระยะทางรวมไป-กลับ',
            'num_person' => 'จำนวนผู้รวมเดินทาง',
            'responsible' => 'ผู้รับผิดชอบ',
            'place_id' => 'จุดที่ให้ไปรับ',
            'departure_time' => 'อกเดินทาง เวลา',
            'back_time' => 'กลับ เวลา',
            'status' => 'สถานะ',
            'create_at' => 'วันที่ร้องขอ',
        );
    }

    public function scopes() {
        return array(
            'desc' => array(
                'order' => 't.paper_approval_id desc'
            ),
        );
    }

    public function search() {

        $criteria = new CDbCriteria;
        $criteria->scopes = array('desc');

        $criteria->compare('paper_approval_id', $this->paper_approval_id);
        $criteria->compare('paper_no', $this->paper_no, true);
        $criteria->compare('member_id', $this->member_id);
        $criteria->compare('tel', $this->tel, true);
        $criteria->compare('go', $this->go, true);
        $criteria->compare('request', $this->request, true);
        $criteria->compare('length_go', $this->length_go, true);
        $criteria->compare('num_person', $this->num_person, true);
        $criteria->compare('responsible', $this->responsible);
        $criteria->compare('place_id', $this->place_id);
        $criteria->compare('departure_time', $this->departure_time, true);
        $criteria->compare('back_time', $this->back_time, true);
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
