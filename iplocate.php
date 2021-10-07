<?php
//iplocate by Yasin Timur
//contact : infoyasintimur@gmail.com
//date : 07/2021

class iplocate
{

    public function __construct()
    {

        function curl($ip = "")
        {
            $ch = curl_init();
            $headers = array(
                'Accept: application/json',
                'Content-Type: application/json',

            );
            curl_setopt($ch, CURLOPT_URL, "https://www.iplocate.io/api/lookup/" . $ip);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_HEADER, 0);

            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // Timeout in seconds
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);

            $authToken = curl_exec($ch);

            return $authToken;
        }


        function json2array($json)
        {
            $array = json_decode($json, true);
            return $array;
        }
    }
    public function getInfo()
    {
        return json2array(curl());
    }
    public function getIp()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $address = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $address = $_SERVER['REMOTE_ADDR'];
        }
        return $address;
    }
    public function getCountry()
    {
        $curl = curl();
        $data = json2array($curl);
        $country = trim($data['country']);
        return $country;
    }
    public function getCountryCode()
    {
        $curl = curl();
        $data = json2array($curl);
        $getCountryCode = trim($data['country_code']);
        return $getCountryCode;
    }
    public function getCity()
    {
        $curl = curl();
        $data = json2array($curl);
        $city = trim($data['city']);
        return $city;
    }
    public function getContinent()
    {
        $curl = curl();
        $data = json2array($curl);
        $continent = trim($data['continent']);
        return $continent;
    }
    public function getLatitude()
    {
        $curl = curl();
        $data = json2array($curl);
        $latitude = trim($data['latitude']);
        return $latitude;
    }
    public function getLongitude()
    {
        $curl = curl();
        $data = json2array($curl);
        $longitude = trim($data['longitude']);
        return $longitude;
    }
    public function getTimeZone()
    {
        $curl = curl();
        $data = json2array($curl);
        $Timezone = trim($data['time_zone']);
        return $Timezone;
    }
    public function getPostalCode()
    {
        $curl = curl();
        $data = json2array($curl);
        $PostalCode = trim($data['postal_code']);
        return $PostalCode;
    }
    public function getOrg()
    {
        $curl = curl();
        $data = json2array($curl);
        $org = trim($data['org']);
        return $org;
    }
    public function getAsn()
    {
        $curl = curl();
        $data = json2array($curl);
        $asn = trim($data['asn']);
        return $asn;
    }
    public function getSubdivision()
    {
        $curl = curl();
        $data = json2array($curl);
        $subdivision = trim($data['subdivision']);
        return $subdivision;
    }
    public function getSubdivision2()
    {
        $curl = curl();
        $data = json2array($curl);
        $subdivision2 = trim($data['subdivision2']);
        return $subdivision2;
    }
}
