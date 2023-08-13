<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DataSpk;

/**
 * DataSpkSearch represents the model behind the search form of `common\models\DataSpk`.
 */
class DataSpkSearch extends DataSpk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_spk', 'rSquare', 'dataF', 'dataT'], 'integer'],
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
        $query = DataSpk::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => array('pageSize' => 4),
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_spk' => $this->id_spk,
            'rSquare' => $this->rSquare,
            'dataF' => $this->dataF,
            'dataT' => $this->dataT,
        ]);

        return $dataProvider;
    }
}
