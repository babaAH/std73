@extends('layouts.admin')

@section('content')
    
<div class="container">
    @foreach ($articles as $article)
    <div class="card mb-3">
        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
        <div class="card-body">
          <h5 class="card-title">$article->title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        {{-- <img class="card-img-bottom" src="..." alt="Card image cap"> --}}
      </div>
    
    @endforeach
</div>
        <div class="card mb-3">
            {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            {{-- <img class="card-img-bottom" src="..." alt="Card image cap"> --}}
          </div>
        {{-- @foreach ($articles as $articles)
            
        @endforeach --}}
    </div>
@endsection