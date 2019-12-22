<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblTransport */

$this->title = 'Update Tbl Transport: ' . $model->id_transport;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Transports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_transport, 'url' => ['view', 'id' => $model->id_transport]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-transport-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
