<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblJemputSampah;

/**
 * jemputSearch represents the model behind the search form of `app\models\TblJemputSampah`.
 */
class jemputSearch extends TblJemputSampah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_jemput', 'user_id', 'transport_id'], 'integer'],
            [['tanggal', 'desc_sampah_jemput', 'dijemput_oleh'], 'safe'],
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
        $query = TblJemputSampah::find();

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
            'id_jemput' => $this->id_jemput,
            'user_id' => $this->user_id,
            'transport_id' => $this->transport_id,
        ]);

        $query->andFilterWhere(['like', 'tanggal', $this->tanggal])
            ->andFilterWhere(['like', 'desc_sampah_jemput', $this->desc_sampah_jemput])
            ->andFilterWhere(['like', 'dijemput_oleh', $this->dijemput_oleh]);

        return $dataProvider;
    }
}
