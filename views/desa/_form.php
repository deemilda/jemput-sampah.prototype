<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblDesa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-desa-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'id_desa')->textInput() ?>

        <?= $form->field($model, 'nama_desa')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'desc')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'nama_petugas')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
