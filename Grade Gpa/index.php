<?php
function heading ($header,$color){
    echo "<h1 style='text-align:$header; color:$color;' >All Details Of Class V</h1>";
}
heading('center','green');

$studentInfo=[
    [
        'name'  => 'Tom',
        'roll'  => '01',
        'contact'  => '01712522523',
        'address'  => 'Jashore',
        'section'  => 'A',
        'marks'  => [90,88,98,86,89,92]
     
    ],
    [
        'name'  => 'Jerry',
        'roll'  => '02',
        'contact'  => '01722522523',
        'address'  => 'Khulna',
        'section'  => 'A',
        'marks'  => [92,87,94,87,89,92]
     
    ],
    [
        'name'  => 'Luther',
        'roll'  => '03',
        'contact'  => '0145222523',
        'address'  => 'Foridpur',
        'section'  => 'A',
        'marks'  => [80,84,88,87,89,82]
     
    ],
    [
        'name'  => 'Oishe',
        'roll'  => '04',
        'contact'  => '01725648541',
        'address'  => 'Jashore',
        'section'  => 'A',
        'marks'  => [85,55,88,96,79,82]
     
    ],
    [
        'name'  => 'Isika',
        'roll'  => '05',
        'contact'  => '01845232546',
        'address'  => 'Comilla',
        'section'  => 'A',
        'marks'  => [95,78,88,66,79,82]
     
    ],
    [
        'name'     => 'Jusssy',
        'roll'     => '06',
        'contact'  => '01325648795',
        'address'  => 'Kustia',
        'section'  => 'A',
        'marks'    => [91,66,77,70,75,88]
     
    ],


];


