<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herley Jem | Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-deep: #050a18;
            --bg-card: #0f172a;
            --royal-blue: #3b82f6;
            --text-white: #ffffff;
            --text-dim: #94a3b8;
        }
        body { margin: 0; font-family: 'Poppins', sans-serif; background-color: var(--bg-deep); color: var(--text-white); }
        nav {
            display: flex; justify-content: space-between; align-items: center;
            padding: 20px 10%; background: rgba(5, 10, 24, 0.9);
            backdrop-filter: blur(10px); position: sticky; top: 0; z-index: 1000;
        }
        .logo { font-weight: 700; font-size: 1.5rem; }
        .logo span { color: var(--royal-blue); }
        .nav-links a { color: var(--text-white); text-decoration: none; margin-left: 20px; font-size: 0.85rem; transition: 0.3s; }
        .nav-links a:hover { color: var(--royal-blue); }
        .btn-talk { background: var(--royal-blue); color: white; padding: 10px 25px; border-radius: 50px; text-decoration: none; font-weight: 600; }
        .container { padding: 0 10%; }
    </style>
</head>
<body>
<nav>
    <div class="logo"><span>H</span>ERLEY</div>
    <div class="nav-links">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About Me</a>
        <a href="{{ route('education') }}">Education</a>
        <a href="{{ route('skills') }}">Skills</a>
        <a href="{{ route('projects') }}">Projects</a>
        <a href="{{ route('services') }}">Services</a>
        <a href="{{ route('contact') }}" class="btn-talk">Let's Talk</a>
    </div>
</nav>
@yield('content')
</body>
</html>
