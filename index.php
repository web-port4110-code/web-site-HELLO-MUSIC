<!doctype html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="jq/slick/slick-theme.css">
        <link rel="stylesheet" href="jq/slick/slick.css">
        <title></title>
        <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
        <script src="jq/jquery-3.7.1.min.js"></script>
        <script src="jq/slick/script.js"></script>
        <script src="jq/slick/slick.min.js"></script>
        <script src="jq/motion.js"></script>
        <script src="https://kit.fontawesome.com/98bfb8a6c1.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <header>
            <div class="headerContainer">
                <div class="headerBox">
                    <h1>HELLO MUSIC</h1>
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
                    <div class="img" style="background-color: antiquewhite; width: 100%; height: 200px;"></div>
                </div>
                <div class="introduction">
                    <h1><dfn>音楽祭「HELLO MUSIC」とは</dfn></h1>
                    <div class="introduction__para">
                        <p>3年に1度、地域の芸術大学と共同で開催される音楽祭です。</p>
                        <p>日本各地だけでなく、世界各国から著名な演奏家たちが集い、学生とともに音に溢れた2日間をお届けします。</p>
                    </div>
                </div>
                <section class="concertInfo">
                    <div class="concertInfo__tabSelect">
                        <label for="tabNumber">コンサート：</label>
                        <select id="tabNumber">
                            <option label="第1回" value="1" class="" ></option>
                            <option label="第2回" value="2" class="" ></option>
                            <option label="第3回" value="3" class="" ></option>
                            <option label="第4回" value="4" class="" ></option>
                        </select>
                    </div>
                    <div class="concertInfo__tab">
                        <div class="concertInfo__tab--one active">
                            <hgroup>
                                <h2>第1回 「ヴァイオリンの調べ」</h2>
                                <p>8/22 18:30〜</p>
                            </hgroup>
                            <ul>
                                <li>J.S.バッハ<br>　無伴奏ヴァイオリンのためのパルティータ 第6番</li>
                                <li>B.バルトーク<br>　無伴奏ヴァイオリンのためのソナタ</li>
                                <li>L.V.ベートーヴェン<br>　ヴァイオリンソナタ 第6番</li>
                            </ul>
                        </div>
                        <div class="concertInfo__tab--two">
                            <hgroup>
                                <h2>第2回 「学生コンサート」</h2>
                                <p>8/23 10:30〜</p>
                            </hgroup>
                            <ul>
                                <li>ショパン<br>　幻想曲第1番</li>
                                <li>ショパン<br>　華麗なる大円舞曲</li>
                                <li>サン＝サーンス<br>　クラリネット・ソナタ 変ホ長調より 第1楽章</li>
                                <li>ベートーヴェン<br>　ホルン・ソナタ ヘ長調</li>
                                <li>ブラームス<br>　ヴァイオリン・ソナタ 第1番 ト長調より 第1楽章</li>
                            </ul>
                        </div>
                        <div class="concertInfo__tab--three">
                            <hgroup>
                                <h2>第3回 「モーツァルトの魅力」</h2>
                                <p>8/23 14:30〜</p>
                            </hgroup>
                            <ul>
                                <li>ピアノ・ソナタ 第11番 イ長調 「トルコ行進曲付き」</li>
                                <li>クラリネット五重奏曲</li>
                                <li>きらきら星変奏曲</li>
                                <li>弦楽四重奏曲 第19番 ハ長調 「不協和音」</li>
                            </ul>
                        </div>
                        <div class="concertInfo__tab--four">
                            <hgroup>
                                <h2>第4回 「作曲コンクール 本戦」</h2>
                                <p>8/23 18:30〜</p>
                            </hgroup>
                            <ul>
                                <li>キム・ヨネ<br>　晴天(世界初演)</li>
                                <li>ボラリス・アデトワフスキー<br>　ここにあるものはなんだろう(世界初演)</li>
                                <li>郡司総一郎<br>　交響的作品(世界初演)</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="news">
                    <h2>news</h2>
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
                            <td class="news__table--day"><span><?=$row['day'] ?></span></td>
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
                    <h1>演奏会の曲目を聴いてみよう！</h1>
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
            </div>
        </footer>
    </body>
</html>
