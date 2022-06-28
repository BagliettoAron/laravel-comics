@extends('layouts.app')

@section('title')
title test
    
@endsection

@section('main_content')
    <div class="main">
        <div class="container">
            
            @foreach ($comics as $comic)
                
            <div class="card">
                <div class="cardImage">
                    <img src="{{$comic['thumb']}}" alt="">

                </div>

                <div class="cardTitle">
                    <a href="{{route('comic')}}">
                        <span>{{$comic['series']}}</span>

                    </a>
                </div>
            </div>
            @endforeach
    
              

            
        </div>
    </div>
@endsection