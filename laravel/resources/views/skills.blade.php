@extends('layouts.app')

@section('content')
    <style>
        .skills-section {
            padding: 60px 0 100px;
            max-width: 1100px; /* Constrains the entire section */
            margin: 0 auto;
        }

        .skills-header {
            margin-bottom: 40px;
            text-align: left;
        }

        .skills-header h2 {
            font-size: 2.2rem; /* Reduced from 2.5rem */
            margin-top: 10px;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Forces a cleaner 3-column layout */
            gap: 20px; /* Reduced gap */
        }

        .skill-category-card {
            background: var(--bg-card);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 15px; /* Slightly tighter corners */
            padding: 25px; /* Reduced from 35px */
            transition: 0.4s ease;
        }

        .skill-category-card:hover {
            border-color: var(--royal-blue);
            transform: translateY(-5px);
        }

        .skill-title {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        .skill-icon-circle {
            width: 40px;
            height: 40px;
            background: rgba(59, 130, 246, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--royal-blue);
            font-size: 1.2rem;
        }

        .skill-item { margin-bottom: 15px; }
        .skill-info { display: flex; justify-content: space-between; margin-bottom: 6px; font-size: 0.85rem; }
        .progress-bg { background: rgba(255,255,255,0.05); height: 5px; border-radius: 10px; overflow: hidden; }
        .progress-fill { background: var(--royal-blue); height: 100%; border-radius: 10px; }
    </style>

    <div class="container skills-section">
        <div class="skills-header">
            <h4 style="color: var(--royal-blue); letter-spacing: 2px; text-transform: uppercase; font-size: 0.75rem; margin:0;">Expertise</h4>
            <h2>MY <span>SKILLS</span></h2>
        </div>

        <div class="skills-grid">
            <!-- Programming Category -->
            <div class="skill-category-card">
                <div class="skill-title">
                    <div class="skill-icon-circle">💻</div>
                    <h3 style="margin:0; font-size: 1.1rem;">Core Programming</h3>
                </div>
                <div class="skill-item">
                    <div class="skill-info"><span>Python & Java</span><span>85%</span></div>
                    <div class="progress-bg"><div class="progress-fill" style="width: 85%;"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-info"><span>PHP & SQL</span><span>80%</span></div>
                    <div class="progress-bg"><div class="progress-fill" style="width: 80%;"></div></div>
                </div>
            </div>

            <!-- Design Category -->
            <div class="skill-category-card">
                <div class="skill-title">
                    <div class="skill-icon-circle">🎨</div>
                    <h3 style="margin:0; font-size: 1.1rem;">UI/UX & Design</h3>
                </div>
                <div class="skill-item">
                    <div class="skill-info"><span>Figma & Design</span><span>75%</span></div>
                    <div class="progress-bg"><div class="progress-fill" style="width: 75%;"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-info"><span>Database Admin</span><span>90%</span></div>
                    <div class="progress-bg"><div class="progress-fill" style="width: 90%;"></div></div>
                </div>
            </div>

            <!-- Tools Category -->
            <div class="skill-category-card">
                <div class="skill-title">
                    <div class="skill-icon-circle">⚙️</div>
                    <h3 style="margin:0; font-size: 1.1rem;">Software & Tools</h3>
                </div>
                <div class="skill-item">
                    <div class="skill-info"><span>MS Office</span><span>95%</span></div>
                    <div class="progress-bg"><div class="progress-fill" style="width: 95%;"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-info"><span>Laravel</span><span>70%</span></div>
                    <div class="progress-bg"><div class="progress-fill" style="width: 70%;"></div></div>
                </div>
            </div>
        </div>
    </div>
@endsection
