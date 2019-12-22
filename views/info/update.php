<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblInfo */

$this->title = 'Update Tbl Info: ' . $model->id_info;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_info, 'url' => ['view', 'id' => $model->id_info]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-info-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
