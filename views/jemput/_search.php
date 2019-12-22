<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\jemputSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-jemput-sampah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_jemput') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'transport_id') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'desc_sampah_jemput') ?>

    <?php // echo $form->field($model, 'dijemput_oleh') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
