<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblTransaksi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-transaksi-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'setor_id')->textInput() ?>

        <?= $form->field($model, 'jemput_id')->textInput() ?>

        <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'transaksi')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'jumlah')->textInput() ?>

        <?= $form->field($model, 'nilai')->textInput() ?>

        <?= $form->field($model, 'user_id')->textInput() ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
