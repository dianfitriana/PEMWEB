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

    //=======koneksi ke database=========//

    $server = 'localhost';
    $user = "root";
    $pass = "";
    $database = "pemweb";

    $koneksi = mysqli_connect ($server, $user, $pass, $database)or die(mysqli_error($koneksi));

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
    <?php
                     
                    $tampil = mysqli_query($koneksi, "SELECT * FROM datadiri" );
                    while($desc = mysqli_fetch_array($tampil)) :

                ?>
                    <p><?=$desc['ABOUT']?></p>
                    <?php endwhile; //penutup perulangan while// ?>
               
    </div>
    <div class= "education">
         <p><?php echo $education ?></p>
        </div>
        <div class="list">
        <ul>
                <li><p><?php
                     
                     $tampil = mysqli_query($koneksi, "SELECT * FROM pendidikan" );
                     while($desc = mysqli_fetch_array($tampil)) :
 
                 ?>
                     <p><?=$desc['SD']?></p>
                     <?php endwhile; //penutup perulangan while// ?><p></li>
                <li><p><?php
                     
                     $tampil = mysqli_query($koneksi, "SELECT * FROM pendidikan" );
                     while($desc = mysqli_fetch_array($tampil)) :
 
                 ?>
                     <p><?=$desc['SMP']?></p>
                     <?php endwhile; //penutup perulangan while// ?></p></li>
                <li><p><?php
                     
                     $tampil = mysqli_query($koneksi, "SELECT * FROM pendidikan" );
                     while($desc = mysqli_fetch_array($tampil)) :
 
                 ?>
                     <p><?=$desc['SMA']?></p>
                     <?php endwhile; //penutup perulangan while// ?></p></li>
                <li><p><?php
                     
                     $tampil = mysqli_query($koneksi, "SELECT * FROM pendidikan" );
                     while($desc = mysqli_fetch_array($tampil)) :
 
                 ?>
                     <p><?=$desc['KULIAH']?></p>
                     <?php endwhile; //penutup perulangan while// ?></p></li>
                    </ul>
                </div>
        <div class= "sosmed">
         <p><?php echo $socialmedia ?></p>
        </div>
        <div>
            <div class= "gambarwa">
                <img src=whatsapp.png >
                <div class= "setelahgambarwa">
                <?php
                     
                    $tampil = mysqli_query($koneksi, "SELECT * FROM soacial_media" );
                    while($desc = mysqli_fetch_array($tampil)) :

                ?>
                    <p><?=$desc['WA']?></p>
                    <?php endwhile; //penutup perulangan while// ?>
              
                
                </div>
            </div>
            <div class= "gambartwitter">
                <img src=twitter.png >
                <div class= "setelahgambartwitter">
                <?php
                     
                    $tampil = mysqli_query($koneksi, "SELECT * FROM soacial_media" );
                    while($desc = mysqli_fetch_array($tampil)) :

                ?>
                    <p><?=$desc['TWITTER']?></p>
                    <?php endwhile; //penutup perulangan while// ?>
              
                
                </div>
            </div>
            <div class= "gambargoogle">
                <img src=google-plus.png >
                <div class= "setelahgambargoogle">
                <?php
                     
                    $tampil = mysqli_query($koneksi, "SELECT * FROM soacial_media" );
                    while($desc = mysqli_fetch_array($tampil)) :

                ?>
                    <p><?=$desc['GOOGLE']?></p>
                    <?php endwhile; //penutup perulangan while// ?>
              
    
                </div>
            </div>
            <div class= "gambarig">
                <img src=instagram.png >
                <div class= "setelahgambarig">
                <?php
                     
                    $tampil = mysqli_query($koneksi, "SELECT * FROM soacial_media" );
                    while($desc = mysqli_fetch_array($tampil)) :

                ?>
                    <p><?=$desc['IG']?></p>
                    <?php endwhile; //penutup perulangan while// ?>
              
                
                </div>
            </div>
        <div class= "poto">
            <img src="dian.png">
        </div>
        
    <div class= "bagiankiri">
        <div class= "nama">
        <?php
                     
                     $tampil = mysqli_query($koneksi, "SELECT * FROM datadiri" );
                     while($desc = mysqli_fetch_array($tampil)) :
 
                 ?>
                     <p><?=$desc['NAMA']?></p>
                     <?php endwhile; //penutup perulangan while// ?>
         
        </div>
         <div class= "gambarlocation">
             <img src=location.svg >
             <div class= "setelahgambarlocation"> <?php
                     
                     $tampil = mysqli_query($koneksi, "SELECT * FROM datadiri" );
                     while($desc = mysqli_fetch_array($tampil)) :
 
                 ?>
                     <p><?=$desc['ALAMAT']?></p>
                     <?php endwhile; //penutup perulangan while// ?>

                 
            </div>
                <div class= "gambaremail">
                     <img src=email.svg >
                 <div class= "setelahgambaremail">
                 <?php
                     
                     $tampil = mysqli_query($koneksi, "SELECT * FROM datadiri" );
                     while($desc = mysqli_fetch_array($tampil)) :
 
                 ?>
                     <p><?=$desc['EMAIL']?></p>
                     <?php endwhile; //penutup perulangan while// ?>
                
                </div>
                <div class= "gambarcall">
                     <img src=call.svg >
                 <div class= "setelahgambarcall">
                 <?php
                     
                     $tampil = mysqli_query($koneksi, "SELECT * FROM datadiri" );
                     while($desc = mysqli_fetch_array($tampil)) :
 
                 ?>
                     <p><?=$desc['NO_TELP']?></p>
                     <?php endwhile; //penutup perulangan while// ?>
                 
                </div>
        <div class= "hoby">
         <p><?php echo $hobi ?></p>
        </div>  
        <div class= "gambarfarming">
             <img src=farming.png >
             <div class= "setelahgambarlocation">
             <?php
                     
                    $tampil = mysqli_query($koneksi, "SELECT * FROM HOBI" );
                    while($desc = mysqli_fetch_array($tampil)) :

                ?>
                    <p><?=$desc['FARMING']?></p>
                    <?php endwhile; //penutup perulangan while// ?>
              
                
            </div> 
        <div class= "gambarhiking">
             <img src=hiking.png >
             <div class= "setelahgambarhiking">
             <?php
                     
                    $tampil = mysqli_query($koneksi, "SELECT * FROM HOBI" );
                    while($desc = mysqli_fetch_array($tampil)) :

                ?>
                    <p><?=$desc['HIKING']?></p>
                    <?php endwhile; //penutup perulangan while// ?>
              

        </div> 
        <div class= "gambarsinging">
             <img src=karaoke.png >
             <div class= "setelahgambarsinging">
             <?php
                     
                    $tampil = mysqli_query($koneksi, "SELECT * FROM HOBI" );
                    while($desc = mysqli_fetch_array($tampil)) :

                ?>
                    <p><?=$desc['SINGING']?></p>
                    <?php endwhile; //penutup perulangan while// ?>
              
                 
        </div>
        <div class= "gambarcooking">
             <img src=bake.png >
             <div class= "setelahgambarcooking">
             <?php
                     
                    $tampil = mysqli_query($koneksi, "SELECT * FROM HOBI" );
                    while($desc = mysqli_fetch_array($tampil)) :

                ?>
                    <p><?=$desc['COOKING']?></p>
                    <?php endwhile; //penutup perulangan while// ?>
              
                
        </div>


    </div>      
</div>

</body>
</html>