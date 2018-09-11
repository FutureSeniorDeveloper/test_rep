<?php 

	namespace app\controllers;

	use yii\web\Controller;
	use app\models\TestForm;
	use app\models\Category;
	use Yii;

	class PostController extends Controller
	{
		public $layout = 'basic';

		public function actionIndex()
		{			
			$this->view->title = 'Index Page';

			if(Yii::$app->request->isAjax)
			{
				return 'index';
			}

			$model = new TestForm;

			if($model->load(Yii::$app->request->post()))
			{				
				if($model->validate())
				{
					Yii::$app->session->setFlash('success', 'Данные приняты.');
					return $this->refresh();
				}
				else
				{
					Yii::$app->session->setFlash('error', 'Ошибка...');
				}
			}

			

			return $this->render('index', compact('model'));			
		}
		
		public function actionAbout()
		{
			return $this->render('about');
		}

		public function actionAuth()
		{
			$this->view->title = 'Auth';
			$this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики...']);
			$this->view->registerMetaTag(['name' => 'description', 'content' => 'описание станицы...']);

			// $comes = Comment::find()->all();
			// $comes = Comment::find()->orderBy(['id' => SORT_DESC])->all();
			// $comes = Comment::find()->asArray()->all();
			// $comes = Comment::find()->asArray()->where('post=6')->all();
			// $comes = Comment::find()->asArray()->where(['post' => 6])->all();
			// $comes = Comment::find()->asArray()->where(['like', 'author', 'ша'])->all();
			// $comes = Comment::find()->asArray()->where(['<=', 'id', 1])->all();
			// $comes = Comment::find()->asArray()->where('post=6')->limit(1)->all();
			// $comes = Comment::findOne(['post' => 6]);	
			// $comes = Comment::findAll(['post' => 6]);
			// $query = "SELECT * FROM comments WHERE author LIKE '%а%'";
			// $comes = Comment::findBySql($query)->all();
			// $query = "SELECT * FROM comments WHERE author LIKE :search";
			// $comes = Comment::findBySql($query, [':search' => '%а%'])->all();

			$comes = Category::findOne(1);

			return $this->render('auth', compact('comes'));
		}
	}
 ?>