@extends('main')
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('.')}}">{{ __('home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Post')}}</li>
            <li class="breadcrumb-item "><a href="{{ url('post/add')}}">{{ __('add') }}</a></li>
        </ol>
    </nav>
@endsection
@section('content')
    @livewire('post.post-list')
@endsection
