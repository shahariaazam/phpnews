<?php

class ScraperComponent
{
    function scraper($url = null, $options = array())
    {
        $data = $this->runCurl($url);
        $extract = $this->extractXML($data);
        return $extract;
    }

   private function extractXML($data = null)
   {
       if(empty($data)){
           return false;
       }
       return $xml = new SimpleXMLElement($data);
   }

    function runCurl($url = false)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        if(!empty($data)){
            return $data;
        }
        return false;
    }
}
