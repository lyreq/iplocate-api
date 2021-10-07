# Welcome to iplocate API!
What we can with iplocate API? We can get information about connected user. How can we use this library? Watch this way.

First, you must call this class. Watch this way.
   

     require  'iplocate.php';
	 $iplocate =  new  iplocate();


After you can use other methods.Watch this ways.
			

This method for get information about connected with array
  

   

       $getInfo= $iplocate->getInfo();
          
          /* output
            Array
        (
            [ip] => 95.183.178.1
            [country] => Turkey
            [country_code] => TR
            [city] => 
            [continent] => Asia
            [latitude] => 41.0214
            [longitude] => 28.9948
            [time_zone] => Europe/Istanbul
            [postal_code] => 
            [org] => National Academic Network and Information Center
            [asn] => AS8517
            [subdivision] => 
            [subdivision2] => 
        )
        */


If you want just learn connected ip, watch this way

  

      $getIp= $iplocate->getIp();
        // sample output 95.183.178.1 
        //warning!! if you try from localhost your output maybe ::1 or 127.0.0
 If you want just learn connected country, watch this way

      $getCountry = $iplocate->getCountry(); 
      // sample output; Turkey
      

If you want just learn connected country code, watch this way

    $getCountryCode = $iplocate->getCountryCode();
    // sample output; TR
    
If you want just learn connected city, watch this way
	

    // warning!! this method probably coming to null because may not be detected your city
        $getCity = $iplocate->getCity();

If you want learn connected continent, watch this way

    $getContinent = $iplocate->getContinent();
    // sample output; Asia
If you want learn connected latitude, watch this way

    $getLatitude = $iplocate->getLatitude();
    // sample output; 41.0214
    
If you want learn coonected longtitude,watch this way

    $getLongitude = $iplocate->getLongitude();
    // sample output; 28.9948
If you want learn connected time zone, watch this way

    $getTimeZone = $iplocate->getTimeZone();
    // sample output; Europe/Istanbul
If you want learn connected postal code, watch this way

     $getPostalCode= $iplocate->getPostalCode();
     /* warning!! this method probably coming to null because may not
      be detected your Postal Code */
If you want learn connected organization information, watch this way

    $getOrg = $iplocate->getOrg();
    // sapmle output; National Academic Network and Information Center
    
If you want learn asn (so sorry i don't know what is the mean asn), watch this way

    $getAsn = $iplocate->getAsn();
    // sample output; AS8517
    
If you want learn subdivision 1, watch this way

    $getSubdivision = $iplocate->getSubdivision();
      /* warning!! this method probably coming to null because may not
      be detected your Postal Code */
    
    
If you want learn subdivision 2, watch this way

    $getSubdivision2 = $iplocate->getSubdivision2();
      /* warning!! this method probably coming to null because may not
      be detected your Postal Code */










    




 
