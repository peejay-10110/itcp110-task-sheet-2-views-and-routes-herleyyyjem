@extends('layouts.app')

@section('content')
    <style>
        .about-container {
            padding: 80px 0 100px;
            max-width: 1100px;
            margin: 0 auto;
        }
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 60px;
            align-items: start;
        }

        /* Personal Info Card (Left) */
        .profile-card {
            background: var(--bg-card);
            border-radius: 20px;
            padding: 40px;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .info-label {
            color: var(--royal-blue);
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: block;
            margin-top: 25px;
        }
        .profile-card h3 { margin-top: 0; font-size: 1.8rem; }

        /* Personality Section (Right) */
        .personality-content h2 { font-size: 2.5rem; margin-bottom: 30px; }

        .color-swatch { display: flex; gap: 15px; margin: 15px 0; }
        .swatch {
            width: 35px; height: 35px; border-radius: 50%;
            border: 2px solid rgba(255,255,255,0.1);
            display: flex; align-items: center; justify-content: center;
        }

        .likes-tags { display: flex; gap: 12px; flex-wrap: wrap; margin-top: 15px; }
        .tag {
            background: rgba(59, 130, 246, 0.1);
            color: var(--royal-blue);
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .happiness-note {
            margin-top: 40px;
            padding: 30px;
            background: rgba(255,255,255,0.02);
            border-radius: 20px;
            border-left: 4px solid var(--royal-blue);
            position: relative;
        }
        .happiness-note i {
            position: absolute;
            top: -10px;
            left: 20px;
            background: var(--bg-deep);
            padding: 0 10px;
            color: var(--royal-blue);
        }
    </style>

    <div class="container about-container">
        <div class="about-grid">
            <!-- Left Side: Identity Remains -->
            <div class="profile-card">
                <h4 style="color: var(--royal-blue); letter-spacing: 2px; text-transform: uppercase; font-size: 0.7rem; margin-bottom: 10px;">The Developer</h4>
                <h3>Herley Jem Aviles</h3>

                <span class="info-label">Full Name</span>
                <p style="margin: 5px 0;">Herley Jem Cruz Aviles</p>

                <span class="info-label">Email</span>
                <p style="margin: 5px 0;">herleyjem.aviles@tup.edu.ph</p>

                <span class="info-label">Birthday</span>
                <p style="margin: 5px 0;">February 02, 2005 (21 Years Old)</p>

                <span class="info-label">Location</span>
                <p style="margin: 5px 0;">Taguig City, Philippines</p>

                <span class="info-label">Course</span>
                <p style="margin: 5px 0;">BTVTE-ICT-CP</p>
            </div>

            <!-- Right Side: New Personal Interests -->
            <div class="personality-content">
                <h4 style="color: var(--royal-blue); letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">About Me</h4>
                <h2>BEYOND THE <span>CODE</span></h2>

                <!-- Favorite Colors -->
                <span class="info-label">Favorite Palette</span>
                <div class="color-swatch">
                    <div class="swatch" style="background: #000000;" title="Black"></div>
                    <div class="swatch" style="background: #6b21a8;" title="Purple"></div>
                    <div class="swatch" style="background: #f5f5dc;" title="Beige"></div>
                </div>

                <!-- Things I Like -->
                <span class="info-label">Things I Love</span>
                <div class="likes-tags">
                    <span class="tag">🎮 Playing Games</span>
                    <span class="tag">🖋️ Calligraphy</span>
                    <span class="tag">💻 Programming</span>
                </div>

                <!-- Things that make me happy -->
                <div class="happiness-note">
                    <span class="info-label" style="margin-top: 0; margin-bottom: 15px;">What Makes Me Happy</span>
                    <p style="font-size: 1.1rem; line-height: 1.6; font-style: italic; color: var(--text-white); margin: 0;">
                        "Sitting in a windy place with the person I love and cared for."
                    </p>
                    <p style="margin-top: 15px; font-size: 0.9rem; color: var(--text-dim);">
                        I find that the best way to recharge is through quiet connection and the simple peace
                        of the outdoors.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
