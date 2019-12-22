<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_desa".
 *
 * @property int $id_desa
 * @property string $nama_desa
 * @property string $desc
 * @property string $nama_petugas
 *
 * @property TblSetorSampah[] $tblSetorSampahs
 * @property Users[] $users
 */
class TblDesa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_desa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_desa', 'nama_desa', 'desc', 'nama_petugas'], 'required'],
            [['id_desa'], 'integer'],
            [['nama_desa', 'desc', 'nama_petugas'], 'string', 'max' => 128],
            [['id_desa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_desa' => 'ID Desa',
            'nama_desa' => 'Nama Desa',
            'desc' => 'Deskripsi',
            'nama_petugas' => 'Nama Petugas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblSetorSampahs()
    {
        return $this->hasMany(TblSetorSampah::className(), ['desa_id' => 'id_desa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['desa_id' => 'id_desa']);
    }
}
