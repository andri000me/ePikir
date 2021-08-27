<?php
if (!function_exists('send_wa')) {
    function send_wa($no_hp = '', $pesan = '', $type = 'text')
    {
        $curl = curl_init();

        $data = array(
            'nohp' => $no_hp,
            'pesan' => $pesan,
            'tipe'  => $type
        );

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apibot.magelangkab.go.id/Api/wa/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'service: web',
                'token: 3567caa3b19495553a483e4ac080f38c',
                'Content-Type: application/json',
                'Cookie: ci_session=9mbr5u5l17rc5l0ml2h31smdu9qshh77'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
}

if (!function_exists('check_wa')) {
    function check_wa($no_hp = '')
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apibot.magelangkab.go.id/Api/wa/cek_nomor/' . $no_hp,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                'service: web',
                'token: 3567caa3b19495553a483e4ac080f38c',
                'Content-Type: application/json',
                'Cookie: ci_session=9mbr5u5l17rc5l0ml2h31smdu9qshh77'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
}
