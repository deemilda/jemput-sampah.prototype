<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_transaksi".
 *
 * @property int $id_transaksi
 * @property int $setor_id
 * @property int $jemput_id
 * @property string $tanggal
 * @property string $transaksi
 * @property int $jumlah
 * @property int $nilai
 * @property int $user_id
 *
 * @property TblJemputSampah $jemput
 * @property TblSetorSampah $setor
 * @property Users $user
 */
class TblTransaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['setor_id', 'jemput_id', 'tanggal', 'transaksi', 'jumlah', 'nilai', 'user_id'], 'required'],
            [['setor_id', 'jemput_id', 'jumlah', 'nilai', 'user_id'], 'integer'],
            [['tanggal', 'transaksi'], 'string', 'max' => 45],
            [['jemput_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblJemputSampah::className(), 'targetAttribute' => ['jemput_id' => 'id_jemput']],
            [['setor_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblSetorSampah::className(), 'targetAttribute' => ['setor_id' => 'id_setor']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id_user']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi' => 'Id Transaksi',
            'setor_id' => 'Setor ID',
            'jemput_id' => 'Jemput ID',
            'tanggal' => 'Tanggal',
            'transaksi' => 'Transaksi',
            'jumlah' => 'Jumlah',
            'nilai' => 'Nilai',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJemput()
    {
        return $this->hasOne(TblJemputSampah::className(), ['id_jemput' => 'jemput_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSetor()
    {
        return $this->hasOne(TblSetorSampah::className(), ['id_setor' => 'setor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id_user' => 'user_id']);
    }
}
