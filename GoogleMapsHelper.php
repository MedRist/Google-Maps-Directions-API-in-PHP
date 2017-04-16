<?php

/**
 * Created by PhpStorm.
 * User: MedRist
 * Date: 4/16/2017
 * Time: 3:25 PM
 *
 */
class GoogleMapsHelper
{


    /**
     * array of parameters
     * @var  array
     *  exemple :
     * array('origin' => '42.3600825 , -71.0588802', 'destination' => '42.4085506 , -71.0117107', 'mode'=> 'bicycling','sensor'=> 'false')
     **/
    private $params;

    /**
     * Google Maps Directions API
     * @var string
     */
    private $apiUrl = 'http://maps.googleapis.com/maps/api/directions/json?';
    /**
     * @var stdClass
     * to store the result
     */
     private $result;
    /**
     * Google Maps PHP API constructor.
     */
    public function __construct($data)
    {
        $this->params=$data;
         $this->call();
    }
    /**
     * Send Message
     * @return stdClass
     */
    public function call()
    {
        // Fetch and decode JSON string into a PHP object.
        $json = file_get_contents($this->apiUrl.http_build_query($this->params));
        $this->result = json_decode($json);
    }

    /**
     * return total duration of the trip.
     * @return string
     */
    public function get_Total_Duration()
    {
        if ($this->result->status === 'OK')
        {
           return $this->result->routes[0]->legs[0]->duration->text;
        }
        else {
            return "Exception";
        }
    }
    /**
     * return the total distance of the trip.
     * @return string
     */
    public function get_Total_Distance()
    {
        if ($this->result->status === 'OK')
        {
            return $this->result->routes[0]->legs[0]->distance->text;
        }
        else {
            return "Exception";
        }
    }
    /**
     * return the total result about the trip.
     * @return stdClass
     */
    public function get_Total_Result()
    {
        if ($this->result->status === 'OK')
        {
            return $this->result->routes[0];
        }

    }

    /**
     * If we got directions, output all of the HTML instructions
     * @Echo
     */
    public function echo_Instructions()
    {
        if ($this->result->status === 'OK') {
    $route = $this->result->routes[0];
    foreach ($route->legs as $leg) {
        foreach ($leg->steps as $step) {
            echo $step->html_instructions . "<br>\n";
        }
    }

    }
}
}