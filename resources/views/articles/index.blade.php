@extends ('webtanidatar.master')

@section ('content')
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>Selamat Datang di Artikel TaniDatar</h2>
				<span class="byline">KKN TIM I UNDIP 2023/2024 - 3 Februari 2024</span> </div>
			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
			<p>Dalam halaman ini, kami berkomitmen untuk menyediakan berbagai tips pertanian yang bermanfaat bagi para petani dan pecinta pertanian. Dengan pertumbuhan industri pertanian yang terus berkembang, kami ingin berbagi pengetahuan dan informasi praktis yang dapat membantu meningkatkan hasil pertanian.  </p>
			<p>Artikel-artikel kami mencakup berbagai aspek, mulai dari pemilihan bibit yang tepat hingga teknik pemeliharaan tanaman yang efektif. Kami juga akan membahas faktor-faktor lingkungan, pengelolaan tanah, dan inovasi teknologi terkini yang dapat diimplementasikan dalam kegiatan pertanian. Tujuan kami adalah memberikan panduan yang komprehensif dan inspiratif, memungkinkan para pembaca untuk mengoptimalkan potensi lahan mereka dan mencapai kesuksesan dalam dunia pertanian.</p>
			<p>Selamat membaca artikel-artikel kami dan semoga informasi yang kami sampaikan dapat memberikan inspirasi serta memberikan kontribusi positif bagi kemajuan sektor pertanian di Indonesia dan dunia. Bersama-sama, mari kita dorong keberlanjutan dan kesuksesan dalam dunia pertanian.</p>
		</div>
		<div id="sidebar">
			<div class="title" style="text-align:center;">
				<h2 style="font-family:'Poppins';font-size:24px;">Artikel Pertanian</h2>
				<span class="byline">Silahkan pilih artikel yang dapat membantu aktivitas pertanianmu!</span> </div>
			<div class="news-list">
				@foreach($articles as $article)
					<div class="news-card">
						<a href="/articles/{{ $article->id }}">
							<img src="data:image/png;base64,{{ base64_encode($article->image) }}" alt="News Image">
						</a>
						<div class="news-details">
							<h2>{{ $article->title }}</h2>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<div style="display: flex; justify-content: center; margin-top: 20px;">
        {{ $articles->links('pagination::bootstrap-4') }}
    </div>
@endsection