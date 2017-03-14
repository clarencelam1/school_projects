<? ini_set( "display_errors", 0); ?>

<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js'></script>

<?
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   
    {
		$ip=$_SERVER['HTTP_CLIENT_IP']; //1
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR']; //2
    }
	elseif (!empty($_SERVER['HTTP_PRAGMA']))  
    {
      $ip=$_SERVER['HTTP_PRAGMA']; //3
    }
	elseif (!empty($_SERVER['HTTP_XONNECTION']))  
    {
      $ip=$_SERVER['HTTP_XONNECTION']; //4
    }
	elseif (!empty($_SERVER['HTTP_CACHE_INFO']))  
    {
      $ip=$_SERVER['HHTTP_CACHE_INFO']; //5
    }
	elseif (!empty($_SERVER['HTTP_XPROXY']))  
    {
      $ip=$_SERVER['HTTP_XPROXY']; //6
    }
	elseif (!empty($_SERVER['HTTP_PROXY']))  
    {
      $ip=$_SERVER['HTTP_PROXY']; //7
    }
	elseif (!empty($_SERVER['HTTP_PROXY_CONNECTION']))  
    {
      $ip=$_SERVER['HTTP_PROXY_CONNECTION']; //8
    }
	elseif (!empty($_SERVER['HTTP_CLIENT_IP']))  
    {
      $ip=$_SERVER['HTTP_CLIENT_IP']; //9
    }
	elseif (!empty($_SERVER['HTTP_VIA']))  
    {
      $ip=$_SERVER['HTTP_VIA']; //10
    }
	elseif (!empty($_SERVER['HTTP_X_COMING_FROM']))  
    {
      $ip=$_SERVER['HTTP_X_COMING_FROM']; //11
    }
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR']; //12 
    }
	elseif (!empty($_SERVER['HTTP_X_FORWARDED']))  
    {
      $ip=$_SERVER['HTTP_X_FORWARDED']; //13 
    }
	elseif (!empty($_SERVER['HTTP_COMING_FROM']))  
    {
      $ip=$_SERVER['HTTP_COMING_FROM'];  //14
    }
	elseif (!empty($_SERVER['HTTP_FORWARDED_FOR']))  
    {
      $ip=$_SERVER['HTTP_FORWARDED_FOR'];  //15
    }
	elseif (!empty($_SERVER['HTTP_FORWARDED']))  
    {
      $ip=$_SERVER['HTTP_FORWARDED']; //16
    }
	elseif (!empty($_SERVER['ZHTTP_CACHE_CONTROL']))  
    {
      $ip=$_SERVER['ZHTTP_CACHE_CONTROL']; //17
    }
	else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$ipadd = getRealIpAddr();
?>

<script type="text/javascript">
var counter = 0;
function init(){
document.getElementById("counter").value=counter;
}
function add(){
counter++;
if (counter > 10){counter = 10;
}
else{
document.getElementById("counter").value=counter;
document.getElementById("addimg").innerHTML+="<input type='file' name='img"+counter+"'>"+  "<br>";}
}
function remove(){
counter--;
if (counter <= 0){counter = 0;}
document.getElementById("counter").value=counter;
document.getElementById("addimg").innerHTML="";
for (var i=1;i<=counter;i++)
{
document.getElementById("addimg").innerHTML+="<input type='file' name='img"+i+"'>" +  "<br>";
}
}
</script>


<body onLoad = "init()">
<form method="POST" enctype='multipart/form-data'>
comment <textarea name="comment"></textarea><br>
youtube embed code* (optional) <input type="text" name="embed"><br>
<span style="padding:5px;background-color:cyan;cursor:pointer;-webkit-border-radius: 7px;
-moz-border-radius: 7px;
border-radius: 7px;-webkit-box-shadow: 0px 3px 4px 1px #c7b5c7;
-moz-box-shadow: 0px 3px 4px 1px #c7b5c7;
box-shadow: 0px 3px 4px 1px #c7b5c7;" onClick="add()">Add Photo</span>&nbsp&nbsp <span style="padding:5px;background-color:red;cursor:pointer;color:white;-webkit-border-radius: 7px;
-moz-border-radius: 7px;
border-radius: 7px;-webkit-box-shadow: 0px 3px 4px 1px #c7b5c7;
-moz-box-shadow: 0px 3px 4px 1px #c7b5c7;
box-shadow: 0px 3px 4px 1px #c7b5c7;" onClick="remove()">Remove a Photo</span>
<div id="addimg">
</div>
<input type="hidden" id="counter" name="counter" value="">
<input type="submit" name="submit" value="submit">
</form>
<a href="utubeinstr.php" style="text-decoration:none;">*Click Here For Instructions.</a>
</body>

<?
mysql_connect("localhost","coroom5_mike","76891111");
mysql_select_db("coroom5_DBP");

$comment = mysql_real_escape_string($_POST[comment]);
$imgid = mysql_real_escape_string($_POST['counter']);
$embed = mysql_real_escape_string($_POST[embed]);

if (isset($_POST[submit]))
{
	
if (!$embed)
{
	$utube = "none";
}
else
{
	$width = strpos("$embed","http");
	$utube = substr("$embed",$width,40);
}

if ($imgid > 0){
    for ($i=1; $i<=$imgid; $i++)
	{
	${'img' . $i} = "img".$i;
	${'type' . $i}  = $_FILES[${'img' . $i}]['type'];
	${'size' . $i}  = $_FILES[${'img' . $i}]['size'];
    ${'file' . $i}  = $_FILES[${'img' . $i}]['tmp_name'];
	${'file' . $i} = addslashes(file_get_contents ($_FILES[${'img' . $i}]['tmp_name']));
		
		//check if valid image type	
		if ( !(
		($_FILES[${'img' . $i}]["type"] == "image/bmp")
		||($_FILES[${'img' . $i}]["type"] == "image/gif")
		||($_FILES[${'img' . $i}]["type"] == "image/jpeg")
		||($_FILES[${'img' . $i}]["type"] == "image/png")
		||($_FILES[${'img' . $i}]["type"] == "image/tiff")
		))
		{
			die("<b style='float:left;display:block'>Please upload a photo or press the 'Remove a photo' button.</b>");
		}
		
		//check if it fits size limitations
		if( ${'size' . $i} > 2000000 )
		{
			die("<b>The image file size is too big</b>");
		}
	}
}

mysql_query("INSERT INTO posting VALUES('','$ipadd','','$comment','','$utube','$imgid','$file1','$file2','$file3','$file4','$file5','$file6','$file7','$file8','$file9','$file10')");



}
?>













