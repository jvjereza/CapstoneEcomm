@extends('user_template.layouts.user_profile_template')
@section('profilecontent')
pending orders
@if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    
@endsection