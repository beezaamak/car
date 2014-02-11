<?php

class PaperApprovalController extends Controller {

    public $layout = '//layouts/main';
    public $nameController = 'คำร้องขอใช้รถยนต์ส่วนกลาง';
    public $defaultAction = 'admin';

    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
            'checkMember + view, update, delete'
        );
    }

    public function accessRules() {
        return array(
            array('allow',
                'users' => Yii::app()->user->getMembers(),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function filtercheckMember($filterChain) {
        if ($id = Yii::app()->getRequest()->getParam('id')) {
            $model = $this->loadModel($id);
            if ($model->member_id == Yii::app()->user->id)
                $filterChain->run();
            else
                throw new CHttpException(404, "คุณไม่สามารถทำรายการได้ กรุณาลองใหม่อีกครั้ง");
        }
    }

    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionCreate() {
        $model = new PaperApproval;
        $file = new FileOther();

        $model->member_id = Yii::app()->user->id;
        $model->status = 0;
        $model->create_at = date('Y-m-d H:i:s');

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['PaperApproval']) && isset($_POST['FileOther'])) {
            $model->attributes = $_POST['PaperApproval'];
            $file->attributes = $_POST['FileOther'];

            $file->file = CUploadedFile::getInstance($file, 'file');
            if ($file->file != null) {
                $filename = time() . '.' . $file->file->getExtensionName();
                $file->file->saveAs(Yii::app()->params['pathUpload'] . $filename);
                $model->file = $filename;
            }

            if ($model->save())
                $this->redirect(array('view', 'id' => $model->paper_approval_id));
        }

        $this->render('create', array(
            'model' => $model,
            'file' => $file,
        ));
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $file = new FileOther();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['PaperApproval']) && isset($_POST['FileOther'])) {
            $model->attributes = $_POST['PaperApproval'];
            $file->attributes = $_POST['FileOther'];

            $file->file = CUploadedFile::getInstance($file, 'file');
//            echo '<pre>';
//            print_r($file->file); die;
            $model->validate();
            $file->validate();
            if ($model->getErrors() == null && $file->getErrors() == null) {
                if ($file->file != null) {
                    if ($model->file != null)
                        if (file_exists(Yii::app()->params['pathUpload'] . $model->file))
                            unlink(Yii::app()->params['pathUpload'] . $model->file);

                    if ($file->file != null) {
                        $filename = time() . '.' . $file->file->getExtensionName();
                        $file->file->saveAs(Yii::app()->params['pathUpload'] . $filename);
                        $model->file = $filename;
                    }
                }

                if ($model->save())
                    $this->redirect(array('view', 'id' => $model->paper_approval_id));
            }
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
        $model = new PaperApproval('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['PaperApproval']))
            $model->attributes = $_GET['PaperApproval'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function loadModel($id) {
        $model = PaperApproval::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'paper-approval-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
