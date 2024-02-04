@extends('webtanidatar.master')

@section('content')
<div id="wrapper" style="background-color: #f9f9f9;">
    <div id="page" style="background-color: #fff; padding: 20px; margin: 20px 0; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);" class="container">
        <div id="content">
            <h1 style="text-align:center;">{{ $article->title }}</h1>
            <p style="text-align:center; color: #888; font-size: 14px; margin-bottom: 10px;">Ditulis oleh {{ $article->user->username}}</p>
			<img src="data:image/png;base64,{{ base64_encode($article->image) }}" alt="Article Image" style="display: block; margin: 0 auto; max-width: 600px; height: auto; margin-bottom: 20px;" class="article-image">
            <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
            <div style="font-size: 16px; line-height: 1.6;">{!! nl2br(e($article->body)) !!}</div>
        </div>
    </div>
</div>
@endsection
