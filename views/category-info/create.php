<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblCatInfo */

$this->title = 'Create Tbl Cat Info';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Cat Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-cat-info-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
