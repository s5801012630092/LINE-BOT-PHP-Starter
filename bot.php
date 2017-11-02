<?php
    
$access_token = 'OGQmM70UyBouqcPvHkkMROOSSMw+PUmFHmOs782sOozvah49r85WnwCPL1D075fiTv8NtDsPUaE2mzUVQYuwtO31WMCgk7VS8U32JGF8wIz99zm/nC9znoBfnrIu/jt14s6VHFbsLsJWHElUaFtsQgdB04t89/1O/w1cDnyilFU=';
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
	        $replyToken = $event['replyToken'];
    
			switch($text){	
           case 'หาร้านอาหาร': 
            $url = "https://maps.googleapis.com/maps/api/place/radarsearch/json?language=th&location=13.818987, 100.514330&radius=200&type=restaurant&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
            $curl_handle = curl_init();
            curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt( $curl_handle, CURLOPT_URL, $url );
            curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
            $text = curl_exec( $curl_handle );
            curl_close( $curl_handle ); 
            $obj = json_decode($text, TRUE);
            for ($x = 0; $x <= 10; $x++) {
               $mes = $obj['results'][$x]['place_id']; 
               $url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=$mes&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
               $curl_handle = curl_init();
               curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
               curl_setopt( $curl_handle, CURLOPT_URL, $url );
               curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
               $text = curl_exec( $curl_handle );
               curl_close( $curl_handle ); 
               $object = json_decode($text, TRUE);
               $name = $object['result']['name']; 
               $number = $object['result']['formatted_phone_number'];
               $address = $object['result']['formatted_address'];
               $addname .= "->>".$name."\n".$number."\n".$address."\n\n";
            }            
				    // Build message to reply back
				    $messages = [
							     'type' => 'text',
							     'text' => "$addname"
					 ];
          break;
          case 'หาโรงพยาบาล': 
            $url = "https://maps.googleapis.com/maps/api/place/radarsearch/json?language=th&location=13.818987, 100.514330&radius=200&type=hospital&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
            $curl_handle = curl_init();
            curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt( $curl_handle, CURLOPT_URL, $url );
            curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
            $text = curl_exec( $curl_handle );
            curl_close( $curl_handle ); 
            $obj = json_decode($text, TRUE);
            for ($x = 0; $x <= 10; $x++) {
               $mes = $obj['results'][$x]['place_id']; 
               $url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=$mes&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
               $curl_handle = curl_init();
               curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
               curl_setopt( $curl_handle, CURLOPT_URL, $url );
               curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
               $text = curl_exec( $curl_handle );
               curl_close( $curl_handle ); 
               $object = json_decode($text, TRUE);
               $name = $object['result']['name']; 
               $number = $object['result']['formatted_phone_number'];
               $address = $object['result']['formatted_address'];
               $addname .= "->>".$name."\n".$number."\n".$address."\n\n";
            }            
				    // Build message to reply back
				    $messages = [
							     'type' => 'text',
							     'text' => "$addname"
					 ];
          break;
          case 'หาเอทีเอ็ม': 
            $url = "https://maps.googleapis.com/maps/api/place/radarsearch/json?language=th&location=13.818987, 100.514330&radius=200&type=atm&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
            $curl_handle = curl_init();
            curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt( $curl_handle, CURLOPT_URL, $url );
            curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
            $text = curl_exec( $curl_handle );
            curl_close( $curl_handle ); 
            $obj = json_decode($text, TRUE);
            for ($x = 0; $x <= 10; $x++) {
               $mes = $obj['results'][$x]['place_id']; 
               $url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=$mes&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
               $curl_handle = curl_init();
               curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
               curl_setopt( $curl_handle, CURLOPT_URL, $url );
               curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
               $text = curl_exec( $curl_handle );
               curl_close( $curl_handle ); 
               $object = json_decode($text, TRUE);
               $name = $object['result']['name']; 
               $number = $object['result']['formatted_phone_number'];
               $address = $object['result']['formatted_address'];
               $addname .= "->>".$name."\n".$address."\n\n";
            }            
				    // Build message to reply back
				    $messages = [
							     'type' => 'text',
							     'text' => "$addname"
					 ];
          break;
          case 'หาสปา': 
            $url = "https://maps.googleapis.com/maps/api/place/radarsearch/json?language=th&location=13.818987, 100.514330&radius=200&type=spa&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
            $curl_handle = curl_init();
            curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt( $curl_handle, CURLOPT_URL, $url );
            curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
            $text = curl_exec( $curl_handle );
            curl_close( $curl_handle ); 
            $obj = json_decode($text, TRUE);
            for ($x = 0; $x <= 10; $x++) {
               $mes = $obj['results'][$x]['place_id']; 
               $url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=$mes&key=AIzaSyBEA0UcZj9m-fYvwGTx0aoITGJxyWLdGm4";
               $curl_handle = curl_init();
               curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
               curl_setopt( $curl_handle, CURLOPT_URL, $url );
               curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true);
               $text = curl_exec( $curl_handle );
               curl_close( $curl_handle ); 
               $object = json_decode($text, TRUE);
               $name = $object['result']['name']; 
               $number = $object['result']['formatted_phone_number'];
               $address = $object['result']['formatted_address'];
               $addname .= "->>".$name."\n".$number."\n".$address."\n\n";
            }            
				    // Build message to reply back
				    $messages = [
							     'type' => 'text',
							     'text' => "$addname"
					 ];
          break;
  			  default:
					$messages = [
							     'type' => 'text',
							     'text' => $text		
							    ];
					break;
			}
		}
    
		if ($event['type'] == 'message' && $event['message']['type'] == 'sticker'){
			// Get text sent
			$text = $event['message']['sticker'];
			// Get replyToken
	        $replyToken = $event['replyToken'];
			$random = rand(407,430);
			$messages = [
						 'type' => 'sticker',
                         'packageId' => '1',
                         'stickerId' => $random
						];
		}			
		// Make a POST Request to Messaging API to reply to sender
	    $url = 'https://api.line.me/v2/bot/message/reply';
	    $data = [
		        'replyToken' => $replyToken,
			    'messages' => [$messages]
			    ];
	    $post = json_encode($data);
		$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		$result = curl_exec($ch);
		url_close($ch);
		echo $result . "\r\n";		   
	}
}
?>
