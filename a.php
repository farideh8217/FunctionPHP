<?php
/////////////////////////////////q1
// function LenName($name) {
//     return strlen($name);
// }
// print LenName("sara");
/////////////////////////////////////////////////q2
// function evenorodd($name) {
//     if (strlen($name)%2==0) {
//         echo "zoj";
//     }else{
//         echo "fard";
//     }
// }
// evenorodd("fatiddd");
//////////////////////////////////////////////////q3
// function harfaval($text) {
//     if ($text === "") {
//         print "no text";
//     }else {
//         print $text[0];
//     }
// }
// harfaval("");
/////////////////////////////////////////q4
// function tekrar($name,$number) {
//     for($i=1;$i<=$number;$i++) {
//         echo $name . " \n";
//     }
// }
// tekrar("zahra",3);
/////////////////////////////////////////////q5
// function a($name) {
//     $count=0;
//     for($i=0;$i<strlen($name);$i++) {
//         if ($name[$i] == "a") {
//              $count++;
//         }
//     }return $count;
// }
// print a("zaaahra");
////////////////////////////////////////////q6
// function a($name,$b) {
//     $count=0;
//     for($i=0;$i<strlen($name);$i++) {
//        if ($name[$i] == $b) {
//              $count++;
//         }
//     }return $count;
//      }
// print a("zaaahra","h");
///////////////////////////////////////////q7
// function a($name,$b) {
//     $count=0;
//     for($i=0;$i<strlen($name);$i++) {
//         if ($name[$i] == strlower($b) || $name[$i] == strupper($b) ) {
//                $count++;
//              }
//          }return $count;
//         }
// print a("zaaahra","H");
/////////////////////////////////////////q8
// function star($name) {
//     $count=0;
//     for($i=0;$i<strlen($name);$i++) {
//         echo "*";
//     }
// }
// star("dd");
///////////////////////////////////////q9
// function rectangle($c) {
//     for($i=0;$i<$c;$i++) {
//         for($j=0;$j<$c;$j++) {
//             print "*";
//         }
//         print"<br>";
//     }
// }
// rectangle(5);
////////////////////////////////////////q11
// function mazrab($x) {
//     for($i=1;$i<=9;$i++) {
//         if($x % $i==0) {
//             echo $i;
//             print "<br>";
//         }
//     }
// }
// mazrab(6);
//////////////////////////////////////q12
// function countlist($list) {
//    return count($list);
    
// }
// print countlist(array(1,2,3,3));


//function countlist($list) {
//    $i=0;
//    foreach($list as $a) {
//        $i++;
//     }
//        print $i;
//     }
// countlist(array(1,2,3,3));
///////////////////////////////////////////q13
// function searchali($list) {
//     $count = 0;
//     for($i=0;$i<count($list);$i++) {
//         if ($list[$i]==="ali") {
//             $count++;
//         }
//     }return $i;
// }
// echo searchali(array("ali","ali"));
//////////////////////////////////////////q14
// function searchali($list,$search) {
//     $count = 0;
//     for($i=0;$i<count($list);$i++) {
//         if ($list[$i]===$search) {
//             $count++;
//         }
//     }return $count;
// }
// echo searchali(array("ali","ali"),"ali");
///////////////////////////////////////////q15
