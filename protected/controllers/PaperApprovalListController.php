<?php

class PaperApprovalListController extends Controller {

    public $layout = '//layouts/admin';

    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
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
        $model = new PaperApproval('search');
        $model->unsetAttributes();
        if (isset($_GET['PaperApproval'])) {
            $model->attributes = $_GET['PaperApproval'];
        }

        $this->render('index', array(
            'model' => $model,
            'dataProvider' => $model->getPaperList(),
        ));
    }

    public function actionView($id) {

        $this->renderPartial('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionAccept($id) {
        $model = $this->loadModel($id);
        $model->status = 1;
        if ($model->save()) {
            echo '<meta charset="utf-8" />'
            . '<script>'
            . 'alert("รับเรื่องเรียบร้อย");'
            . 'window.location="' . CHtml::normalizeUrl(array('index')) . '"'
            . '</script>';
        } else {
            echo '<meta charset="utf-8" />'
            . '<script>'
            . 'alert("รับเรื่องไม่สำเร็จ กรุณาลองใหม่อีกครั้ง");'
            . 'window.location="' . CHtml::normalizeUrl(array('index')) . '"'
            . '</script>';
        }
    }

    protected function loadModel($id) {
        $model = PaperApproval::model()->findByPk($id);
        if (empty($model))
            throw new CHttpException(404, 'ผิดพลาดในการดึงข้อมูล ออกมาแสดงผล ลองใหม่อีกครั้ง');

        return $model;
    }

}
