<?php
 /**
  * File: Home.php
  *
  * PHP version 5
  *
  * @category File
  * @package  php-limonade-basic
  * @author   Carlos Coronado <carloscmaleno@gmail.com>
  * @date     14/11/15 20:19
  * @license  http://www.carloscoronado.me  PHP License
  * @link     http://www.carloscoronado.me
  */

/**
 * Class Home
 * @category Class
 * @package  php-limonade-basic
 * @author   Carlos Coronado <carloscmaleno@gmail.com>
 * @date     14/11/15 20:19
 * @license  http://www.carloscoronado.me  PHP License
 * @link     http://www.carloscoronado.me
 */
 
class Home
{

    /**
     * Show index page
     * @return string
     */
    public static function index()
    {
        set('message', 'Welcome to Lemonade Base');
        return html('home.html.php', 'layout.html.php');
    }

}
