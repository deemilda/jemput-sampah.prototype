<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblJemputSampah */

$this->title = 'Update Tbl Jemput Sampah: ' . $model->id_jemput;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Jemput Sampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jemput, 'url' => ['view', 'id' => $model->id_jemput]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-jemput-sampah-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
