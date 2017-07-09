<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php
	$selectedItems = [1,2,4,13,6];
//echo $_COOKIE['aa']; die;

 $this->registerJs('
 $(document).ready(function(){

 $(document).on("click",".check",function(){


 })
 });
 ', \yii\web\View::POS_READY);

	
	?>

<?php Pjax::begin(['id' => 'user_grid']) ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			['class' => 'yii\grid\CheckboxColumn',
			'name'=>'Selection[]',
			'checkboxOptions' => function ($model, $key, $index, $column) use ($selectedItems) {
				if(in_array($model->id,$selectedItems))
					$arr['checked'] =  true;

				$arr ['value'] = $model->id;
				$arr ['class'] = "check";

				return $arr;
			}
			],

            'id',
            'username',
            'password:ntext',
            'auth_key',
            'password_hash',
            // 'password_reset_token',
            // 'email:email',
            // 'status',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end() ?>	

</div>
<script type="text/javascript">
var arr = [];
        function setCookie(key, value) {
            var expires = new Date();
            expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
            document.cookie = 'arr[]=' + value + ';expires=' + expires.toUTCString();
        }

        function getCookie(key) {
            var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
            return keyValue ? keyValue[2] : null;
        }
</script>