<?php

class Lists {

    public static function position() {
        return CHtml::listData(Position::model()->desc()->findAll(), 'position_id', 'name');
    }

    public static function personnel() {
        return CHtml::listData(Personnel::model()->findAll(), 'personnel_id', 'positionANDname');
    }

    public static function brand() {
        return CHtml::listData(Brand::model()->desc()->findAll(), 'brand_id', 'name');
    }
    
    public static function place() {
        return CHtml::listData(Place::model()->desc()->findAll(), 'place_id', 'name');
    }
    
    public static function car(){
        return CHtml::listData(Car::model()->desc()->notWorking()->findAll(), 'car_id', 'license_no');
    }

}
