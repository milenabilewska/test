<?php
require_once 'Database.php';
require_once 'Currency.php';


use PHPDB\DB\Database;
use DB\CURRENCY;

try
{
    $db = new Database("localhost", "3306", "root", "", "nazwa_bazy");
    echo('<p>Masz polączenie z bazą danych</p>');



}
catch(PDOException $e)
{
 echo('<p>Problem z nawiązaniem połączenia z bazą danych</p>');
 die(); // Nie połączyłeś się? To nie ma co robić nic więcej!

}

?>