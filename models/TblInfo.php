<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_info".
 *
 * @property int $id_info
 * @property int $user_id
 * @property string $author
 * @property string $desc_info
 *
 * @property TblCatInfo[] $tblCatInfos
 * @property Users $user
 */
class TblInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_info', 'user_id', 'author', 'desc_info'], 'required'],
            [['id_info', 'user_id'], 'integer'],
            [['author', 'desc_info'], 'string', 'max' => 128],
            [['id_info'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id_user']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_info' => 'ID Info',
            'user_id' => 'ID User',
            'author' => 'Penulis',
            'desc_info' => 'Deskripsi Info',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblCatInfos()
    {
        return $this->hasMany(TblCatInfo::className(), ['info_id' => 'id_info']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id_user' => 'user_id']);
    }
}
