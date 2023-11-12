<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Pengguna;

/**
 * PenggunaSearch represents the model behind the search form of `common\models\Pengguna`.
 */
class PenggunaSearch extends Pengguna
{
    /**
     * {@inheritdoc}
     */
    public $globalSearch;
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['username', 'password_hash', 'email', 'auth_key', 'password_reset_token', 'created_at', 'updated_at', 'verification_token', 'address',  'globalSearch'], 'safe'],
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
        $query = Pengguna::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => array('pageSize' => 4)
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
            'status' => $this->status,
        ]);

        $query->orFilterWhere(['like', 'username', $this->globalSearch])
            ->orFilterWhere(['like', 'password_hash', $this->globalSearch])
            ->orFilterWhere(['like', 'email', $this->globalSearch])
            ->orFilterWhere(['like', 'auth_key', $this->globalSearch])
            ->orFilterWhere(['like', 'password_reset_token', $this->globalSearch])
            ->orFilterWhere(['like', 'created_at', $this->globalSearch])
            ->orFilterWhere(['like', 'updated_at', $this->globalSearch])
            ->orFilterWhere(['like', 'verification_token', $this->globalSearch])
            ->orFilterWhere(['like', 'address', $this->globalSearch]);

        return $dataProvider;
    }
}
