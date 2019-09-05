<?php

namespace frontend\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        $data = 'data test';
        return $this->render('index', ['data' => $data]);
    }
    public function actionTest()
    {
        $data = 'test Test';
        return $this->render('test', ['data' => $data]);
    }
}