<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblTransaksi;

/**
 * TransaksiSearch represents the model behind the search form of `app\models\TblTransaksi`.
 */
class TransaksiSearch extends TblTransaksi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_transaksi', 'setor_id', 'jemput_id', 'jumlah', 'nilai', 'user_id'], 'integer'],
            [['tanggal', 'transaksi'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TblTransaksi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_transaksi' => $this->id_transaksi,
            'setor_id' => $this->setor_id,
            'jemput_id' => $this->jemput_id,
            'jumlah' => $this->jumlah,
            'nilai' => $this->nilai,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'tanggal', $this->tanggal])
            ->andFilterWhere(['like', 'transaksi', $this->transaksi]);

        return $dataProvider;
    }
}
