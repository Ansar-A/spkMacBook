<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SpkKelayakan;

/**
 * SpkKelayakanSearch represents the model behind the search form of `common\models\SpkKelayakan`.
 */
class SpkKelayakanSearch extends SpkKelayakan
{
    /**
     * {@inheritdoc}
     */
    public $budgetMin;
    public $budgetMax;

    public function rules()
    {
        return [
            [['id_kelayakan', 'dataRKetahanan', 'dataRKeamanan', 'dataRKondisi', 'dataRPerforma', 'RsquareKetahanan', 'RsquareKeamanan', 'RsquareKondisi', 'RsquarePerforma', 'dataFKetahanan', 'dataFKeamanan', 'dataFKondisi', 'dataFPerforma', 'get_produk', 'budgetMin', 'budgetMax'], 'integer'],
            [['T_cicleCount', 'T_kapasitasPengisian', 'T_noSeri', 'T_garansi', 'T_ram', 'T_vga', 'T_presesor', 'T_storage', 'T_layar', 'T_keyboard', 'T_tracpad', 'T_audio', 'T_kamera', 'T_koneksi', 'T_port'], 'number'],
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
        $query = SpkKelayakan::find()->joinWith('produk')->select(" *, (dataRKetahanan + dataRKeamanan + dataRKondisi + dataRPerforma) / 4 as akumulasi");

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['akumulasi' => SORT_DESC]]
        ]);

        $dataProvider->sort->attributes['akumulasi'] = [
            'asc' => ['akumulasi' => SORT_ASC],
            'desc' => ['akumulasi' => SORT_DESC],
        ];

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if ($this->load($params) && !$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'between', 'produk.harga', $this->budgetMin, $this->budgetMax,
        ]);

        return $dataProvider;
    }
}
