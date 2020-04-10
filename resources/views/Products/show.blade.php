@extends('layouts.master')
@section('content')
<div class="col-md-12">
  <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
      <strong class="d-inline-block mb-2 text-success">Catégorie</strong>   
      <h5 class="mb-0">{{ $Products->title }}</h5>
      <hr>
      <p class="mb-auto text-muted">{{ $Products->description }}</p>
      <strong class="mb-auto font-weight-normal text-secondary">{{ $Products->getPrice() }}</strong>
      <form action="{{ route('Cart.store') }}" method="POST">
        @csrf
        <input type="hidden" name="Products_id" value="{{ $Products->id }}">
        <button OnClick="increment()" type="submit" class="btn btn-dark">Ajouter au panier</button>
        
      </form>
      
    </div>
    <div class="col-auto d-none d-lg-block">
      <img src="{{$Products->image}}"alt="">
    </div>
  </div>
</div>
    
@endsection