<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblSetorSampah */

$this->title = 'Update Tbl Setor Sampah: ' . $model->id_setor;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Setor Sampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_setor, 'url' => ['view', 'id' => $model->id_setor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-setor-sampah-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
