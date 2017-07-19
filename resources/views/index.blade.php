@extends('layouts.master')


@section('hero-section')

    @include('components.hero-image')

@endsection


@section('content')

    @include('pages.skills.index')

    @include('pages.projects.professional')

    @include('pages.projects.personal')

    @include('pages.contacts.modal')

@endsection