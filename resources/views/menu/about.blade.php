@extends('layouts.app')

@section("content")
    <div class="his">
        <div class="his_title">
            <div class="line" id="line1"></div>
            <div class="his_title_text">Մեր մասին</div>
            <div class="line" id="line2"></div>
        </div>
    </div>
    <div class="about">
        <div class="about_container">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d758.5310499816215!2d44.757218049113185!3d40.494636532424735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40403b254069aec9%3A0x7c2330abbd467e00!2sSecondary%20School%20N1!5e0!3m2!1sru!2sam!4v1714504125596!5m2!1sru!2sam" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="address-container">
                <h2>Մեր հասցեն</h2>
                <p>ք․Հրազդան<br>Երևանյան 1/3</p>
            </div>
        </div>

    </div>


@endsection
