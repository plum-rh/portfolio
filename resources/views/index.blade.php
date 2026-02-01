<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLUM PJ</title>

    <!-- bootstrap -->
    <!-- CDN CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="shortcut icon" href="{{ asset('images/plum_logo_p3.png') }}">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
* {
  margin: 0;
  padding: 0;
  font-family: "Zen Kaku Gothic Antique", sans-serif;
  font-weight: 400;

}

.plum{
    /* color: #8a4f63; */
    color: #bb95a1;
}
.plum:hover{
    color:#ad5774;
}
.plum2{
    /* color: #8a4f63; */
    color: #ad5774;
}
.title{
    z-index: 100;
    top: 0;
    left: 0;
    position: absolute;
    top: 30px;
    width: 200px;

}

/* ===== 背景固定 ===== */
body {
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    margin: 0;
    height: 100vh;

}
.bg-overlay {
  position: fixed;
  inset: 0;
  background: rgba(20, 30, 25, 0.40);
  z-index: -1;
}

/* ===== サイドバー固定 ===== */
.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 200px;
    height: 100vh;
    padding: 2rem 1rem;
    background: rgba(20, 30, 25, 0.75);
    color: #fff;
    z-index: 5;
    display: flex;
    flex-direction: column;
    justify-content: center;   /* 縦中央 */
    align-items: center;       /* 横中央（任意） */
}
.sidebar-title{
    position: absolute;
    top: 10px;
}

.sidebar a {
    /* color: #fff; */
    text-decoration: none;
    display: block;
    margin-bottom: 1rem;
    font-weight: 300;
}

/* ===== スクロールコンテナ ===== */
.main-content {
    margin-left: 220px;
    height: 100vh;
    overflow-y: scroll;
    scroll-snap-type: y mandatory;

}

/* メインセクション */
.main-section{
    height: 100vh;
    position: relative;
    letter-spacing: 1.5px;

}
.text-hero{
    position: absolute;
    background: rgba(20, 30, 25, 0.75);
    right: 80px;
    bottom: 80px;
    text-align: end;
}

/* ===== 各セクション ===== */
.snap {
    scroll-snap-align: start;
}

.snap-section {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 3rem;


}

.section-box {
    background: rgba(255, 255, 255, 0.85);
    padding: 3rem;
    width: 100%;

}

.section-title {
    font-weight: 300;
    letter-spacing: 0.1em;
    margin-bottom: 1.5rem;
}
.my-icon{
    background: #fff;
    width: 200px;
    height: 200px;
    border-radius: 200px;
    position: relative;

}
.name{
    position: absolute;
    right: 40px;
    top: 80px;
    transform: rotate(20deg);
    font-weight: lighter;
    font-size: 25px;
    opacity: 70%;
  font-family: "Indie Flower", cursive;
  font-weight: 400;
  font-style: normal;
}

.works-section-box{
    max-height: calc(100vh - 400px);
    max-width: 1000px;
    margin: 0 auto;
}

.burger-btn{
    display: none;
}

@media screen and (max-width:768px){

  .sidebar{
    display: none;
    left: 0;
  }


.main-content {
    margin-left: 0;
}

.text-hero{
    position: static;

    text-align: center;

}
.main-section{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0.5rem;

}

.snap-section{
    padding: 0.5rem;
}

  /* ハンバーガーボタン */
  .burger-btn{
    display: block;
    position: fixed;
    top: 30px;
    right: 30px;
    width: 30px;
    height: 24px;
    z-index: 100;
    cursor: pointer;

  }

  .bar{
    display: block;
    width: 100%;
    height: 2px;
    border-radius: 1px;
    background-color: #bb95a1;
    position: absolute;
    z-index: 9; /*メニューの下に隠れないようにz-indexを指定する*/
  }
  .bar_top{
    top: 0;
  }
  .bar_middle{
    top: 11px;
  }
  .bar_bottom{
    bottom: 0;
  }

    /* ハンバーガーボタンをクリックしたときのボタンの見た目 */
  .burger-btn.cross .bar_top{
    transform: rotate(45deg);
    top:11px;
    transition: .3s;
  }
  .burger-btn.cross .bar_middle{
    opacity: 0;
    transition: .3s;
  }
  .burger-btn.cross .bar_bottom{
    transform: rotate(-45deg);
    bottom: 11px;
    transition: .3s;
  }

  nav{
    margin-top: 100px;
    margin-left: 10px;
  }
  .sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    padding: 2rem 1rem;
    background: rgb(20, 30, 25);
}
}
    </style>

</head>
<body  style="background-image: url('{{ asset('images/main.png') }}');">



