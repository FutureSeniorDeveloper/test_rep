<?php $this->beginBlock('block1'); ?>

	<h1>Заголовок станицы</h1>

<?php $this->endBlock('block1'); ?>

<?php 
	
	// foreach ($comes as $cam)
	// {
	// 	echo $cam->author . '<br>';	

	// }


	echo '<pre>';
		print_r($comes);
	echo '</pre>';


?>
<div class = "form1">
<h1>Auth Action</h1>
<input type = "text" name = "login" placeholder="Логин..."><br><br>
<input type = "text" name = "pass" placeholder="Пароль..."><br><br>
<input type="submit" name = "sign_in" value = "OK">
</div>
