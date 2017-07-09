<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CandidatedetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Candidatedetails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candidatedetails-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Candidatedetails', ['create'], ['class' => 'pull-right btn btn-success']) ?>
		
    </p>
	<div class='clear'></div>
		<?= Html::a('Create Bulk Candidates', ['create-multiple-candidates'], ['class' => 'pull-right btn btn-success']) ?>
<?php Pjax::begin(); ?>
<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'candidateId',
            'candidateName',
            'experience',
            'expectedSalary',
           // 'status',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
