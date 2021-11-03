<!doctype html>
<html>
    <head>
        <meta charset="utf-8">

    </head>
    <body>
        
        <table >
            <!-- logo ve başlık-->
            <tr>
                <td><img src="saü.png"></td>
                <td>
                    <h1>Sakarya Üniversitesi</h1>
                    <h2>Bilgisayar Mühendisliği</h2>
                </td>
            </tr>
            <!--bağlantılar ve içerik-->
            <tr height="300">
                <td valign="top">
                    <a href="anasayfa.html">anasayfa</a><br>
                    <a href="iletişim.html">iletişim</a><br>
                    <a href="bize ulaşın.html">bize ulaşın</a>
                </td>
                <td valign="top">
                    <h4>iletişim</h4>
                    <hr>
                    <table>
                        <tr>
                            <td><label>ADI SOYADI: </label></td>
                            <td>
                             <?php
                             if(isset($_POST["adsoyad"]))
                                echo $_POST["adsoyad"];
                            
                              ?></td>
                        </tr>
                        <tr>
                            <td><label>E MAİL: </label></td>
                            <td>
                             <?php
                             if(isset($_POST["email"]))
                                echo $_POST["email"];
                                
                              ?></td>
                        </tr>
                        <tr>
                            <td><label>TELEFON: </label></td>
                            <td>
                             <?php
                             if(isset($_POST["tel"]))
                                echo $_POST["tel"];
                                
                              ?></td>
                        </tr>
                        <tr>
                            <td><label>CİNSİYET: </label></td>
                            <td>
                             <?php
                             if(isset($_POST["cinsiyet"]))
                                if($_POST["cinsiyet"]=="E")echo "ERKEK";
                                if($_POST["cinsiyet"]=="K")echo "KADIN";
                                
                              ?></td>
                        </tr>
                        <tr>
                            <td><label>BULUNDUĞU İL: </label></td>
                            <td>
                             <?php
                             if(isset($_POST["il"]))
                                echo $_POST["il"];
                                
                              ?></td>
                        </tr>
                        <tr>
                            <td><label>ALDIĞI DERSLER: </label></td>
                            <td>
                             <?php
                             if(isset($_POST["web"])) echo $_POST["web"]."-";
                             if(isset($_POST["ndp"])) echo $_POST["ndp"]."-";
                             if(isset($_POST["mat"])) echo $_POST["mat"]."-";   
                              ?></td>
                        </tr>
                    
                     </table>
                    </td>

            </tr>
            <!--alt bilgi-->
            <tr>
                <td colspan="2">@Tüm hakkı saklıdır-'2020-2021 bahar dönemi'</td>
                
            </tr>
        </table>
   
    </body>
</html>