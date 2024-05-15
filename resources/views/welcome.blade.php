@extends('layouts.app')
@section('content')

    <div id="layers">
        <div id="layer_texts">
            <div class="first_text">
                <div class="line"></div>
                <h1 class="lyr_text">Բացահայտիր դպրոցը</h1>
                <div class="line"></div>
            </div>
            <div class="layer_text">Դպրոց&nbsp;<div id="new_pk">&nbsp;նոր սերնդի&nbsp;</div>&nbsp;համար</div>
        </div>
        <div id="layers_items">
            <div class="layer_item" id="tnt">
                {{--                <div class="layer_item_img"></div>--}}
                <a href="{{route('dimord')}}#his_title_text"><div class="layer_item_text" >Տնտեսագիտական</div></a>
            </div>
            <div class="layer_item" id="hum">
                {{--                <div class="layer_item_img"></div>--}}
                <a href="{{route('dimord')}}#his_title_text"><div class="layer_item_text">Հումանիտար</div></a>
            </div>
            <div class="layer_item" id="bng">
                {{--                <div class="layer_item_img"></div>--}}
                <a href="{{route('dimord')}}#his_title_text"><div class="layer_item_text">Բնագիտական</div></a>
            </div>
            <div class="layer_item" id="fzm">
                {{--                <div class="layer_item_img"></div>--}}
                <a href="{{route('dimord')}}#his_title_text"><div class="layer_item_text">Ֆիզմաթ</div></a>
            </div>
            <div class="layer_item" id="ai">
                {{--                <div class="layer_item_img"></div>--}}
                <a href="{{route('dimord')}}#his_title_text"><div class="layer_item_text">Արհեստական Բանականություն</div></a>
            </div>
        </div>
    </div>


    <div class="news">

        <div class="news_img">
            <div class="news_text">Նորություններ</div>
            <div class="rd"></div>
        </div>
        <div class="news_items">


{{--            <a class="prev" onclick="moveSlide(-1)">&#10094;</a>--}}
{{--            <a class="next" onclick="moveSlide(1)">&#10095;</a>--}}
        </div>

    </div>

<div class="_360_tour">
    <div class="first_text">
        <div class="line" id="line1"></div>
        <div class="_360_tour_text">Ծանոթանալ դպրոցին</div>
        <div class="line" id="line2"></div>
    </div>
    <div class="_360_cam">
        <iframe width="100%" height="500" frameborder="0" allow="xr-spatial-tracking; gyroscope; accelerometer" allowfullscreen scrolling="no" src="https://kuula.co/share/collection/7cdb8?logo=1&info=1&fs=1&vr=0&sd=1&thumbs=1"></iframe>
{{--        <script src="https://static.kuula.io/embed.js" data-kuula="https://kuula.co/share/collection/7cdb8?logo=1&info=1&fs=1&vr=0&thumbs=4&margin=8&inst=0" data-width="100%" data-height="500px"></script>--}}
    </div>
</div>
    <div class="contact_form">
        <div class="contact_form_text">
            <div class="line" id="line1"></div>
            <div class="his_title_text">Կապ մեզ հետ</div>
            <div class="line" id="line2"></div>
        </div>
        <div class="contact_form_inputs">
    <form action="{{ route('send.email') }}" method="post" id="contact_form">
        @csrf
        <div class="form-group">
            <label for="recipient">Ստացողի էլ.Հասցե</label>
            <input type="email" name="recipient" id="recipient" class="form-control" required placeholder="էլ.Հասցե">
        </div>
        <div class="form-group">
            <label for="subject">Նպատակ</label>
            <input type="text" name="subject" id="subject" class="form-control" required placeholder="Նպատակ">
        </div>
        <div class="form-group">
            <label for="message">Նամակ</label>
            <textarea name="message" id="message" class="form-control" rows="5" required placeholder="Նամակ..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="background:rgba(130, 130, 130, 1);color:#f7fafc;border: none;margin-top: 20px;margin-bottom: 20px">Ուղղարկել Նամակը</button>
    </form>
        </div>
    </div>



@endsection
