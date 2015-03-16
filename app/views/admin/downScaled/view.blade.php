@extends('layouts.default')

@section('content')
<div class = "row">
    <div class = "col-md-4">
        <div class = "page-header" style = "margin-top:0px">
            <h3>{{$admin->name}} {{$admin->surname}}</h3>
        </div>
        <b>Förnamn</b>
        <br>
        {{$admin->name}}
        <br>
        <b>Efternamn</b>
        <br>
        {{$admin->surname}}
        <br>
        <b>Startår</b>
        <br>
        {{$admin->startYear}}
        <br>
        <b>Nuvarande företag</b>
        <br>
        {{$admin->company}}
        <br>
        <b>Telefonnummer</b>
        <br>
        {{$admin->tel}}
        <br>
        <b>Email</b>
        <br>
        {{ HTML::mailto($admin->email) }}
        <br>
    </div>

</div>
	
@stop