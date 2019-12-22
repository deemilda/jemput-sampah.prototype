<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblDesa */

$this->title = 'Update Tbl Desa: ' . $model->id_desa;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Desas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_desa, 'url' => ['view', 'id' => $model->id_desa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-desa-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
