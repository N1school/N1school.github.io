@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="_card">
                    <div class="card_header">{{ __('Անձնական էջ') }}</div>

                    <div class="card_body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Դուք մուտք եք գործել') }}
                        <button id="chat_ai_btn" class="btn btn-primary" style="background:rgba(130, 130, 130, 1);color:#f7fafc;border: none;">ԱԲ Չատ</button>
                        <form action="" method="" style="display: none" id="chat_ai_form">
                            @csrf
                            <div id="chat-messages" style="height: 300px; overflow-y: auto;">

                            </div>
                            <div id="chat_ai_error"></div>
                            <div class="form-group" id="chat-input-container">
                                <label for="message">Հարց:</label>
                                <input type="text" class="form-control" id="chat_ai_message" name="message" placeholder="Մուտքագրեք ձեր հարցն այստեղ">
                                <button class="btn btn-primary" id="chat_ai_submit_btn" style="background:rgba(130, 130, 130, 1);color:#f7fafc;border: none;margin-top: 10px;">Send</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{asset('js/chat.js')}}"></script>
@endsection

