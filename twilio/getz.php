<? 

$r1 = "http://api.twilio.com/2010-04-01/Accounts/AC00352579dd87fbde0027bb0b89b75652/Recordings/RE33c749ad3056acc55146baf9989ea6bdhttp://api.twilio.com/2010-04-01/Accounts/AC00352579dd87fbde0027bb0b89b75652/Recordings/RE731663f8edc0eba6c072190876344e45http://api.twilio.com/2010-04-01/Accounts/AC00352579dd87fbde0027bb0b89b75652/Recordings/REe51e452e8b271bb5eaafb77f6912bc84http://api.twilio.com/2010-04-01/Accounts/AC00352579dd87fbde0027bb0b89b75652/Recordings/REb418ae11db40fd434ef3574ef2c845d5http://api.twilio.com/2010-04-01/Accounts/AC00352579dd87fbde0027bb0b89b75652/Recordings/REd82f08992085b88ad7a16fb3940d4196&AccountSid=AC00352579dd87fbde0027bb0b89b75652&ToZip=94949&FromState=CA&Called=%2B14155992671&FromCountry=US&CallerCountry=US&CalledZip=94949&Direction=inbound&FromCity=PETALUMA&CalledCountry=US&CallerState=CA&CallSid=CAbe6f3c357824f036f1c3cdefa0e2bd5d&CalledState=CA&From=%2B17077767766&CallerZip=94954&FromZip=94954&CallStatus=in-progress&ToCity=NOVATO&ToState=CA&To=%2B14155992671&Digits=1&ToCountry=US&msg=Gather+End&CallerCity=PETALUMA&ApiVersion=2010-04-01&Caller=%2B17077767766&CalledCity=NOVATO";

$r5 = substr ($r1, strrpos($r1,"http"), strlen($r1));
$r1 = substr ($r1, 0, strlen($r1)-strlen($r5));

$r4 = substr ($r1, strrpos($r1,"http"), strlen($r1));
$r1 = substr ($r1, 0, strlen($r1)-strlen($r4));

$r3 = substr ($r1, strrpos($r1,"http"), strlen($r1));
$r1 = substr ($r1, 0, strlen($r1)-strlen($r3));

$r2 = substr ($r1, strrpos($r1,"http"), strlen($r1));
$r1 = substr ($r1, 0, strlen($r1)-strlen($r2));

echo "FIVE";
echo $r5;
echo "<br>";
echo "FOUR";
echo $r4;
echo "<br>";
echo "THREE";
echo $r3;
echo "<br>";
echo "TWO";
echo $r2;
echo "<br>";
echo "ONE";
echo $r1;

?>