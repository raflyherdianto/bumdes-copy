@extends('layouts.app')

@section('title', 'E-Catalog')

@section('content')
<div class="container mt-3 mb-5">
    <div class="px-4 py-3 bg-yellow-opt w-100 d-flex justify-content-between search-bar mb-5">
        <div class="d-flex align-items-center  bg-white"
            style="border: 1px solid #ced4da; border-radius: 0.25rem; width: 40%;">
            <span class="px-2">
                <i class="bi bi-search"></i>
            </span>
            <input type="text" class="form-control border-0" placeholder="Cari yang anda butuhkan disini!">
        </div>
    </div>
    <div class="row">
        @foreach ($catalogItems as $item)
        <div class="col-lg-4 mb-5">
            <div class="card">
                <img src="{{ $item['image_url'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="card-title">{{ $item['name'] }}</h3>
                        <a href="/e-catalog" class=" bg-red-opt text-white btn beli px-4"
                            style="border-radius: 30px">Beli</a>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 style="font-weight: bold">Rp.{{ $item['price'] }}</h3>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="d-flex justify-content-center">
            {{ $catalogItems->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
