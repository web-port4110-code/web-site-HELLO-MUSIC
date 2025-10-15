<!doctype html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.css">
        <link rel="stylesheet" href="jq/slick/slick-theme.css">
        <link rel="stylesheet" href="jq/slick/slick.css">
        <link rel="stylesheet" href="css/style.css">
        <title></title>
        <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
        <script src="jq/jquery-3.7.1.min.js"></script>
        <script src="jq/slick/script.js"></script>
        <script src="jq/slick/slick.min.js"></script>
        <script src="jq/motion.js"></script>
        <!--font Awesome-->
        <script src="https://kit.fontawesome.com/98bfb8a6c1.js" crossorigin="anonymous"></script>
        <!--webフォント-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Allura&family=Cinzel:wght@400..900&family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            <div class="headerContainer">
                <div class="attention">
                    <p>
                        このサイトはポートフォリオ用に作成したものです。
                        サイト内の情報は創作であり、実在しません。
                    </p>
                </div>
                <div class="headerBox">
                    <h1 class="dancing-script-font">Hello Music</h1>
                    <div class="headerBox__button">
                        <div class="headerBox__button--close">
                            <a href="#" class="c">
                                <div class="headerBox__iconBox">
                                    <i class="fa-solid fa-xmark"></i>
                                </div>
                            </a>
                        </div>
                        <div class="headerBox__button--open">
                            <a href="#" class="o">
                                <div class="headerBox__iconBox">
                                    <i class="fa-solid fa-bars"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <nav>
                    <ul class="navigation">
                        <li>HOME</li>
                        <li>アクセス</li>
                        <li>お問い合せ</li>
                        <li>楽器紹介</li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            <div class="mainContainer">
                <div class="heroImg">
                    <img src="images/hello_music_main.gif" alt="">
                    <!--<div class="img" style="background-color: antiquewhite; width: 100%; height: 200px;"></div>-->
                </div>
                <div class="introduction">
                    <h1><dfn>音楽祭「HELLO MUSIC」とは？</dfn></h1>
                    <div class="introduction__para">
                        <p>3年に1度、地域の芸術大学と共同で開催される音楽祭です。</p>
                        <p>日本各地だけでなく、世界各国から著名な演奏家たちが集い、学生とともに音に溢れた2日間をお届けします。</p>
                    </div>
                </div>
                <section class="concertInfo">
                    <div class="concertInfo__heading">
                        <i class="fa-solid fa-music"></i>
                        <h2>コンサート情報</h2>
                        <i class="fa-solid fa-music"></i>
                    </div>
                    <div class="concertInfo__box">
                        <div class="concertInfo__tabSelect mb-3">
                            <div class="concertInfo__tabSelect--label">
                                <label class="form-label" for="tabNumber">コンサート：</label>
                            </div>
                            <div class="concertInfo__tabSelect--select">
                                <select class="form-select" id="tabNumber">
                                    <option label="第1回" value="1" class="" ></option>
                                    <option label="第2回" value="2" class="" ></option>
                                    <option label="第3回" value="3" class="" ></option>
                                    <option label="第4回" value="4" class="" ></option>
                                </select>
                            </div>
                        </div>
                        <div class="concertInfo__tab">
                        
                            <div class="card cardOne active">
                                <div class="card-header">
                                    <h2 class="card-title">第1回 「ヴァイオリンの調べ」</h2>
                                    <h3 class="card-subtitle">8/22 18:30〜</h3>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">〜プログラム〜</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">J.S.バッハ<br>　無伴奏ヴァイオリンのためのパルティータ 第6番</li>
                                        <li class="list-group-item">B.バルトーク<br>　無伴奏ヴァイオリンのためのソナタ</li>
                                        <li class="list-group-item">L.V.ベートーヴェン<br>　ヴァイオリンソナタ 第6番</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card cardTwo">
                                <div class="card-header">
                                    <h2 class="card-title">第2回 「学生コンサート」</h2>
                                    <h3 class="card-subtitle">8/23 10:30〜</h3>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">ショパン<br>　幻想曲第1番</li>
                                        <li class="list-group-item">ショパン<br>　華麗なる大円舞曲</li>
                                        <li class="list-group-item">サン＝サーンス<br>　クラリネット・ソナタ 変ホ長調より 第1楽章</li>
                                        <li class="list-group-item">ベートーヴェン<br>　ホルン・ソナタ ヘ長調</li>
                                        <li class="list-group-item">ブラームス<br>　ヴァイオリン・ソナタ 第1番 ト長調より 第1楽章</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card cardThree">
                                <div class="card-header">
                                    <h2 class="card-title">第3回 「モーツァルトの魅力」</h2>
                                    <h3 class="card-subtitle">8/23 14:30〜</h3>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">ピアノ・ソナタ 第11番 イ長調 「トルコ行進曲付き」</li>
                                        <li class="list-group-item">クラリネット五重奏曲</li>
                                        <li class="list-group-item">きらきら星変奏曲</li>
                                        <li class="list-group-item">弦楽四重奏曲 第19番 ハ長調 「不協和音」</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card cardFour">
                                <div class="card-header">
                                    <h2 class="card-title">第4回 「作曲コンクール 本戦」</h2>
                                    <h3 class="card-subtitle">8/23 18:30〜</h3>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">キム・ヨネ<br>　晴天(世界初演)</li>
                                        <li class="list-group-item">ボラリス・アデトワフスキー<br>　ここにあるものはなんだろう(世界初演)</li>
                                        <li class="list-group-item">郡司総一郎<br>　交響的作品(世界初演)</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <section class="news">
                    <h2>news<span>!</span></h2>
                    <div class="news__table">
                        <table>
                            <?php
                            try{
                                require_once './php_mojure/connect_db.php';
                                $db = getdb();
                                $stt = $db->prepare('SELECT * FROM samplenews');
                                $stt->execute();
                                while($row = $stt->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <tr>
                                    <td class="news__table--day"><?=$row['day'] ?></td>
                                    <td class="news__table--content"><?=$row['content'] ?></td>
                                </tr>
                            <?php
                                }
                            } catch (\Throwable $th) {
                                die("接続エラー：{$th->getMessage()}");
                            }
                            ?>
                        </table>
                    </div>
                </section>
                <section class="slideShow">
                    <h1>
                        <i class="fa-solid fa-star"></i>
                        演奏会の曲目を聴いてみよう！
                        <i class="fa-solid fa-star"></i>
                    </h1>
	                <ul class="slide_box">
	                	<li>
                            <a href="#">
                                <div class="slide-image">
                                    <img src="https://img.youtube.com/vi/ngjEVKxQCWs/sddefault.jpg">
                                </div>
                                <p>シャコンヌ</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="slide-image">
                                    <img src="https://img.youtube.com/vi/2Ec_DnPL578/sddefault.jpg">
                                </div>
                                <p>ブラームス：ヴァイオリン・ソナタ 第1番 ト長調</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="slide-image">
                                    <img src="https://img.youtube.com/vi/6M8fuKjzvFE/sddefault.jpg">
                                </div>
                                <p>ショパン：華麗なる大円舞曲</p>
                            </a>
                        </li>
	                </ul>
                </section>
                
            </div>
        </main>

        <footer>
            <div class="footerContainer">
                <section class="footerIcon">
                    <h2>Follow Us!</h2>
                    <div class="footerIcon__box">
                        <div class="footerIcon__box--x">
                            <i class="fa-brands fa-x-twitter"></i>
                        </div>
                        <div class="footerIcon__box--insta">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                </section>
                <section class="footerNav">
                    <p><a href="#">HOME</a></p>
                    <p><a href="#">アクセス</a></p>
                    <p><a href="#">お問い合わせ</a></p>
                    <p><a href="#">楽器紹介</a></p>
                    <!--
                    <ul>
                        <li><p>HOME</p></li>
                        <li>アクセス</li>
                        <li>お問い合わせ</li>
                        <li>楽器紹介</li>
                    </ul>
                        -->
                </section>
            </div>
        </footer>
    </body>
</html>
