<?php
 /**
  * File: Contact.php
  *
  * PHP version 5
  *
  * @category File
  * @package  php-limonade-basic
  * @author   Carlos Coronado <carloscmaleno@gmail.com>
  * @date     14/11/15 20:41
  * @license  http://www.carloscoronado.me  PHP License
  * @link     http://www.carloscoronado.me
  */
/**
 * Class Contact
 * @category Class
 * @package  php-limonade-basic
 * @author   Carlos Coronado <carloscmaleno@gmail.com>
 * @date     14/11/15 20:41
 * @license  http://www.carloscoronado.me  PHP License
 * @link     http://www.carloscoronado.me
 */
 
class Contact
{
    /**
     * Show registre page
     * @return string
     */
    public static function index()
    {
        set('message', 'Contact page');
        return html('contact.html.php', 'layout.html.php');
    }
}
