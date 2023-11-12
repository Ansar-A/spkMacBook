<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SpkKelayakan;

/**
 * SpkKelayakanSearch represents the model behind the search form of `common\models\SpkKelayakan`.
 */
class SpkKelayakanSearch extends SpkKelayakan
{
    /**
     * {@inheritdoc}
     */
    public $globalSearch;
    public function rules()
    {
        return [
            [['id_kelayakan', 'dataR',  'Rsquare', 'dataF', 'get_produk'], 'integer'],
            [['T_ketahanan', 'T_keamanan', 'T_kondisi', 'T_performa'], 'number'],
            [['globalSearch'], 'safe'],
            // ['kode_produk', 'string']
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
        $query = SpkKelayakan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_kelayakan' => $this->id_kelayakan,
            'dataR' => $this->dataR,
            'Rsquare' => $this->Rsquare,
            'dataF' => $this->dataF,
            'T_ketahanan' => $this->T_ketahanan,
            'T_keamanan' => $this->T_keamanan,
            'T_kondisi' => $this->T_kondisi,
            'T_performa' => $this->T_performa,
            // 'kode_produk' => $this->kode_produk,
            'get_produk' => $this->get_produk,
        ]);

        return $dataProvider;
    }
}
