<?php

class CarListController extends Controller {

    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Car');

        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionDetail($id = null) {
        if ($id != null) {
            $this->render('detail', array(
                'model' => $this->loadModel($id),
            ));
        } else {
            throw new CHttpException(404, 'ผิดพลาดการดึงข้อมูลรถ ลองใหม่อีกครั้ง');
        }
    }

    protected function loadModel($id) {
        $model = Car::model()->findByPk($id);
        if (empty($model))
            throw new CHttpException(404, 'ผิดพลาดการดึงข้อมูลรถ ลองใหม่อีกครั้ง');

        return $model;
    }

}
