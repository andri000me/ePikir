<?php
$dataxx = array(
    'link'  => $link
);

$this->load->view('cetak/head', $dataxx);
?>

<style type="text/css">
    #body {
        page-break-after: always;
    }
</style>

<body>
    <div id="container" style="width: 100%; height: 33cm; margin-left: auto; margin-right: auto; margin-top: 30px">
        <div style="text-align:center; height: 175px">
            <!-- <img width="130px" src="<?//= base_url('assets/img/logo/garuda.png') ?>">
            <div style="font-family: Arial; font-size: 15pt; font-weight: bold">
                BUPATI MAGELANG
            </div> -->
        </div>
        <table align="center" style="margin-top: 20px; margin-bottom: 0px; width: 80%; margin-left: auto; margin-right: auto; font-size: 12.5pt" cellpadding="0">
            <tr>
                <td style="text-align: center; font-size: 12pt; font-weight:bold; width: 100%">
                    PENOLAKAN IZIN PENYELENGGARAAN KEGIATAN/USAHA <br>
                    Nomor: <label><?= $data['nomor_perizinan'] ?></label>
                </td>
            </tr>

            <!-- <tr>
                <td colspan="2" style="background-color: black; height: 1px"> </td>
            </tr> -->

            <tr>
                <td style="padding-top: 20px; font-size: 12.5pt; text-align:justify; line-height: 1.7; margin-top: 20px;">
                    Mendasarkan hasil kajian epidemiologi Dinas Kesehatan Kabupaten Magelang atas Permohonan Izin Penyelenggaraan Kegiatan/Usaha kepada:
                </td>
            </tr>

            <tr>
                <td>
                    <table>
                        <tr>
                            <td valign="top" style="padding-bottom: 5px;">Nama</td>
                            <td valign="top">:</td>
                            <td valign="top"><?= $data['nama_pemohon'] ?></td>
                        </tr>
                        <tr>
                            <td valign="top" style="padding-bottom: 5px;">Alamat</td>
                            <td valign="top">:</td>
                            <td valign="top"><?= ucwords($data['alamat_pemohon']) . ', ' . ucwords(strtolower($data['desa_pemohon'])) . ', ' . ucwords(strtolower($data['kecamatan_pemohon'])) ?></td>
                        </tr>
                        <tr>
                            <td valign="top" style="padding-bottom: 5px;">Jabatan</td>
                            <td valign="top">:</td>
                            <td valign="top"><?= ucwords($data['jabatan_pemohon']) ?></td>
                        </tr>
                        <tr>
                            <td valign="top" style="padding-bottom: 5px;">Nama Kegiatan/Usaha</td>
                            <td valign="top">:</td>
                            <td valign="top"><?= ucwords($data['nama_usaha']) ?></td>
                        </tr>
                        <tr>
                            <td valign="top" style="padding-bottom: 5px;" nowrap>Tempat Kegiatan/Usaha</td>
                            <td valign="top">:</td>
                            <td valign="top"><?= ucwords($data['alamat_usaha']) . ', ' . ucwords(strtolower($data['desa_usaha'])) . ', ' . ucwords(strtolower($data['kecamatan_usaha'])) ?></td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td>
                    <p style="font-size: 12.5pt; text-align:justify; line-height: 1.7;">
                        Belum diberikan izin dengan pertimbangan bahwa <?= $data['kajian_perizinan'] ?>.
                    </p>
                    <p style="font-size: 12.5pt; text-align:justify; line-height: 1.7;">
                        Demikian untuk menjadikan maklum.
                    </p>
                </td>
            </tr>

            <tr>
                <td>
                    <table style="width: 100%;">
                        <tr>
                            <td style="width: 60%;"></td>
                            <td>
                                Diterbitkan di Kota Mungkid <br>
                                pada tanggal <?= formatTanggalTtd($data['tgl_terbit']) ?>
                                <br><br>
                                <p>
                                    BUPATI MAGELANG, <br><br><br><br>
                                    ZAENAL ARIFIN, S.I.P
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td>
                    Tembusan: <br>
                    1. Camat <?= ucwords(strtolower($data['kecamatan_usaha'])) ?>; <br>
                    2. Kepala Desa <?= ucwords(strtolower($data['desa_usaha'])) ?>. <br>
                </td>
            </tr>

            <tr>
                <td>
                    <p style="text-align: center; font-size: 12.5pt; margin-top: 50px">
                        Jl. Soekarno - Hatta Nomor 59 Kota Mungkid 56511 <br>
                        Telp. (0293) 788181 Fax. (0293) 788122
                    </p>
                </td>
            </tr>
        </table>

        <div id="aside"></div>

    </div>

</body>

</html>