@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="_card">
                <div class="card_header">{{ __('Ստուգեք Ձեր էլփոստի հասցեն') }}</div>

                <div class="card_body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Ձեր էլփոստի հասցեին ուղարկվել է նոր հաստատման հղում:') }}
                        </div>
                    @endif

                    {{ __('Նախքան շարունակելը, ստուգեք ձեր էլ.Հասցեն') }}
                    {{ __('Եթե նամակը չեք ստացել') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="background:rgba(130, 130, 130, 1);color:#f7fafc;border: none">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
