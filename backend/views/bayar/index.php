<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BayarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pembayaran';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('+ Bayar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'bayar_id',
            'anggota.anggota_nama',
            'bayar_tgl',
            'jumlah',
            'jenisBayar.jenis_bayar_nama',
            'caraBayar.cara_bayar_nama',
            
            // 'bukti_file',
            // 'bayar_bulan',
            // 'ket',
            // 'verifikasi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
