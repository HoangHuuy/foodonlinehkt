@extends('..layouts.app')

@section('content')
    <div class="seller-title">
        @if(session()->has('success'))
            <div class="alert add-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
    <h1 class="text-primary">Chào mừng đến với hệ thống bán hàng của foodTHK</h1>
@endsection
