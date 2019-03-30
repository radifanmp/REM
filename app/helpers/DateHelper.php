<?php 
namespace App\helpers;

class DateHelper extends Helpers {

    public static function convertDateIndo($date, $option = ['tgl','bulan','tahun']) {
        $date = strtotime($date);

        $tgl = date("j",$date);
        $bulan = date("n",$date);
        $tahun = date("Y",$date);
        $str = "";
        $descBulan = self::getBulanIndo($bulan);

        if(in_array("tgl",$option)) {
            $str .= $tgl;
        }

        if(in_array("bulan",$option)) {
            $str .= " " . $descBulan;
        }

        if(in_array("tahun",$option)) {
            $str .= " " . $tahun;
        }

        return $str;
    }

    public static function getBulanIndo($no) {
        $bulan = [
            '1' => 'Januari',
            '2' => 'Februari',
            '3' => 'Maret',
            '4' => 'April',
            '5' => 'Mei',
            '6' => 'Juni',
            '7' => 'Juli',
            '8' => 'Agustus',
            '9' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        ];

        return $bulan[$no];
    }

}

?>