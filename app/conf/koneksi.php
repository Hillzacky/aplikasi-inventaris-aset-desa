<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = new mysqli("localhost", "root", "", "inventaris", 3306);
if ($db -> connect_errno) {
  echo "Gagal terhubung ke MySQL: " . $db -> connect_error;
  exit();
}
