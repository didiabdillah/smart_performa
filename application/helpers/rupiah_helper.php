<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!function_exists('rupiah')) {
 function rupiah($angka,$label=true){
 if($label){
  $hasil_rupiah = 'Rp '.number_format($angka,2,',','.');
 }else{
  $hasil_rupiah = number_format($angka,2,',','.');
 }
 return $hasil_rupiah;
 }


 function terbilang_get_valid($str,$from,$to,$min=1,$max=9){
    $val=false;
    $from=($from<0)?0:$from;
    for ($i=$from;$i<$to;$i++){
      if (((int) $str[$i]>=$min)&&((int) $str[$i]<=$max)) $val=true;
    }
    return $val;
  }
  function terbilang_get_str($i,$str,$len){
    $numA=array("","satu","dua","tiga","empat","lima","enam","tujuh","delapan","sembilan");
    $numB=array("","se","dua ","tiga ","empat ","lima ","enam ","tujuh ","delapan ","sembilan ");
    $numC=array("","satu ","dua ","tiga ","empat ","lima ","enam ","tujuh ","delapan ","sembilan ");
    $numD=array(0=>"puluh",1=>"belas",2=>"ratus",4=>"ribu", 7=>"juta", 10=>"milyar", 13=>"triliun");
    $buf="";
    $pos=$len-$i;
    switch($pos){
      case 1:
          if (!terbilang_get_valid($str,$i-1,$i,1,1))
            $buf=$numA[(int) $str[$i]];
        break;
      case 2:	case 5: case 8: case 11: case 14:
          if ((int) $str[$i]==1){
            if ((int) $str[$i+1]==0)
              $buf=($numB[(int) $str[$i]]).($numD[0]);
            else
              $buf=($numB[(int)$str[$i+1]]).($numD[1]);
          }
          else if ((int) $str[$i]>1){
              $buf=($numB[(int) $str[$i]]).($numD[0]);
          }				
        break;
      case 3: case 6: case 9: case 12: case 15:
          if ((int) $str[$i]>0){
              $buf=($numB[(int) $str[$i]]).($numD[2]);
          }
        break;
      case 4: case 7: case 10: case 13:
          if (terbilang_get_valid($str,$i-2,$i)){
            if (!terbilang_get_valid($str,$i-1,$i,1,1))
              $buf=$numC[(int) $str[$i]].($numD[$pos]);
            else
              $buf=$numD[$pos];
          }
          else if((int) $str[$i]>0){
            if ($pos==4)
              $buf=($numB[(int) $str[$i]]).($numD[$pos]);
            else
              $buf=($numC[(int) $str[$i]]).($numD[$pos]);
          }
        break;
    }
    return $buf;
  }
  function NLTerbilang($x) {
      $angka = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];
      if ($x < 12)
          return " " . $angka[$x];
      elseif ($x < 20)
          return NLTerbilang($x - 10) . " belas";
      elseif ($x < 100)
          return NLTerbilang($x / 10) . " puluh" . NLTerbilang($x % 10);
      elseif ($x < 200)
          return " seratus" . NLTerbilang($x - 100);
      elseif ($x < 1000)
          return NLTerbilang($x / 100) . " ratus" . NLTerbilang($x % 100);
      elseif ($x < 2000)
          return " seribu" . NLTerbilang($x - 1000);
      elseif ($x < 1000000)
          return NLTerbilang($x / 1000) . " ribu" . NLTerbilang($x % 1000);
      elseif ($x < 1000000000)
          return NLTerbilang($x / 1000000) . " juta" . NLTerbilang($x % 1000000);
  }
  function terbilang($nominal){
    $nominal=round($nominal,0);
    $buf="";
    $str=$nominal."";
    $len=strlen($str);
    for ($i=0;$i<$len;$i++){
      $buf=trim($buf)." ".terbilang_get_str($i,$str,$len);
    }
    return trim(ucwords($buf));
  }

}
