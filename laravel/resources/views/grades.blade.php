@extends('layouts.app')

@section('content')
    <style>
        .grades-container {
            padding-top: 40px;
            padding-bottom: 80px;
        }
        .term-title {
            color: var(--royal-blue);
            margin-top: 40px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        /* Material 3 Table Styling */
        .grades-table {
            width: 100%;
            border-collapse: collapse;
            background: var(--bg-card);
            border-radius: 15px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        .grades-table th {
            background: rgba(59, 130, 246, 0.1);
            color: var(--royal-blue);
            text-align: left;
            padding: 18px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }
        .grades-table td {
            padding: 15px 18px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
            color: var(--text-dim);
        }
        .grades-table tr:last-child td {
            border-bottom: none;
        }
        .grades-table tr:hover td {
            color: var(--text-white);
            background: rgba(255, 255, 255, 0.02);
        }
        .grade-badge {
            background: rgba(59, 130, 246, 0.2);
            color: var(--royal-blue);
            padding: 4px 12px;
            border-radius: 50px;
            font-weight: 700;
            font-family: monospace;
        }
    </style>

    <div class="container grades-container">
        <h4 style="color: var(--royal-blue); letter-spacing: 2px;">ACADEMIC PERFORMANCE</h4>
        <h2 style="font-size: 2.5rem; margin-bottom: 10px;">MY <span>GRADES</span></h2>
        <p style="color: var(--text-dim); margin-bottom: 30px;">Computer Programming Major @ TUP Taguig</p>

        <!-- First Term -->
        <h3 class="term-title">📘 First Term Subjects</h3>
        <table class="grades-table">
            <thead>
            <tr>
                <th>Subject Code</th>
                <th>Grade</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>CHEMB-LAB-T</td><td><span class="grade-badge">2.25</span></td></tr>
            <tr><td>CHEMB-LEC-T</td><td><span class="grade-badge">2.25</span></td></tr>
            <tr><td>DRAW1-T</td><td><span class="grade-badge">1.75</span></td></tr>
            <tr><td>GEC1-T</td><td><span class="grade-badge">2.00</span></td></tr>
            <tr><td>GEC5-T</td><td><span class="grade-badge">2.25</span></td></tr>
            <tr><td>GEC8-T</td><td><span class="grade-badge">1.75</span></td></tr>
            <tr><td>ITCC110-T</td><td><span class="grade-badge">2.25</span></td></tr>
            <tr><td>MATHF-T</td><td><span class="grade-badge">2.25</span></td></tr>
            <tr><td>PATHFIT1-T</td><td><span class="grade-badge">1.25</span></td></tr>
            <tr><td>NSTP1-LTS-T</td><td><span class="grade-badge">1.50</span></td></tr>
            </tbody>
        </table>

        <!-- Second Term -->
        <h3 class="term-title">📗 Second Term Subjects</h3>
        <table class="grades-table">
            <thead>
            <tr>
                <th>Subject Code</th>
                <th>Grade</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>GEC3-T</td><td><span class="grade-badge">2.00</span></td></tr>
            <tr><td>GEE11A-T</td><td><span class="grade-badge">2.25</span></td></tr>
            <tr><td>ITCC111-LAB-T</td><td><span class="grade-badge">2.25</span></td></tr>
            <tr><td>ITCC111-LEC-T</td><td><span class="grade-badge">2.25</span></td></tr>
            <tr><td>TLE1-T</td><td><span class="grade-badge">2.00</span></td></tr>
            <tr><td>PHYSB-LEC-T</td><td><span class="grade-badge">2.25</span></td></tr>
            <tr><td>PHYSB-LAB-T</td><td><span class="grade-badge">1.75</span></td></tr>
            <tr><td>PATHFIT2-T</td><td><span class="grade-badge">1.25</span></td></tr>
            <tr><td>NSTP2-LTS-T</td><td><span class="grade-badge">1.50</span></td></tr>
            </tbody>
        </table>
    </div>
@endsection
