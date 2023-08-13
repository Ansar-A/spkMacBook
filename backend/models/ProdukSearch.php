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
    public function rules()
    {
        return [
            [['id', 'id_servicer', 'id_jenis', 'id_prosesor', 'id_so', 'id_layar', 'id_penyimpanan', 'get_warna', 'get_daya', 'get_nirkabel', 'get_ukuranberat', 'get_kamera', 'get_builtinApps', 'get_audio', 'get_koneksiekspansi', 'get_detaill'], 'integer'],
            [['nama_produk', 'tahun_rilis', 'photo'], 'safe'],
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
        $query = Produk::find()->where(['id_servicer' => Yii::$app->user->identity->id]);

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
            'id' => $this->id,
            'id_servicer' => $this->id_servicer,
            'tahun_rilis' => $this->tahun_rilis,
            'id_jenis' => $this->id_jenis,
            'id_prosesor' => $this->id_prosesor,
            'id_so' => $this->id_so,
            'id_layar' => $this->id_layar,
            'id_penyimpanan' => $this->id_penyimpanan,
            'get_warna' => $this->get_warna,
            'get_daya' => $this->get_daya,
            'get_nirkabel' => $this->get_nirkabel,
            'get_ukuranberat' => $this->get_ukuranberat,
            'get_kamera' => $this->get_kamera,
            'get_builtinApps' => $this->get_builtinApps,
            'get_audio' => $this->get_audio,
            'get_koneksiekspansi' => $this->get_koneksiekspansi,
            'harga' => $this->harga,
            'get_detaill' => $this->get_detaill,
        ]);

        $query->andFilterWhere(['like', 'nama_produk', $this->nama_produk])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
