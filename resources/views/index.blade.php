<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLUM PJ</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <!-- bootstrap -->
    <!-- CDN CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="shortcut icon" href="{{ asset('images/plum_logo_p3.png') }}">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body  style="background-image: url('{{ asset('images/main.png') }}');">



<!-- ===== Sidebar ===== -->
<aside class="sidebar fs-3 fw-bold">
    <div class="fs-2 text-white title">
        <a href="#hero" class="text-decoration-none ms-4 mt-2">
            <img src={{ asset ("images/plum_logo_p2.png")}} alt="" class="img-fluid w-75">
        </a>
    </div>

    <nav class="fw-bold sidemenu">
        <a href="#about" class="plum kabla">ABOUT ME</a>
        <a href="#works" class="plum kabla">WORKS</a>
        <!-- <a href="#" class="plum kabla">
            BLOG
            <p class="fs-6 m-0 p-0">
                coming soon...
            </p>
        </a> -->
        <a href="#contact" class="plum kabla">CONTACT</a>
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
            <h1 class="fw-light kabla">PLUM PROJECT</h1>
            <h3 class="fw-light anony">Website Production</h3>
        </div>
    </section>


    <!-- ABOUT -->
    <section id="about" class="snap-section snap overflow-auto">
        <div class="section-box">
            <h1 class="section-title plum2 kabla text-center">ABOUT ME</h1>
            <div class="my-icon mx-auto mb-4">
                <img src={{ asset ("images/plum_icon_maki.png") }} alt="" class="img-fluid rounded-pill ">
                <h5 class="name plum2">RIHO</h5>
            </div>
            <p>生き物と旅が好きな <span class="fw-bold">Web クリエイター</span>。<br>世の中には、ネットの世界に出てこない情報がたくさんあります。それを世に出すお手伝いをします。</p>
            <ul>
                <li>Webサイト制作（デザイン〜コーディング）</li>
                <li>ロゴやイメージ画像の作成</li>
                <li>運用サポート</li>
            </ul>

            <div class="text-end">
                <h4 class="kabla text-end text-secondary d-inline">More</h4>
                <p class="text-secondary d-inline">(Coming soon...)</p>
            </div>


        </div>
    </section>

    <!-- WORKS -->
    <section id="works" class="snap-section snap ">
        <div class="section-box text-center">
            <h1 class="section-title plum2 kabla ">WORKS</h1>


            <div class="mx-auto works-section-box overflow-auto">
                <div class="row w-100 align-items-center ">

                    @foreach($all_posts as $post)
                      <div class="col-lg-4 mb-1">
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
            <h1 class="section-title plum2 kabla ">CONTACT</h1>
            <p class="text-center">
                <a href="https://www.instagram.com/riho.plum_kobo/" class="text-decoration-none text-dark"><i class="fa-brands fa-instagram fs-1"></i></a>

                <a href="mailto:riho.ham.plum@gmail.com" class="text-decoration-none text-dark"><i class="fa-regular fa-envelope fs-1"></i></a>

            </p>
            <p>ご依頼・ご相談はお気軽にご連絡ください。</p>

        </div>
    </section>

</main>

<!-- JS（必須） -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- //footer -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> <!--jQueryを読み込む-->
<script src="./js/script.js"></script> <!--jsファイルを読み込む-->

</body>
</html>
