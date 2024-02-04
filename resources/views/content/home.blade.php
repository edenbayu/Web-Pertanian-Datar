@extends('webtanidatar.masterhome')

@section('content')
<body>
    <div class="container">
        <header>
            <nav class="header__nav w-120">
                <div class="header__logo">
                    <img src="img/Logo.png" alt="Logo">
                </div>
                <div class="header__nav__content">
                    <div class="nav-close-icon"></div>
                    <ul class="header__menu">
                        <li class="menu__item">
                            <a href="/home" class="menu__link active">Beranda</a>
                        </li>
                        <li class="menu__item">
                            <a href="/varietas" class="menu__link">Varietas</a>
                        </li>
                        <li class="menu__item">
                            <a href="/community" class="menu__link">Diskusi</a>
                        </li>
                        <li class="menu__item">
                            <a href="/articles" class="menu__link">Blog</a>
                        </li>
                        <li class="menu__item">
                            <a href="/faq" class="menu__link">FAQ</a>
                        </li>
                    </ul>
                </div>

                <div class="hamburger-menu-wrap">
                    <div class="hamburger-menu">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </nav>
        </header>

        <section class="hero w-120">
            <div class="hero__content">
                <div class="hero__text">
                    <h1 class="hero__title">Petani Datar Berkolaborasi
                        Sebarkan Inspirasi</h1>
                    <p class="hero__description">
                        TaniDatar menyediakan layanan untuk dapat berdikusi seputar permasalahan tani, informasi lengkap seputar varietas tanaman padi, serta artikel seputar tips pertanian.
                    </p>
                    <a href="/varietas" class="btn btn__hero">Eksplor Tanaman Padi</a>
                </div>
                <div class="hero__img">
                    <img src="img/hero.png" alt="">
                </div>
            </div>
        </section> 

        <section class="opportunities">
            <div class="opportunities__img">
                <img src="img/leaf.png" alt="">
            </div>
            <div class="opportunities__content w-105">
                <div class="opportunities__head">
                    <h2 class="opportunities__title">Fitur Unggulan Kami</h2>
                    <p class="opportunities__description">Layanan Lengkap yang dapat membantu Anda menyelesaikan permasalahan tanimu</p>
                </div>
                <div class="opportunities__body">
                    <div class="opportunity">
                        <a href="community">
                            <img src="img/opportunites/opportunity-1.svg" alt="Icon" class="opportunity__icon">
                            <h4 class="opportunity__title">Forum Diskusi Tani</h4>
                            <p class="opportunity__description">Bagikan permasalahan pertanianmu dan bagikan solusi terbaikmu!

                            </p>
                        </a>
                    </div>

                    <div class="opportunity active">
                        <a href="articles">
                            <img src="img/opportunites/opportunity-2.svg" alt="Icon" class="opportunity__icon">
                            <h4 class="opportunity__title">Artikel Pertanian</h4>
                            <p class="opportunity__description">
                            Tingkatkan literasi dan pemahaman  pertanianmu melalui artikel pertanian!
                            </p>
                        </a>
                    </div>
                    <div class="opportunity">
                        <a href="varietas">
                            <img src="img/opportunites/opportunity-3.svg" alt="Icon" class="opportunity__icon">
                            <h4 class="opportunity__title">Database Varietas Padi
                            </h4>
                            <p class="opportunity__description">
                                Temukan informasi lengkap seputar keunggulan serta kelemahan varietas padimu!
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="invest  w-105">
            <div class="invest__content">
                <div class="invest__head">
                    <h2 class="invest__title">Sekilas Artikel Pertanian</h2>
                    <p class="invest__description">Autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                </div>
                <div class="invest__body">
                    <div class="invest__item">
                        <div class="invest__item__head">
                            <h5 class="invest__item__subtitle">Hama Penyakit</h5>
                        </div>
                        <div class="invest__item__body">
                            <h4 class="invest__item__title">Beberapa Hama & Penyakit Tanaman Padi serta Cara Mengatasinya</h4>
                            <p class="invest__item_description">
                                Artikel Pertanian Datar
                            </p>
                        </div>
                        <div class="invest__item__footer">
                        <a href="/articles/7" class="btn btn__invest" style="font-size:18px">Baca Artikel</a>
                        </div>
                    </div>
                    <div class="invest__item">
                        <div class="invest__item__head">
                            <h5 class="invest__item__subtitle">Pupuk</h5>
                        </div>
                        <div class="invest__item__body">
                            <h4 class="invest__item__title">Mengungkap Manfaat Masing-Masing Pupuk untuk Pertumbuhan Optimal Tanaman Padi
                            </h4>
                            <p class="invest__item_description">
                                Artikel Pertanian Datar
                            </p>
                        </div>
                        <div class="invest__item__footer">
                            <a href="/articles/8" class="btn btn__invest"style="font-size:18px">Baca Artikel</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <script src="assets/js/main.js" type="module"></script>
@endsection