<?php

#sqlite3
$database = new PDO('sqlite:mcdata.db');
class DBphp extends SQLite3
{
  function __construct()
  {
    $this->open('mcdata.db');
  }
}

$database = new DBphp();
//$db = new SQLite3('data.db');

?>
