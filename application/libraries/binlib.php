<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Binlib  
{
    public function apiRequest($url, $body = false, $header = array())
    {
     
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        // curl_setopt($ch, CURLOPT_HEADER, true);
        // curl_setopt($ch, CURLOPT_POST, true);

        // if($header)
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        // if($body)
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}

?>