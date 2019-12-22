<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblCatInfo */

$this->title = 'Update Tbl Cat Info: ' . $model->id_category;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Cat Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_category, 'url' => ['view', 'id' => $model->id_category]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-cat-info-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
