@extends('layouts.app')

@section('content')
<div class="full-height">
    <center>
        <table border="0">
            <tr>
                <td width="80%">
                    <font class="edoc-logo">eDoc. </font>
                    <font class="edoc-logo-sub">| THE ECHANNELING PROJECT</font>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <p class="heading-text">Avoid Hassles & Delays.</p>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <p class="sub-text2">How is health today, Sounds like not good!<br>Don't worry. Find your doctor online Book as you wish with eDoc. <br>
                        We offer you a free doctor channeling service, Make your appointment now.</p>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <center>
                        <a href="{{ url('welcome') }}">
                            <input type="button" value="Make Appointment" class="login-btn btn-primary btn"
                                style="padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;">
                        </a>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                </td>
            </tr>
        </table>
        
    </center>
</div>
@endsection

@section('styles')
<style>
    table {
        animation: transitionIn-Y-bottom 0.5s;
    }
</style>
<link rel="stylesheet" href="{{ asset('css/animations.css') }}">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
