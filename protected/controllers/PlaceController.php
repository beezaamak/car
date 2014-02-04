<?php

class PlaceController extends Controller
{
	public $layout='//layouts/admin';
        public $nameController = 'จุดนัดขึ้นรถ';
        public $defaultAction = 'admin';
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
	public function accessRules()
	{
		return array(
			array('allow',
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	public function actionCreate()
	{
		$model=new Place;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Place']))
		{
			$model->attributes=$_POST['Place'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->place_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Place']))
		{
			$model->attributes=$_POST['Place'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->place_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
	public function actionAdmin()
	{
		$model=new Place('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Place']))
			$model->attributes=$_GET['Place'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	public function loadModel($id)
	{
		$model=Place::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='place-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
