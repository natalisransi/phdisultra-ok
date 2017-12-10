<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Pekerjaan;
use common\models\Pendidikan;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\Anggota */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anggota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'anggota_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anggota_t4_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anggota_tgl_lahir')->textInput() ?>

   
    <?= $form->field($model, 'pekerjaan_id')->widget(Select2::classname(), [
        
        
        'data' => ArrayHelper::map(Pekerjaan::find()->all(),'pekerjaan_id','pekerjaan_nama'),
        'language' => 'en',
       // 'tabindex' => false,
        'options' => ['placeholder' => 'Pilih Pekerjaan'],
        'pluginOptions' => [
            'allowClear' => true
            ],
        ]);
  
    ?>
  
    <?= $form->field($model, 'pendidikan_id')->widget(Select2::classname(), [
        
        
        'data' => ArrayHelper::map(Pendidikan::find()->all(),'pendidikan_id','pendidikan_nama'),
        'language' => 'en',
       // 'tabindex' => false,
        'options' => ['placeholder' => 'Pilih Pendidikan'],
        'pluginOptions' => [
            'allowClear' => true
            ],
        ]);
  
    ?>


    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
