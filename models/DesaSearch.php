<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblDesa;

/**
 * DesaSearch represents the model behind the search form of `app\models\TblDesa`.
 */
class DesaSearch extends TblDesa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_desa'], 'integer'],
            [['nama_desa', 'desc', 'nama_petugas'], 'safe'],
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
        $query = TblDesa::find();

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
            'id_desa' => $this->id_desa,
        ]);

        $query->andFilterWhere(['like', 'nama_desa', $this->nama_desa])
            ->andFilterWhere(['like', 'desc', $this->desc])
            ->andFilterWhere(['like', 'nama_petugas', $this->nama_petugas]);

        return $dataProvider;
    }
}
