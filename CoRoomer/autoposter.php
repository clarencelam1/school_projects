<?php
class cURL {

    var $headers;
    var $user_agent;

    function cURL()
    {
        $this->headers[] = 'Connection: Keep-Alive';
        $this->headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';
        $this->user_agent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)';
    }
    
    
    
    function post($url,$data) {
        $process = curl_init($url);
        curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($process, CURLOPT_HEADER, 1);
        curl_setopt($process, CURLOPT_USERAGENT, $this->user_agent);
        curl_setopt($process, CURLOPT_TIMEOUT, 30);
        curl_setopt($process, CURLOPT_POSTFIELDS, $data);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($process, CURLOPT_POST, 1);
        $return = curl_exec($process);
        $info = curl_getinfo($process);
        curl_close($process);
        return $info;
    }
    
}

$postdata = "
<?xml version=\"1.0\" encoding=\"utf-8\"?>\n

<rdf:RDF xmlns=\"http://purl.org/rss/1.0/\"
         xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\"
         xmlns:cl=\"http://www.craigslist.org/about/cl-bulk-ns/1.0\">

  <channel>
    <items>
      <rdf:li rdf:resource=\"NYCBrokerHousingSample1\"/>
      <rdf:li rdf:resource=\"NYCBrokerHousingSample2\"/>
    </items>

    <cl:auth username=\"****\"
             password=\"****\"

  </channel>
  <item rdf:about=\"NYCBrokerHousingSample1\">
    <cl:category>apa</cl:category>
    <cl:area>chi</cl:area>
    <cl:subarea>chc</cl:subarea>
    <cl:neighborhood>Lakeview</cl:neighborhood>
    <cl:housingInfo price=\"1450\"
                    bedrooms=\"0\"
                    sqft=\"600\"/>
    <cl:replyEmail privacy=\"C\">bulkuser@bulkposterz.net</cl:replyEmail>
    <cl:brokerInfo companyName=\"Joe Sample and Associates\"
                   feeDisclosure=\"fee disclosure here\" />
    <title>Spacious Sunny Studio in Upper West Side</title>
    <description><![CDATA[
      posting body here
    ]]></description>
  </item>
  
 
  
</rdf:RDF>
"; 

$cc = new cURL();
$url = 'https://post.craigslist.org/bulk-rss/post';
$output = $cc->post($url,$postdata); 

//echo $output;

print_r($output); 