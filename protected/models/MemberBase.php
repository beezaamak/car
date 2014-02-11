<?php

class MemberBase extends CActiveRecord
{
	public function tableName()
	{
		return 'tbl_member';
	}
	public function rules()
	{
		return array(
			array('username, password, name, address, tel, email, status, create_at', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('username, password, name, address, email', 'length', 'max'=>255),
			array('tel', 'length', 'max'=>10),
			array('member_id, username, password, name, address, tel, email, status, create_at', 'safe', 'on'=>'search'),
		);
	}
	public function relations()
	{
		return array(
			'news' => array(self::HAS_MANY, 'News', 'member_id'),
			'paperApprovals' => array(self::HAS_MANY, 'PaperApproval', 'member_id'),
			'paperDetails' => array(self::HAS_MANY, 'PaperDetail', 'member_id'),
			'paperDetailAccepts' => array(self::HAS_MANY, 'PaperDetailAccept', 'member_id'),
		);
	}
	public function attributeLabels()
	{
		return array(
			'member_id' => 'รหัส',
			'username' => 'รหัสผู้ใช้',
			'password' => 'รหัสผ่าน',
			'name' => 'ชื่อ - นามสกุล',
			'address' => 'ที่อยู่',
			'tel' => 'โทรศัพท์',
			'email' => 'อีเมล์',
			'status' => 'สถานะ',
			'create_at' => 'สร้างเมื่อ',
		);
	}
        
        public function scopes(){
        return array(
            'desc' => array(
                'order' => 't.member_id desc'
            ),
        );
    }
        
	public function search()
	{

		$criteria=new CDbCriteria;
                $criteria->scopes = array('desc');

		$criteria->compare('member_id',$this->member_id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('create_at',$this->create_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination' => array(
                            'pageSize' => Yii::app()->params['pageSize'],
                        ),
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
