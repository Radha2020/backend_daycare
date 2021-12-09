<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Controller
 *
 * @author Navil
 * Created at : 07:40 PM 04-Oct-2014
 */
class MY_Controller extends CI_Controller{
    public function  __construct() {
        parent::__construct();
		Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
        session_start();
        //Checking if user is logged or not
        $user = $this->session->userdata('userName');
        if(!isset($user))
        {
            //return true;
        }
        else
        {
            //redirect(base_url());
        }
    }
    public function is_logged_in()
    {
        //$user = $this->session->userdata('userLogName');
        //$userId = $this->session->userdata('userId');
        //$userPrev = $this->session->userdata('userPrev');
        
        if(isset($_SESSION['userName']))
        {
            $userName = $_SESSION['userName'];
            return true;
        }
        else
        {
            return false;
        }
    }
    public function setSession($userName)
    {
        $this->session->set_userdata('userName',$userName);
        $_SESSION['userName']=$userName;

    }
    public function destroySession()
    {
        unset($_SESSION['userName']);
        session_destroy();
    }
}
?>
