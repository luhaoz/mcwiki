<?php
namespace components\auth;

class Identity extends \yii\base\Model implements \yii\web\IdentityInterface
{

    public $id;

    public $username;

    public $email;

    public $authKey;

    public $accessToken;

    public function rules(){
        return [
            [['id','username','email','authKey','accessToken'],'required']
        ];
    }
    
    public static function findIdentity($id)
    {
        $userSession = \Yii::$app->session;
        $identityInfo = $userSession->get('identityInfo:'.$id);
        $identity = new static();
        $identity->attributes = $identityInfo;
        return $identity;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    public static function findByAuth(\components\auth\Auth $auth)
    {
        if ($auth->validate()) {
            $identity = new static();
            $identityInfo = array_intersect_key($auth->identityInfo(),$identity->attributes);
            $identity->attributes = $identityInfo;
            $userSession = \Yii::$app->session;
            $userSession->set('identityInfo:'.$identity->getId(),$identityInfo);
            return $identity;
        }
        
        return null;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
}
