<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/14
 * Time: 10:39
 */

namespace app\controllers;

use Yii;
use app\models\Status;
use yii\web\Controller;

class StatusController extends Controller
{
    public function actionCreate()
    {
        $model = new Status();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('view',['status'=>$model]);
        } else {
            return $this->render('create',['status'=>$model]);
        }
    }
}