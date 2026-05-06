@extends('layouts.app')

@section('content')
    <style>
        .projects-container {
            padding-top: 60px;
            padding-bottom: 100px;
        }
        .project-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }
        .project-card {
            background: var(--bg-card);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,0.05);
            position: relative; /* Necessary for overlay positioning */
            transition: transform 0.3s ease;
        }
        .project-card:hover {
            transform: translateY(-10px);
        }
        .card-image {
            height: 220px;
            background: #1a2235;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .card-image span {
            color: var(--royal-blue);
            font-size: 3rem;
            font-weight: 700;
        }
        .card-content {
            padding: 25px;
        }

        /* The Pop-up Overlay Logic */
        .overlay {
            position: absolute;
            bottom: -100%; /* Hidden by default */
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(15, 23, 42, 0.95); /* Matches card navy with transparency */
            backdrop-filter: blur(5px);
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 30px;
            box-sizing: border-box;
            transition: bottom 0.4s ease;
            z-index: 3;
        }
        .project-card:hover .overlay {
            bottom: 0; /* Pops up on hover */
        }
        .overlay h4 {
            color: var(--royal-blue);
            margin: 0 0 10px 0;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }
        .overlay ul {
            color: var(--text-white);
            font-size: 0.85rem;
            padding-left: 18px;
            margin: 0;
        }
        .overlay ul li { margin-bottom: 8px; }
    </style>

    <div class="container projects-container">
        <h4 style="color: var(--royal-blue); letter-spacing: 2px;">MY WORK</h4>
        <h2 style="font-size: 2.5rem; margin-bottom: 40px;">RECENT <span>PROJECTS</span></h2>

        <div class="project-grid">

            <!-- Project 1: TEST-Sync -->
            <div class="project-card">
                <div class="overlay">
                    <h4>TECH STACK</h4>
                    <ul>
                        <li>Laravel Framework</li>
                        <li>MySQL Database Admin</li>
                        <li>Predictive Analytics</li>
                        <li>UI/UX Material 3</li>
                    </ul>
                </div>
                <div class="card-image"><span>Sync</span></div>
                <div class="card-content">
                    <h3 style="margin: 0;">TEST-Sync</h3>
                    <p style="color: var(--text-dim); font-size: 0.9rem; margin: 15px 0;">Student Organization Management System.</p>
                    <a href="{{ route('testsync') }}" style="color: var(--royal-blue); text-decoration: none; font-weight: 600;">VIEW DETAILS →</a>
                </div>
            </div>

            <!-- Project 2: Huffman Coding -->
            <div class="project-card">
                <div class="overlay">
                    <h4>FEATURES</h4>
                    <ul>
                        <li>Java Implementation</li>
                        <li>Lossless Compression</li>
                        <li>Binary Tree Mapping</li>
                        <li>Frequency Analysis</li>
                    </ul>
                </div>
                <div class="card-image"><span>Huff</span></div>
                <div class="card-content">
                    <h3 style="margin: 0;">Huffman Coding</h3>
                    <p style="color: var(--text-dim); font-size: 0.9rem; margin: 15px 0;">Data compression algorithm implementation.</p>
                    <a href="#" style="color: var(--royal-blue); text-decoration: none; font-weight: 600;">LEARN MORE →</a>
                </div>
            </div>

            <!-- Project 3: YouTube Case Study -->
            <div class="project-card">
                <div class="overlay">
                    <h4>RESEARCH FOCUS</h4>
                    <ul>
                        <li>Piaget’s Theory</li>
                        <li>Concrete Operational Stage</li>
                        <li>9-Year-Old Subject</li>
                        <li>Ecological Systems Theory</li>
                    </ul>
                </div>
                <div class="card-image"><span>Study</span></div>
                <div class="card-content">
                    <h3 style="margin: 0;">YouTube Case Study</h3>
                    <p style="color: var(--text-dim); font-size: 0.9rem; margin: 15px 0;">Child cognitive development research.</p>
                    <a href="{{ route('journal') }}" style="color: var(--royal-blue); text-decoration: none; font-weight: 600;">READ PAPER →</a>
                </div>
            </div>

        </div>
    </div>
@endsection
