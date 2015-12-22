<?php
namespace components\auth;
use Yii;
use yii\base\Exception;
class Auth extends \yii\base\Model
{

    public $rememberMe = false;
    
    public function identityInfo()
    {
        throw new \Exception();
    }

    public function login()
    {
        if ($this->validate()) {
            $identiy = \components\auth\Identity::findByAuth($this);
            return Yii::$app->user->login($identiy, $this->rememberMe ? 3600 * 24 * 30 : 0);
        }
        return false;
    }
}
