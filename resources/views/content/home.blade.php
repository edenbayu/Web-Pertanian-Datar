@extends('webtanidatar.master')

@section('content')
<div class="jumbotron">
    <div style="width: 100%; height: 100%; background: white; justify-content: center; align-items: center; display: inline-flex">
        <div style="width: 1862px; height: 800px; position: relative; background: white; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <div style="width: 822px; height: 773px; position: relative">
                <div style="width: 900px; height: 800px; left: 0px; top: 0px; position: absolute; background: #F2F2F2"></div>
                <div style="left: 69px; top: 300px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex">
                    <div style="width: 512px; color: #333333; font-size: 24px; font-family: Nunito; font-weight: 400; line-height: 36px; word-wrap: break-word">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus imperdiet sed id elementum. Quam vel aliquam sit.</div>
                    <div style="padding-left: 56px; padding-right: 56px; padding-top: 24px; padding-bottom: 24px; background: #437223; border-radius: 40px; overflow: hidden; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                        <a href="/varietas" class="btn page-scroll">
                            <div style="color: white; font-size: 24px; font-family: Nunito; font-weight: 800; line-height: 18px; word-wrap: break-word">Eksplor Tanaman Padimu!</div>
                        </a>
                    </div>
                </div>
                <div style="width: 796px; left: 69px; top: 126px; position: absolute"><span style="color: #333333; font-size: 56px; font-family: Poppins; font-weight: 600; line-height: 72px; letter-spacing: 0.56px; word-wrap: break-word">Petani Datar </span><span style="color: #004D3D; font-size: 56px; font-family: Poppins; font-weight: 600; line-height: 72px; letter-spacing: 0.56px; word-wrap: break-word">Berkolaborasi<br/></span><span style="color: #333333; font-size: 56px; font-family: Poppins; font-weight: 600; line-height: 72px; letter-spacing: 0.56px; word-wrap: break-word">Sebarkan </span><span style="color: #004D3D; font-size: 56px; font-family: Poppins; font-style: italic; font-weight: 600; line-height: 72px; letter-spacing: 0.56px; word-wrap: break-word">Inspirasi</span></div>
            </div>
        </div>
    </div>
</div>



        <!-- article -->
        <div id="articles" class="container mt-5">
        <div class="card mb-4 w-100 box-shadow-card get-article-detail">
                <div class="row g-0">
                    <div class="col-md-4 card-img-wrap">
                        <img src="https://cdn.pixabay.com/photo/2019/06/06/08/00/hydroponics-4255403_960_720.jpg" alt="Langkah Awal Menanam Hidroponik" class="w-100 h-100"
                            style="object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4">
                            <a href="/blog" class="text-decoration-none text-dark">
                                <h6 class="card-title fw-bold box-tittle">Pertanian Hidroponik</h6>
                            </a>

                            <p class="card-text"><small class="text-muted">Tim I KKN Undip 2024 - 25 Januari 2024</small></p>
                            <p class="card-text desc">Dengan rentang waktu pengembangan aplikasi yang terbatas, tim Kami berhasil membangun sistem yang diharapkan walaupun masih jauh dari kata sempurna. Fitur-fitur mayor seperti autentikasi, membuat dan menjawab pertanyaan, memberi komentar pada peranyaan, serta menambah poin kredibilitas berhasil diimplementasikan dengan baik. Namun, fitur-fitur minor seperti membuat artikel belum berhasil diimplementasikan.</p>
                            <p class="card-text"><small class="text-muted">#kuatkanSektorPertanian</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  

        <div class="container see-article-container">
            <a href="/blog" class="text-decoration-none see-all-article">
                <p class="text-center text-dark see-all-article">Lihat semua artikel<i
                        class="bi bi-arrow-right-short arrow-right-icon" style="font-size: 1.6rem;"></i></p>
            </a>
        </div>

        <section class="invest  w-105">
            <div class="invest__content">
                <div class="invest__body">
                    <div class="invest__item">
                        <div class="invest__item__head">
                            <h5 class="invest__item__subtitle">VARIETAS PADI</h5>
                        </div>
                        <div class="invest__item__body">
                            <h4 class="invest__item__title"style="font-family:Poppins;">Informasi Varietas Padi</h4>
                            <p class="invest__item_description" style="font-family:Nunito">
                                Eksplorasi informasi terkait varietas padi, serta anjuran tanamnya
                            </p>
                        </div>
                        <div class="invest__item__footer">
                            <a href="/varietas" class="btn btn__invest">Lihat Informasi Padi</a>
                        </div>
                    </div>
                    <div class="invest__item">
                        <div class="invest__item__head">
                            <h5 class="invest__item__subtitle" >DISKUSI TANI</h5>
                        </div>
                        <div class="invest__item__body">
                            <h4 class="invest__item__title">Long terms investment
                            </h4>
                            <p class="invest__item_description">
                                Consider farms that have long term investment program.
                            </p>
                        </div>
                        <div class="invest__item__footer">
                            <a href="/community" class="btn btn__invest">Diskusi</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
@endsection




