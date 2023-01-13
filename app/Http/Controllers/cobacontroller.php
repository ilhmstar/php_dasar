<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cobacontroller extends Controller
{
    //
    public function coba1()
    {
        // function i(float $t){
        //     echo "i  <br>";
        // }

        // function k3(float $k3){
        //     echo "<br>";
        // }

        // function k5(float $k5){
        //     echo "<br> 5.14";

        // }

        // $i=1;
        $j = 1;
        // $i = (float)$j;
        // $i = number_format($j,2);
        for ($i=1; $i <= 100; $i++) {
            // echo i($i);

            // fungsi 
            if($i % 15 == 0 ){
                // echo "<br> persegi";
                $p = $i / 3;
                $l = $i / 5;
                $hp = $p * $l;
                echo "<br>". number_format($hp,2);
            }
            else if ($i % 5 == 0) {
                // echo "<br> k3";
                $h5 = 0;
                $jari = $i /5;
                $h5 = ($jari+$jari)*3.14;
                echo "<br>". number_format($h5,2);
            } else if ($i % 3 == 0) {
                // echo "<br> k5";
                $h3 = $i / 3 * 3.14;
                echo "<br>" . number_format($h3,2);
            } else {
                // echo k5($i);
                // echo "<br>" . $i;
                echo "<br>" . number_format($i,2);
            }
        }
    }
}
