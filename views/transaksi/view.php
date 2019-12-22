<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TblTransaksi */

$this->title = $model->id_transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-transaksi-view box box-primary">
    <div class="box-header">
        <?= Html::a('Update', ['update', 'id' => $model->id_transaksi], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_transaksi], [
            'class' => 'btn btn-danger btn-flat',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id_transaksi',
                'setor_id',
                'jemput_id',
                'tanggal',
                'transaksi',
                'jumlah',
                'nilai',
                'user_id',
            ],
        ]) ?>
    </div>
</div>
