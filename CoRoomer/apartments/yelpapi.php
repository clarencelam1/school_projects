<?php
//
// From http://non-diligent.com/articles/yelp-apiv2-php-example/
//
ini_set('display_errors', true);
error_reporting(E_ALL);
// Enter the path that the oauth library is in relation to the php file
require_once ('oauth.php');

// For example, request business with id 'the-waterboy-sacramento'
$unsigned_url = "http://api.yelp.com/v2/business/la-regencia-san-diego";

// Set your keys here
$consumer_key = "UI4xzsmDyrxmrd2VAyorDw";
$consumer_secret = "nIlF1lPbgwwDq49GY8a72l8OjxQ";
$token = "Jle_d3JKhTjfDNPWm2GXsMcphYJ9TvZK";
$token_secret = "tnCMGu-GgJyuB1UX4mf2fDK1CV4";

// Token object built using the OAuth library
$token = new OAuthToken($token, $token_secret);

// Consumer object built using the OAuth library
$consumer = new OAuthConsumer($consumer_key, $consumer_secret);

// Yelp uses HMAC SHA1 encoding
$signature_method = new OAuthSignatureMethod_HMAC_SHA1();

// Build OAuth Request using the OAuth PHP library. Uses the consumer and token object created above.
$oauthrequest = OAuthRequest::from_consumer_and_token($consumer, $token, 'GET', $unsigned_url);

// Sign the request
$oauthrequest->sign_request($signature_method, $consumer, $token);

// Get the signed URL
$signed_url = $oauthrequest->to_url();

// Send Yelp API Call
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $signed_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
$response = curl_exec($ch);
curl_close($ch);

// Handle Yelp response data
$obj = json_decode($response,true);

//Use this to debug
//echo "<pre>";
//echo var_dump($obj);
//echo "</pre>";

//Create Output
//Apartment Name
echo '<table>';
echo '<tr>';
echo	'<td>';
echo '<img src="../images/yelpreview.gif"><br>';
echo 		'<font face = "arial" color = "#CD0000" size = "5"><b>'; echo $obj['name']; echo '</b></font>'; 
echo	'</td>';
echo '</tr>';
//5 Star Rating
echo '<tr>';
echo	'<td>';
echo 		'<font face = "arial" color = "#575757"><b>';	echo'Overall Rating:'; echo '</b></font>';
echo	'</td>';
echo '</tr>';
echo '<tr>';
echo	'<td>';
echo 		'<img src="'; echo $obj['rating_img_url']; echo '">';
echo	'</td>';
echo '</tr>';
//Review Count
echo '<tr>';
echo	'<td>';
echo 		'<font face = "arial" color = "#575757" size="2">Based on&nbsp'; echo $obj['review_count']; echo '&nbsp;Reviews</font>';
echo	'</td>';
echo '</tr>';	 
echo '</table>';
echo '<br />';

echo '<font face = "arial" color = "#575757" size="2"><b>';	echo'Latest Yelp Reviews'; echo '</b></font>';
//Gather Review Data
foreach($obj['reviews'] as $reviews) {
echo '<table width="550px">';	
echo '<tr>';
echo	'<td>';
echo 		'<img src="'; echo $reviews['rating_image_small_url']; echo '">';
echo	'</td>';
echo '</tr>';
echo '<tr>';
echo	'<td>';
echo 		'<font face = "arial">'; echo $reviews['excerpt']; echo '</font>'; echo '<a style="text-decoration:none;" href="'; echo $obj['url']; echo		'#hrid:'; echo $reviews['id']; echo '"><font color = "#0099CC"> read more.</a></font>';
echo	'</td>';
echo '</tr>';
echo '<tr>';
echo	'<td>';
echo 		'<font face = "arial" size = "2">';
echo 		'Posted by&nbsp';
//Gather User Data
echo 		'<img src="'; echo $reviews['user']['image_url']; echo ' "width = "20" height = "20"><b>';
echo 		$reviews['user']['name'];
echo 		'</b>&nbsp;on&nbsp;</font><a href="http://www.yelp.com" target="_blank"><img src="../images/yelpbutton.png" top:"10px"></a>';
echo	'</td>';
echo '</tr>';
echo '</table>';
echo '<br />';	

}    
?>