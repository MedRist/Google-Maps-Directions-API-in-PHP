## Google-Maps-Directions-API-in-PHP
## Initialization 
Create your instance of CLass GoogleMapsHelper By giving An array of parameters.
```
 array of parameters
  @var  array
   example :
   array('origin' => '42.3600825 , -71.0588802', 'destination' => '42.4085506 , -71.0117107', 'mode'=> 'bicycling','sensor'=> 'false')
    See the Link for more information about the url parameters https://developers.google.com/maps/documentation/directions
    private $params;

```
## The total distance of the trip
```
public function get_Total_Distance()
```
## The total duration of the trip
```
public function get_Total_Duration
```
## Total results about the trip
```
public function get_Total_Result()
```
## the instructions from the origin to the destination asked
```
public function echo_Instructions()
Exmaple:
$params   = array(
    'origin'      => '42.3600825 , -71.0588802',
    'destination' => '42.4085506 , -71.0117107',
    'mode'        => 'bicycling',
    'sensor'      => 'false',
);
$d =new GoogleMapsHelper($params);

$d->echo_Instructions();
///////
Output:
Head northwest
Turn right toward Cambridge St
Turn right onto Cambridge St
Turn right onto Staniford St
Turn left onto Lomasney Way
Continue straight onto Nashua St/Red Auerbach Way
Slight right onto Nashua St
Turn right onto Charles River Dam Rd
Turn right onto Museum Way
Slight right toward N Bank Bridge
Continue onto N Bank Bridge
Slight left to stay on N Bank Bridge
Slight right toward Water St
Continue onto Water St
Turn left onto Warren St
Continue onto Dexter Row
Continue onto Main St
Turn left to stay on Main St
At the traffic circle, take the 2nd exit onto Alford St
Continue onto Broadway
Turn right onto Beacham St
Continue onto Williams St
Turn left onto Spruce St
Turn right onto Auburn St
Auburn St turns left and becomes Arlington St
Turn right onto Heard St
Turn left onto Washington Ave
Turn right onto Crescent Ave
Turn left onto Spencer Ave
Turn left onto Stockton St
Turn right onto Broadway
Turn right onto Winthrop Ave
```
