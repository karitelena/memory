@extends('template.template')

@section('title', 'Photos')
@section('content')

<!-- modal -->
<div class="modal">
    <div class="modal_content">
        <img src="{{ asset('/img/aniverfelipe.JPG') }}" id="modal_img">
    </div>
    <span id="bt_close">&times;</span>
</div>
    <!-- galeria -->
<div class="gallery">
    <div class="rowGallery">
        <div class="card_img">
            <img src="{{ asset('/img/aniverfelipe.JPG') }}" class="small_img">
        </div>
        <div class="card_img">
            <img src="{{ asset('/img/cutura.JPG') }}" class="small_img">
        </div>
        <div class="card_img">
            <img src="{{ asset('/img/meuquarto.JPG') }}" class="small_img">
        </div>
    </div>
    <div class="rowGallery">
        <div class="card_img">
            <img src="{{ asset('/img/feira.JPG') }}" class="small_img">
        </div>
        <div class="card_img">
            <img src="{{ asset('/img/quartolaura.JPG') }}" class="small_img">
        </div>
        <div class="card_img">
            <img src="{{ asset('/img/tilapia.JPG') }}" class="small_img">
        </div>
    </div>        
</div>
<script src="{{ asset('js/galeria.js') }}"></script>
@endsection
