<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_cat_info".
 *
 * @property int $id_category
 * @property int $info_id
 * @property string $name_cat
 * @property string|null $desc
 *
 * @property TblInfo $info
 */
class TblCatInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_cat_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['info_id', 'name_cat'], 'required'],
            [['info_id'], 'integer'],
            [['name_cat'], 'string', 'max' => 45],
            [['desc'], 'string', 'max' => 128],
            [['info_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblInfo::className(), 'targetAttribute' => ['info_id' => 'id_info']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_category' => 'ID Kategori Info',
            'info_id' => 'ID Info',
            'name_cat' => 'Nama Kategori',
            'desc' => 'Deskripsi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfo()
    {
        return $this->hasOne(TblInfo::className(), ['id_info' => 'info_id']);
    }
}
