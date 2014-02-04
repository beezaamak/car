<?php

class PersonnelController extends Controller {

    public $layout = '//layouts/admin';
    public $nameController = 'พนักงานขับรถ';
    public $defaultAction = 'admin';

    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    public function accessRules() {
        return array(
            array('allow',
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionCreate() {
        $model = new Personnel;
        $model->create_at = date('Y-m-d');
        
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Personnel'])) {
            $model->attributes = $_POST['Personnel'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->personnel_id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Personnel'])) {
            $model->attributes = $_POST['Personnel'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->personnel_id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    public function actionAdmin() {
        $model = new Personnel('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Personnel']))
            $model->attributes = $_GET['Personnel'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function loadModel($id) {
        $model = Personnel::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'personnel-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
