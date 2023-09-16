<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\KetahananMacbook;
use common\models\KetDetailKetahanan;
use Yii;

/**
 * KetahananMacbookSearch represents the model behind the search form of `common\models\KetahananMacbook`.
 */
class KetahananMacbookSearch extends KetahananMacbook
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ketahanan', 'baterai', 'kapasitas_pengisian'], 'integer'],
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
        $query = KetahananMacbook::find();

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
            'id_ketahanan' => $this->id_ketahanan,
            'baterai' => $this->baterai,
            'kapasitas_pengisian' => $this->kapasitas_pengisian,
        ]);

        return $dataProvider;
    }
}
