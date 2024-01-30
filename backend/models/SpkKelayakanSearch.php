<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SpkKelayakan;
use Yii;

/**
 * SpkKelayakanSearch represents the model behind the search form of `common\models\SpkKelayakan`.
 */
class SpkKelayakanSearch extends SpkKelayakan
{
    /**
     * {@inheritdoc}
     */

    public $globalSearch;
    public function rules()
    {
        return [
            [['id_kelayakan', 'dataR',  'Rsquare', 'dataF', 'get_produk'], 'integer'],
            [['T_ketahanan', 'T_keamanan', 'T_kondisi', 'T_performa'], 'number'],
            [['globalSearch', 'nilai'], 'safe'],
            // ['kode_produk', 'string']
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
        if (\Yii::$app->user->can('Toko')) {
            $query = SpkKelayakan::find()
                ->leftJoin('produk', 'spk_kelayakan.get_produk = produk.id') // Join dengan tabel 'produk'
                ->leftJoin('user', 'produk.id_servicer = user.id'); // Join dengan tabel 'user';
        } else {
            $query = SpkKelayakan::find()
                ->leftJoin('produk', 'spk_kelayakan.get_produk = produk.id');
            // ->where(['id_servicer' => Yii::$app->user->identity->id]);
        }
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query
            ->orFilterWhere(['like', 'id_kelayakan', $this->globalSearch])
            ->orFilterWhere(['like', 'dataR', $this->globalSearch])
            ->orFilterWhere(['like', 'Rsquare', $this->globalSearch])
            ->orFilterWhere(['like', 'dataF', $this->globalSearch])
            ->orFilterWhere(['=', 'produk.nama_produk', $this->globalSearch])
            ->orFilterWhere(['=', 'produk.id', $this->globalSearch])
            ->orFilterWhere(['=', 'user.role', $this->globalSearch]);

        // $query->andFilterWhere([
        //     'id_kelayakan' => $this->id_kelayakan,
        //     'dataR' => $this->dataR,
        //     'Rsquare' => $this->Rsquare,
        //     'dataF' => $this->dataF,
        //     'T_ketahanan' => $this->T_ketahanan,
        //     'T_keamanan' => $this->T_keamanan,
        //     'T_kondisi' => $this->T_kondisi,
        //     'T_performa' => $this->T_performa,
        //     'nilai' => $this->nilai,
        //     'produk.nama_produk' => $this->get_produk,
        // ]);

        return $dataProvider;
    }
}
