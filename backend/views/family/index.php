<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FamilySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Anggota Keluarga ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="family-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('+ Anggota Keluarga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'family_id',
            'anggota.anggota_nama',
            'familyKat.family_kat_nama',
            'nama',
            'jenis_kelamin',
            // 'tempat_lahir',
            // 'tgl_lahir',
            'pekerjaan.pekerjaan_nama',
            'pendidikan.pendidikan_nama',
            // 'foto',
            // 'family_ket',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
