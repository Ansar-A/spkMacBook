<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $id
 * @property string $nama_produk
 * @property int $id_servicer
 * @property int $id_jenis
 * @property int $id_prosesor
 * @property int $id_so
 * @property int $id_layar
 * @property int $id_penyimpanan
 * @property int $get_warna
 * @property int $get_daya
 * @property int $get_nirkabel

 * @property int $get_kamera
 * @property int $get_builtinApps
 * @property int $get_audio
 * @property int $get_koneksiekspansi
 * @property string $photo
 * @property float $harga

 *
 * @property Audio $getAudio
 * @property BuiltinApps $getBuiltinApps
 * @property Daya $getDaya
 * @property Kamera $getKamera
 * @property KoneksiEkspansi $getKoneksiekspansi
 * @property Nirkabel $getNirkabel

 * @property Warna $getWarna
 * @property JenisProduk $jenis
 * @property JenisLayar $layar
 * @property JenisPenyimpanan $penyimpanan
 * @property JenisProsesor $prosesor
 * @property JenisSo $so
 */
class Produk extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */

    public $akumulasi;
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */

    public function rules()
    {
        return [
            [['nama_produk', 'id_servicer',  'id_jenis', 'id_prosesor', 'id_so', 'id_layar', 'id_penyimpanan', 'get_warna', 'get_daya', 'get_nirkabel',  'get_kamera', 'get_builtinApps', 'get_audio', 'get_koneksiekspansi', 'photo', 'harga', 'baterai', 'kapasitas_pengisian', 'no_seri', 'garansi', 'get_informasi_ram', 'get_informasi_vga'], 'required'],
            [['ket'], 'in', 'range' => ['Normal', 'Replace']],
            [['status_produk'], 'in', 'range' => ['Finish', 'Unprocessed']],
            [['id_servicer', 'id_jenis',  'id_so', 'get_warna'], 'integer'],
            [['baterai',  'kapasitas_pengisian'], 'integer'],
            [['id_jenis', 'photo', 'globalSearch', 'harga'], 'safe'],
            [['nama_produk', 'ket', 'no_seri', 'garansi', 'get_informasi_ram', 'get_informasi_vga', 'id_penyimpanan', 'id_prosesor', 'id_layar', 'get_builtinApps', 'get_koneksiekspansi', 'get_kamera', 'get_audio', 'get_daya', 'get_nirkabel'], 'string', 'max' => 255],
            [['photo'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'on' => 'update'],
            [['id_jenis'], 'exist', 'skipOnError' => true, 'targetClass' => JenisProduk::class, 'targetAttribute' => ['id_jenis' => 'id']],
            [['id_so'], 'exist', 'skipOnError' => true, 'targetClass' => JenisSo::class, 'targetAttribute' => ['id_so' => 'id']],
            [['get_warna'], 'exist', 'skipOnError' => true, 'targetClass' => Warna::class, 'targetAttribute' => ['get_warna' => 'id_warna']],

            [['tinggi', 'panjang', 'lebar', 'berat'], 'string', 'max' => 10]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_produk' => 'Nama Produk',
            'id_servicer' => 'Id Servicer',
            'id_jenis' => 'Jenis MacBook',
            'id_prosesor' => 'Prosesor',
            'id_so' => 'Sistem Operasi',
            'id_layar' => 'Layar',
            'id_penyimpanan' => 'Jenis Storage',
            'get_warna' => 'Warna',
            'get_daya' => 'Daya',
            'get_nirkabel' => 'Nirkabel',

            'get_kamera' => 'Kamera',
            'get_builtinApps' => 'Builtin Apps',
            'get_audio' => 'Audio',
            'get_koneksiekspansi' => 'Koneksiekspansi',

            'get_informasi_vga' => 'Informasi VGA',
            'photo' => 'Photo',
            'harga' => 'Harga',
            'informasi_ram',
            // spk ketahanan
            'baterai' => 'Baterai',
            'ket' => 'Keterangan',
            'kapasitas_pengisian' => 'Kapasitas Pengisian',

            // spk keamanan
            'no_seri' => 'No Seri',
            'garansi' => 'Garansi',
            'status_produk' => 'Status SPK',
            'tinggi' => 'Tinggi',
            'panjang' => 'Panjang',
            'lebar' => 'Lebar',
            'berat' => 'Berat'

        ];
    }

    /**
     * Gets query for [[GetAudio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        // mengambil id user dan menghubungkannya ke tabel Produk
        return $this->hasOne(User::class, ['id' => 'id_servicer']);
    }



    /**
     * Gets query for [[GetWarna]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarna()
    {
        return $this->hasOne(Warna::class, ['id_warna' => 'get_warna']);
    }

    /**
     * Gets query for [[Jenis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenis()
    {
        return $this->hasOne(JenisProduk::class, ['id' => 'id_jenis']);
    }


    /**
     * Gets query for [[Penyimpanan]].
     *
     * @return \yii\db\ActiveQuery
     */

    /**
     * Gets query for [[So]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSo()
    {
        return $this->hasOne(JenisSo::class, ['id' => 'id_so']);
    }

    public function getSpkKelayakan()
    {
        return $this->hasMany(SpkKelayakan::class, ['get_produk' => 'id']);
    }
    public function getGetPenilaian()
    {
        return $this->hasMany(Produk::class, ['get_produk' => 'id']);
    }
}
