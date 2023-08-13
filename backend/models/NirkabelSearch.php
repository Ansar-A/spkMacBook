<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Nirkabel;

/**
 * NirkabelSearch represents the model behind the search form of `common\models\Nirkabel`.
 */
class NirkabelSearch extends Nirkabel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_nirkabel'], 'integer'],
            [['wifi', 'bluetooth'], 'safe'],
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
        $query = Nirkabel::find();

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
            'id_nirkabel' => $this->id_nirkabel,
        ]);

        $query->andFilterWhere(['like', 'wifi', $this->wifi])
            ->andFilterWhere(['like', 'bluetooth', $this->bluetooth]);

        return $dataProvider;
    }
}
