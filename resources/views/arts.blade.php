@extends('template.template')

@section('title', 'Documents')
@section('content')

<div class="documents">
    <div class="headerDocuments">
        Exploring @Dirtytomboy C:\Documents\Arts
    </div>
    <div class="rowDocuments">
        <div class="col col-10">
            <div class="icon">
                <a href="/arts">
                    <img src="{{ asset('/img/icons/New Folder.ico') }}" alt="">
                    <p> Arts </p>
                </a>
        
            </div>
        </div>
    </div>
    <div class="rowDocuments">
        <div class="col col-10">
            <div class="icon">
                <a href="">
                    <img src="{{ asset('/img/icons/New Folder.ico') }}" alt="">
                    <p> Refs </p>
                </a>
        
            </div>
        </div>
    </div>          
</div>
       
@endsection