<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Candidatedetails */

$this->title = 'Create Candidatedetails';
$this->params['breadcrumbs'][] = ['label' => 'Candidatedetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candidatedetails-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
