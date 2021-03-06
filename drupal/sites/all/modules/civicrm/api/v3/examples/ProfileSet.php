<?php

function profile_set_example(){
 $params = 
     array(
           'profile_id' 		=> '25',
           'contact_id' 		=> '1',
           'version' 		=> '3',
           'first_name' 		=> 'abc2',
           'last_name' 		=> 'xyz2',
           'email-Primary' 		=> 'abc2.xyz2@gmail.com',
           'phone-1-1' 		=> '022 321 826',
           'country-1' 		=> '1013',
           'state_province-1' 		=> '1000',
      );

  require_once 'api/api.php';
  $result = civicrm_api( 'profile','set',$params );

  return $result;
}

/*
 * Function returns array of result expected from previous function
 */
function profile_set_expectedresult(){

  $expectedResult =
     array(
           'is_error' 		=> '0',
           'version' 		=> '3',
           'count' 		=> '1',
           'values' 		=> array(           'contact' =>  array(
                      '1' =>  array(
                            'id' => '1',
                            'contact_type' => 'Individual',
                            'contact_sub_type' => '',
                            'do_not_email' => '',
                            'do_not_phone' => '',
                            'do_not_mail' => '',
                            'do_not_sms' => '',
                            'do_not_trade' => '',
                            'is_opt_out' => '',
                            'legal_identifier' => '',
                            'external_identifier' => '',
                            'sort_name' => 'xyz2, abc2',
                            'display_name' => 'abc2 xyz2',
                            'nick_name' => '',
                            'legal_name' => '',
                            'image_URL' => '',
                            'preferred_communication_method' => '',
                            'preferred_language' => 'en_US',
                            'preferred_mail_format' => '',
                            'hash' => '',
                            'api_key' => '',
                            'first_name' => 'abc2',
                            'middle_name' => '',
                            'last_name' => 'xyz2',
                            'prefix_id' => '',
                            'suffix_id' => '',
                            'email_greeting_id' => '',
                            'email_greeting_custom' => '',
                            'email_greeting_display' => '',
                            'postal_greeting_id' => '',
                            'postal_greeting_custom' => '',
                            'postal_greeting_display' => '',
                            'addressee_id' => '',
                            'addressee_custom' => '',
                            'addressee_display' => '',
                            'job_title' => '',
                            'gender_id' => '',
                            'birth_date' => '',
                            'is_deceased' => '',
                            'deceased_date' => '',
                            'household_name' => '',
                            'primary_contact_id' => '',
                            'organization_name' => '',
                            'sic_code' => '',
                            'user_unique_id' => '',
        ),
           ),           ),
      );

  return $expectedResult  ;
}