foreach($studentInfo as $student){
    echo "Student Name :" . $student['name'] . "<br>";
    echo "Student Roll :" . $student['roll'] . "<br>";
    echo "Contact No.  :" . $student['contact'] . "<br>";
    echo "Address      :" . $student['address'] . "<br>";
    echo "Section      :" . $student['section'] . "<br>";
    echo "<h4 style = 'color:red;'>MARKS OF ALL SUBJECTS :-</h4>";
    echo "Bangla   : " . $student['marks']['0'] . "<br>";
    echo "English  : " . $student['marks']['1']. "<br>";
    echo "Math     : " . $student['marks']['2']. "<br>";
    echo "Science  : " . $student['marks']['3']. "<br>";
    echo "SScience : " . $student['marks']['4']. "<br>";
    echo "Religion : " . $student['marks']['5']. "<br>";



    if($student['marks']['0']>=80 && $student['marks']['0']<100){
       $gpa0 = 5 ;
    }
    elseif($student['marks']['0']>=70 && $student['marks']['0']<80){
        $gpa0 = 4 ;
    }
    elseif($student['marks']['0']>=60 && $student['marks']['0']<70){
        $gpa0 = 3.5 ;
    }
    elseif($student['marks']['0']>=50 && $student['marks']['0']<60){
        $gpa0 = 3 ;
    }
    elseif($student['marks']['0']>=40 && $student['marks']['0']>=33){
        $gpa0 = 2.5;
    }
    elseif($student['marks']['0']<33 ){
       echo "You're Fail in Bangla" . "<br>";
       $gpa0 = 0;
    }
    else{
        echo "Invaild Input";
    }
    echo "$gpa0" . "<br>";


    if($student['marks']['1']>=80 && $student['marks']['1']<=100){
        $gpa1 = 5 ;
     }
     elseif($student['marks']['1']>=70 && $student['marks']['1']<80){
         $gpa1 = 4;
     }
     elseif($student['marks']['1']>=60 && $student['marks']['1']<70){
         $gpa1 = 3.5 ;
     }
     elseif($student['marks']['1']>=50 && $student['marks']['1']<60){
         $gpa1 = 3 ;
     }
     elseif($student['marks']['1']>=40 && $student['marks']['1']>=33){
         $gpa1 = 2.5 ;
     }
     elseif($student['marks']['1']<33 ){
        echo "You're Fail in English" . "<br>";
        $gpa1 = 0;
     }
     else{
         echo "Invaild Input";
     }
     echo "$gpa1" . "<br>";



     if($student['marks']['2']>=80 && $student['marks']['2']<=100){
        $gpa2 = 5;
     }
     elseif($student['marks']['2']>=70 && $student['marks']['2']<80){
         $gpa2 = 4 ;
     }
     elseif($student['marks']['2']>=60 && $student['marks']['2']<70){
         $gpa2 = 3.5;
     }
     elseif($student['marks']['2']>=50 && $student['marks']['2']<60){
         $gpa2 = 3 ;
     }
     elseif($student['marks']['2']>=40 && $student['marks']['2']>=33){
         $gpa2 = 2.5 ;
     }
     elseif($student['marks']['2']<33 ){
        echo "You're Fail in Math" . "<br>";
        $gpa2 = 0;
     }
     else{
         echo "Invaild Input";
     }
     echo "$gpa2" . "<br>";




     if($student['marks']['3']>=80 && $student['marks']['3']<=100){
        $gpa3 = 5 ;
     }
     elseif($student['marks']['3']>=70 && $student['marks']['3']<80){
         $gpa3 = 4 ;
     }
     elseif($student['marks']['3']>=60 && $student['marks']['3']<70){
         $gpa3 = 3.5 ;
     }
     elseif($student['marks']['3']>=50 && $student['marks']['3']<60){
         $gpa3 = 3;
     }
     elseif($student['marks']['3']>=40 && $student['marks']['3']>=33){
         $gpa3 = 2.5;
     }
     elseif($student['marks']['3']<33 ){
        echo "You're Fail in Science" . "<br>";
        $gpa3 = 0;
     }
     else{
         echo "Invaild Input";
     }
     echo "$gpa3" . "<br>";





     if($student['marks']['4']>=80 && $student['marks']['4']<=100){
        $gpa4 = 5;
     }
     elseif($student['marks']['4']>=70 && $student['marks']['4']<80){
         $gpa4 = 4;
     }
     elseif($student['marks']['4']>=60 && $student['marks']['4']<70){
         $gpa4 = 3.5;
     }
     elseif($student['marks']['4']>=50 && $student['marks']['4']<60){
         $gpa4 = 3;
     }
     elseif($student['marks']['4']>=40 && $student['marks']['4']>=33){
         $gpa4 = 2.5;
     }
     elseif($student['marks']['4']<33 ){
        echo "You're Fail in Social Science" . "<br>";
        $gpa4 = 0;
     }
     else{
         echo "Invaild Input";
     }
     echo "$gpa4" . "<br>";




     if($student['marks']['5']>=80 && $student['marks']['5']<=100){
        $gpa5 = 5;
     }
     elseif($student['marks']['5']>=70 && $student['marks']['5']<80){
         $gpa5 = 4;
     }
     elseif($student['marks']['5']>=60 && $student['marks']['5']<70){
         $gpa5 = 3.5;
     }
     elseif($student['marks']['5']>=50 && $student['marks']['5']<60){
         $gpa5 = 3;
     }
     elseif($student['marks']['5']>=40 && $student['marks']['5']>=33){
         $gpa5 = 2.5;
     }
     elseif($student['marks']['5']<33 ){
        echo "You're Fail in Religion" . "<br>";
        $gpa5 = 0;
     }
     else{
         echo "Invaild Input";
     }
     echo "$gpa5" . "<br>";

     $totalMarks = 0;
     foreach($student['marks'] as $mark){
        $totalMarks += $mark;
     }
    

    $totalGpa = (($gpa0 + $gpa1 + $gpa2 + $gpa3 +$gpa4 + $gpa5)/6);
    echo " GPA :-" . $totalGpa . "<br>";
    echo "Total Mark :-" . $totalMarks . "<br>";
   
    echo "<br>";
    echo "<hr>";
    echo "<hr>";
    echo "<br>";
}