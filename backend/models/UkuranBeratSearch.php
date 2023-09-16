<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UkuranBerat;

/**
 * UkuranBeratSearch represents the model behind the search form of `common\models\UkuranBerat`.
 */
class UkuranBeratSearch extends UkuranBerat
{
    /**
     * {@inheritdoc}
     */
    public $globalSearch;
    public function rules()
    {
        return [
            [['id_ukuranberat'], 'integer'],
            [['tinggi', 'panjang', 'lebar', 'berat'], 'number'],
            [['tinggi', 'panjang', 'lebar', 'berat', 'globalSearch'], 'safe'],
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
        $query = UkuranBerat::find();

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
            'id_ukuranberat' => $this->id_ukuranberat,
            'tinggi' => $this->tinggi,
            'panjang' => $this->panjang,
            'lebar' => $this->lebar,
            'berat' => $this->berat,
        ]);

        $query->orFilterWhere(['like', 'id_ukuranberat', $this->globalSearch])
            ->orFilterWhere(['like', 'tinggi', $this->globalSearch])
            ->orFilterWhere(['like', 'panjang', $this->globalSearch])
            ->orFilterWhere(['like', 'lebar', $this->globalSearch])
            ->orFilterWhere(['like', 'berat', $this->globalSearch]);
        return $dataProvider;
    }
}
