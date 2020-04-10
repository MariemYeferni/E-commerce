@extends('layouts.master')
@section('content')
@foreach ($Products as $Products)
<div class="col-md-6">
  <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
      <strong class="d-inline-block mb-2 text-success">Catégorie 1</strong>
          <h5 class="mb-0">{{ $Products->title }}</h5>
          <p class="mb-auto text-muted">{{ $Products->subtitle }}</p>
          <strong class="mb-auto font-weight-normal text-secondary">{{ $Products->getPrice() }}</strong>
          <a href="{{ route('Products.show', $Products->slug) }}" class="stretched-link">Voir l'article</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{ $Products->image }}" alt="">
    </div>
  </div>
</div>
    
@endforeach
    
@endsection