<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lucky Click</title>
    <style>
             *,
        *:before,
        *:after {
        box-sizing: inherit;
        }
        body{
            margin:0;
            font-family: 'Montserrat', sans-serif;
        }
        .backdrop{
            position: absolute;
            top:0;
            right:0;
            z-index: -1;
        }
        .page-header {
            user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            position: fixed;
            top: 0;
            height: 60px;
            color: #fff;
            width: 100%;
            line-height: 40px;
            z-index: 2;
        }
        .page-header__top {
            display: flex;
            justify-content: space-between;
            padding: 10px 16px;
        }
        .page-header__logo{
            margin-left:90px;
        }
        .page-header__toggle {
            font-size: 2em;
            color:#000;
        }
        .navigation {
            opacity: 0.5;
            height: 0;
            overflow: hidden;
            transition: 0.7s;
            list-style-type: none;
            padding: 10px;
        }
        .navigation__item {
            padding: 0 16px;
        }
        .navigation--visible {
            opacity: 1;
            height: 170px;
            background-color: #fff;
            color: #000;
        }
        .page-header__top ul li{
            list-style-type: unset;
        }
        .topleft{
            position:absolute;
            top:0;
            left:0;
            z-index: -1;
        }
        .btn-gradien{
            background: linear-gradient(92.68deg, #FE7602 5.31%, #FFC633 93.95%);
            border-radius:20px;
            color:#fff;
        }
        .mainbody{
            margin-top:100px;
        }
        .sideleft{
            float:left;
        }
        .sideright{
            float: right;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .btn-date{
            border: 5px solid #FFC633;
            border-radius: 20px;
            background-color:#fff;
            padding:10px;
        }
        .voucherdate{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }
        .center{
            text-align:center;
        }
        .luckytitle{
            margin-top:60px;
        }
        .albums{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            grid-gap: 10px;
            padding:20px 100px;
        }

        .album{
            padding: 0 20px;
            display: grid;
            grid-template-columns: 50px 1fr;
            align-items: center;
            border-radius: 3px;
        }

        .album__image{
            font-family: 'Montserrat';
            font-style: italic;
            font-weight: 300;
            font-size: 48px;
            line-height: 59px;

            /* identical to box height */
            text-transform: uppercase;

            color: #F06E27;
        }

        .album__details{
            padding: 20px;
            color: #000;
        }

        .album__title{
            margin-bottom: 0;
            font-weight: 600;
        }

        .album__artist{
            margin: 0;
            color: #ccc;
            font-size: .8em;
        }

        .album__description{
            font-size: .9em;
        }

        .direct{
            color:#FFC633;
        }
        .section-list{
            padding: 0px 300px;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(3, 1fr);
            grid-gap: 10px;
            margin-bottom:100px;
        }
        .vourcher{
            margin-bottom:30px;
        }
        .grid-item {
            padding: 20px;
            font-size: 30px;
            text-align: center;
        }
        footer{
            padding: 54px 174px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #F4F4F4;
        }
        footer img{
            mix-blend-mode: multiply;
        }
        .responsive{
            display: none;
        }
        .imagefooter{
            display:block;
        }
        .redeem{
            height:34px;
            width: 100px;
            text-align: center;
            font-size: 26px;
            border:1px solid #ddd;
            border-radius:4px;
            display: inline-block;
            vertical-align: middle;
        }
        .minus, .plus{
			width:20px;
			height:20px;
			background:#E0E0E0;
			border-radius:50%;
			padding:5px;
			border:1px solid #ddd;
            display: inline-block;
            vertical-align: middle;
            text-align: center;
		}
        .luckyclick{
            background: #FFF5DF;
            border-radius: 3px;
            width: 485px;
            margin: auto;
            padding: 5px 15px;
        }
        .poin{
            width: 190px;
            height: 190px;
            border: 2px solid #FFC633;
            border-radius:50%;
            display: block;
            margin:auto;
        }
        .grid-lucky {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 10px;
            padding:30px;
        }
        .grid-poin{
            text-align: center;
        }
        .number{
            background: #F4F4F4;
            border-radius: 20px;
            width: 413px;
            height: 227px;
        }
        .number p{
            color:#666666;
        }
        .luckybtn{
            padding: 10px;
            width: 270px;
            margin-top:30px;
        }
        .redeembox, .poinbox{
            padding:35px;
        }
        .totalpoin{
            color: #FE7602;
            font-size: 54px;
            line-height: 66px;
        }
        @media (min-width: 480px) {
            .page-header {
                display: flex;
            }
            .page-header__top {
                margin-right: auto;
            }
            .page-header__top, .page-header__bottom {
                display: block;
            }
            .page-header__toggle {
                display: none;
            }
            .navigation {
                display: block;
                opacity: 1;
                height: auto;
            }
            .navigation__item {
                opacity: 0.8;
                display: inline-block;
            }
            .navigation__item:hover {
                cursor: pointer;
                opacity: 1;
            }   
        }
        @media only screen and (max-width: 400px) {
            .logo{
                width:120px;
                margin-right: 20px;
            }
            .backdrop{
                margin-top:65px;
            }
            .backdrop img{
                width:570px;
            }
            .topleft{
                display:none;
            }
            .container {
            display: flex;
            flex-direction: column;
            height: 100vh;
            }

            .left, .right {
            flex: 1;
            }

            .right {
            order: -1;
            }
            .albums{
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                padding:unset;
            }
            .album{
                grid-template-columns: 50px 1fr;
            }

            .album__details{
                padding: 10px;
            }
            .btn-gradien{
                width:320px;
            }
            .voucherdate{
                margin-top:30px;
            }
            .section-list{
                padding:0px;
            }
            .desc{
                width:350px;
            }
            .responsive{
                display:block;
            }
            .imagefooter{
                display: none;
            }
            .grid-container {
                grid-template-columns: repeat(2, 1fr);
                padding:0px 20px;
            }
            .grid-item {
                font-size:20px !important;
            }
            .grid-lucky {
                grid-template-columns: repeat(1, 1fr);
            }
            .number{
                max-width:310px;
            }
            .luckybtn {
                max-width:200px;
            }
            .luckyclick {
                max-width:300px;
                text-align:center;
            }
            .tnc{
                padding:0pc 10px;
            }
        }
    </style>
</head>
<body>
<header class="page-header" id="navbar">
    <div class="page-header__top">
        <div class="page-header__toggle" onclick="toggleMenu()">☰</div>
        <div class='page-header__logo'> <img src="{{ url('/icon/depoin.png') }}" alt="depoint" class="logo"></div>
    </div>
  <nav class="page-header__bottom">
    <ul id="navigation" class="navigation">
      <li class="navigation__item">Cara Ikutan</li>
      <li class="navigation__item">Voucher saya</li>
      <li class="navigation__item">Syarat & Ketentuan</li>
      <li class="navigation__item">Beli Voucher</li>
    </ul>
  </nav>
</header>
<div class="topleft">
    <img src="{{ url('/icon/oren3.png') }}" alt="">
</div>
<div class="backdrop">
    <img src="{{ url('/icon/oren2.png') }}" alt="">
</div>
<div class="col-sm-12 mainbody">
    <div class="container">
       <div class="col-sm-12">
            <div class="col-sm-6 sideleft left">
                <h2>Lucky Click detikpoin</h2>
                    <p class="desc">Kumpulkan poin Anda dan tukarkan dengan voucher undian Lucky Click detikpoin dan menangkan Grandprize Emas 25 gr pada periode April 2020, tabungan senilai 25 juta pada periode Agustus 2020, dan Mobil pada periode Desember 2020.</p>
                    <button class="btn btn-gradien">Redeem Voucher Undian</button>
                </div>
            </div>
            <div class="col-sm-6 sideright right">
                    <img src="{{ url('/icon/gold.png') }}" alt="">
            </div>
       </div> 
    </div>
   
</div>
<div class="col-xs-12 voucherdate">
    <button class="btn-date">
        <p>Batas penukaran poin Berakhir Pada</p>
        <h2>31 April 2020</h2>
    </button>    
</div>
<div>
    <h2 class="luckytitle center">Cara Ikutan Lucky Click detikpoin</h2>
    <div class="albums">
        <div class="album"> 
            <div class="album__image">1.</div>
            <div class="album__details">
            <p class="album__title">Memiliki Akun detikID</p>
            <p class="album__description">
            Pastikan nomor telepon Anda telah terverifikasi dan dapat dihubungi. Informasi cara verifikasi nomor telepon.. <a href="#" class="direct">klik disini</a>
            </p>
            </div>
        </div>
        <div class="album">
            <div class="album__image">2.</div>
            <div class="album__details">
            <p class="album__title">Memiliki Poin</p>
            <p class="album__description">
            Pastikan jumlah poin Anda cukup, untuk mengumpulkan poin.. <a href="#" class="direct">klik disini</a>
            </p>
            </div>
        </div>
        <div class="album">
            <div class="album__image">3.</div>
            <div class="album__details">
            <p class="album__title">Melakukan Redeem Voucher Undian</p>
            <p class="album__description">
            Anda akan mendapatkan kode voucher di menu voucher saya.
            </p>
            </div>
        </div>
        <div class="album">
            <div class="album__image">4.</div>
            <div class="album__details">
            <p class="album__title">Menunggu Pengundian Berlangsung</p>
            <p class="album__description">
            Anda bisa mengikuti update informasi di detikcom.
            </p>
            </div>
        </div>
    </div>
    <div class="section-list">
    <h2 class="center">Redeem Voucher Undian Lucky Click detikpoin</h2>
    <p class="luckyclick">*Lucky Click ini mengharuskan Anda memasukkan no telp di detikID</p>
        <div class="grid-lucky">
            <div class="grid-poin">
                <p>Hello, <b>Fia</b></p>
                <div class="poin">
                    <div class="poinbox">
                        <p class="center">Poin Anda</p>
                        <div class="totalpoin" id="totalpoin"></div>
                    </div>
                </div>
            </div>
            <div class="grid-poin number">
                <div class="redeembox">
                    <p>Masukkan nominal untuk redeem voucher</p>
                    <div>
                        <button onclick="minus()" class="btn btn-light minus"><i class="fa fa-minus"></i></button>
                        <input type="text" value="1" class="redeem" id="redeem"/>
                        <button onclick="plus()" class="btn btn-light plus"><i class="fa fa-plus"></i></button>
                    </div>
                    <button class="btn-gradien luckybtn" onclick="saveData()">Redeem Voucher (20 poin)</button>
                </div>
            </div>
        </div>
        <h2 class="center vourcher">Voucher Undian Lucky Click detikpoin Saya</h2>
        <div class="col-xs-12 grid-container">
            <?php for ($i = 1; $i <= 12; $i++) { ?>
                <button class="btn-date grid-item">GD10923</button>
            <?php } ?>
        </div>
       <div class="tnc">
        <h2 class="center">Syarat dan Ketentuan Pemenang</h2>
            <ol>
                <li>Peserta memiliki akun detikID dengan nomor telepon yang terverifikasi dan dapat dihubungi,</li>
                <li>Peserta memastikan bahwa nomor telepon yang tertera pada data pengiriman di detikpoin sama dengan yang tertera pada akun detikID,</li>
                <li>Peserta memiliki poin yang dikumpulkan dari beragam aktivitas berpoin yang tersedia dalam kurun waktu Februari-Desember 2020,</li>
                <li>Peserta melakukan redeem voucher undian Lucky Click detikpoin 2020 dilakukan dalam 3 periode yaitu bulan April 2020, Agustus 2020, dan Desember 2020,</li>
                <li>Peserta memiliki kode voucher undian yang didapatkan dari hasil penukaran (redeem) 10 poin yang dimiliki di detikpoin,</li>
                <li>Satu user detik ID dapat me-redeem lebih dari 1 voucher undian,</li>
                <li>Satu transaksi redeem poin dapat ditukar dengan maksimal 5 voucher undian. Jumlah transaksi yang dapat dilakukan oleh peserta tidak dibatasi. Jika Anda ingin memiliki voucher undian lebih dari 5, Anda bisa melakukan transaksi redeem poin kembali,</li>
                <li>Masa berlaku voucher undian yang telah ditukar melalui redeem hanya dapat digunakan pada 1 periode program,</li>
                <li>Pada saat pengundian berlangsung, mohon pastikan kembali bahwa nomor telepon yang tertera pada akun detikID maupun yang tertera pada data pengiriman di detikpoin sama, aktif, dan dapat dihubungi. Apabila saat pengundian berlangsung nomor telepon kandidat pemenang tidak dapat dihubungi (tidak menjawab atau tidak aktif), maka kesempatan tersebut akan hangus dan akan digantikan dengan kandidat lainnya,</li>
                <li>Pemenang tidak dapat memilih ukuran, jumlah, warna, bentuk, model, maupun tipe dari hadiah yang diberikan. Hal tersebut disesuaikan dengan kondisi stok hadiah yang tersedia,</li>
                <li>Pajak setiap grand prize akan ditanggung oleh pemenang,</li>
                <li>Seluruh hadiah tidak dapat diganti dengan uang, baik sebagian maupun seluruhnya ataupun dipindahtangankan,</li>
                <li>Program Lucky Click detikpoin tidak berlaku untuk karyawan detikNetwork ataupun keluarga inti karyawan,
    detikNetwork tidak bertanggung jawab atas setiap kehilangan atau kerugian apapun yang timbul sehubungan dengan keikutsertaan peserta dalam Program Lucky Click detikpoin,
    detikNetwork berhak melakukan tindakan yang diperlukan apabila diduga terjadi tindakan kecurangan dari peserta yang melanggar syarat dan ketentuan atau merugikan detikNetwork,
    Syarat dan ketentuan dapat berubah sewaktu- waktu tanpa pemberitahuan sebelumnya.</li>
            </ol>
       </div>
    </div>
</div>
<footer>
    <img src="{{ url('/icon/footer.png') }}" class="imagefooter">
    <img src="{{ url('/icon/footerrespon.png') }}" class="responsive">
</footer>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script>
let nav = document.getElementById('navigation');
function toggleMenu() {
  nav.classList.toggle('navigation--visible');
}
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
    document.getElementById("navbar").style = "background-color:#fff; color:#000;";
  } else {
    document.getElementById("navbar").style = "background-color:unset; color:#fff;";
  }
}
function plus(max) {
    document.getElementById("redeem").value = parseInt(document.getElementById("redeem").value) + 1;
    if (document.getElementById("redeem").value >= parseInt(max)) {
        document.getElementById("redeem").value = max;
    }
}
function minus(min) {
    document.getElementById("redeem").value = parseInt(document.getElementById("redeem").value) - 1;
    if (document.getElementById("redeem").value <= parseInt(min)) {
        document.getElementById("redeem").value = min;
    }
}
var nameValidationInput = document.getElementById('redeem');
function useValue() {
    var NameValue = nameValidationInput.value;
    // use it
    alert(NameValue); // just to show the new value
}
nameValidationInput.onchange = useValue;  
nameValidationInput.onblur = useValue;
function saveData(){
    var input =  document.getElementById("redeem").value;
    localStorage.setItem("poin", input);
    location.reload();
}
const storedName = localStorage.getItem("poin");
var ul = document.getElementById("totalpoin").innerHTML= storedName;  
</script>
</body>
</html>