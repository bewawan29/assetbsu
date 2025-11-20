<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location : index.php");
  exit;
}
//include("2025hitung.php");
include ("koneksi.php");

?>
<link rel="stylesheet" href="styleasset.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            text-decoration: none;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(245, 195, 155);
        }

        /* judul */
        .container .judul {
            background-color: aqua;
            display: grid;
            grid-template-columns: 0.5fr 1fr 0.5fr;
            /* width: 100vw; */
        }
        .container .judul .judul1 {
            font-size: 0.6rem;
        }
        .container .judul .judul2 {
            text-align: center;
        }

        /* navigasi */
        .container nav {
            background-color: rgb(0, 0, 0);
            display: grid;
            grid-template-columns: 1fr 1.5fr;
        }
        .container nav .menu,
        .container nav .sub-menu {
            /* background-color: blue; */
            padding: 10px;
            /* border: 2px solid green; */
        }
        /* .container nav .sub-menu{
            display: grid;
            grid-template-columns: 0.5fr 0.5fr 2fr;
        } */
       
        .container .menu-hide {
            color: white;
            position: relative;
            padding: 10px;
            display: none;
            top: 0px;
        }
        .container nav .menu a {
            color: white;
            margin: 15px;
        }
        .container nav .sub-menu {
            /*background-color: yellow; */
            color: white;
            display: grid;
            grid-template-columns: 1fr 0.5fr 1fr;
            text-align: center;
        }
        /* utama */
        .container .utama {
            display: grid;
            grid-template-columns: 1fr 4fr;
            height: 89vh;
        }
        .container .utama .side{
            background-color: rgb(181, 171, 216);
            list-style: none;
            font-size: 1.3rem;
            line-height: 4rem;
            text-align: center;
        }
       .container .utama .main{
            background-color: rgb(124, 175, 137);
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            overflow: scroll;
            justify-items: center;
            line-height: 2rem;
       }

       /* responsive */
        @media only screen and (max-width: 450px) {
            .container .judul {
                background-color: blue;
                color: white;
                font-size: 0.8rem;
                padding: 5px;
            }

            /* navigasi */
            .container nav {
                font-size: 0.6rem;
                grid-template-columns: 0.2fr 1fr;
            }
            .container nav .menu {
                position: absolute;
                top: 66px;
                background-color: brown;
                left: -190px;
                /* display: none; */
                transition: 0.5s;
            }
            .container nav .menu-hide {
                display: block;
                position: relative;
                z-index: 5;
            }
            .container nav .menu-hide:hover .container nav .menu {
                display: block;
                background-color: brown;
            }

            /* utama */
            .container .utama .side{
                text-align:  center;
            }
            .container .utama .main {
                grid-template-columns: 1fr;
            }
            .container .utama .main .main1{
                border: 1px solid blue;
            }
            .container .utama .main .main2{
                border: 1px solid blue;
            }
            .container .utama .main .main3{
                border: 1px solid blue;
            }
        }
        /* HP landscape */
        @media only screen and (min-width: 460px) and (max-width:800px){
            .container .judul {
                background-color: salmon;
                color: white;
                font-size: 0.7rem;
                padding: 5px;
            }
            
            /* navigasi */
            .container nav {
                font-size: 0.6rem;
                grid-template-columns: 0.2fr 1fr;
            }
            .container nav .menu {
                position: absolute;
                top: 66px;
                background-color: brown;
                left: -190px;
                /* display: none; */
                transition: 0.5s;
            }
            .container nav .menu-hide {
                display: block;
                position: relative;
                z-index: 5;
            }
            .container nav .menu-hide:hover .container nav .menu {
                display: block;
                background-color: brown;
            }
        }    
        
    </style> -->
</head>
<body>
    
    <div class="container">
        <div class="judul">
            <div class="judul1">
                ver_25_05               
            </div>
            <div class="judul2"><h2>DATA ASSET BSU</h2></div>
            <div class="judul3"></div>
            
        </div>
        <nav>
            <div class="menu-hide" onclick="muncul()">MENU</div>
            <div class="menu" id="hide">
                <a href="logout.php">LOGOUT</a>
                <a href="coba.php">COBA</a>
                <button onclick="window.print()">Print</button>
            </div>
            <div class="sub-menu">
                <div>
                    <?php echo date("l, d-M-Y"); ?>
                </div>
                <div id="clock"></div>
                <div id="count"></div>
            </div>
            <script src="waktu.js"></script>
            <script src="mundur.js"></script>
            <script>
                function muncul() {
                    // document.getElementById("hide").style.display = "block";
                    document.getElementById("hide").style.left = "0px";
                }
            </script>
        </nav>

        <div class="utama">
            <div class="side">
                
                <li><a href="../2023/2023.php">2023</a></li>
                <li><a href="2025menu.php">2024</a></li>
                <li><a href="2025.php">2025</a></li>
            </div>
            <div class="main">
                <div class="main1">
                    <form action="" method="post">
                    <table>
                        
                        Total Debit 2025 : <br>
                        <input type="text"  value="<?php echo ""."".number_format($output,2,",",".");?>">
                        <br>
                        Total Kredit 2025 : <br>
                        <input type="text"  value="<?php echo ""."".number_format($output2,2,",",".");?>"> <br>
                        Total Saldo 2025 : <br>              
                        <input type="text"  value="<?php echo ""."".number_format($saldo,2,",",".");?>"> 
                        
                    </table>
                    </form>
                </div>
                <div class="main2">
                    BCA : <br>
                    <input type="text"  value="<?php echo ""."".number_format($bca_output,2,",",".");?>"><br>
                    BSI : <br>
                    <input type="text"  value="<?php echo ""."".number_format($bsi_output,2,",",".");?>"><br>
                    Niaga : <br>
                    <input type="text"  value="<?php echo ""."".number_format($niaga_output,2,",",".");?>"><br>
                    BRI : <br>
                    <input type="text"  value="<?php echo ""."".number_format($bri_output,2,",",".");?>"><br>
                    CASH : <br>
                    <input type="text"  value="<?php echo ""."".number_format($cash_output,2,",",".");?>">
                </div>
                <div class="main3">
                    Pribadi : <br>
                    <input type="text"  value="<?php echo ""."".number_format($pribadi_output,2,",",".");?>"><br>
                    Umum : <br>
                    <input type="text"  value="<?php echo ""."".number_format($umum_output,2,",",".");?>">
                </div>
                <div class="main4"></div>
                
            </div>
        </div>

        <!-- <div class="footer">FOOTER</div> -->
    </div>
    <!-- <script src="waktu.js"></script> -->
    
</body>
</html>