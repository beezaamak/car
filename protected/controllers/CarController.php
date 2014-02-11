<?php

class CarController extends Controller {

    public $layout = '//layouts/admin';
    public $nameController = 'รถยนต์ส่วนกลาง';
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
                'users' => Yii::app()->user->getAdmins(),
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
        $model = new Car;
        $file = new File;
        $model->create_at = date('Y-m-d');

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Car']) && isset($_POST['File'])) {
            $model->attributes = $_POST['Car'];
            $file->attributes = $_POST['File'];

            $file->file = CUploadedFile::getInstance($file, 'file');
            if ($file->file != null) {
                $filename = time() . '.' . $file->file->getExtensionName();
                $file->file->saveAs(Yii::app()->params['pathUpload'] . $filename);
                $model->pic = $filename;
            } else {
                $model->pic = 'noimage.jpg';
            }
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->car_id));
        }

        $this->render('create', array(
            'model' => $model,
            'file' => $file,
        ));
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $file = new File;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Car']) && isset($_POST['File'])) {
            $model->attributes = $_POST['Car'];
            $file->attributes = $_POST['File'];

            $file->file = CUploadedFile::getInstance($file, 'file');
            if ($file->file != null) {
                if (file_exists(Yii::app()->params['pathUpload'] . $model->pic) && $model->pic != 'noimage.jpg')
                    unlink(Yii::app()->params['pathUpload'] . $model->pic);

                if ($file->file != null) {
                    $filename = time() . '.' . $file->file->getExtensionName();
                    $file->file->saveAs(Yii::app()->params['pathUpload'] . $filename);
                    $model->pic = $filename;
                }
            }

            if ($model->save())
                $this->redirect(array('view', 'id' => $model->car_id));
        }

        $this->render('update', array(
            'model' => $model,
            'file' => $file,
        ));
    }

    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    public function actionAdmin() {
        $model = new Car('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Car']))
            $model->attributes = $_GET['Car'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function loadModel($id) {
        $model = Car::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'car-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
