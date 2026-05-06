@extends('layouts.app')

@section('content')
    <style>
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 85vh;
        }
        .hero-text h3 { color: var(--royal-blue); font-weight: 400; margin-bottom: 5px; }
        .hero-text h1 { font-size: 4rem; line-height: 1.1; margin: 0; font-weight: 700; }
        .hero-text h1 span { color: var(--royal-blue); }
        .hero-text p { color: var(--text-dim); margin: 25px 0; max-width: 450px; }

        .hero-img {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-img img {
            width: 600px;
            height: 600px;
            object-fit: cover;
            border-radius: 50%;
            filter: drop-shadow(0 0 50px rgba(59, 130, 246, 0.4));
            position: relative;
            z-index: 2;
        }

        .glow {
            position: absolute;
            width: 650px;
            height: 650px;
            border: 2px solid rgba(59, 130, 246, 0.2);
            border-radius: 50%;
            z-index: 1;
        }

        .btn-main {
            background: var(--royal-blue);
            color: white;
            padding: 15px 35px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
        }
    </style>

    <div class="container hero">
        <div class="hero-text">
            <h3>HERLEY JEM AVILES</h3>
            <h1>HOLA! I'M HERLEY<br><span>I'M A DEVELOPER |</span></h1>
            <p>Computer Programming student at TUP Taguig specializing in Full-Stack Development and Database Administration.</p>
            <a href="{{ route('journal') }}" class="btn-main">JOURNAL→</a>
        </div>

        <div class="hero-img">
            <div class="glow"></div>
            <img src="{{ asset('img/profile_pic.jpg') }}" alt="Herley Jem Aviles">
        </div>
    </div>
@endsection
