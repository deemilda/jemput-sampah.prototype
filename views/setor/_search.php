<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SetorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-setor-sampah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_setor') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'desa_id') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'desc_sampah_setor') ?>

    <?php // echo $form->field($model, 'diterima_oleh') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
