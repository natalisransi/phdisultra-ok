<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Kecamatan;

/**
 * KecamatanSearch represents the model behind the search form about `common\models\Kecamatan`.
 */
class KecamatanSearch extends Kecamatan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kecamatan_id', 'kabupaten_id'], 'integer'],
            [['kecamatan_kode', 'kecamatan_nama'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Kecamatan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'kecamatan_id' => $this->kecamatan_id,
            'kabupaten_id' => $this->kabupaten_id,
        ]);

        $query->andFilterWhere(['like', 'kecamatan_kode', $this->kecamatan_kode])
            ->andFilterWhere(['like', 'kecamatan_nama', $this->kecamatan_nama]);

        return $dataProvider;
    }
}
