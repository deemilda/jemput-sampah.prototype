<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblCatInfo;

/**
 * CategoryInfoSearch represents the model behind the search form of `app\models\TblCatInfo`.
 */
class CategoryInfoSearch extends TblCatInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category', 'info_id'], 'integer'],
            [['name_cat', 'desc'], 'safe'],
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
        $query = TblCatInfo::find();

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
            'id_category' => $this->id_category,
            'info_id' => $this->info_id,
        ]);

        $query->andFilterWhere(['like', 'name_cat', $this->name_cat])
            ->andFilterWhere(['like', 'desc', $this->desc]);

        return $dataProvider;
    }
}
