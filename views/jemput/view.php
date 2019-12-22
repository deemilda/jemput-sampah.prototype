<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TblJemputSampah */

$this->title = $model->id_jemput;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Jemput Sampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-jemput-sampah-view box box-primary">
    <div class="box-header">
        <?= Html::a('Update', ['update', 'id' => $model->id_jemput], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_jemput], [
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
                'id_jemput',
                'user_id',
                'transport_id',
                'tanggal',
                'desc_sampah_jemput',
                'dijemput_oleh',
            ],
        ]) ?>
    </div>
</div>
