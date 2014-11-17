<?php

namespace backend\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use backend\models\Country;

class CountryController extends Controller
{
    CONST PAGINATION_LIMIT = 3;

    public function actionIndex()
    {
        $query = Country::find();
        $countQuery = clone $query;

        $pagination = new Pagination([
            'defaultPageSize' => self::PAGINATION_LIMIT,
            'totalCount' => $countQuery->count()
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination
        ]);
    }
}