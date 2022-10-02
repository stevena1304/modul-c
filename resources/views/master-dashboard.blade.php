@extends('master.admin')
@section('title', 'Dashboard')
@section('content-title', 'Dashboard')
@section('content')

<h4>Selamat Datang <b>{{Auth::user()->username}}</b></h4>

@endsection