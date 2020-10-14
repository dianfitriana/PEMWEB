<?php
    //==== KOLOM KIRI ===//

    $judul = "CURRICULUM VITAE"; 
    $nama = "DIAN FITRIANA";
    $alamat  = "Mulyorejo  Sel gg III no 55";
    $email = "dianfitriana211@gmail.com";
    $no = "0895396084138";
    $hobi = "HOBBY";
    $hobi1 = "Farming";
    $hobi2 = "Hiking";
    $hobi3 = "Singing";
    $hobi4 = "Cooking";

    //=== KOLOM KANAN ===//
    
    $deskripsi = "Myname is Dian Fitriana
                  was born in Kediri,December 27,2000. My home address in 
                  Jl. Mulyorejo sel gg III no 55 
                  and now Currently i’m bacheloer’s education at UPN V JATIM ";
    $education = "EDUCATION";
    $tahunsd ="- 2006 - 2012
    SDN MOJO VI 225 SURABAYA";
    $tahunsmp = "- 2012 -2015
    MTSN 1 SURABAYA";
    $tahunsma = "-2015-1018
    SMA ISLAM MARYAM SURABAYA";
    $tahunkampus ="- 2018- NOW
    UPN V JATIM";
    $socialmedia ="SOCIAL  MEDIA";
    $wa = "0895396084138";
    $twitter = "dianfitriana";
    $google = " dianfitriana211@gmail.com";
    $instagram = "dianftrianaaa";

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
    <div class= "cv">
         <p>CURRICULUM VITAE</p>
    </div>
    </center>
    <div class= "bagiantengah">
        <div style="width: 1px; height: 600px; border: 1px #000 solid;">
        </div>
</div>
    <div class = "deskripsi">
        <p><?php echo $deskripsi ?></p>
    </div>
    <div class= "education">
         <p><?php echo $education ?></p>
        </div>
        <div class="list">
        <ul>
                <li><p><?php echo $tahunsd ?><p></li>
                <li><p><?php echo $tahunsmp ?></p></li>
                <li><p><?php echo $tahunsma ?></p></li>
                <li><p><?php echo $tahunkampus ?></p></li>
                    </ul>
                </div>
        <div class= "sosmed">
         <p><?php echo $socialmedia ?></p>
        </div>
        <div>
            <div class= "gambarwa">
                <img src=whatsapp.png >
                <div class= "setelahgambarwa">
                <p><?php echo $wa ?></p>
                </div>
            </div>
            <div class= "gambartwitter">
                <img src=twitter.png >
                <div class= "setelahgambartwitter">
                <p><?php echo $twitter ?></p>
                </div>
            </div>
            <div class= "gambargoogle">
                <img src=google-plus.png >
                <div class= "setelahgambargoogle">
                <p><?php echo $google ?></p>
                </div>
            </div>
            <div class= "gambarig">
                <img src=instagram.png >
                <div class= "setelahgambarig">
                <p><?php echo $instagram ?></p>
                </div>
            </div>
        <div class= "poto">
            <img src="dian.png">
        </div>
        
    <div class= "bagiankiri">
        <div class= "nama">
         <p><?php echo $nama ?></p>
        </div>
         <div class= "gambarlocation">
             <img src=location.svg >
             <div class= "setelahgambarlocation">
                 <p><?php echo $alamat ?></p>
            </div>
                <div class= "gambaremail">
                     <img src=email.svg >
                 <div class= "setelahgambaremail">
                 <p><?php echo $email ?></p>
                </div>
                <div class= "gambarcall">
                     <img src=call.svg >
                 <div class= "setelahgambarcall">
                 <p><?php echo $no ?></p>
                </div>
        <div class= "hoby">
         <p><?php echo $hobi ?></p>
        </div>  
        <div class= "gambarfarming">
             <img src=farming.png >
             <div class= "setelahgambarlocation">
                 <p><?php echo $hobi1 ?></p>
            </div> 
        <div class= "gambarhiking">
             <img src=hiking.png >
             <div class= "setelahgambarhiking">
                 <p><?php echo $hobi2 ?></p>
        </div> 
        <div class= "gambarsinging">
             <img src=karaoke.png >
             <div class= "setelahgambarsinging">
                 <p><?php echo $hobi3 ?></p>
        </div>
        <div class= "gambarcooking">
             <img src=bake.png >
             <div class= "setelahgambarcooking">
                 <p><?php echo $hobi4 ?></p>
        </div>


    </div>      
</div>

</body>
</html>