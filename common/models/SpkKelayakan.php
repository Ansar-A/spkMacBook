<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "spk_kelayakan".
 *
 * @property int $id_kelayakan
 * @property int $dataRKetahanan
 * @property int $dataRKeamanan
 * @property int $dataRKondisi
 * @property int $dataRPerforma
 * @property int $RsquareKetahanan
 * @property int $RsquareKeamanan
 * @property int $RsquareKondisi
 * @property int $RsquarePerforma
 * @property int $dataFKetahanan
 * @property int $dataFKeamanan
 * @property int $dataFKondisi
 * @property int $dataFPerforma
 * @property float $T_cicleCount
 * @property float $T_kapasitasPengisian
 * @property float $T_noSeri
 * @property float $T_garansi
 * @property float $T_ram
 * @property float $T_vga
 * @property float $T_presesor
 * @property float $T_storage
 * @property float $T_layar
 * @property float $T_keyboard
 * @property float $T_tracpad
 * @property float $T_audio
 * @property float $T_kamera
 * @property float $T_koneksi
 * @property float $T_port
 * @property int $get_produk
 *
 * @property Produk $getProduk
 */
class SpkKelayakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public static function tableName()
    {
        return 'spk_kelayakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dataRKetahanan', 'dataRKeamanan', 'dataRKondisi', 'dataRPerforma', 'RsquareKetahanan', 'RsquareKeamanan', 'RsquareKondisi', 'RsquarePerforma', 'dataFKetahanan', 'dataFKeamanan', 'dataFKondisi', 'dataFPerforma', 'T_cicleCount', 'T_kapasitasPengisian', 'T_noSeri', 'T_garansi', 'T_ram', 'T_vga', 'T_presesor', 'T_storage', 'T_layar', 'T_keyboard', 'T_tracpad', 'T_audio', 'T_kamera', 'T_koneksi', 'T_port', 'get_produk', 'photo',], 'required'],
            [['dataRKetahanan', 'dataRKeamanan', 'dataRKondisi', 'dataRPerforma', 'RsquareKetahanan', 'RsquareKeamanan', 'RsquareKondisi', 'RsquarePerforma', 'dataFKetahanan', 'dataFKeamanan', 'dataFKondisi', 'dataFPerforma', 'get_produk'], 'integer'],
            [['T_cicleCount', 'T_kapasitasPengisian', 'T_noSeri', 'T_garansi', 'T_ram', 'T_vga', 'T_presesor', 'T_storage', 'T_layar', 'T_keyboard', 'T_tracpad', 'T_audio', 'T_kamera', 'T_koneksi', 'T_port'], 'number'],
            ['kode_produk', 'string'],
            [['kode_produk'], 'safe'],
            [['get_produk'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::class, 'targetAttribute' => ['get_produk' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kelayakan' => 'Id Kelayakan',
            'dataRKetahanan' => 'Data R Ketahanan',
            'dataRKeamanan' => 'Data R Keamanan',
            'dataRKondisi' => 'Data R Kondisi',
            'dataRPerforma' => 'Data R Performa',
            'RsquareKetahanan' => 'Rsquare Ketahanan',
            'RsquareKeamanan' => 'Rsquare Keamanan',
            'RsquareKondisi' => 'Rsquare Kondisi',
            'RsquarePerforma' => 'Rsquare Performa',
            'dataFKetahanan' => 'Data F Ketahanan',
            'dataFKeamanan' => 'Data F Keamanan',
            'dataFKondisi' => 'Data F Kondisi',
            'dataFPerforma' => 'Data F Performa',
            'T_cicleCount' => 'T Cicle Count',
            'T_kapasitasPengisian' => 'T Kapasitas Pengisian',
            'T_noSeri' => 'T No Seri',
            'T_garansi' => 'T Garansi',
            'T_ram' => 'T Ram',
            'T_vga' => 'T Vga',
            'T_presesor' => 'T Presesor',
            'T_storage' => 'T Storage',
            'T_layar' => 'T Layar',
            'T_keyboard' => 'T Keyboard',
            'T_tracpad' => 'T Tracpad',
            'T_audio' => 'T Audio',
            'T_kamera' => 'T Kamera',
            'T_koneksi' => 'T Koneksi',
            'T_port' => 'T Port',
            'get_produk' => 'ID Produk',
            'kode_produk' => 'Kode Produk',

        ];
    }

    /**
     * Gets query for [[GetProduk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduk()
    {
        return $this->hasOne(Produk::class, ['id' => 'get_produk']);
    }
    public function beforeSave($insert)
    {
        if ($this->isNewRecord) { // Hanya lakukan ini jika sedang membuat record baru
            $this->kode_produk = $this->generateKodeProduk(); // Panggil method generateKodeProduk
        }

        return parent::beforeSave($insert);
    }

    protected function generateKodeProduk()
    {
        // Logika untuk menghasilkan kode otomatis
        // Misalnya, Anda dapat mengambil jumlah barang yang sudah ada dan menambahkannya satu angka.
        $count = SpkKelayakan::find()->count();
        return 'BRG' . str_pad($count + 1, 4, '0', STR_PAD_LEFT); // Format kode sesuai kebutuhan Anda
    }
}
