<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Candidatedetails */

$this->title = 'Update Candidatedetails: ' . $model->candidateId;
$this->params['breadcrumbs'][] = ['label' => 'Candidatedetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->candidateId, 'url' => ['view', 'id' => $model->candidateId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="candidatedetails-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>