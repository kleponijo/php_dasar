<?php

require_once "tipe_data_number/TipeDataNumber.php";
require_once "tipe_data_number/TipeDataFloatingPoint.php";

echo "Masukan pilihan (1/2):" . PHP_EOL;
echo "1. Tipe data number" . PHP_EOL;
echo "2. Tipe data Floating Point" . PHP_EOL;

$pilihan = readline("Pilih: ");
echo PHP_EOL;

switch ($pilihan) {
  case 1:
    TipeDataNumber();
    break;
  case 2:
    TipeDataFloatingPoint();
    break;
  default:
    echo "pilihan tidak valid!". PHP_EOL;
}