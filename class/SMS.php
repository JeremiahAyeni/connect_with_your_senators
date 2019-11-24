<?php

include('./DB.php');

class SMS
{
    private $api;
    private $url;

    public function __construct()
    {
        $this->api = "MZGnXajfgOzRc9Yw5jCUmbbF4vhGb80SPKN6jIer5OTz7tT7Qhpg7wRup0VT";
        $this->url = "https://www.bulksmsnigeria.com/api/v1/sms/create";
    }


    //created by Ayeni Jeremiah for SMS Sending
    public function sendSMS($to, $from, $body)
    {
        $from = '' . $from . '';

        $url = $this->url;
        $api_token = $this->api;

        $handle = curl_init();

        $postData = array(
            'api_token' => $api_token,
            'from' => $from,
            'to'  => $to,
            'body' => $body
        );

        curl_setopt_array(
            $handle,
            array(
                CURLOPT_URL => $url,
                // Enable the post response.
                CURLOPT_POST => true,
                // The data to transfer with the response.
                CURLOPT_POSTFIELDS => $postData,
                CURLOPT_RETURNTRANSFER => true,
            )
        );

        $data = curl_exec($handle);

        curl_close($handle);

        //convert JSON to usable PHP array
        $newArray = json_decode($data, true);
        $new_data = $newArray['data']['status'];

        if ($new_data != 'success') {
            return "failed";
        } else {
            return $new_data;
        }
    }

    function responseAlert($msg)
    {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
}
