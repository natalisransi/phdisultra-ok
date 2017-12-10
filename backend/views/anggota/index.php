<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AnggotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Anggota';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anggota-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('+ Anggota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'anggota_id',
            'anggota_nama',
            'jenis_kelamin',
            'anggota_t4_lahir',
            'anggota_tgl_lahir',
            'pekerjaan.pekerjaan_nama',
            'pendidikan.pendidikan_nama',
            // 'foto',
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
