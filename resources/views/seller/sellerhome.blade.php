@extends('..layouts.app')

@section('content')
    <div id="seller-wrapper">
        <nav id="seller-sidebar" class="nav-special navbar navbar-expand d-flex flex-column align-item-start">
            @include('..layouts.ssb')
        </nav>
        <div id="seller-main-content">
            <h1>đây là nội dung chính</h1>
        </div>
    </div>
@endsection
