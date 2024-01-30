<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\LikeProduk;
use Yii;

/**
 * LikeProdukSearch represents the model behind the search form of `common\models\LikeProduk`.
 */
class LikeProdukSearch extends LikeProduk
{
    /**
     * {@inheritdoc}
     */
    public $globalSearch;
    public function rules()
    {
        return [
            [['id', 'produk_id', 'user_id', 'globalSearch'], 'integer'],
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
        if (\Yii::$app->user->can('Administrator')) {
            $query = LikeProduk::find();
        } else if (\Yii::$app->user->can('Toko')) {
            $query = LikeProduk::find()->joinWith('kelayakan.produk.user')->where(['id_servicer' => Yii::$app->user->identity->id]);
        } else if (\Yii::$app->user->can('Personal')) {
            $query = LikeProduk::find()->joinWith('kelayakan.produk.user')->where(['id_servicer' => Yii::$app->user->identity->id]);
        }
        // $query = LikeProduk::find();

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
        // $query->andFilterWhere([
        //     'id_like' => $this->id_like,
        //     'get_likeProduk' => $this->get_likeProduk,
        //     'get_pengguna' => $this->get_pengguna,

        // ]);
        $query->orFilterWhere(['like', 'id', $this->globalSearch])
            ->orFilterWhere(['like', 'produk_id', $this->globalSearch])
            ->orFilterWhere(['like', 'user_id', $this->globalSearch]);

        return $dataProvider;
    }
}
