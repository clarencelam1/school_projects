<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.2.min.js">
</script>
<script>
function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;}}
</script>

<?
mysql_connect("localhost","coroom5_mike","76891111");
mysql_select_db("coroom5_laregencia");

//yeah, I know it's long but its a more comprehensive IP scan and it accounts for proxy servers
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
$ipqry = mysql_query("SELECT * FROM news WHERE ip = '$ipadd' ");
$ipqry = mysql_fetch_assoc($ipqry);
$dpip = $ipqry[ip];

if ($dpip)
{
	echo'<script>
	window.onload = function(){
	document.getElementById("status").innerHTML = "<img src=\"http://www.coroomer.com/images/warning.png\" style=\"width:35px;height:35px\" > You can edit your current announcement";}
	</script>';
}
else
{
	echo'<script>
	window.onload = function(){
	document.getElementById("status").innerHTML = "You can make a new announcement";}
	</script>';
}
?>

<style>
body{font-family:segoe ui;}
.hidden{display:none;}
.text{height:25px; padding:0px 5px; outline:none;
-webkit-border-radius: 7px;
-moz-border-radius: 7px;
border-radius: 7px;
-webkit-box-shadow: inset 1px 1px 7px 1px #bfb8bf;
-moz-box-shadow: inset 1px 1px 7px 1px #bfb8bf;
box-shadow: inset 1px 1px 7px 1px #bfb8bf;}
.select{-webkit-border-radius: 7px;
-moz-border-radius: 7px;
border-radius: 7px; outline:none; padding:5px;
border:3px solid cyan;}
#status{border:1px solid green;background-color:cyan;width:330px;height:40px;
-webkit-border-radius: 7px;
-moz-border-radius: 7px;
border-radius: 7px; padding:8px 30px;}
input.button:hover{background-color:cyan;}
</style>
<fieldset style="width:570px;"><legend><b>Post your announcement!</b></legend>
<table>
<form method="POST">
<tr>
<div id="status"></div>
</tr>
<tr>
<td>Enter your news or announcement</td><td><input type="text" id="news" name="news"size= "45" class="text" onKeyDown="limitText(this.form.news,this.form.countdown,80);" 
onKeyUp="limitText(this.form.news,this.form.countdown,80);" maxlength="80" style="font-family:segoe ui"></td>
<td></td>
</tr>
<tr><td></td>
<td>
<font size="2">(Maximum characters: 80)<br>
You have <input readonly type="text" name="countdown" size="3" value="80"> characters left.</font>
</td>
</tr>
<tr>
<td>Link to a website (optional)</td><td><input type="text" id="url" name="url" size="45" class="text" style="font-family:segoe ui"></td>
</tr>
<tr>
<td>News or announcement expires in: <br>(Max:14 days)</td>
<td>
<select name="days" class="select">
<option value="none">how many days?</option>
<?
for ($i=1;$i<=14;$i++)
{
	echo'<option value='.$i.'>'.$i.' </option>';
}
?>
</select></td>
</tr>
<tr><td></td><td>
<div id="expvali" class="hidden" style="color:red">Please select how many days you want the news/announcement to be up</div>
<div id="updatevali" class="hidden" style="color:red">Please enter updated announcement</div>
<div id="updatetwovali" class="hidden" style="color:red">Please enter updated website address</div>
</td>
</tr>
<tr><td></td><td>
<input type="submit" class="button" style="padding:3px;float:right;border:1px solid #006;cursor:pointer" name="submit" value="Post Announcement!">
</td></tr>
</form>
</table></fieldset>

<?
$news = mysql_real_escape_string($_POST['news']);
$url = mysql_real_escape_string($_POST['url']);
$days = mysql_real_escape_string($_POST['days']);
$time = time();
$exp = $time + ($days * 86400);

if (isset($_POST['submit']))
{
	//if user didn't make a posting yet
	if (!$dpip)
	{
	   //check if the number of days is selected
	   if($days != "none")
	   {
	    	mysql_query("INSERT INTO news VALUES('','$ipadd','$news','$url','$exp')");
			echo'<script>
			function success(){
		var success = alert("Your Announcement has been submitted!");
		if (success == false)
		{ window.location.reload();} 
		else{window.location.reload();}
		} success();
			</script>';
	   }
	   else
	   {
		   echo'<script>
		   $(document).ready(function(){
			$("#expvali").fadeIn(); 
			$("#expvali").delay(4000).fadeOut(); 
		   });
		   </script>';
	   }
	}
	else
	{
	   if ($news){
	      $dburl = $ipqry[url];
		  if ($dburl)
		  {
			  if ($url)
			  {
	   mysql_query("UPDATE news SET announce = '$news', url = '$url' WHERE ip = '$ipadd'");
	   echo'<script>
	   alert("Your announcement has been updated!");
	   </script>';
			  }
			  else
			  {
				  echo'<script>
		   $(document).ready(function(){
			$("#updatetwovali").fadeIn(); 
			$("#updatetwovali").delay(4000).fadeOut(); 
		   });
		   </script>';
			  }
		  }
		  else
		  {
			mysql_query("UPDATE news SET announce = '$news', url = '$url' WHERE ip = '$ipadd'");
	   echo'<script>
	   alert("Your announcement has been updated!");
	   </script>';
		  }
	   }
	   else
	   {
		    echo'<script>
		   $(document).ready(function(){
			$("#updatevali").fadeIn(); 
			$("#updatevali").delay(4000).fadeOut(); 
		   });
		   </script>';
	   }
	}
}





?>