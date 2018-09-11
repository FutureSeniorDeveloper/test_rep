<?php

namespace app\controllers\admin;

use app\controllers\AppController;

class UserController extends Controller
{
	public function actionIndex()
	{
		return $this->render('index');
	}
}