<?php

function formatTanggal($date=null,$show=null)
{
	$array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat', 'Sabtu','Minggu');
	$array_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus',
	'September','Oktober', 'November','Desember');
	
	if($date == null) {
		$formatTanggal = '';
	} else {
		$date = strtotime($date);
		$hari = $array_hari[date('N',$date)];
		$tanggal = date ('j', $date);
		$bulan = $array_bulan[date('n',$date)];
		$tahun = date('Y',$date);
		$opt = '';
		if( $show <> null ){
			$jam = date('H:i:s',$date);
			//$jam = $date('H:i:s');
			$opt = ' - <span class="muted">'.$jam.'</span>';
		}
		
		$formatTanggal = $hari . ", " . $tanggal ." ". $bulan ." ". $tahun.$opt ;
	}
	
	return $formatTanggal;
}

function formatTanggalTtd($date='') {
	$array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat', 'Sabtu','Minggu');
	$array_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus',
	'September','Oktober', 'November','Desember');

	if($date == '') {
		$formatTanggal = '';
	} else {
		$date = strtotime($date);
		$hari = $array_hari[date('N',$date)];
		$tgl = date ('d', $date);
		$bln = $array_bulan[date('n',$date)];
		$thn = date('Y',$date);
		
		// $formatTanggal = $hari . ", " . $tgl ." ". $bln ." ". $thn;
		$formatTanggal = $tgl ." ". $bln ." ". $thn ;
	}
	
	return $formatTanggal;
}

function formatTanggalOnly($date=null,$show=null)
{
	$array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat', 'Sabtu','Minggu');
	$array_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus',
	'September','Oktober', 'November','Desember');
	
	if($date == null) {
		$formatTanggal = '';
	} else {
		$date = strtotime($date);
		$hari = $array_hari[date('N',$date)];
		$tanggal = date ('j', $date);
		$bulan = $array_bulan[date('n',$date)];
		$tahun = date('Y',$date);
		$opt = '';
		if( $show <> null ){
			$jam = date('H:i:s',$date);
			$opt = ' - <span class="muted">'.$jam.'</span>';
		}
		
		$formatTanggal = $tanggal ." ". $bulan ." ". $tahun.$opt ;
	}
	
	return $formatTanggal;
}

function hitung_umur($tgl_lhr='') {
	$age = floor((time() - strtotime($tgl_lhr)) / 31556926);
	return $age;
}

# hitung usia
function hitung_usia_anak($date2,$tglahir,$usia_putus = 21){
	$usia[""] = '';
	//$date1 = $date1; //"2007-03-24";
	//$date2 = date('Y-m-d'); //"2009-06-26";
	
	# date1 = tanggal lahir
	$diff = abs(strtotime($date2) - strtotime($tglahir));

	$tahun = floor($diff / (365*60*60*24));
	$bulan = floor(($diff - $tahun * 365*60*60*24) / (30*60*60*24));
	$hari  = floor(($diff - $tahun * 365*60*60*24 - $bulan*30*60*60*24)/ (60*60*24));
	
	$usia['tahun']	=	$tahun;
	$usia['bulan']	=	$bulan;
	$usia['hari']	=	$hari;
	
	$time_usia21	=	($usia_putus*365*60*60*24)+abs(strtotime($tglahir));
	//$bln			=	floor(($usia_putus-$time_usia21*365*60*60*24)/30*60*60*24);
	//$time_usia21_2	=	($usia_putus*365*60*60*24)+abs(strtotime($tglahir));
	$usia_21_hari	=	date('d',abs(strtotime($tglahir)));
	$usia['usia_21']=	date('Y',$time_usia21).'-'.date('m',$time_usia21).'-'.$usia_21_hari;
	
	return $usia;
}

function selisih_tanggal($tanggal2,$tanggal1){
	$sisa[""]	=	'';
	$diff 		= strtotime($tanggal2) - strtotime($tanggal1);

	$tahun = floor($diff / (365*60*60*24));
	$bulan = floor(($diff - $tahun * 365*60*60*24) / (30*60*60*24));
	$hari  = floor(($diff - $tahun * 365*60*60*24 - $bulan*30*60*60*24)/ (60*60*24));
	
	$sisa['tahun']	=	$tahun;
	$sisa['bulan']	=	$bulan;
	$sisa['hari']	=	$hari;
	
	return $sisa;
}

function setTanggalKeLokal($tanggal){
	$tgl 	=	strtotime($tanggal);
	return date('d-m-Y',$tgl);
}

#format local ke format server	
function setTanggalKeServer($tanggal){
	date_default_timezone_set('Asia/Jakarta');
	$tgl 	=	strtotime($tanggal);
	return date('Y-m-d',$tgl);
	
	/*
	$sekarang = new DateTime();
	$menit = $sekarang -> getOffset() / 60;
	 
	$tanda = ($menit < 0 ? -1 : 1);
	$menit = abs($menit);
	$jam = floor($menit / 60);
	$menit -= $jam * 60;
	 
	$offset = sprintf('%+d:%02d', $tanda * $jam, $menit);
	 
	//mysql_connect($server, $username, $password);
	//mysql_select_db($database);
	 
	//$this->db->query("SET time_zone = '$offset'");
	*/
}	
?>