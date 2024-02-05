<?php

namespace frontend\models;

use common\models\Produk;
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
    public $budgetMin;
    public $budgetMax;

    public function rules()
    {
        return [
            [['id_kelayakan', 'dataR', 'Rsquare', 'dataF', 'T_ketahanan',  'T_keamanan',  'T_kondisi',  'T_performa', 'get_produk', 'budgetMin', 'budgetMax'], 'integer'],
            [['get_produk'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::class, 'targetAttribute' => ['get_produk' => 'id']],
            ['nilai', 'safe']
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
        $query = SpkKelayakan::find()->joinWith('produk')->select("*, Rsquare as akumulasi, dataR as akumulasiR, dataF as akumulasiF");


        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'akumulasi' => SORT_DESC,
                    'akumulasiR' => SORT_DESC,
                    'akumulasiF' => SORT_ASC,
                    'baterai' => SORT_ASC,
                ],
            ],
        ]);

        $dataProvider->sort->attributes['akumulasi'] = [
            'asc' => ['akumulasi' => SORT_ASC],
            'desc' => ['akumulasi' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['akumulasiR'] = [
            'asc' => ['akumulasiR' => SORT_ASC],
            'desc' => ['akumulasiR' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['akumulasiF'] = [
            'asc' => ['akumulasiF' => SORT_ASC],
        ];

        $dataProvider->sort->attributes['baterai'] = [
            'asc' => ['baterai' => SORT_ASC],
        ];
        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'between', 'produk.harga', $this->budgetMin, $this->budgetMax,
        ]);

        return $dataProvider;
    }
}
