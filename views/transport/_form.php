<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblTransport */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-transport-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'id_transport')->textInput() ?>

        <?= $form->field($model, 'nama_transport')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'driver')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
