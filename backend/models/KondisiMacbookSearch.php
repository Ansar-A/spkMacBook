<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\KondisiMacbook;

/**
 * KondisiMacbookSearch represents the model behind the search form of `common\models\KondisiMacbook`.
 */
class KondisiMacbookSearch extends KondisiMacbook
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kondisi', 'kondisi_layar', 'keyboard', 'tracpad', 'audio', 'kamera', 'koneksi', 'kondisi_port'], 'integer'],
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
        $query = KondisiMacbook::find();

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
            'id_kondisi' => $this->id_kondisi,
            'kondisi_layar' => $this->kondisi_layar,
            'keyboard' => $this->keyboard,
            'tracpad' => $this->tracpad,
            'audio' => $this->audio,
            'kamera' => $this->kamera,
            'koneksi' => $this->koneksi,
            'kondisi_port' => $this->kondisi_port,
        ]);

        return $dataProvider;
    }
}
