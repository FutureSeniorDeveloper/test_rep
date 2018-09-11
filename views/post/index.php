<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

 ?>
 <h1>Index Page</h1>
 <!-- <button class = "btn btn-success" id = "btn">Click me...</button> -->
<?php 

$js = <<< JS

	$('#btn').on('click', function(){
		$.ajax({
				url: 'index.php?r=post/index',
				data: {'test': '123'},
				type: 'POST',
				success: function(res)
				{
					console.log(res);
				},
				error: function()
				{
					alert('Error!');
				}
			});
	});
JS;

	$this->registerJs($js);

 ?>
<?php if(Yii::$app->session->hasFlash('success')): ?>

	<div class="alert alert-success alert-dismissible" role="alert">

  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times;</span>
  		</button>

  		<span>Данные приняты!</span>
	</div>	

<?php endif; ?>


<?php if(Yii::$app->session->hasFlash('error')): ?>

	<div class="alert alert-danger alert-dismissible" role="alert">

  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times;</span>
  		</button>

  		<strong>Warning!</strong> Better check yourself, you're not looking too good.
	</div>
	
<?php endif; ?>

 <?php $form = ActiveForm::begin(['options' => ['id' => 'testForm']]) ?>

	<?= $form->field($model, 'name') ?>
	<?= $form->field($model, 'email')->input('email') ?>
	<?= $form->field($model, 'text')->textarea(['rows' => 5])  ?>
	<?= Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>

<?php ActiveForm::end() ?>