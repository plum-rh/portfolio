@section('title', 'PLUM | WORKS - クルージング予約サイト -')
@extends('layouts.app2')

@section('style')
<style>
    body {
        margin: 0;
    }
    a {
        text-decoration: none;
    }
    header {
        height: 70px;
        width: 100%;
        background-color: rgba(0,0,0,0.3);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 10;
    }
    header h3 {
        font-size: 30px;
        color: white;
        font-weight: normal;
        margin: 0;
        padding-left: 30px;
        line-height: 70px;
        float: left;
    }
    header span {
        color: #ffd700;
    }
    header ul{
        margin: 0;
    }
    header li{
        font-size: 12px;
        list-style: none; /* リストの・や数字を削除 */
        float: right; /* 右寄せにする */
        line-height: 70px;
    }
    header a{
        color: white;
        display: block;/*文字を上下もクリック可能にする */
        padding: 0 15px;

    }
    header a:hover{
        opacity: 0.7;
    }
    .top-wrap{
        height: 700px;
        background-image: url('{{ asset('images/cruise/top-image.jpeg') }}');
        background-size: cover; /* 画像の縦横比を維持したままいい感じにcoverしてくれる */
        position: relative;
    }
    .top-filter{
        height:100%;
        background-color: rgb(0,0,0, 0.3);
    }
    .top-message{
        padding-top: 200px;
        padding-left: 50px;

    }
    .top-message h3{
        color:white;
        font-size: 65px;
        margin: 0;
    }
    .top-message p{
        color:white;
        font-size: 25px;
        margin: 0;
    }
    .icons {
        position: absolute;
        bottom: 20px;
        right: 20px;
    }
    .icons a{
        font-size: 30px;
        color: white;
        opacity: 0.7;
        padding:0 10px;

    }
    .icons a:hover{
        opacity: 1.0;

    }

    .service-wrap > h3{
        font-size: 40px;
        padding: 80px 0 40px;
        text-align: center;
    }
    .service-container{
        display: flex;
        justify-content: center;

    }
    .service-box {
        width: 29%;
        margin: 0 15px;
        background-color: rgb(245,236,223);
        position: relative;
    }
    .service-box span{
        position: absolute;
        top: 5px;
        right: 5px;
        font-size: 12px;
        color: white;
        background-color: rgb(206,176,9);
        padding: 5px;
        border-radius: 3px;
    }
    .service-box img{
        width: 100%;
        transition: .5s;

    }
    .service-box img:hover{
        opacity: 0.7;
    }
    .service-box h3, p {
        width: 80%;
        margin: 0 auto;
        color: black;
    }
    .service-box h3{
        padding-top: 20px;
        padding-bottom: 10px;

    }
    .service-box p{
        padding-bottom: 20px;
        font-size: 13px;
    }
    .contact-wrap{
        height: 400px;
        background-color: #c4af9b;
        text-align: center;
        margin-top: 80px;
    }
    .contact-wrap a{
        font-size: 20px;
        border: 1px solid white;
        color: white;
        line-height: 400px;
        padding: 20px 50px;
        transition: .5s;
    }
    .contact-wrap a:hover{
        color: #c4af9b;
        background-color: #fff;
    }
    .footer-top {
        display: flex;
        justify-content: space-between;
        width: 90%;
        margin: 0 auto;
        padding-top: 50px;
    }
    .footer-box {
        width: 30%;
    }
    .footer-box a{
        display: block;
        color:black

    }
    .footer-box-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }



</style>

@endsection


@section('content')
<header class="mt-5">
    <h3><span>G</span>old Cruise</h3>
    <ul>
        <li><a href="#">お問い合わせ</a></li>
        <li><a href="#">寄港地ガイド</a></li>
        <li><a href="#">クルーズ一覧</a></li>
        <li><a href="#">客船のご案内</a></li>
    </ul>
</header>
<div class="top-wrap">
    <div class="top-filter">
        <div class="top-message">
            <h3>The Best Cruise</h3>
            <p>ゴールドクルーズで人生という旅に最高の休息を</p>
        </div>
        <div class="icons">
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="service-wrap">
    <h3>Gold Cruiseの魅力</h3>
    <div class="service-container">
        <a href="#" class="service-box">
            <img src={{ asset ("images/cruise/buffet.jpeg") }}>
            <span>5:00-24:00</span>
            <h3>
                食事
            </h3>
            <p>
                一流シェフの作る料理が一日中食べ放題。この旅で体重が増えても責任は取れません。
            </p>
        </a>
        <a href="#" class="service-box">
            <img src={{ asset ("images/cruise/billiards.jpeg") }}>
            <span>7:00-23:00</span>
            <h3>
                屋内施設
            </h3>
            <p>
                定番のビリヤード・ダーツ・ボウリングから本格的なカジノまで。船酔いなんてする暇ありません。
            </p>
        </a>
        <a href="#" class="service-box">
            <img src={{ asset ("images/cruise/pool.jpeg") }} >
            <span>7:00-23:00</span>
            <h3>
                食事
            </h3>
            <p>
                船の上にいることを忘れてしまいそうな空間が広がっていて一日中様々なイベントが楽しめます。
            </p>
        </a>
    </div>
</div>
<div class="contact-wrap">
    <a href="#">今すぐ申し込む</a>
</div>

<footer>
    <div class="footer-top">
        <div class="footer-box">
            <a class="footer-box-title" href="#">企業概要</a>
            <a href="#">会社概要</a>
            <a href="#">会社実績</a>
        </div>
        <div class="footer-box">
            <a class="footer-box-title" href="#">採用情報</a>
            <a href="#">新卒採用</a>

        </div>
        <div class="footer-box">
            <a class="footer-box-title" href="#">お問い合わせ</a>
        </div>
    </div>
    <div class="footer-bottom">
        <p class="bg-light text-center">&copy; 2020 CodeBegi Inc. All Rights Reserved.</p>
    </div>
</footer>


@endsection
