<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

// Library for API: https://www.clickatell.com

class Clickatellapi
{
    public $clickatell_user;
    public $clickatell_password;
    private $clickatell_api_id;

    public function __construct($params = array())
    {
        $this->clickatell_user = config_db_item('clickatell_user');
        $this->clickatell_password = config_db_item('clickatell_password');
        $this->clickatell_api_id = config_db_item('clickatell_api_id');        
        $this->clickatell_api_key = config_db_item('clickatell_api_key');        
        
        if(is_array($params))
        {
            if(isset($params['clickatell_user']))
                $this->clickatell_user = $params['clickatell_user'];
            
            if(isset($params['clickatell_password']))
                $this->clickatell_password = $params['clickatell_password'];
                
            if(isset($params['clickatell_api_id']))
                $this->clickatell_api_id = $params['clickatell_api_id'];
            
            if(isset($params['clickatell_api_key']))
                $this->clickatell_api_key = $params['clickatell_api_key'];
        }
    }

    public function send_sms($text, $to)
    {   
        $CI =& get_instance();
        $CI->load->helper('text');
        
        if(!empty($this->clickatell_api_key)) {
        
            $apiKey = trim($this->clickatell_api_key);
            $baseurl ="https://platform.clickatell.com/messages";

            $text = urlencode($text);

            $url = "$baseurl/http/send?apiKey=$apiKey&to=$to&content=$text";

            // do sendmsg call
            $ret = $this->file_get_contents_curl($url);

            if (stripos($ret, '"accepted":true') !== FALSE) {
                return "successnmessage ";
            } else {
                return "Send SMS message failed";
            }

            
            
        } else {
            $user = $this->clickatell_user;
            $password = $this->clickatell_password;
            $api_id = $this->clickatell_api_id;
            $baseurl ="http://api.clickatell.com";

            $text = urlencode($text);

            // auth call
            $url = "$baseurl/http/auth?user=$user&password=$password&api_id=$api_id";

            // do auth call
            $ret = file($url);

            // explode our response. return string is on first line of the data returned
            $sess = explode(":",$ret[0]);
            if ($sess[0] == "OK") {

                $sess_id = trim($sess[1]); // remove any whitespace
                $url = "$baseurl/http/sendmsg?session_id=$sess_id&to=$to&text=$text";

                // do sendmsg call
                $ret = file($url);
                $send = explode(":",$ret[0]);

                if ($send[0] == "ID") {
                    return "successnmessage ID: ". $send[1];
                } else {
                    return "Send SMS message failed";
                }
            } else {
                return "Authentication failure: ". $ret[0];
            }
        }
    }

    public function file_get_contents_curl($url) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set cURL to return the data instead of printing it to the browser.
        curl_setopt($ch, CURLOPT_URL, $url);

        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }
    
}

?>