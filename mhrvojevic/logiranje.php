<?php
$var1 = $_POST['ime'];
$var2 = $_POST['lozinka'];

//echo $var1;

if ($var1 == "korisnik1" && $var2 == "12345") {
    echo "Vi ste OBICNI KORISNIK";
    header('refresh:3; url=http://127.0.0.1/mhrvojevic/index.php');
    session_start();
    $_SESSION['username'] = $var1;
} elseif ($var1 == "admin1" && $var2 == "54321") {
    echo "Vi ste administrator";
    header('refresh:3; url=http://127.0.0.1/mhrvojevic/index.php');
    session_start();
    $_SESSION['username'] = $var1;

}
else {echo "Vi ste obicni gost korisnik";}
header('refresh:3; url=http://127.0.0.1/mhrvojevic/index.php');












  ?>