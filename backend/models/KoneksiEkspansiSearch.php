<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\KoneksiEkspansi;

/**
 * KoneksiEkspansiSearch represents the model behind the search form of `common\models\KoneksiEkspansi`.
 */
class KoneksiEkspansiSearch extends KoneksiEkspansi
{
    /**
     * {@inheritdoc}
     */
    public $globalSearch;
    public function rules()
    {
        return [
            [['id_koneksi'], 'integer'],
            [['koneksiEkspansi', 'globalSearch'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = KoneksiEkspansi::find();

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
            'id_koneksi' => $this->id_koneksi,
        ]);

        $query->orFilterWhere(['like', 'koneksiEkspansi', $this->globalSearch]);

        return $dataProvider;
    }
}
