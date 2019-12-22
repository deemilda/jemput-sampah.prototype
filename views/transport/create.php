<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblTransport */

$this->title = 'Create Tbl Transport';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Transports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-transport-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
