<?php 
	echo "CONTOH IMPLODE 1"."<br>";
	echo "BUS"."<br>"."<br>";
	$bus = array("Nama Bus"=>"Nusantara",
				 "Kelas"=>"Ekonomi",
				 "Tujuan"=>"Jogja");
	print_r($bus);
	$busurt = implode(" | ", $bus);
	echo '<pre>';print_r($busurt);echo'</pre>';
	
	echo "************************************************";
	echo "<br>"."<br>";

	
	echo "CONTOH IMPLODE 2"."<br>";
	echo "Pesan Bus"."<br>"."<br>";
	$psn = array("Nama Bus"=>"Nusantara",
				 "Kelas"=>"Ekonomi",
				 "Tujuan"=>"Jogja",
				 "Harga"=>"200.000",
				 "Jadwal"=>"Senin,11-11-2019",
				 "Jam"=>"09:30");
	print_r($psn);
	$psnurt = implode(" | ", $psn);
	echo '<pre>';print_r($psnurt);echo'</pre>';
	
	echo "************************************************";
	echo "<br>"."<br>";
	
	echo "CONTOH IMPLODE 3"."<br>";
	echo "Cara Pesan"."<br>"."<br>";
	$cra = array("Pertama"=>"Kunjingi Website Kami",
				 "Kedua"=>"Registrasi",
				 "Ketiga"=>"Isi data",
				 "Keempat"=>"Bayar",
				 "Kelima"=>"Cetak");
	print_r($cra);
	$craurt = implode(" -> ", $cra);
	echo '<pre>';print_r($craurt);echo'</pre>';
	
	echo "************************************************";
	echo "<br>"."<br>";
	
	echo "CONTOH IMPLODE 4"."<br>";
	echo "Alamat Terminal"."<br>"."<br>";
	$almt = array("Daerah"=>"Jalan Imogiri Timur Km 6",
					"Kecamatan"=>"Giwangan",
					"Kelurahan"=>"Umbulharjo",
					"Kode Pos"=>"55163",
					"Kota"=>"Yogyakarta");
	print_r($almt);
	$almturt = implode(", ", $almt);
	echo'<pre>';print_r($almturt);echo'</pre>';
	
	echo "************************************************";
	echo "<br>"."<br>";
	
	echo "CONTOH IMPLODE 5"."<br>";
	echo "Waktu Keberangkatan"."<br>"."<br>";
	$wkt = array("Jam"=>"09",
				 "Menit"=>"30",
				 "Detik"=>"00");
	print_r($wkt);
	$wkturt = implode(":", $wkt);
	echo '<pre>';print_r($wkturt);echo'</pre>';
	
	echo "************************************************";
	echo "<br>"."<br>";
?>