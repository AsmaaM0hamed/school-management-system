@extends('backend.layouts.master')


@section('title')
    dashboard
@endsection
@section('css')
@livewireStyles
@endsection
@section('content')
<livewire:counter />
@endsection

@section('js')
@livewireScripts
@endsection