<!-- ===== Sidebar ===== -->
<aside class="sidebar fs-3 fw-bold">
    <div class="fs-2 text-white title">
        <a href="#hero" class="text-decoration-none ms-4 mt-2">
            <img src='{{ asset ("images/plum_logo_p2.png")}}' alt="" class="img-fluid w-75">
        </a>
    </div>

    <nav class="fw-bold sidemenu">
        <a href="#about" class="plum">ABOUT ME</a>
        <a href="#works" class="plum">WORKS</a>
        <!-- <a href="#" class="plum">
            BLOG
            <p class="fs-6 m-0 p-0">
                coming soon...
            </p>
        </a> -->
        <a href="#contact" class="plum">CONTACT</a>
    </nav>

</aside>

<!-- ハンバーガーボタン -->
<div class="burger-btn ">
    <span class="bar bar_top"></span>
    <span class="bar bar_middle"></span>
    <span class="bar bar_bottom"></span>
</div>
<!-- //ハンバーガーボタン -->



<!-- ===== Main ===== -->
<main class="main-content" >

    <!-- HERO -->
    <section id="hero" class="main-section snap text-white ">
        <div class="text-hero p-5">
            <p class="">声はあるのに、届いていない。<br>価値はあるのに、知られていない。<br>そんな活動を、Webサイトから世界へつなぎたい。</p>
            <h1 class="fw-light">PLUM PROJECT</h1>
            <h3 class="fw-light">Website Production</h3>
        </div>
    </section>


    <!-- ABOUT -->
    <section id="about" class="snap-section snap overflow-auto">
        <div class="section-box">
            <h1 class="section-title plum2 text-center">ABOUT ME</h1>
            <div class="my-icon mx-auto mb-4">
                <img src={{ asset ("images/plum_icon_maki.png") }} alt="" class="img-fluid rounded-pill ">
                <h5 class="name plum2">RIHO</h5>
            </div>
            <p>生き物と旅が好きな <span class="fw-bold">Web クリエイター</span>。<br>世の中には、ネットの世界に出てこない情報がたくさんあります。それを世に出すお手伝いをします。</p>
            <ul>
                <li>Webサイト制作（企画〜デザイン〜コーディング）</li>
                <li>ロゴやイメージ画像の作成</li>
                <li>運用サポート</li>
            </ul>

            <div class="text-end">
                <h4 class="text-end text-secondary d-inline">More</h4>
                <p class="text-secondary d-inline">(Coming soon...)</p>
            </div>


        </div>
    </section>

    <!-- WORKS -->
    <section id="works" class="snap-section snap ">
        <div class="section-box text-center">
            <h1 class="section-title plum2 ">WORKS</h1>


            <div class="mx-auto works-section-box overflow-auto">
                <div class="row w-100 align-items-center ">

                    @foreach($all_posts as $post)
                      <div class="col-lg-4 mb-2">
                        <div class="card border-0 ">
                            <img class="card-img-top img-fluid works-img" src="{{$post->image}}" alt="">
                            <div class="card-body m-1 p-0">
                                <small class="badge text-muted mt-0 text-center">{{$post->category->name}}</small>
                                <p class="text-muted m-0">{{$post->name}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
                <div class="mt-4">
                    Webサイト制作 / ロゴ制作 / バナー制作<br>デザイン〜実装だけでなく、企画から運用までサポートします。
                </div>

            <div class="text-end m-0">
                <a href="{{route('post.show')}}" class="text-decoration-none">
                    <h4 class="text-end d-inline plum">More</h4>
                    {{-- <p class="text-secondary d-inline">(Coming soon...)</p> --}}
                </a>
            </div>
        </div>
    </section>


    <!-- CONTACT -->
    <section id="contact" class="snap-section snap">
        <div class="section-box text-center">
            <h1 class="section-title plum2 ">CONTACT</h1>
            <p class="text-center">
                <a href="https://www.instagram.com/riho.plum_kobo/" class="text-decoration-none text-dark"><i class="fa-brands fa-instagram fs-1"></i></a>

                <a href="mailto:riho.ham.plum@gmail.com" class="text-decoration-none text-dark"><i class="fa-regular fa-envelope fs-1"></i></a>

            </p>
            <p>ご依頼・ご相談はお気軽にご連絡ください。</p>

        </div>
    </section>

</main>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(function () {
  $('.burger-btn').on('click', function () {
    $(this).toggleClass('cross');
    $('.sidebar').fadeToggle(300);
    $('body').toggleClass('noscroll');
  });

  $(document).on('click', '.sidebar a', function () {
    if (window.matchMedia('(max-width: 768px)').matches) {
      $('.burger-btn').removeClass('cross');
      $('.sidebar').fadeOut(300);
      $('body').removeClass('noscroll');
    }
  });

  $(window).on('resize', function () {
    if (window.matchMedia('(min-width: 769px)').matches) {
      $('.sidebar').show().removeAttr('style');
      $('.burger-btn').removeClass('cross');
      $('body').removeClass('noscroll');
    }
  });
});


</script>

</body>
</html>
