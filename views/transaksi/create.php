<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblTransaksi */

$this->title = 'Create Tbl Transaksi';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-transaksi-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
