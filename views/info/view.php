<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TblInfo */

$this->title = $model->id_info;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-info-view box box-primary">
    <div class="box-header">
        <?= Html::a('Update', ['update', 'id' => $model->id_info], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_info], [
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
                'id_info',
                'user_id',
                'author',
                'desc_info',
            ],
        ]) ?>
    </div>
</div>
