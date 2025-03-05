@extends('layouts.app')

{{-- @section('title', 'Lista Fumetti') --}}

@section('content')
<div class="jumbotron"></div>
<div class="bg-main">
    <div class="page_tag moved">CURRENT SERIES</div>
    <div class="container p-5">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="comic col-12 col-md-6 col-lg-4 col-xl-2 d-flex flex-column align-items-center">
                    <div class="w-100 ratio1_1 comic_bg" style="background-image: url('{{ $comic['thumb'] }}');"></div>
                    <p class="text-light px-1 fw-bold">{{ $comic['title'] }}</p>
                    {{-- <p>{{ $comic['description'] }}</p> --}}
                </div>
            @endforeach
            <div class="page_tag mx-auto">LOAD MORE</div>
        </div>
    </div>
</div>
<div class="icons_section">
    <div class="container d-flex justify-content-between px-2 py-5">
        <div class="commercials d-flex align-items-center mx-2">
            <div class="commercial_icon">
                <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="Digital Comics" width="50px">
            </div>
            <div class="mx-2 commercial_desc d-none d-lg-block">DIGITAL COMICS</div>
        </div>
        <div class="commercials d-flex align-items-center mx-2">
            <div class="commercial_icon">
                <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="Digital Comics" width="50px">
            </div>
            <div class="mx-2 commercial_desc d-none d-lg-block">DC MERCHANDISE</div>
        </div>
        <div class="commercials d-flex align-items-center mx-2">
            <div class="commercial_icon">
                <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="Digital Comics" width="50px">
            </div>
            <div class="mx-2 commercial_desc d-none d-lg-block">SUBSCRIPTIONS</div>
        </div>
        <div class="commercials d-flex align-items-center mx-2">
            <div class="commercial_icon">
                <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="Digital Comics" width="50px">
            </div>
            <div class="mx-2 commercial_desc d-none d-lg-block">SHOP LOCATOR</div>
        </div>
        <div class="commercials d-flex align-items-center mx-2">
            <div class="commercial_icon">
                <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="Digital Comics" width="50px">
            </div>
            <div class="mx-2 commercial_desc d-none d-lg-block">DC POWER VISA</div>
        </div>
    </div>
</div>
@endsection
