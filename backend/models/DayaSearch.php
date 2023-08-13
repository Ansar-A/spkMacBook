<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Daya;

/**
 * DayaSearch represents the model behind the search form of `common\models\Daya`.
 */
class DayaSearch extends Daya
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_daya', 'informasi_baterai'], 'integer'],
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
        $query = Daya::find();

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
            'id_daya' => $this->id_daya,
            'informasi_baterai' => $this->informasi_baterai,
        ]);

        return $dataProvider;
    }
}
