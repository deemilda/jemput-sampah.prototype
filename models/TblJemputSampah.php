<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_jemput_sampah".
 *
 * @property int $id_jemput
 * @property int $user_id
 * @property int $transport_id
 * @property string $tanggal
 * @property string $desc_sampah_jemput
 * @property string $dijemput_oleh
 *
 * @property TblTransport $transport
 * @property Users $user
 * @property TblTransaksi[] $tblTransaksis
 */
class TblJemputSampah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_jemput_sampah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jemput', 'user_id', 'transport_id', 'tanggal', 'desc_sampah_jemput', 'dijemput_oleh'], 'required'],
            [['id_jemput', 'user_id', 'transport_id'], 'integer'],
            [['tanggal', 'dijemput_oleh'], 'string', 'max' => 45],
            [['desc_sampah_jemput'], 'string', 'max' => 128],
            [['id_jemput'], 'unique'],
            [['transport_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblTransport::className(), 'targetAttribute' => ['transport_id' => 'id_transport']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id_user']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jemput' => 'Id Jemput',
            'user_id' => 'User ID',
            'transport_id' => 'Transport ID',
            'tanggal' => 'Tanggal',
            'desc_sampah_jemput' => 'Desc Sampah Jemput',
            'dijemput_oleh' => 'Dijemput Oleh',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransport()
    {
        return $this->hasOne(TblTransport::className(), ['id_transport' => 'transport_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id_user' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblTransaksis()
    {
        return $this->hasMany(TblTransaksi::className(), ['jemput_id' => 'id_jemput']);
    }
}
