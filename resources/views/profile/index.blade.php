@extends('layouts.front')

@section('content')
<div class="container">
    <hr color="#c0c0c0">
    <h1>{{ str_limit($headline->name, 70) }}です。{{ str_limit($headline->hobby, 70) }}が趣味の{{ str_limit($headline->gender, 70) }}で、{{ str_limit($headline->introduction, 70) }}です。よろしくお願いします。</h1>
</div>
@endsection