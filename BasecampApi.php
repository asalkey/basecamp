<?php

class BasecampApi
{
  public static function get_request($url,$access_key)
  {

    $headers = array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $access_key,
        'User-Agent: Dashboard (andrea@coolblueweb.com)'
    );

    $url = $url;

    // Open connection
    $ch = curl_init();

    // Set the url, number of GET vars, GET data
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    // Execute request
    $result = curl_exec($ch);

    // Close connection
    curl_close($ch);

    // get the result and parse to JSON
    $result_arr = json_decode($result, true);

    return $result_arr;
  }

  public static function get_all_topics()
  {

  }
}

