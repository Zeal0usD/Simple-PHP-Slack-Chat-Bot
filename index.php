<?PHP
// Very basic snippit for posting messages back to a slack channel, can be used as a quick and dirty way to generate messages from the web site back to slack.
$url = 'https://app.slack.com/api/chat.postMessage?token=xoxb-{token)&channel=[channel name]&as_user=[posting user]&text=hello';
 
$curl = curl_init();
 
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
 
$data = curl_exec($curl);
 
curl_close($curl);
?>
