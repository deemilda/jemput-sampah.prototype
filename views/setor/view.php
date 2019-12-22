<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TblSetorSampah */

$this->title = $model->id_setor;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Setor Sampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-setor-sampah-view box box-primary">
    <div class="box-header">
        <?= Html::a('Update', ['update', 'id' => $model->id_setor], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_setor], [
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
                'id_setor',
                'user_id',
                'desa_id',
                'tanggal',
                'desc_sampah_setor',
                'diterima_oleh',
            ],
        ]) ?>
    </div>
</div>
