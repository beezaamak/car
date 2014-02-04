<?php

class WebUser extends CWebUser {

    public function isAdmin() {
        $member = Member::model()->findByPk(Yii::app()->user->id);
        if ($member->status == 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getAdmins() {
        $_members = array();
        $member = Member::model()->admin()->findAll();
        foreach ($member as $value) {
            array_push($_members, $value->username);
        }

        return $_members;
    }

    public function isMember() {
        $member = Member::model()->findByPk(Yii::app()->user->id);
        if ($member->status == 2) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getMembers() {
        $_members = array();
        $member = Member::model()->member()->findAll();
        foreach ($member as $value) {
            array_push($_members, $value->username);
        }

        return $_members;
    }

}
