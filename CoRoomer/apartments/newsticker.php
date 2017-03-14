<?
function echoTicker(){ ?>

<style>
a {text-decoration:none;}
</style>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.2.min.js">
</script>
<link href="http://www.coroomer.com/newsticker/newsticker.css" rel="stylesheet" type="text/css" />
<script src="http://www.coroomer.com/newsticker/newsticker.js" type="text/javascript"></script>
<script src="http://www.coroomer.com/lytebox/lytebox.js" type="text/javascript"></script>
<link href="http://www.coroomer.com/lytebox/lytebox.css" rel="stylesheet" type="text/css" />


<script type="text/javascript">
    $(function () {
        $('#js-news').ticker();
    });
</script>

<div id="tickercontain" >
<div id="ticker-wrapper" class="no-js">
    <ul id="js-news" class="js-hidden">
<?       
mysql_connect("localhost","coroom5_mike","76891111");
mysql_select_db("coroom5_laregencia");        

$newsqry = mysql_query("SELECT * FROM news ORDER BY RAND()");
while($news = mysql_fetch_assoc($newsqry))
{
echo'<li class="news-item"><a href="'.$news[url].'"> '.$news[announce].' </a></li>';
}
?>        
</ul>
</div>
<div id="postLink" style="position:relative;bottom:15px;" ><a href="http://www.coroomer.com/apartments/newstickerform.php" rel="lyteframe" title="" rev="width:620; height:380">[Post Your Own!]</a></div>
</div>

<?
}

echoTicker();
?>