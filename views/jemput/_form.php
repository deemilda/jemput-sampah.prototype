<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblJemputSampah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-jemput-sampah-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'id_jemput')->textInput() ?>

        <?= $form->field($model, 'user_id')->textInput() ?>

        <?= $form->field($model, 'transport_id')->textInput() ?>

        <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'desc_sampah_jemput')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'dijemput_oleh')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
