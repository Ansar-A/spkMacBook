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
            [['id', 'id_servicer', 'id_jenis', 'id_prosesor', 'id_so', 'id_layar', 'id_penyimpanan', 'get_warna', 'get_daya', 'get_nirkabel', 'get_ukuranberat', 'get_kamera', 'get_builtinApps', 'get_audio', 'get_koneksiekspansi'], 'integer'],
            [['id', 'id_servicer', 'id_jenis', 'id_prosesor', 'id_so', 'id_layar', 'id_penyimpanan', 'get_warna', 'get_daya', 'get_nirkabel', 'get_ukuranberat', 'get_kamera', 'get_builtinApps', 'get_audio', 'get_koneksiekspansi', 'nama_produk', 'tahun_rilis', 'photo', 'globalSearch', 'stok'], 'safe'],
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
        // menghubungkan produk dengan user yang login
        if (\Yii::$app->user->can('SuperAdmin')) {
            $query = Produk::find();
        } else if (\Yii::$app->user->can('Admin')) {
            $query = Produk::find()->where(['id_servicer' => Yii::$app->user->identity->id]);
        }
        // add conditions that should always apply here
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            // 'pagination' => array('pageSize' => 6)
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query
            ->orFilterWhere(['like', 'id', $this->globalSearch])
            ->orFilterWhere(['like', 'nama_produk', $this->globalSearch])
            ->orFilterWhere(['like', 'id_jenis', $this->globalSearch])
            ->orFilterWhere(['like', 'harga', $this->globalSearch])
            ->orFilterWhere(['like', 'tahun_rilis', $this->globalSearch]);
        return $dataProvider;
    }
}
