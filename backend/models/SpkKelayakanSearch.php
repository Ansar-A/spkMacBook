<?php

namespace backend\models;

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
    public function rules()
    {
        return [
            [['id_kelayakan', 'dataRKetahanan', 'dataRKeamanan', 'dataRKondisi', 'dataRPerforma', 'RsquareKetahanan', 'RsquareKeamanan', 'RsquareKondisi', 'RsquarePerforma', 'dataFKetahanan', 'dataFKeamanan', 'dataFKondisi', 'dataFPerforma', 'get_produk'], 'integer'],
            [['T_cicleCount', 'T_kapasitasPengisian', 'T_noSeri', 'T_garansi', 'T_ram', 'T_vga', 'T_presesor', 'T_storage', 'T_layar', 'T_keyboard', 'T_tracpad', 'T_audio', 'T_kamera', 'T_koneksi', 'T_port'], 'number'],
            ['kode_produk', 'string']
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
        $query = SpkKelayakan::find();

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
            'id_kelayakan' => $this->id_kelayakan,
            'dataRKetahanan' => $this->dataRKetahanan,
            'dataRKeamanan' => $this->dataRKeamanan,
            'dataRKondisi' => $this->dataRKondisi,
            'dataRPerforma' => $this->dataRPerforma,
            'RsquareKetahanan' => $this->RsquareKetahanan,
            'RsquareKeamanan' => $this->RsquareKeamanan,
            'RsquareKondisi' => $this->RsquareKondisi,
            'RsquarePerforma' => $this->RsquarePerforma,
            'dataFKetahanan' => $this->dataFKetahanan,
            'dataFKeamanan' => $this->dataFKeamanan,
            'dataFKondisi' => $this->dataFKondisi,
            'dataFPerforma' => $this->dataFPerforma,
            'T_cicleCount' => $this->T_cicleCount,
            'T_kapasitasPengisian' => $this->T_kapasitasPengisian,
            'T_noSeri' => $this->T_noSeri,
            'T_garansi' => $this->T_garansi,
            'T_ram' => $this->T_ram,
            'T_vga' => $this->T_vga,
            'T_presesor' => $this->T_presesor,
            'T_storage' => $this->T_storage,
            'T_layar' => $this->T_layar,
            'T_keyboard' => $this->T_keyboard,
            'T_tracpad' => $this->T_tracpad,
            'T_audio' => $this->T_audio,
            'T_kamera' => $this->T_kamera,
            'T_koneksi' => $this->T_koneksi,
            'T_port' => $this->T_port,
            'kode_produk' => $this->kode_produk,
            'get_produk' => $this->get_produk,
        ]);

        return $dataProvider;
    }
}
