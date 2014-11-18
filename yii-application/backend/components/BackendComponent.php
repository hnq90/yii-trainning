<?php
namespace app\components;

use Yii;
use yii\base\Component;
use yii\web\NotFoundHttpException;

class BackendComponent extends Component
{
    public function currentUser()
    {
      $user = \Yii::$app->user->identity;
      if (empty($user)) {
          throw new NotFoundHttpException('Access Denied!');
      }
      return $user;
    }
}
