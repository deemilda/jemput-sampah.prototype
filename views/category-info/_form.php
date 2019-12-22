<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblCatInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-cat-info-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'info_id')->textInput() ?>

        <?= $form->field($model, 'name_cat')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'desc')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
