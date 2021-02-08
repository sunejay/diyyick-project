<?php
namespace Diyyick\App\Models;

use Diyyick\Lib\PadamORM\Entity;
/**
 * Description of User
 *
 * @author Sune
 */
class User extends Entity
{
    public $id;
    public $username;
    public $email;
    public $password;

    public $entityFields = array('id', 'username', 'email', 'password');
    public $primaryKeys = array('id');
    
    public function tableName()
    {
        return 'users';
    }

    public function className()
    {
        return 'User';
    }

}
