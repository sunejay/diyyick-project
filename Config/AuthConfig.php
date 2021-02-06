<?php
namespace Diyyick\Config;

use Diyyick\Lib\Core\BaseConfig;
/**
 * Description of AuthConfig
 *
 * @author Sune
 */
class AuthConfig extends BaseConfig
{
    /**
     * Configure authentication class 
     * For instance User class
     */
    public static function authEntity()
    {
        //return User::class;
    }
    
    /**
     * If you need use cookie for login
     * Configure the auth session entity class
     */
    public static function authSessionEntity() 
    {
        //return UserSession::class;
    }
}


