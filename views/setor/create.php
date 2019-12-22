<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblSetorSampah */

$this->title = 'Create Tbl Setor Sampah';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Setor Sampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-setor-sampah-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
