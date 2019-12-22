<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblInfo */

$this->title = 'Create Tbl Info';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-info-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
