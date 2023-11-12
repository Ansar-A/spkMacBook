<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\LikeProduk;

/**
 * LikeProdukSearch represents the model behind the search form of `common\models\LikeProduk`.
 */
class LikeProdukSearch extends LikeProduk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'produk_id', 'user_id'], 'integer'],
            [['created_at'], 'safe'],
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
        $query = LikeProduk::find();

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
            'id' => $this->id,
            'produk_id' => $this->produk_id,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
        ]);

        return $dataProvider;
    }
}
