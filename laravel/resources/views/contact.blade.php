@extends('layouts.app')

@section('content')
    <!-- Font Awesome for real logos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        .contact-section {
            padding: 80px 0 100px; /* Added more top padding */
            max-width: 1100px;
            margin: 0 auto;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 60px;
            margin-top: 50px;
            align-items: start; /* Ensures left and right columns start at the same top level */
        }

        /* Left Side Styling */
        .contact-info h2 { font-size: 2.5rem; margin-bottom: 40px; }
        .contact-info h3 { font-size: 1.2rem; margin-bottom: 20px; color: var(--text-white); }

        .info-item {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .icon-box {
            width: 50px; height: 50px;
            background: rgba(59, 130, 246, 0.1);
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            color: var(--royal-blue); font-size: 1.3rem;
        }

        .details p { margin: 0; font-size: 0.85rem; color: var(--text-dim); }
        .details span { font-weight: 600; font-size: 1.1rem; color: var(--text-white); }

        .social-links { display: flex; gap: 25px; margin-top: 40px; }
        .social-btn { font-size: 1.8rem; transition: 0.3s; color: var(--text-dim); }
        .fa-facebook:hover { color: #1877F2; transform: translateY(-3px); }
        .fa-instagram:hover { color: #E4405F; transform: translateY(-3px); }
        .fa-linkedin:hover { color: #0A66C2; transform: translateY(-3px); }

        /* Right Side Styling */
        .comment-card {
            background: var(--bg-card);
            padding: 35px;
            border-radius: 20px;
            border: 1px solid rgba(255,255,255,0.05);
            margin-bottom: 40px;
        }

        .comment-input {
            width: 100%;
            padding: 15px;
            background: rgba(0,0,0,0.2);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 12px;
            color: white;
            outline: none;
            margin-bottom: 20px;
            font-family: inherit;
        }

        .btn-comment {
            background: var(--royal-blue);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: 0.3s;
        }
        .btn-comment:hover { background: #2563eb; transform: scale(1.02); }

        /* Comments List */
        .comment-bubble {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.05);
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 20px;
        }
        .comment-bubble h5 { color: var(--royal-blue); margin: 0 0 5px 0; font-size: 1.1rem; }
        .comment-bubble small { color: var(--text-dim); display: block; margin-bottom: 12px; font-size: 0.8rem; }
    </style>

    <div class="container contact-section">
        <div class="contact-grid">
            <!-- Left Side: Information -->
            <div class="contact-info">
                <h4 style="color: var(--royal-blue); letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem; margin-bottom: 10px;">Contact</h4>
                <h2>LEAVE A <span>COMMENT</span></h2>

                <h3>Connect with me</h3>
                <div class="info-item">
                    <div class="icon-box"><i class="fa-solid fa-phone"></i></div>
                    <div class="details"><p>Phone</p><span>+63 995 286 7753</span></div>
                </div>

                <div class="social-links">
                    <a href="https://www.facebook.com/herlss" target="_blank" class="social-btn"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/vlshrly/" target="_blank" class="social-btn"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://linkedin.com/in/herley-jem-aviles" target="_blank" class="social-btn"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>

            <!-- Right Side: Interaction Area -->
            <div>
                <div class="comment-card">
                    <form id="commentForm">
                        <input type="text" id="userName" class="comment-input" placeholder="Your Name" required>
                        <textarea id="userMsg" rows="4" class="comment-input" placeholder="What's on your mind?" required></textarea>
                        <button type="submit" class="btn-comment">POST COMMENT <i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                </div>

                <div id="comments-display">
                    <h4 style="margin-bottom: 20px; font-size: 1.1rem; color: var(--text-white);">Recent Comments</h4>
                    <div id="commentsList">
                        <div class="comment-bubble">
                            <h5>System</h5>
                            <small>Just now</small>
                            <p>Welcome to my portfolio! Feel free to leave a message above.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('commentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('userName').value;
            const message = document.getElementById('userMsg').value;
            const date = new Date().toLocaleString();

            const commentDiv = document.createElement('div');
            commentDiv.classList.add('comment-bubble');
            commentDiv.innerHTML = `<h5>${name}</h5><small>${date}</small><p>${message}</p>`;

            const list = document.getElementById('commentsList');
            list.insertBefore(commentDiv, list.firstChild);
            this.reset();
        });
    </script>
@endsection
