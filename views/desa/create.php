<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblDesa */

$this->title = 'Create Tbl Desa';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Desas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-desa-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
