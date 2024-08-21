@extends('layouts.master')

@section('title', 'Double LOGIN | LEVEL UP')

@section('content')
    <section class="breadcrumb-section section-b-space" style="background-color: white; height: 100vh; display: flex; justify-content: center; align-items: center; overflow: hidden;">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h2 class="error-subtitle">OOPS! YOU ARE ALREADY LOGGED INTO ANOTHER ACCOUNT</h2>
                    <h1 class="error-title">ERROR: DUAL LOGIN</h1>
                    <p class="error-message">WE ARE SORRY, BUT YOU CANNOT LOGIN TO MULTIPLE ACCOUNTS AT THE SAME TIME. SWITCH TO YOUR ALREADY LOGGED IN ACCOUNT OR LOGOUT AND TRY TO LOG IN AGAIN</p>
                    <a href="{{ route('index') }}" class="btn btn-danger homepage-button">HOMEPAGE</a>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    body {
        overflow: hidden;
    }

    .circles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        overflow: hidden;
    }

    .circles li {
        position: absolute;
        list-style: none;
        display: block;
        width: 20px;
        height: 20px;
        background: rgba(255, 255, 255, 0.2);
        animation: move 25s linear infinite;
        bottom: -150px;
    }

    .circles li:nth-child(1) {
        left: 25%;
        width: 80px;
        height: 80px;
        animation-duration: 22s;
        animation-delay: 0s;
    }

    .circles li:nth-child(2) {
        left: 10%;
        width: 20px;
        height: 20px;
        animation-duration: 12s;
        animation-delay: 2s;
    }

    .circles li:nth-child(3) {
        left: 70%;
        width: 20px;
        height: 20px;
        animation-duration: 10s;
        animation-delay: 4s;
    }

    .circles li:nth-child(4) {
        left: 40%;
        width: 60px;
        height: 60px;
        animation-duration: 18s;
        animation-delay: 0s;
    }

    .circles li:nth-child(5) {
        left: 65%;
        width: 20px;
        height: 20px;
        animation-duration: 15s;
        animation-delay: 0s;
    }

    .circles li:nth-child(6) {
        left: 75%;
        width: 110px;
        height: 110px;
        animation-duration: 25s;
        animation-delay: 3s;
    }

    .circles li:nth-child(7) {
        left: 35%;
        width: 150px;
        height: 150px;
        animation-duration: 45s;
        animation-delay: 7s;
    }

    .circles li:nth-child(8) {
        left: 50%;
        width: 25px;
        height: 25px;
        animation-duration: 35s;
        animation-delay: 5s;
    }

    .circles li:nth-child(9) {
        left: 20%;
        width: 15px;
        height: 15px;
        animation-duration: 40s;
        animation-delay: 6s;
    }

    .circles li:nth-child(10) {
        left: 85%;
        width: 150px;
        height: 150px;
        animation-duration: 11s;
        animation-delay: 0s;
    }

    @keyframes move {
        0% { transform: translateY(0) rotate(0deg); opacity: 1; border-radius: 0; }
        100% { transform: translateY(-1000px) rotate(720deg); opacity: 0; border-radius: 50%; }
    }

    .error-title {
        font-size: 8rem;
        font-weight: bold;
        margin: 0;
        color: #000;
    }

    .error-subtitle {
        font-size: 1.5rem;
        margin: 0.5rem 0;
        color: #000;
        letter-spacing: 0.1rem;
    }

    .error-message {
        font-size: 1rem;
        margin: 1rem 0;
        color: #000;
    }

    .homepage-button {
        display: inline-block;
        margin-top: 1rem;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        color: #fff;
        background-color: #ff0000;
        border: none;
        border-radius: 0.25rem;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .homepage-button:hover {
        background-color: #cc0000;
    }
</style>
