@extends('layouts.app')

@section('title')
single comic
    
@endsection

@section('main_content')
<div class="topContent">
    <div class="container">

        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
    </div>

</div>


<div class="middleContent">
    <div class="container">
        <div class="middleLeft">
            <h2>titolo</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis expedita tenetur nostrum autem quia est, magni facilis id fuga laudantium debitis eligendi ab. Consequuntur aspernatur nihil cum, hic pariatur laudantium.</p>

        </div>

        <div class="middleRight">
            <span>advertisement</span>
            <img src="{{asset('img/adv.jpg')}}" alt="">
        </div>



    </div>

</div>

<div class="bottomContent">
    <div class="container">

    </div>

</div>
@endsection