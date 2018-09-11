<?php 
	
	namespace app\controllers;

	use yii\web\Controller;

	class TestController extends Controller
	{
		public function actionLogin()
		{
			$hel = 'Hello, World test!';
			return $this->render('index', compact('hel'));
		}
	}


 ?>