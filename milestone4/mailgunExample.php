<?php

$body = <<<EOD
<html>
<body>
	Here is the <a href="http://www.cs.odu.edu/~mkelly/cs418">CS418 website</a>.
</body>
</html>
EOD;

$postQueryParameters =
	http_build_query(array(	
		"from" => 'Mailgun Sandbox <postmaster@sandboxfd645cb9816e4b40b9e06550367830cd.mailgun.org>',	// Get and use your own
		"to"  => "nwrkhckq@sharklasers.com",
		"subject" => "CS418 - Milestone 4 Requirements",
		"text" => "Test body"
	));
$username = "api";
$password = "key-f9af6f95b7619ea8af4c3c1233c6e26c"; // Get and use your own


$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "https://api.mailgun.net/v3/sandboxfd645cb9816e4b40b9e06550367830cd.mailgun.org/messages");  // Get and use your own
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERPWD, $username.":".$password);
curl_setopt($ch, CURLOPT_POSTFIELDS,$postQueryParameters);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$output = curl_exec ($ch);

if($output != false){
	echo $output;
	echo "done";
}else {
	echo "There was an error";
	echo $output;
	echo curl_error($ch);
}

curl_close ($ch);



?>
