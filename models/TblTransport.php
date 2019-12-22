<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_transport".
 *
 * @property int $id_transport
 * @property string $nama_transport
 * @property string $driver
 *
 * @property TblJemputSampah[] $tblJemputSampahs
 */
class TblTransport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_transport';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transport', 'nama_transport', 'driver'], 'required'],
            [['id_transport'], 'integer'],
            [['nama_transport', 'driver'], 'string', 'max' => 45],
            [['id_transport'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transport' => 'Id Transport',
            'nama_transport' => 'Nama Transport',
            'driver' => 'Driver',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblJemputSampahs()
    {
        return $this->hasMany(TblJemputSampah::className(), ['transport_id' => 'id_transport']);
    }
}
