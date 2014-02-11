<?php

class NewsBase extends CActiveRecord {

    public function tableName() {
        return 'tbl_news';
    }

    public function rules() {
        return array(
            array('member_id, subject, description, pic, create_at, update_at', 'required'),
            array('member_id', 'numerical', 'integerOnly' => true),
            array('subject, pic', 'length', 'max' => 255),
            array('news_id, member_id, subject, description, pic, create_at, update_at', 'safe', 'on' => 'search'),
        );
    }

    public function relations() {
        return array(
            'member' => array(self::BELONGS_TO, 'Member', 'member_id'),
        );
    }

    public function attributeLabels() {
        return array(
            'news_id' => 'รหัส',
            'member_id' => 'Member',
            'subject' => 'หัวข้อข่าว',
            'description' => 'รายละเอียด',
            'pic' => 'Pic',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        );
    }

    public function scopes() {
        return array(
            'desc' => array(
                'order' => 't.news_id desc'
            ),
        );
    }

    public function search() {

        $criteria = new CDbCriteria;
        $criteria->scopes = array('desc');

        $criteria->compare('news_id', $this->news_id);
        $criteria->compare('member_id', $this->member_id);
        $criteria->compare('subject', $this->subject, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('pic', $this->pic, true);
        $criteria->compare('create_at', $this->create_at, true);
        $criteria->compare('update_at', $this->update_at, true);

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
