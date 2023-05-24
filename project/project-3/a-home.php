a-home
<?php


var_dump($_SESSION);

echo session_id();
echo "<hr>";
echo "mijn gebruiksrol is: " . $_SESSION["userrole"];
echo "<hr>";
echo"mijn id: "  . $_SESSION["id"];
echo "<hr>";

?>