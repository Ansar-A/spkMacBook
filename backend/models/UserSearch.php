<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\User;
use Yii;

/**
 * UserSearch represents the model behind the search form of `common\models\User`.
 */
class UserSearch extends User
{
    /**
     * {@inheritdoc}
     */
    public $globalSearch;


    public function rules()
    {
        return [
            [['id', 'username', 'status', 'created_at', 'updated_at', 'hp'], 'integer'],
            [['address', 'globalSearch', 'fb'], 'string'],
            [['role'], 'safe']

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
            $query = User::find();
        } else if (\Yii::$app->user->can('Toko')) {
            $query = User::find()->where(['id' => Yii::$app->user->identity->id]);
        } else if (\Yii::$app->user->can('Personal')) {
            $query = User::find()->where(['id' => Yii::$app->user->identity->id]);
        }


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
            'id' => $this->id,
            'status' => $this->status,
            'address' => $this->address,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'hp' => $this->hp,
            'fb' => $this->fb,
            'role' => $this->role,

        ]);

        $query->orFilterWhere(['like', 'username', $this->globalSearch])
            ->orFilterWhere(['like', 'auth_key', $this->globalSearch])
            ->orFilterWhere(['like', 'password_hash', $this->globalSearch])
            ->orFilterWhere(['like', 'password_reset_token', $this->globalSearch])
            ->orFilterWhere(['like', 'email', $this->globalSearch])
            ->orFilterWhere(['like', 'address', $this->globalSearch])
            ->orFilterWhere(['like', 'verification_token', $this->globalSearch])
            ->orFilterWhere(['like', 'fb', $this->globalSearch])
            ->orFilterWhere(['like', 'hp', $this->globalSearch]);
        return $dataProvider;
    }
}
