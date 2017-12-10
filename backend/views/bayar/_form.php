<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Anggota;
use common\models\CaraBayar;
use common\models\JenisBayar;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\Bayar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bayar-form">

    <?php $form = ActiveForm::begin(); ?>


    
    <?= $form->field($model, 'anggota_id')->widget(Select2::classname(), [
        
        
        'data' => ArrayHelper::map(Anggota::find()->all(),'anggota_id','anggota_nama'),
        'language' => 'en',
       // 'tabindex' => false,
        'options' => ['placeholder' => 'Pilih Anggota'],
        'pluginOptions' => [
            'allowClear' => true
            ],
        ]);
  
    ?>
    
    <?= $form->field($model, 'bayar_tgl')->textInput() ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>


     <?= $form->field($model, 'cara_bayar_id')->widget(Select2::classname(), [
        
        
        'data' => ArrayHelper::map(CaraBayar::find()->all(),'cara_bayar_id','cara_bayar_nama'),
        'language' => 'en',
       // 'tabindex' => false,
        'options' => ['placeholder' => 'Pilih Cara Bayar'],
        'pluginOptions' => [
            'allowClear' => true
            ],
        ]);
  
    ?>
    
    
    
       <?= $form->field($model, 'jenis_bayar_id')->widget(Select2::classname(), [
        
        
        'data' => ArrayHelper::map(JenisBayar::find()->all(),'jenis_bayar_id','jenis_bayar_nama'),
        'language' => 'en',
       // 'tabindex' => false,
        'options' => ['placeholder' => 'Pilih Jenis Bayar'],
        'pluginOptions' => [
            'allowClear' => true
            ],
        ]);
  
    ?>
  
    
    
    <?= $form->field($model, 'bukti_file')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bayar_bulan')->textInput() ?>

    <?= $form->field($model, 'ket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'verifikasi')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
