@extends('layouts.app')
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="contacts-page" itemscope="" itemtype="https://schema.org/Product">
        <div class="mt-100">
            <div class="d-flex justify-content-around"><h1 id="err">404</h1></div>
            <div class="d-flex justify-content-around"> <p class="fs-20">Страница не найдена</p></div>
            <div class="d-flex justify-content-around">
                <a href="{{url('/')}}">
                    <button class="btn btn-outline-dark">Перейти на главную</button>
                </a>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <style>
        #err {
            font-size: 80px;
        }
    </style>
@endpush
