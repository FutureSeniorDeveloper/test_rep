<?php

use app\assets\AppAsset;
use yii\helpers\HTML;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>	
		<title><?= $this->title ?></title>
	<?php $this->head() ?>
</head>
<body>
	<?php $this->beginBody() ?>

	
	<div class="wrap">
		<div class="container">
			<ul class = "nav nav-pills">
				<li role = "presentation" class = "active"><?php echo Html::a('Главная', ['post/index']) ?></li>
				<li role = "presentation"><?php echo Html::a('О нас', ['post/about']) ?></li>
				<li role = "presentation"><?php echo Html::a('Авторизация', ['post/auth']) ?></li>
			</ul>

			<?php if(isset($this->blocks['block1'])): ?>

			<?php echo $this->blocks['block1'] ?>

			<?php endif; ?>

		</div>
		<hr>
		<?= $content ?> 
		<hr>
		<footer>
			<p>&copy; My Company <span><?= date('Y-m-d') ?></span></p>
		</footer>
	</div>	
	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>