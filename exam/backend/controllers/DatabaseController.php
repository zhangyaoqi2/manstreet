<?php
namespace backend\controllers;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Admin;
use yii\web\UploadedFile;
use yii\web\Session;

/**
 * Site controller
 */
class DatabaseController extends CommonController
{
	public $layout = false;
    public $enableCsrfValidation= false;

    public function actionIndex()
    {
        return $this->render('database');
    } 
}