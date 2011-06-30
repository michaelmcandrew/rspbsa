<?php

function profile_get_example(){
 $params = 
     array(
           'profile_id' 		=> '25',
           'contact_id' 		=> '1',
           'version' 		=> '3',
      );

  require_once 'api/api.php';
  $result = civicrm_api( 'profile','get',$params );

  return $result;
}

/*
 * Function returns array of result expected from previous function
 */
function profile_get_expectedresult(){

  $expectedResult =
     array(
           'is_error' 		=> '0',
           'version' 		=> '3',
           'count' 		=> '1',
           'values' 		=> array(           'first_name' => 'abc1',           'last_name' => 'xyz1',           'email-Primary' => 'abc1.xyz1@yahoo.com',           'phone-1-1' => '021 512 755',           'country-1' => '1228',           'state_province-1' => '1021',           ),
      );

  return $expectedResult  ;
}

