<?php

require 'inti.php';

    $zzone = $_POST['zzone'];
    $ccity = $_POST['ccity'];
    $ttp = $_POST['ttp'];
    $nm = $_POST['nm'];
    $educ = $_POST['educ'];
    $eduowner = $_POST['eduowner'];
    $edubnen = $_POST['edubnen'];
    $helth = $_POST['helth'];
    $heltho = $_POST['heltho'];
    $gover = $_POST['gover'];
    $mosk = $_POST['mosk'];
    $com = $_POST['com'];
    $funn = $_POST['funn'];
    $x = $_POST['x'];
    $y = $_POST['y'];

if ($ttp == 'تعليمي'){
    $query = mysqli_query($db, "INSERT INTO data( name,  type, category, zone, city, owner, benef, x, y)
 VALUES ('$nm' , '$ttp','$educ','$zzone', '$ccity',  ' $eduowner', '$edubnen', '$x', '$y' )") or die(mysqli_error($db));
   }
elseif ($ttp == 'صحي') {
      $query = mysqli_query($db, "INSERT INTO data( name,  type, category, zone, city, owner, benef, x, y)
 VALUES ('$nm' , '$ttp','$helth','$zzone', '$ccity',  ' $heltho', 'الجميع', '$x', '$y' )") or die(mysqli_error($db));
}

elseif ($ttp == 'دائرة حكومية') {
      $query = mysqli_query($db, "INSERT INTO data( name,  type, category, zone, city, owner, benef, x, y)
 VALUES ('$nm' , '$ttp','$gover','$zzone', '$ccity',  'حكومي', 'الجميع', '$x', '$y' )") or die(mysqli_error($db));
}

elseif ($ttp == 'مسجد') {
      $query = mysqli_query($db, "INSERT INTO data( name,  type, category, zone, city, owner, benef, x, y)
 VALUES ('$nm' , '$ttp','$mosk','$zzone', '$ccity',  'عام', 'الجميع', '$x', '$y' )") or die(mysqli_error($db));
}

elseif ($ttp == 'تجاري') {
      $query = mysqli_query($db, "INSERT INTO data( name,  type, category, zone, city, owner, benef, x, y)
 VALUES ('$nm' , '$ttp','$com','$zzone', '$ccity',  'خاص', 'الجميع', '$x', '$y' )") or die(mysqli_error($db));
}

elseif ($ttp == 'ترفيهي') {
      $query = mysqli_query($db, "INSERT INTO data( name,  type, category, zone, city, owner, benef, x, y)
 VALUES ('$nm' , '$ttp','$funn','$zzone', '$ccity',  'عام', 'الجميع', '$x', '$y' )") or die(mysqli_error($db));
}


echo "تم إرسال البيانات بنجاح";