     <?php
        $login=$_GET["login"];
        $haslo1=$_GET["haslo1"];


        $con = new mysqli("127.0.0.1","root","","ksiega");
        $cookie_name = "cook";
        $cookie_value = $login;
        setcookie($cookie_name, $cookie_value, time() + (3600), "/"); // 86400 = 1 day
        $q="SELECT * FROM dane WHERE login = '" . $login ."'";

        if($wynik=$con->query($q))
        while($row=$wynik->fetch_array())
        {
			$str = $haslo1;
$haslo1 = sha1($str);

if($row["haslo1"]==$haslo1){

            if($login&&$haslo1){

                
        header('Location: zal.php');


            }else{
            echo "Bledne haslo!";
			}
}
        }
        else
        echo $con->errno . " " . $con->error;
        ?>
