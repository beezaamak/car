<?php

class AcceptController extends Controller {

    public $layout = '//layouts/admin';
    public $nameController = 'รายงานข้อมูลขอใช้รถยนต์ส่วนกลาง';

    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    public function accessRules() {
        return array(
            array('allow',
                'users' => Yii::app()->user->getAdmins(),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionIndex() {
        $model = new SearchMonth('search');

        $this->render('index', array(
            'model' => $model,
        ));
    }

}
