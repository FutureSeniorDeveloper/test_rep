<?php 

namespace app\controllers;

use yii\web\Controller;

class InController extends Controller
{
	public function actionIndex($i = null)
	{
		if($i == 1)
		{
			return $this->render('login');
		}
		else if($i == 2)
		{
			return $this->render('logout');
		}
		return $this->render('index');	
	}

	public function actionUser()
	{		
		$name = 'Alex';
		$surname = 'Adding';
		$father = 'Alexeyvich';

		return $this->render('user', compact('name', 'surname', 'father'));
	}
}
?>