
<?
// Submit those variables to the server
$post_data = array(
);
 
// Send a request to example.com 

// Make a for loop for the extraction!!!

// Original PHP code by Chirp Internet: www.chirp.com.au // Please acknowledge use of this code by including this header. 

// <a href='http://tumblrplug.com/o.php?url=MTM0MjgzMzE3Mnx5LW8tdS1uLWctbG8tdi1lLnR1bWJsci5jb20=

// set some variables
$host = "192.168.1.101";
$port = 1337;
// don't timeout!
set_time_limit(0);
// create socket
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create
socket\n");
// bind socket to port
$result = socket_bind($socket, $host, $port) or die("Could not bind to
socket\n");
// start listening for connections
$result = socket_listen($socket, 3) or die("Could not set up socket
listener\n");
// accept incoming connections
// spawn another socket to handle communication
$spawn = socket_accept($socket) or die("Could not accept incoming
connection\n");
// read client input
$input = socket_read($spawn, 1024) or die("Could not read input\n");
// clean up input string
$input = trim($input);
// reverse client input and send back
$output = strrev($input) . "\n";
socket_write($spawn, $output, strlen ($output)) or die("Could not write
output\n");
// close sockets
socket_close($spawn);
socket_close($socket);

/*

$url = "http://www.tumblrplug.com"; $input = file_get_contents($url, FALSE, $context) or die("Could not access file: $url"); $regexp = "//"; 

if(preg_match( $regexp, $input, $matches)) { // $matches[2] = array of link addresses // $matches[3] = array of link text - including HTML code 
echo "hello";
	

			echo $input;
}

$result = post_request('http://tumblrplug.com/', $post_data);
 
if ($result['status'] == 'ok'){
 
    // Print headers 
    echo $result['header']; 
 
    echo '<hr />';
 
    // print the result of the whole request:
    echo $result['content'];
 
}
else {
    echo 'A error occured: ' . $result['error']; 
}



function post_request($url, $data, $referer='') {
 
    // Convert the data array into URL Parameters like a=b&foo=bar etc.
    $data = http_build_query($data);
 
    // parse the given URL
    $url = parse_url($url);
 
    if ($url['scheme'] != 'http') { 
        die('Error: Only HTTP request are supported !');
    }
 
    // extract host and path:
    $host =  '76.103.113.68';
    $path = $url['path'];
 
    // open a socket connection on port 80 - timeout: 30 sec
    $fp = fsockopen($host, 80, $errno, $errstr, 30);
 
    if ($fp){
 
        // send the request headers:
        fputs($fp, "POST $path HTTP/1.1\r\n");
        fputs($fp, "Host: $host\r\n");
 
        if ($referer != '')
            fputs($fp, "Referer: $referer\r\n");
 
        fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
        fputs($fp, "Content-length: ". strlen($data) ."\r\n");
        fputs($fp, "Connection: close\r\n\r\n");
        fputs($fp, $data);
 
        $result = ''; 
        while(!feof($fp)) {
            // receive the results of the request
            $result .= fgets($fp, 128);
        }
    }
    else { 
        return array(
            'status' => 'err', 
            'error' => "$errstr ($errno)"
        );
    }
 
    // close the socket connection:
    fclose($fp);
 
    // split the result header from the content
    $result = explode("\r\n\r\n", $result, 2);
 
    $header = isset($result[0]) ? $result[0] : '';
    $content = isset($result[1]) ? $result[1] : '';
 
    // return as structured array:
    return array(
        'status' => 'ok',
        'header' => $header,
        'content' => $content
    );
}

*/
?>