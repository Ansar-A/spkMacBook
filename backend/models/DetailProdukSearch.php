<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DetailProduk;
use Yii;

/**
 * DetailProdukSearch represents the model behind the search form of `common\models\DetailProduk`.
 */
class DetailProdukSearch extends DetailProduk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_detail', 'ketahanan', 'performa', 'kondisi', 'keamanan', 'get_spk'], 'integer'],
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
        // menghubungkan detail produk ke user sehingga detailProduk dibuat oleh user yang login
        $query = DetailProduk::find();

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
            'id_detail' => $this->id_detail,
            'ketahanan' => $this->ketahanan,
            'performa' => $this->performa,
            'kondisi' => $this->kondisi,
            'keamanan' => $this->keamanan,
            'get_spk' => $this->get_spk,
        ]);

        return $dataProvider;
    }
}
