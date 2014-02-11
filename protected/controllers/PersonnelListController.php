<?php

class PersonnelListController extends Controller {

    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Personnel');
        
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

}
