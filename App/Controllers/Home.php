<?php
namespace Diyyick\App\Controllers;
use Diyyick\Lib\Core\Controller;
use Diyyick\Lib\Core\Response;
use Diyyick\Lib\Core\Request;
/**
 * Description of Home
 *
 * @author Sune
 */
class Home extends Controller
{
    public function about(Request $req, Response $res, $username) {
        echo "<h1>".$username."</h1><br>";
        echo "<h1>This the ABOUT Page!</h1>";
    }
}
