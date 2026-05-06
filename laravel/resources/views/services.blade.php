@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 80px; padding-bottom: 80px;">
        <h4 style="color: var(--royal-blue); margin-bottom: 10px;">SERVICES</h4>
        <h2 style="font-size: 2.5rem; margin-bottom: 40px;">DESIGN <span>SERVICES</span> I AM PROVIDING</h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
            <!-- Service 1 -->
            <div style="background: var(--bg-card); padding: 40px; border-radius: 15px; border: 1px solid rgba(255,255,255,0.05);">
                <div style="color: var(--royal-blue); font-size: 2rem; margin-bottom: 20px;">01</div>
                <h3>UI/UX Design</h3>
                <p style="color: var(--text-dim);">Creating modern interfaces using Material 3 principles and user-centric flows.</p>
            </div>

            <!-- Service 2 -->
            <div style="background: var(--bg-card); padding: 40px; border-radius: 15px; border: 1px solid rgba(255,255,255,0.05);">
                <div style="color: var(--royal-blue); font-size: 2rem; margin-bottom: 20px;">02</div>
                <h3>Database Admin</h3>
                <p style="color: var(--text-dim);">Structuring robust MySQL environments and predictive data analytics.</p>
            </div>

            <!-- Service 3 -->
            <div style="background: var(--bg-card); padding: 40px; border-radius: 15px; border: 1px solid rgba(255,255,255,0.05);">
                <div style="color: var(--royal-blue); font-size: 2rem; margin-bottom: 20px;">03</div>
                <h3>Full-Stack Dev</h3>
                <p style="color: var(--text-dim);">Building scalable web applications using Laravel, Python, and Java[cite: 1].</p>
            </div>
        </div>
    </div>
@endsection
