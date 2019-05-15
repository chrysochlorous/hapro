<?php /* Template Name: B2Bright Submission */
include( 'wp-load.php' ); // loads WordPress Environment


// the message
$msg = $_GET['submitter-first']." ".$_GET['submitter-last'].PHP_EOL.$_GET['reward'].PHP_EOL.$_GET['address'].PHP_EOL.$_GET['email'];

$headers = 'From: '.filter_var($_GET['email'],FILTER_SANITIZE_EMAIL) . "\r\n" .
    'Reply-To: '.filter_var($_GET['email'],FILTER_SANITIZE_EMAIL) . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// send email to B2B Outlook group
$mailResult = wp_mail("ForYourBusiness@healthalliance.org", "B2Bright Submission", filter_var($msg, FILTER_SANITIZE_STRING), $headers);
if($mailResult != 1){
    $email_status = "FAILED";   
} else {
    $email_status = "emailed"; 
}




// add to MailChimp List
$email = filter_var($_GET['email'],FILTER_SANITIZE_EMAIL);
$first_name = filter_var($_GET['submitter-first'],FILTER_SANITIZE_STRING);
$last_name = filter_var($_GET['submitter-last'],FILTER_SANITIZE_STRING);
$api_key = 'b2a3c586f1265d94cfc0794e05b10aca-us12';
$server = 'us12.'; 
$list_id = '03ed997003';
 
$auth = base64_encode( 'user:'.$api_key );
    
$data = array(
    'apikey'        => $api_key,
    'email_address' => $email,
    'status'        => 'subscribed',
    'merge_fields'  => array(
        'FNAME' => $first_name,
        'LNAME'    => $last_name
        )    
    );
$json_data = json_encode($data);
    
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://'.$server.'api.mailchimp.com/3.0/lists/'.$list_id.'/members/');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
    'Authorization: Basic '.$auth));
curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_POST, true);    
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
 
$result = curl_exec($ch);
 
$result_obj = json_decode($result);

// printing the result obtained 
if($result_obj->status != "subscribed"){
    $mailchimp_status = $result_obj->status." - FAILED";
    wp_mail("Tim.King@healthalliance.org", "B2Bright mailchimp api failed", filter_var($msg, FILTER_SANITIZE_STRING), $headers);
} else {
    $mailchimp_status = "mailchimped"; 
}
#echo '<pre>'; print_r($result_obj); echo '</pre>';

$file = 'b2bright.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "\n".$_GET['submitter-first'].",".$_GET['submitter-last'].",".PHP_EOL.$_GET['reward'].",".PHP_EOL.$_GET['address'].",".$email_status.",".$mailchimp_status;
// Write the contents back to the file
file_put_contents($file, $current);

header('Location: /thank-you/') ;
?>