<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\jemputSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Jemput Sampahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-jemput-sampah-index box box-primary">
    <?php Pjax::begin(); ?>
    <div class="box-header with-border">
        <?= Html::a('Create Tbl Jemput Sampah', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id_jemput',
                'user_id',
                'transport_id',
                'tanggal',
                'desc_sampah_jemput',
                // 'dijemput_oleh',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
    <?php Pjax::end(); ?>
</div>
