<?php 
    echo "welcome to lec 19 php program multidiamentional program</br>";
    // $multi = array(array(2,5,7,8),array(1,2,3,1),array(4,5,0,1));
    
    // echo var_dump($multi);
    // echo $multi[0][1];

    // for-i
    // for ($i=0; $i < count($multi); $i++) { 
    //     echo var_dump($multi[$i]);
    //     echo "</br>";
    // }

    // print element
    // for ($i=0; $i < count($multi); $i++) { 
    //     for ($j=0; $j < count($multi[$i]); $j++) { 
    //         echo $multi[$i][$j];
    //         echo " ";
    //     }
    //     echo "</br>";
    // }


    ///// 3-D array
    $multi3D= array(
               array(
                     array(1,2,3),array(4,5,6),
                     array(7,8,9),array(10,11,12)),
                     array(
                        array(13,14,15),array(16,17,18),
                        array(19,20,21),array(22,23,24))
              );

?>