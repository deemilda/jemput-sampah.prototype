<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_setor_sampah".
 *
 * @property int $id_setor
 * @property int $user_id
 * @property int $desa_id
 * @property string $tanggal
 * @property string $desc_sampah_setor
 * @property string $diterima_oleh
 *
 * @property TblDesa $desa
 * @property Users $user
 * @property TblTransaksi[] $tblTransaksis
 */
class TblSetorSampah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_setor_sampah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_setor', 'user_id', 'desa_id', 'tanggal', 'desc_sampah_setor', 'diterima_oleh'], 'required'],
            [['id_setor', 'user_id', 'desa_id'], 'integer'],
            [['tanggal'], 'string', 'max' => 45],
            [['desc_sampah_setor', 'diterima_oleh'], 'string', 'max' => 128],
            [['id_setor'], 'unique'],
            [['desa_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblDesa::className(), 'targetAttribute' => ['desa_id' => 'id_desa']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id_user']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_setor' => 'Id Setor',
            'user_id' => 'User ID',
            'desa_id' => 'Desa ID',
            'tanggal' => 'Tanggal',
            'desc_sampah_setor' => 'Desc Sampah Setor',
            'diterima_oleh' => 'Diterima Oleh',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDesa()
    {
        return $this->hasOne(TblDesa::className(), ['id_desa' => 'desa_id']);
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
        return $this->hasMany(TblTransaksi::className(), ['setor_id' => 'id_setor']);
    }
}
