<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblSetorSampah;

/**
 * SetorSearch represents the model behind the search form of `app\models\TblSetorSampah`.
 */
class SetorSearch extends TblSetorSampah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_setor', 'user_id', 'desa_id'], 'integer'],
            [['tanggal', 'desc_sampah_setor', 'diterima_oleh'], 'safe'],
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
        $query = TblSetorSampah::find();

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
            'id_setor' => $this->id_setor,
            'user_id' => $this->user_id,
            'desa_id' => $this->desa_id,
        ]);

        $query->andFilterWhere(['like', 'tanggal', $this->tanggal])
            ->andFilterWhere(['like', 'desc_sampah_setor', $this->desc_sampah_setor])
            ->andFilterWhere(['like', 'diterima_oleh', $this->diterima_oleh]);

        return $dataProvider;
    }
}
