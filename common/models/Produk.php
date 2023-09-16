<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $id
 * @property string $nama_produk
 * @property int $id_servicer
 * @property string $tahun_rilis
 * @property int $id_jenis
 * @property int $id_prosesor
 * @property int $id_so
 * @property int $id_layar
 * @property int $id_penyimpanan
 * @property int $get_warna
 * @property int $get_daya
 * @property int $get_nirkabel
 * @property int $get_ukuranberat
 * @property int $get_kamera
 * @property int $get_builtinApps
 * @property int $get_audio
 * @property int $get_koneksiekspansi
 * @property string $photo
 * @property float $harga
 * @property int $get_detaill
 *
 * @property Audio $getAudio
 * @property BuiltinApps $getBuiltinApps
 * @property Daya $getDaya
 * @property Kamera $getKamera
 * @property KoneksiEkspansi $getKoneksiekspansi
 * @property Nirkabel $getNirkabel
 * @property UkuranBerat $getUkuranberat
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
            [['nama_produk', 'id_servicer', 'tahun_rilis', 'id_jenis', 'id_prosesor', 'id_so', 'id_layar', 'id_penyimpanan', 'get_warna', 'get_daya', 'get_nirkabel', 'get_ukuranberat', 'get_kamera', 'get_builtinApps', 'get_audio', 'get_koneksiekspansi', 'photo', 'harga', 'get_detaill'], 'required'],
            [['id_servicer', 'id_jenis', 'id_prosesor', 'id_so', 'id_layar', 'id_penyimpanan', 'get_warna', 'get_daya', 'get_nirkabel', 'get_ukuranberat', 'get_kamera', 'get_builtinApps', 'get_audio', 'get_koneksiekspansi', 'get_detaill', 'stock'], 'integer'],
            [['tahun_rilis', 'id_jenis', 'photo', 'globalSearch'], 'safe'],
            [['harga'], 'number'],
            [['nama_produk'], 'string', 'max' => 255],
            [['photo'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'on' => 'update'],
            [['id_jenis'], 'exist', 'skipOnError' => true, 'targetClass' => JenisProduk::class, 'targetAttribute' => ['id_jenis' => 'id']],
            [['get_builtinApps'], 'exist', 'skipOnError' => true, 'targetClass' => BuiltinApps::class, 'targetAttribute' => ['get_builtinApps' => 'id_builtinApps']],
            [['get_koneksiekspansi'], 'exist', 'skipOnError' => true, 'targetClass' => KoneksiEkspansi::class, 'targetAttribute' => ['get_koneksiekspansi' => 'id_koneksi']],
            [['get_kamera'], 'exist', 'skipOnError' => true, 'targetClass' => Kamera::class, 'targetAttribute' => ['get_kamera' => 'id_kamera']],
            [['get_audio'], 'exist', 'skipOnError' => true, 'targetClass' => Audio::class, 'targetAttribute' => ['get_audio' => 'id_audio']],
            [['id_so'], 'exist', 'skipOnError' => true, 'targetClass' => JenisSo::class, 'targetAttribute' => ['id_so' => 'id']],
            [['id_layar'], 'exist', 'skipOnError' => true, 'targetClass' => JenisLayar::class, 'targetAttribute' => ['id_layar' => 'id']],
            [['id_penyimpanan'], 'exist', 'skipOnError' => true, 'targetClass' => JenisPenyimpanan::class, 'targetAttribute' => ['id_penyimpanan' => 'id']],
            [['id_prosesor'], 'exist', 'skipOnError' => true, 'targetClass' => JenisProsesor::class, 'targetAttribute' => ['id_prosesor' => 'id']],
            [['get_daya'], 'exist', 'skipOnError' => true, 'targetClass' => Daya::class, 'targetAttribute' => ['get_daya' => 'id_daya']],
            [['get_warna'], 'exist', 'skipOnError' => true, 'targetClass' => Warna::class, 'targetAttribute' => ['get_warna' => 'id_warna']],
            [['get_nirkabel'], 'exist', 'skipOnError' => true, 'targetClass' => Nirkabel::class, 'targetAttribute' => ['get_nirkabel' => 'id_nirkabel']],
            [['get_ukuranberat'], 'exist', 'skipOnError' => true, 'targetClass' => UkuranBerat::class, 'targetAttribute' => ['get_ukuranberat' => 'id_ukuranberat']],
            [['get_detaill'], 'exist', 'skipOnError' => true, 'targetClass' => DetailProduk::class, 'targetAttribute' => ['get_detaill' => 'id_detail']],
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
            'stock' => 'Stok',
            'id_servicer' => 'Id Servicer',
            'tahun_rilis' => 'Tahun Rilis',
            'id_jenis' => 'Jenis MacBook',
            'id_prosesor' => 'Prosesor',
            'id_so' => 'Sistem Operasi',
            'id_layar' => 'Layar',
            'id_penyimpanan' => 'Jenis Storage',
            'get_warna' => 'Warna',
            'get_daya' => 'Daya',
            'get_nirkabel' => 'Nirkabel',
            'get_ukuranberat' => 'Ukuran dan berat',
            'get_kamera' => 'Kamera',
            'get_builtinApps' => 'Builtin Apps',
            'get_audio' => 'Audio',
            'get_koneksiekspansi' => 'Koneksiekspansi',
            'photo' => 'Photo',
            'harga' => 'Harga',
            'get_detaill' => 'Get ID Detail',
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


    public function getAudio()
    {
        return $this->hasOne(Audio::class, ['id_audio' => 'get_audio']);
    }

    /**
     * Gets query for [[GetBuiltinApps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuiltinApps()
    {
        return $this->hasOne(BuiltinApps::class, ['id_builtinApps' => 'get_builtinApps']);
    }

    /**
     * Gets query for [[GetDaya]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDaya()
    {
        return $this->hasOne(Daya::class, ['id_daya' => 'get_daya']);
    }

    /**
     * Gets query for [[GetKamera]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKamera()
    {
        return $this->hasOne(Kamera::class, ['id_kamera' => 'get_kamera']);
    }

    /**
     * Gets query for [[GetKoneksiekspansi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKoneksiekspansi()
    {
        return $this->hasOne(KoneksiEkspansi::class, ['id_koneksi' => 'get_koneksiekspansi']);
    }

    /**
     * Gets query for [[GetNirkabel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNirkabel()
    {
        return $this->hasOne(Nirkabel::class, ['id_nirkabel' => 'get_nirkabel']);
    }

    /**
     * Gets query for [[GetUkuranberat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUkuranberat()
    {
        return $this->hasOne(UkuranBerat::class, ['id_ukuranberat' => 'get_ukuranberat']);
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
     * Gets query for [[Layar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLayar()
    {
        return $this->hasOne(JenisLayar::class, ['id' => 'id_layar']);
    }

    /**
     * Gets query for [[Penyimpanan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenyimpanan()
    {
        return $this->hasOne(JenisPenyimpanan::class, ['id' => 'id_penyimpanan']);
    }

    /**
     * Gets query for [[Prosesor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProsesor()
    {
        return $this->hasOne(JenisProsesor::class, ['id' => 'id_prosesor']);
    }

    /**
     * Gets query for [[So]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSo()
    {
        return $this->hasOne(JenisSo::class, ['id' => 'id_so']);
    }

    // public function getLikeProduk()
    // {
    //     return $this->hasMany(LikeProduk::class, ['get_likeProduk' => 'id']);
    // }
    public function getDetailProduk()
    {
        return $this->hasOne(DetailProduk::class, ['id_detail' => 'get_detaill']);
    }
}
