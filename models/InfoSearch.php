<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblInfo;

/**
 * InfoSearch represents the model behind the search form of `app\models\TblInfo`.
 */
class InfoSearch extends TblInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_info', 'user_id'], 'integer'],
            [['author', 'desc_info'], 'safe'],
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
        $query = TblInfo::find();

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
            'id_info' => $this->id_info,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'desc_info', $this->desc_info]);

        return $dataProvider;
    }
}
