@extends('layouts.app')

@section('content')
    <style>
        .edu-container {
            padding: 60px 0;
            max-width: 800px; /* Constrains the width so it's not "too big" */
            margin: 0 auto;
        }
        .timeline {
            border-left: 2px solid var(--royal-blue);
            padding-left: 40px;
            position: relative;
        }
        .timeline-item {
            margin-bottom: 30px; /* Reduced from 40px */
            position: relative;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -47px;
            top: 8px;
            width: 12px;
            height: 12px;
            background: var(--royal-blue);
            border-radius: 50%;
            box-shadow: 0 0 10px var(--royal-blue);
        }
        .edu-card {
            background: var(--bg-card);
            padding: 25px 30px; /* Reduced padding for a tighter look */
            border-radius: 15px;
            border: 1px solid rgba(255,255,255,0.05);
            transition: 0.3s;
        }
        .edu-card:hover {
            border-color: rgba(59, 130, 246, 0.3);
            transform: translateX(5px);
        }
        .edu-year {
            color: var(--royal-blue);
            font-weight: 700;
            font-size: 0.9rem;
            display: block;
            margin-bottom: 5px;
        }
        .edu-card h3 {
            margin: 0;
            font-size: 1.4rem;
            color: var(--text-white);
        }
        .edu-card p {
            margin: 10px 0 0 0;
            color: var(--text-dim);
            font-size: 0.95rem;
        }
    </style>

    <div class="container edu-container">
        <h4 style="color: var(--royal-blue); letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">Journey</h4>
        <h2 style="font-size: 2.5rem; margin-bottom: 40px;">MY <span>EDUCATION</span></h2>

        <div class="timeline">
            <div class="timeline-item">
                <div class="edu-card">
                    <span class="edu-year">Current</span>
                    <h3>Technological University of the Philippines</h3>
                    <p>Bachelor of Technical Vocational Teacher Education (Computer Programming)</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="edu-card">
                    <span class="edu-year">2024</span>
                    <h3>MCA Montessori School</h3>
                    <p>Graduated with High Honor</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="edu-card">
                    <span class="edu-year">2022</span>
                    <h3>Kapt. Eddie Reyes Integrated School</h3>
                    <p>Junior High School - Graduated with Honor</p>
                </div>
            </div>
        </div>
    </div>
@endsection
