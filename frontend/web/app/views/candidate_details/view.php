<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Candidatedetails */

$this->title = $model->candidateId;
$this->params['breadcrumbs'][] = ['label' => 'Candidatedetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candidatedetails-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->candidateId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->candidateId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'candidateId',
            'candidateName',
            'experience',
            'expectedSalary',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
