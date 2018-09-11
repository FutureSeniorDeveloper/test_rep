<?php

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
	public static function tableName()
	{
		return 'categories';
	}

	public function getComments()
	{
		return $this->hasMany(Comment::className(), ['post' => 'id']);
	}
}

?>