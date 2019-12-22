<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblJemputSampah */

$this->title = 'Create Tbl Jemput Sampah';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Jemput Sampahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-jemput-sampah-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
