<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Produk;
use Yii;

/**
 * ProdukSearch represents the model behind the search form of `common\models\Produk`.
 */
class ProdukSearch extends Produk
{
    /**
     * {@inheritdoc}
     */
    public $globalSearch;
    public function rules()
    {
        return [
            [['id', 'id_servicer', 'id_jenis',  'id_so',   'get_warna', 'get_daya', 'get_nirkabel',  'get_kamera', 'get_builtinApps', 'get_audio', 'get_koneksiekspansi'], 'integer'],
            [['id', 'id_servicer', 'id_jenis', 'id_prosesor', 'id_so', 'id_layar', 'id_penyimpanan', 'get_warna', 'get_daya', 'get_nirkabel',  'get_kamera', 'get_builtinApps', 'get_audio', 'get_koneksiekspansi', 'nama_produk',  'photo', 'globalSearch', 'no_seri', 'status_produk'], 'safe'],
            [['tinggi', 'panjang', 'lebar', 'berat'], 'string'],
            [['harga'], 'number'],
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
            $query = Produk::find()->joinWith('user');
        } else if (\Yii::$app->user->can('Toko')) {
            $query = Produk::find()->where(['id_servicer' => Yii::$app->user->identity->id]);
        } else if (\Yii::$app->user->can('Personal')) {
            $query = Produk::find()->where(['id_servicer' => Yii::$app->user->identity->id]);
        }
        $pageSize = 10;
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => $pageSize,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        if (\Yii::$app->user->can('Administrator')) {
            $query
                ->orFilterWhere(['like', 'produk.id', $this->globalSearch])
                ->orFilterWhere(['like', 'nama_produk', $this->globalSearch])
                ->orFilterWhere(['=', 'user.username', $this->globalSearch])
                ->orFilterWhere(['like', 'harga', $this->globalSearch])
                ->orFilterWhere(['=', 'user.role', $this->globalSearch])
                ->orFilterWhere(['like', 'status_produk', $this->globalSearch])
                ->orFilterWhere(['like', 'tinggi', $this->globalSearch])
                ->orFilterWhere(['like', 'lebar', $this->globalSearch])
                ->orFilterWhere(['like', 'panjang', $this->globalSearch])
                ->orFilterWhere(['like', 'berat', $this->globalSearch]);
        } else {
            $query
                ->andFilterWhere(['like', 'nama_produk', $this->nama_produk])
                ->andFilterWhere(['like', 'harga', $this->harga])
                ->andFilterWhere(['=', 'so.jenis' => $this->id_so])
                ->andFilterWhere(['like', 'produk.status_produk', $this->status_produk]);
        }
        return $dataProvider;
    }
}
