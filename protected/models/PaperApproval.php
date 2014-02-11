<?php

class PaperApproval extends PaperApprovalBase {

    public function rules() {
        return array(
            array('paper_no, member_id, tel, go, request, length_go, num_person, responsible, place_id, departure_time, back_time, status, create_at', 'required'),
            array('member_id, place_id, status', 'numerical', 'integerOnly' => true),
            array('paper_no', 'length', 'max' => 100),
            array('tel, go, request, responsible, length_go', 'length', 'max' => 255),
            array('num_person', 'length', 'max' => 10),
            array('paper_approval_id, paper_no, member_id, tel, go, request, length_go, num_person, responsible, place_id, departure_time, back_time, status, create_at', 'safe', 'on' => 'search'),
            // เพิ่มเติม
            array('paper_no', 'unique', 'message' => '{attribute} มีอยู่ในระบบแล้ว กรุณาตรวจสอบ'),
            array('tel', 'length', 'max' => 10),
            array('tel', 'numerical', 'integerOnly' => true)
        );
    }

    public function relations() {
        return array(
            'member' => array(self::BELONGS_TO, 'Member', 'member_id'),
            'place' => array(self::BELONGS_TO, 'Place', 'place_id'),
            'paperDetail' => array(self::HAS_ONE, 'PaperDetail', 'paper_id'),
            'paperDetailAccept' => array(self::HAS_ONE, 'PaperDetailAccept', 'paper_id'),
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
            'departure_time' => 'ออกเดินทาง เวลา',
            'back_time' => 'กลับ เวลา',
            'status' => 'สถานะ',
            'create_at' => 'วันที่ร้องขอ',
        );
    }

    public function scopes() {
        return array(
            'member' => array(
                'condition' => 't.member_id = :member_id',
                'params' => array(
                    ':member_id' => Yii::app()->user->id,
                ),
            ),
            'consider' => array(
                'condition' => 't.status = 1',
            ),
            'accept' => array(
                'condition' => 't.status = 2',
            ),
            'notAccept' => array(
                'condition' => 't.status = 3',
            ),
            'desc' => array(
                'order' => 't.paper_approval_id desc'
            ),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

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
        $criteria->compare('t.status', $this->status);
        $criteria->compare('create_at', $this->create_at, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => Yii::app()->params['pageSize'],
            ),
        ));
    }

    public function getData() {
        $criteria = new CDbCriteria;
        $criteria->scopes = array(
            'desc',
            'member',
        );

        $criteria->with = array(
            'member',
            'place',
        );

        $criteria->compare('paper_approval_id', $this->paper_approval_id);
        $criteria->compare('paper_no', $this->paper_no, true);
        $criteria->compare('member.name', $this->member_id, true);
        $criteria->compare('tel', $this->tel, true);
        $criteria->compare('go', $this->go, true);
        $criteria->compare('responsible', $this->responsible);
        $criteria->compare('place.name', $this->place_id, true);
        $criteria->compare('t.status', $this->status);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => Yii::app()->params['pageSize'],
            ),
        ));
    }

    public function getPaperList() {
        $criteria = new CDbCriteria;
        $criteria->scopes = array(
            'desc',
        );
        $criteria->with = array(
            'member',
            'place',
        );

        $criteria->compare('paper_approval_id', $this->paper_approval_id);
        $criteria->compare('paper_no', $this->paper_no, true);
        $criteria->compare('member.name', $this->member_id, true);
        $criteria->compare('tel', $this->tel, true);
        $criteria->compare('go', $this->go, true);
        $criteria->compare('responsible', $this->responsible);
        $criteria->compare('place.name', $this->place_id, true);
        $criteria->compare('t.status', $this->status);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => Yii::app()->params['pageSize'],
            ),
        ));
    }

    public function getConsiderList() {
        $criteria = new CDbCriteria;
        $criteria->scopes = array(
            'desc',
            'consider',
        );
        $criteria->with = array(
            'member',
            'place',
        );

        $criteria->compare('paper_approval_id', $this->paper_approval_id);
        $criteria->compare('paper_no', $this->paper_no, true);
        $criteria->compare('member.name', $this->member_id, true);
        $criteria->compare('tel', $this->tel, true);
        $criteria->compare('go', $this->go, true);
        $criteria->compare('responsible', $this->responsible);
        $criteria->compare('place.name', $this->place_id, true);
        $criteria->compare('t.status', $this->status);

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
