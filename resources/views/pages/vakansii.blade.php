@extends('layouts.app')
@section('meta_title', 'Вакансии')
@section('meta_description', 'Вакансии')
@section('title', 'Вакансии'.' - '. $title_rand)
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="contacts-page">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1))}}
        <div class="content">
            <h1 itemprop="name" class="h3">Вакансии</h1>
            <p>
                Открытых вакансий пока что к сожалению нет...
            </p>
        </div>
        @include('includes.forms.form_1',['title'=>'Вакансии'.' - '. $title_rand,'custom_form_img'=>'vakansii'])
    </div>
@endsection
