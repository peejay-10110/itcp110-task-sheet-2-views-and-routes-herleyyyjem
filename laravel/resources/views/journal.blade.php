@extends('layouts.app')

@section('content')
    <style>
        .journal-container {
            padding-top: 60px;
            padding-bottom: 100px;
            max-width: 800px;
            margin: 0 auto;
        }
        .journal-card {
            background: var(--bg-card);
            padding: 40px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            line-height: 1.8;
            color: var(--text-dim);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        .journal-card p {
            margin-bottom: 20px;
            font-size: 1.05rem;
        }
        .future-self {
            margin-top: 50px;
            padding: 30px;
            background: rgba(59, 130, 246, 0.05);
            border-left: 4px solid var(--royal-blue);
            border-radius: 0 15px 15px 0;
        }
        .future-self h3 {
            color: var(--royal-blue);
            margin-top: 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .future-self p {
            font-style: italic;
            margin-bottom: 10px;
            color: var(--text-white);
        }
        .highlight {
            color: var(--royal-blue);
            font-weight: 600;
        }
    </style>

    <div class="container journal-container">
        <h4 style="color: var(--royal-blue); letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">Reflection</h4>
        <h2 style="font-size: 2.5rem; margin-bottom: 40px;">DEVELOPMENT <span>JOURNAL</span></h2>

        <div class="journal-card">
            <p>My first year at the <span class="highlight">Technological University of the Philippines (TUP)</span> as a BTVTEICT-CP student was a mix of excitement, challenges, and learning.</p>

            <p>At first, I felt nervous because everything was new – classmates, environment, and subjects. But as time went on, I adjusted and started to enjoy my classes. I met a lot of new friends who helped make my college life more fun.</p>

            <p>One of the things I liked the most was learning about <span class="highlight">computer programming</span>. Even though some topics were hard, I felt happy every time I understood a concept or finished a project. The instructors were also helpful and encouraged us to keep trying even if we made mistakes.</p>

            <p>There were times when I struggled with deadlines and balancing different subjects, but I learned to manage my time and ask for help when needed.</p>

            <p>Overall, my first year was a great experience. It taught me not only about programming and teaching, but also about patience, teamwork, and hard work. I’m excited to learn more and grow in the next years.</p>

            <!-- A Note to My Future Self -->
            <div class="future-self">
                <h3>🌟 A Note to My Future Self</h3>
                <p>Dear future me,</p>
                <p>If you're reading this, I hope you've stayed true to who you are. I hope you've helped your family, grown mentally strong, and remained passionate about teaching and programming. No matter how far you've gone, don’t forget where it started: late nights, hard work, small wins, and music to keep you sane.</p>
                <p style="font-weight: 700; color: var(--royal-blue); margin-top: 15px;">Keep going. You’ve got this.</p>
            </div>
        </div>
    </div>
@endsection
