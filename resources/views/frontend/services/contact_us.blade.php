@extends('frontend.layouts.app')
@section('page_title', Lang::get('services.agency'))
@section('meta_keywords', Lang::get('services.agency'))
@section('meta_description',  Lang::get('services.agency'))
@section('container')

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <x-frontend.contactus />
    </div>
    <div class="col-md-3"></div>
</div>

@endsection