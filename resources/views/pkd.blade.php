<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href = "{{  url('/css/bootstrap.min.css')}}" rel = "stylesheet">


    <style>
        body{
            margin:0;
            font-family: 'Montserrat', sans-serif;
        }
        .bg{
            background: #2B4AA4;
            height: 417px;
            position: relative;
            top: 0;
            left: 0;
            padding-top: 60px;
        }
        .bggradien{
            background: linear-gradient(180deg, #2B4AA4 0%, rgba(62, 94, 181, 0) 100%);
            height: 268px;
            position: absolute;
            left: 0px;
            top: 410px;
            width: 100%;
        }
        .bgbody{

        }
        .imgbody{
            width:100%;
            display:block;
        }
        .imgres{
            display:none;
        }
        .center{
            text-align: center;
        }
        .icon{
            display: inline-block;
            margin: 0;
        }
        .btn-dark{
            background: #1D3167;
            border-radius: 5px;
            height: 40px;
        }
        .back{
            margin-left:50px;
        }
        .vertcenter{
            position: absolute;
            width: 495px;
            height: 61px;
            left: 650px;
            top: 1900px;
            background: #CADB2A;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.16);
            border-radius: 10px;
            z-index: 2;
        }
        .vertcenter span{
            font-weight: 600;
            text-align: center;
            line-height: 54px;
        }
        .desc{
            position: absolute;
            width: 828px;
            /* height: 125px; */
            left: 500px;
            top: 1936px;
            background-color: #fff;
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            line-height: 29px;
            text-align: center;
            z-index: 1;
            padding-top: 60px;
            border-radius: 0px 50px;
            z-index: 1;
            box-shadow: inset 0px 4px 10px rgba(0, 0, 0, 0.25);
            padding-bottom: 35px;
        }
        .bottom{
            background-color: #FD990D;
        }
        .linearbootom{
            background: linear-gradient(360deg, #FD990D 0%, rgba(253, 153, 13, 0) 100%);
            height: 249px;
            position: absolute;
            top: 2030px;
            width: 100%;
            z-index: -1;
        }
        .footer{
            background-color: #FD990D;
            text-align: center;
            color: #fff;
            margin-top: 359px;;
        }
        
        .sponsorimg{
            position: absolute;
            /* bottom: 0; */
            left: 50%;
            transform: translateX(-50%);
            margin-top: 230px;
            display:block;
        }
        .responsponsor{
            display: none;
        }
        .albums{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            grid-gap: 10px;
        }

        .album{
            display: grid;
            grid-template-columns: 1fr;
            align-items: center;
            width: 350px;
        }

        .album__image{
            width: 100%;
            border-radius: 2px;
            text-align:center;
        }

        .album__details{
            padding: 20px;
            text-align:center;
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
        .translist{
            padding:0px 320px;
        }
        .album-body{
            background-color:#fff;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.16);
            border-radius: 10px;
            padding: 20px;
        }
        .album-footer{
            background: #FFFFFF;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.16);
            border-radius: 0px 10px;
            padding: 10px;
            height: 52px;
            margin-top: 22px;
            text-align:center;
        }
        .album-footer span{
            font-weight:600;
        }
        .btn-next{
            background: #2B4AA4;
            border-radius: 0px 10px 0px 0px;
            width: 85px;
            height: 52px;
            float: right;
            margin-top: -10px;
            margin-right: -10px;
        }
        .adsense{
            background: #D8D8D8;
            width: 970px;
            height: 250px;
            display: block;
            margin: auto;
        }
        @media only screen and (max-width: 400px) {
            html{
                font-size: 80%;
            }
            .albums{
                /* grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); */
                grid-template-columns: repeat(2, 1fr);
            }
            .album{
                grid-template-columns: 1fr;
                max-width:150px;
            }
            .album-body{
                height:200px;
            }
            .album__details{
                padding: 15px;
            }
            .album__image, .album__image img {
                max-width:135px;
            }
            .sponsorimg{
                display: none;
            }
            .responsponsor{
                display: block;
                margin: auto;
                margin-top:120px;
            }
            .adsense{
                width: 320px;
                height: 150px;
            }
            .back{
                margin-left:19px;

            }
            .icon{
                margin-top:30px;
                width:220px;
            }
            .translist {
                padding: 100px 10px 0px;
            }
            .imgbody{
                display:none;
            }
            .imgres{
                width:100%;
                display:block;
            }
            .vertcenter{
                max-width: 250px;
                top: 950px;
                left: 60px;
            }
            .desc{
                top: 980px;
                left: 20px;
                max-width: 330px;
                font-size: 14px;
                line-height: 17px;
            }
            .btn-next{
                max-width: 50px;
                max-height: 40px;
            }
            .btn-next img{
                max-width: 20px;
            }
            .album-footer{
                max-height: 40px;
            }
            .footer{
                margin-top:30px;
            }
            .linearbootom {
                display:none;
            }
        }

    </style>
    <title>Detikcom</title>
</head>
<body>
    <div class="bg">
        <div class="adsense"></div>
    </div>
    <div class="bggradien">
        <div class="back">
            <button class="btn btn-dark">
                <img src="{{ url('/icon/path.png') }}" alt="">
                <img src="{{ url('/icon/logo.png') }}" alt="logo detik">
            </button>
        </div>
        <div class="center">
            <img class="icon" src="{{ url('/icon/logokai1.png') }}" alt="logokai">
        </div>
    </div>
    <div class="bgbody">
        <img class="imgbody" src="{{ url('/icon/detik.png') }}" alt="detik">
        <img class="imgres" src="{{ url('/icon/kaimobile.png') }}" alt="detik">
    </div>
    <div class="descbox">
        <div class="vertcenter center"><span>Apa itu "Pulang Kampung Digital"?</span></div>
        <div class="desc"><span>Pengalaman merasakan pulang kampung secara digital dengan berbagai acara menarik dan bintang tamu yang mengingatkan akan kampung halaman yang sesungguhnya. Cuma di sini, bisa mudik tanpa takut diputar balik.</span></div>
    </div>
    <div class="linearbootom"></div>
        <div class="bottom">
            <div class="translist">
                <div class="albums">
                    <div class="album"> 
                       <div class="album-body">
                            <div class="album__image"><img src="{{ url('/image/hasannudin.png') }}" alt=""></div>
                            <div class="album__details">
                                <p class="album__title">Bandara Hassanuddin Makassar</p>
                            </div>
                       </div>
                        <div class="album-footer">
                            <span>Ambil Tiket</span>
                            <button class="btn-next"><img src="{{ url('/icon/next.png') }}" alt=""></button>
                        </div>
                    </div>
                    
                    <div class="album">
                        <div class="album-body">
                        <div class="album__image"><img src="{{ url('/image/stasiun_bdg.png') }}" alt=""></div>
                            <div class="album__details">
                                <p class="album__title">Stasiun Bandung</p>
                            </div>
                        </div>
                        <div class="album-footer">
                            <span>Ambil Tiket</span>
                            <button class="btn-next"><img src="{{ url('/icon/next.png') }}" alt=""></button>
                        </div>
                    </div>
                    <div class="album">
                        <div class="album-body">
                            <div class="album__image"><img src="{{ url('/image/Stasiun_Tugu.png') }}" alt=""></div>
                            <div class="album__details">
                            <p class="album__title">Stasiun Tugu</p>
                            </div>
                        </div>
                        <div class="album-footer">
                            <span>Ambil Tiket</span>
                            <button class="btn-next"><img src="{{ url('/icon/next.png') }}" alt=""></button>
                        </div>
                    </div>
                    <div class="album">
                        <div class="album-body">
                            <div class="album__image"><img src="{{ url('/image/kualanamu.png') }}" alt=""></div>
                            <div class="album__details">
                                <p class="album__title">Bandara Kualanamu Medan</p>
                            </div>
                        </div>
                        <div class="album-footer">
                            <span>Ambil Tiket</span>
                            <button class="btn-next"><img src="{{ url('/icon/next.png') }}" alt=""></button>
                        </div>
                    </div>
                    <div class="album">
                        <div class="album-body">
                            <div class="album__image"><img src="{{ url('/image/stasiun_solo.png') }}" alt=""></div>
                            <div class="album__details">
                                <p class="album__title">Stasiun Solo Balapan</p>
                            </div>
                        </div>
                        <div class="album-footer">
                            <span>Ambil Tiket</span>
                            <button class="btn-next"><img src="{{ url('/icon/next.png') }}" alt=""></button>
                        </div>
                    </div>
                    <div class="album">
                        <div class="album-body">
                            <div class="album__image"><img src="{{ url('/image/stasiun_surabaya.png') }}" alt=""></div>
                            <div class="album__details">
                                <p class="album__title">Stasiun Gubeng Surabaya</p>
                            </div>
                        </div>
                        <div class="album-footer">
                            <span>Ambil Tiket</span>
                            <button class="btn-next"><img src="{{ url('/icon/next.png') }}" alt=""></button>
                        </div>
                    </div>
                
                </div>

            </div>
            <img src="{{ url('/icon/bottom.png') }}" alt="sponsor" class="sponsorimg">
            <img src="{{ url('/icon/bottom-mobile.png') }}" alt="sponsor" class="responsponsor">
            <div class="footer">
                <img src="{{ url('/icon/logo.png') }}" alt="logo detik"><br>
                <small>Copyright @ 2020 detikcom <br> All right reserved</small>
            </div>
        </div>
    <script src="https://kit.fontawesome.com/6ae0a9f34d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>