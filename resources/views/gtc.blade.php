<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>GTC</title>
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
        .bggradien{
            background: radial-gradient(79.92% 79.92% at 50% 20.08%, #FFA34F 18.23%, #EF7049 100%);
            height: 1590px;
        }
        .logocenter{
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 20px;
        }
        .topleft{
            position: absolute;
            left: 0;
            top: 0;
        }
        .topright{
            position: absolute;
            top: 0;
            right: 0;
        }
        .desc{
            text-align: center;
            color: #fff;
            line-height: 26px;
            width: 838px;
            position: relative;
            top: 30px;
            left: 500px;
        }
      

        .albums{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            grid-gap: 10px;
            padding:50px;
        }

        .album{
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr;
            align-items: center;
            border-radius: 3px;
        }

        .album__details{
            padding: 20px;
            color: #fff;
            text-align:center;
        }

        .album__title{
            margin-bottom: 0;
            font-weight: 300;
        }

        .album__artist{
            margin: 0;
            color: #ccc;
            font-size: .8em;
        }

        .album__description{
            font-size: .9em;
        }

        .album__image{
            display:block;
            margin:auto;
        }
        .bottomleft{
            position: absolute;
            /* bottom:0; */
            left:0;
        }
        .bottomright{
            position: absolute;
            top:1210px;
            right:0;
        }
        .footer{
            text-align:center;
            color:#fff;
            margin-top:120px;
        }
        @media only screen and (max-width: 400px) {
            .topleft img, .topright img, .bottomright img, .bottomleft img{
                width:100px;
            }
            .logocenter img{
                width: 200px;
                margin-top: 100px;
            }
            .albums{
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
            .album{
                grid-template-columns: 1fr;
                margin-left: -10px;
            }

            .album__details{
                padding: 10px;
            }
            .bggradien{
                height:100% !important;
            }
            .bottomleft{
                margin-top:65px;
            }
            .bottomright{
                top:unset !important;
                margin-top:-100px;
            }
        }

    </style>
</head>
<body>
    <div class="bggradien">
        <div class="topleft">
            <img src="{{ url('/icon/2.png') }}">
        </div>
        <div class="logocenter">
            <img src="{{ url('/icon/logocampus.png') }}" alt="campus" class="logo">
        </div>
        <div class="topright">
            <img src="{{ url('/icon/5.png') }}">
        </div>
        <div class="desc">
            <p>detikcom Goes to Campus merupakan acara sharing dan motivasi yang dibalut dalam bentuk seminar edutaiment. Acara ini bertujuan mengajak mahasiswa untuk ikut berkarya dengan kreatif dan inovatif agar bisa memiliki peran positif untuk lingkungan disekitarnya.</p>
        </div>
        <div class="col-xs-12">
        <div class="albums">
            <div class="album"> 
                <div class="album__image"> <img src="{{ url('/image/11maret.png') }}" alt=""></div>
                <div class="album__details">
                <h2 class="album__title">Universitas Sebelas Maret</h2>
                <p class="album__artist">Surakarta</p>
                <p class="album__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna consequat.
                </p>
                </div>
            </div>
            <div class="album">
                <div class="album__image"><img src="{{ url('/image/semarang.png') }}" alt=""></div>
                <div class="album__details">
                <h2 class="album__title">Semarang</h2>
                <p class="album__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna consequat.
                </p>
                </div>
            </div>
            <div class="album">
                <div class="album__image"><img src="{{ url('/image/surabaya.png') }}" alt=""></div>
                <div class="album__details">
                <h2 class="album__title">Surabaya</h2>
                <p class="album__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna consequat.
                </p>
                </div>
            </div>
            <div class="album">
                <div class="album__image"><img src="{{ url('/image/malang.png') }}" alt=""></div>
                <div class="album__details">
                <h2 class="album__title">Malang</h2>
                <p class="album__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna consequat.
                </p>
                </div>
            </div>
            <div class="album">
                <div class="album__image"><img src="{{ url('/image/yogyakarta.png') }}" alt=""></div>
                <div class="album__details">
                <h2 class="album__title">Yogyakarta</h2>
                <p class="album__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna consequat.
                </p>
                </div>
            </div>
            <div class="album">
                <div class="album__image"><img src="{{ url('/image/bandung.png') }}" alt=""></div>
                <div class="album__details">
                <h2 class="album__title">Bandung</h2>
                <p class="album__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna consequat.
                </p>
                </div>
            </div>
            <div class="album">
                <div class="album__image"><img src="{{ url('/image/jakarta.png') }}" alt=""></div>
                <div class="album__details">
                <h2 class="album__title">jakarta</h2>
                <p class="album__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna consequat.
                </p>
                </div>
            </div>
           
            </div>

        </div>
        <div class="bottomleft">
            <img src="{{ url('/icon/4.png') }}">
        </div>
        <div class="footer">
            <img src="{{ url('/icon/logo.png') }}" alt="logo detik"><br>
            <small>Copyright @ 2020 detikcom <br> All right reserved</small>
        </div>
        <div class="bottomright">
            <img src="{{ url('/icon/3.png') }}">
        </div>
    </div>
    
</body>
</html>