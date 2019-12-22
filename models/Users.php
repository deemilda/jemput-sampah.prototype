<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id_user
 * @property int $role_id
 * @property int $desa_id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string $verification_token
 * @property string $photo
 * @property string $address
 *
 * @property TblInfo[] $tblInfos
 * @property TblJemputSampah[] $tblJemputSampahs
 * @property TblSetorSampah[] $tblSetorSampahs
 * @property TblTransaksi[] $tblTransaksis
 * @property TblDesa $desa
 * @property UserRole $role
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'role_id', 'desa_id', 'username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'status', 'created_at', 'updated_at', 'verification_token', 'photo', 'address'], 'required'],
            [['id_user', 'role_id', 'desa_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'verification_token', 'address'], 'string', 'max' => 45],
            [['photo'], 'string', 'max' => 128],
            [['id_user'], 'unique'],
            [['desa_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblDesa::className(), 'targetAttribute' => ['desa_id' => 'id_desa']],
            [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserRole::className(), 'targetAttribute' => ['role_id' => 'id_role']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'role_id' => 'Role ID',
            'desa_id' => 'Desa ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
            'photo' => 'Photo',
            'address' => 'Address',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblInfos()
    {
        return $this->hasMany(TblInfo::className(), ['user_id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblJemputSampahs()
    {
        return $this->hasMany(TblJemputSampah::className(), ['user_id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblSetorSampahs()
    {
        return $this->hasMany(TblSetorSampah::className(), ['user_id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblTransaksis()
    {
        return $this->hasMany(TblTransaksi::className(), ['user_id' => 'id_user']);
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
    public function getRole()
    {
        return $this->hasOne(UserRole::className(), ['id_role' => 'role_id']);
    }
}
