@extends('layouts.app')

@section("content")
    <div class="his">
        <div class="his_title">
            <div class="line" id="line1"></div>
            <div class="his_title_text">Դպրոցի կազմ</div>
            <div class="line" id="line2"></div>
        </div>
    </div>
    <div id="teacherBlocksContainer" class="teacher-blocks-container"></div>
    <script src="{{asset('js/teachers.js')}}"></script>
@endsection
