
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ポートフォリオ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

  <style>
  body{
    color: #444;
    margin: 0;
    padding: 0;
    line-height: 150%;
    background-color:grey;
  }
  /*トップバナー*/
  img{
    width:100%;
  }
  .main-image{
    position:relative;
  }

  .mainimage p{
    position:absolute;
    width: 100%;
      left: 0;
      top: calc(50% - 25px);
      text-align: center;
      color: darkblue;
      font-weight: bold;
      font-size: 50px;
      line-height: 50px;
  }
  /*ヘッダー部分*/
  header{
    margin-bottom: 15px;
    height: 200px;
    width: 100%;


    }


  header h1{
    font-size: 20px;
    font-family: 'Montserrat', sans-serif;
    margin: 15px;
    padding: 20px;
    text-align: center;
    float: left;
    height: 150px;
    width: 150px;
    background: white;
    border-radius: 100px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    line-height: 150px;
  }
  header h1 a{
    color: #333;
    text-decoration: none;
  }

  /*ナビゲーション*/
  #top-nav{
    float: right;
    width: 500px;
    height: 150px;
    position: relative;
  }
  nav a{
    padding: 10px 15px;
    color: #444;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
  }
  nav a:hover{
    text-decoration: underline;
  }
  #top-nav ul{
    height: 40px;
    width: 450px;
    position: absolute;
    bottom: 0;
    right: 0;
    list-style: none;
  }
  #top-nav ul li{
    float: left;

  }

  /*コンテンツ横幅*/
  .site-width{
    width: 980px;
    margin: 0 auto;
  }

  section h1.title{
    font-family: 'Montserrat', sans-serif;
    text-align: center;
  }
  #about , #merit , #recruit{
    margin-top: 80px;
    margin-bottom: 80px;
  }

  /*パネル*/
  .panel{
    background: #f6f5f5;
    border: 1px solid #eee;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    margin: 0 15px;
    padding: 15px;
    width: 30%;
    float: left;
    box-sizing: border-box;
    min-height: 380px;
  }
  .panel h2{
    color: #333;
    text-align: center;
  }
　

  /*テーブル*/
  table{
    background: rgb(246,246,246);
    border: 1px solid #eee;
    width: 100%;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    padding: 10px;
    margin: 10px 0;
    text-align: left;
    font-size: 14px;
  }
  th,td{
    padding: 5px 0;
    border-bottom: 1px dotted #ccc;
  }
  table thead tr th{
    color: #333;
    padding-bottom: 15px;
  }
  table thead tr th.color1{
    color: rgb(230,140,31);
    font-size: 18px;
  }
  table tbody th{
    color: rgb(142,130,113);
  }

  #merit{
    overflow: hidden;
  }

  /*フッター*/
  footer{
    font-size: 12px;
    padding: 15px;
    background: #333;
    text-align: center;
    color: #f6f5f5;
  }
  footer a{
    color: #f6f5f5;
  }

  /*contact*/
  #contact{
    margin-bottom: 150px;
  }

  /*フォーム*/
  form{
    width: 50%;
    margin: 0 auto;
  }
  input,textarea{
    font-size: 18px;
    margin-bottom: 15px;
  }
  input[type="text"]{
    width: 100%;
    height: 60px;
    border: none;
    background: #f6f5f5;
    padding: 10px;
    box-sizing: border-box;
  }
  textarea{
    width: 100%;
    height: 400px;
    border: none;
    background: #f6f5f5;
    padding: 10px;
    box-sizing: border-box;
  }
  input[type="submit"]{
    background: #333;
    border: none;
    padding: 15px 30px;
    color: white;
    float: right;
  }
  </style>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
　
  </head>

  <body>

    <!-- メニュー -->
    <header class="site-width">

      <h1><a href="index.php">HOME</a></h1>
      <nav id="top-nav">
      <div class="g-nav">
        <ul class="nav-nemu">
          <li><a href="index.php">HOME</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#merit">PLOFILE</a></li>
          <li><a href="#recruit">INFO</a></li>
          <li><a href="index.php">CONTACT</a></li>
        </ul>
      </div>
      </nav>

    </header>

    <p id="akakusuru">

    </p>


    <!-- メインコンテンツ -->

    <div id="main">

      <!-- トップバナー -->

      <main class="mainimage">
      <img src="image.jpg" id="top-banar">
  　　<p>MYportfolio</p>

  　　</main>

      <!-- ABOUT -->
      <section id="about" class="site-width">
        <h1 class="title">ABOUT</h1>
        <p>
          私は現在大学生でプログラミングの学習をしています。現在はフロント側の言語を中心に学習をしていますが<br />
          最近ではバックエンドの方にも興味を持っており、PHPを学習しています。将来的にはフルスタックのエンジニアを目指しています。

        </p>
      </section>

      <!-- MERIT -->
      <section id="merit" class="site-width">
        <h1 class="title">Information</h1>
        <section class="panel">
          <h2>スキル</h2>
          <p>    <br />
              <br />
            <br />
          　　　<br />
          </p>

        </section>
        <section class="panel">
          <h2>WORKS</h2>
          <p>

          </p>
        </section>
        <section class="panel">
          <h2>趣味
            </h2>
          <p>

          </p>
        </section>
      </section>

      <!-- RECRUIT -->
      <section id="recruit" class="site-width">
        <table>
          <thead>
            <tr><th class="color1">PROFILE</th><th></th></tr>
          </thead>
          <tbody>

            <tr>　<th>スキル</th><td>Html&css,JavaScript,jquery,php</td></tr>




            <tr><th>出身</th><td>東京</td></tr>
            <tr><th>趣味</th><td>映画鑑賞、ゲーム、筋トレ、basketball</td></tr>
            <tr><th></th><td></td></tr>

          </tbody>
        </table>
      </section>

    </div>

    <!-- footer -->
    <footer>

    </footer>

  </body>
  </html>
