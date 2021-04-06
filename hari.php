<?php
$angka = date('D');
switch ($angka) {
	case "Sun":
		echo "Minggu";
		break;
	case "Mon":
		echo "Senin";
		break;
	case "Tue":
		echo "Selasa";
		break;
	case "Wed":
		echo "Rabu";
		break;
	case "Thu":
		echo "Kamis";
		break;
	case "Fri":
		echo "Jumat";
		break;
	case "Sat":
		echo "Sabtu";
		break;
	default:
		echo "Isi variabel tidak di temukan";
		break;
}
?>