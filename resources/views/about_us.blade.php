<!DOCTYPE html>
<html lang="en">


<!-- extendamo layout na svaku stranicu koju radimo.
 u ovdje između foldera nemamo /, već .
 upišemo ime filea, bez nastavka blade.php-->
@extends('layouts.index')

@push('styles')
<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
@endpush

<!-- prvi parametar se mora podudarati sa defincijom u layoutu -->
<!-- primjeti da NEJDE ; na kraju -->
@section('title', 'About Us')

@section('content')

<div class="top-right links">

    <!-- stranica će se otvoriti bez obzira dal ruta postoji ili ne -->                
    <a href="{{ url('/') }}">Home</a>
    <!-- stranica se neće ni otvoriti ako umjesto url napišemo route-->    
	<!-- zadaća dvostrukih vitičastih zagrada u bladeu je ista kao i echo u php-u -->
    <a href="{{ route('aboutUs') }}">About Us</a>
 
                    
</div>

<div class="content">
        <div class="title m-b-md">
            About Us
        </div>
</div>				
@endsection


