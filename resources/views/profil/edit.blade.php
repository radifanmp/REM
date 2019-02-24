@extends('layouts.main')
@section('content')
<div>
    <label for="">Nama Lengkap</label>
    <input type="text" value="{{ $data->nama }}" >
    <label for="">Username</label>
    <input type="text" value="{{ $data->user->username }}">
</div>
@endsection