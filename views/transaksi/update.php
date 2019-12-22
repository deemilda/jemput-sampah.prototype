<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblTransaksi */

$this->title = 'Update Tbl Transaksi: ' . $model->id_transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_transaksi, 'url' => ['view', 'id' => $model->id_transaksi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-transaksi-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
