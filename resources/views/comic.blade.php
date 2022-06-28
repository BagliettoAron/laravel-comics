@extends('layouts.app')

@section('title')
single comic
    
@endsection

@section('main_content')
<div class="topContent">
    <div class="container">

        <img src="{{$comic['thumb']}}" alt="">
    </div>

</div>


<div class="middleContent">
    <div class="container">
        <div class="middleLeft">
            <h2>{{$comic['series']}}</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis expedita tenetur nostrum autem quia est, magni facilis id fuga laudantium debitis eligendi ab. Consequuntur aspernatur nihil cum, hic pariatur laudantium.</p>

        </div>

        <div class="middleRight">
            <span>advertisement</span>
            <img src="{{asset('img/adv.jpg')}}" alt="">
        </div>



    </div>

</div>


@endsection