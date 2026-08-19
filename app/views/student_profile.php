<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-Slinger Student HQ - Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Rubik:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --web-red: #e0182d;
            --web-red-dark: #a10f1f;
            --web-blue: #0a2472;
            --web-blue-light: #1450c4;
            --ink: #0b0b0f;
            --paper: #eef1f8;
            --gold: #ffcc00;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Rubik', sans-serif;
            background-color: var(--paper);
            background-image:
                radial-gradient(circle, rgba(11,11,15,0.08) 1px, transparent 1.4px);
            background-size: 14px 14px;
            min-height: 100vh;
            color: var(--ink);
            position: relative;
            overflow-x: hidden;
        }

        /* SPIDER-WEB CORNER DECORATIONS */
        .web-corner {
            position: fixed;
            width: 260px;
            height: 260px;
            opacity: 0.16;
            pointer-events: none;
            z-index: 0;
        }
        .web-corner.top-left { top: -40px; left: -40px; }
        .web-corner.bottom-right {
            bottom: -40px;
            right: -40px;
            transform: rotate(180deg);
        }

        /* NAVIGATION */
        .navbar {
            width: 100%;
            background: var(--ink);
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 5px solid var(--web-red);
            position: relative;
            z-index: 2;
        }

        .logo {
            font-family: 'Bangers', cursive;
            font-size: 30px;
            letter-spacing: 1px;
            color: var(--web-red);
            text-shadow:
                2px 2px 0 var(--ink),
                -1px -1px 0 var(--web-blue-light);
        }

        .nav-links { display: flex; gap: 12px; }

        .nav-links a {
            text-decoration: none;
            padding: 10px 22px;
            border-radius: 4px;
            color: var(--paper);
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            background: var(--web-blue);
            border: 2px solid transparent;
            transition: 0.2s;
        }

        .nav-links a:hover {
            background: var(--web-blue-light);
            transform: translateY(-2px);
        }

        .nav-links .active {
            background: var(--web-red);
            border-color: var(--gold);
        }

        /* MAIN CONTAINER */
        .container {
            width: 88%;
            max-width: 1100px;
            margin: 50px auto 70px;
            position: relative;
            z-index: 1;
        }

        .label {
            color: var(--web-red);
            font-size: 14px;
            font-weight: 800;
            letter-spacing: 3px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .page-title {
            font-family: 'Bangers', cursive;
            font-size: 46px;
            letter-spacing: 1px;
            color: var(--web-blue);
            -webkit-text-stroke: 1.2px var(--ink);
            margin-bottom: 32px;
        }

        .privacy-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            margin-bottom: 28px;
            padding: 16px 20px;
            background: var(--ink);
            border: 3px solid var(--ink);
            border-radius: 6px;
            box-shadow: 6px 6px 0 var(--web-red);
        }

        .privacy-status {
            color: var(--paper);
            font-size: 14px;
            font-weight: 700;
        }

        .privacy-status strong { color: var(--gold); }

        .privacy-toggle {
            padding: 10px 16px;
            color: var(--ink);
            background: var(--gold);
            border: 2px solid var(--paper);
            border-radius: 4px;
            cursor: pointer;
            font: 800 13px 'Rubik', sans-serif;
            text-transform: uppercase;
        }

        .privacy-toggle:hover { background: white; }

        .private-value {
            display: inline-block;
            transition: filter 0.2s, opacity 0.2s;
        }

        body.is-locked .private-value {
            color: transparent;
            text-shadow: 0 0 8px rgba(11, 11, 15, 0.75);
            user-select: none;
        }

        body.is-locked .private-value::after {
            content: 'Locked';
            color: var(--web-blue);
            text-shadow: none;
        }

        .lock-note {
            margin-top: 12px;
            color: #5b5b68;
            font-size: 13px;
            font-weight: 500;
        }

        /* COMIC PANEL CARDS */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 26px;
            margin-bottom: 26px;
        }

        .info-card {
            background: white;
            padding: 22px 20px;
            border-radius: 6px;
            min-height: 100px;
            border: 3px solid var(--ink);
            box-shadow: 6px 6px 0 var(--web-blue);
            transition: 0.15s;
        }

        .info-card:nth-child(3n+1) { transform: rotate(-0.6deg); box-shadow: 6px 6px 0 var(--web-red); }
        .info-card:nth-child(3n+2) { transform: rotate(0.5deg); box-shadow: 6px 6px 0 var(--web-blue); }
        .info-card:nth-child(3n+3) { transform: rotate(-0.4deg); box-shadow: 6px 6px 0 var(--gold); }

        .info-card:hover {
            transform: translate(-2px, -2px) rotate(0deg);
        }

        .info-card h3 {
            font-size: 12px;
            color: var(--web-red);
            letter-spacing: 1.5px;
            margin-bottom: 10px;
            font-weight: 800;
            text-transform: uppercase;
        }

        .info-card p {
            font-size: 18px;
            font-weight: 700;
            color: var(--ink);
            word-wrap: break-word;
        }

        /* EXTRA INFORMATION */
        .extra-card {
            background: white;
            padding: 22px 24px;
            border-radius: 6px;
            margin-top: 18px;
            border: 3px solid var(--ink);
            box-shadow: 6px 6px 0 var(--web-blue-light);
        }

        .extra-card h3 {
            font-size: 12px;
            color: var(--web-red);
            letter-spacing: 1.5px;
            margin-bottom: 10px;
            font-weight: 800;
            text-transform: uppercase;
        }

        .extra-card p {
            color: var(--ink);
            font-weight: 600;
            line-height: 1.7;
            font-size: 16px;
        }

        @media (max-width: 800px) {
            .navbar { flex-direction: column; gap: 15px; padding: 18px 6%; }
            .info-grid { grid-template-columns: 1fr; }
            .container { width: 92%; }
            .page-title { font-size: 34px; }
            .web-corner { width: 160px; height: 160px; }
            .info-card { transform: none !important; }
            .privacy-bar { align-items: stretch; flex-direction: column; }
        }
    </style>
</head>
<body class="is-locked">

    <!-- Spider-web corner decorations -->
    <svg class="web-corner top-left" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <g stroke="#0b0b0f" stroke-width="1.5" fill="none">
            <line x1="0" y1="0" x2="200" y2="0" />
            <line x1="0" y1="0" x2="200" y2="60" />
            <line x1="0" y1="0" x2="200" y2="130" />
            <line x1="0" y1="0" x2="140" y2="200" />
            <line x1="0" y1="0" x2="60" y2="200" />
            <line x1="0" y1="0" x2="0" y2="200" />
            <path d="M 20 0 Q 30 30 60 60" />
            <path d="M 45 0 Q 55 45 90 90" />
            <path d="M 75 0 Q 85 65 120 120" />
            <path d="M 110 0 Q 110 90 150 150" />
            <path d="M 0 20 Q 30 30 60 60" />
            <path d="M 0 45 Q 45 55 90 90" />
            <path d="M 0 75 Q 65 85 120 120" />
            <path d="M 0 110 Q 90 110 150 150" />
        </g>
    </svg>
    <svg class="web-corner bottom-right" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <g stroke="#0b0b0f" stroke-width="1.5" fill="none">
            <line x1="0" y1="0" x2="200" y2="0" />
            <line x1="0" y1="0" x2="200" y2="60" />
            <line x1="0" y1="0" x2="200" y2="130" />
            <line x1="0" y1="0" x2="140" y2="200" />
            <line x1="0" y1="0" x2="60" y2="200" />
            <line x1="0" y1="0" x2="0" y2="200" />
            <path d="M 20 0 Q 30 30 60 60" />
            <path d="M 45 0 Q 55 45 90 90" />
            <path d="M 75 0 Q 85 65 120 120" />
            <path d="M 110 0 Q 110 90 150 150" />
            <path d="M 0 20 Q 30 30 60 60" />
            <path d="M 0 45 Q 45 55 90 90" />
            <path d="M 0 75 Q 65 85 120 120" />
            <path d="M 0 110 Q 90 110 150 150" />
        </g>
    </svg>

    <!-- NAVIGATION -->
    <nav class="navbar">
        <div class="logo">Welcome Jerrico!!</div>
        <div class="nav-links">
            <a href="<?= site_url('student'); ?>">Home</a>
            <a href="<?= site_url('student/profile'); ?>" class="active">Student Profile</a>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="container">
        <div class="label">Student Dossier</div>
        <h1 class="page-title">Student Profile</h1>

        <section class="privacy-bar" aria-live="polite">
            <p class="privacy-status">Student information status: <strong id="privacy-status">Locked</strong></p>
            <button class="privacy-toggle" id="privacy-toggle" type="button" aria-pressed="false">Allow Access</button>
        </section>

        <section class="info-grid">
            <div class="info-card">
                <h3>Student ID</h3>
                <p><span class="private-value"><?= htmlspecialchars($student['student_id'], ENT_QUOTES, 'UTF-8'); ?></span></p>
            </div>
            <div class="info-card">
                <h3>Name</h3>
                <p><span class="private-value"><?= htmlspecialchars($student['name'], ENT_QUOTES, 'UTF-8'); ?></span></p>
            </div>
            <div class="info-card">
                <h3>Course</h3>
                <p><span class="private-value"><?= htmlspecialchars($student['course'], ENT_QUOTES, 'UTF-8'); ?></span></p>
            </div>
            <div class="info-card">
                <h3>Year and Section</h3>
                <p><span class="private-value"><?= htmlspecialchars($student['year'] . ' / ' . $student['section'], ENT_QUOTES, 'UTF-8'); ?></span></p>
            </div>
            <div class="info-card">
                <h3>Email</h3>
                <p><span class="private-value"><?= htmlspecialchars($student['email'], ENT_QUOTES, 'UTF-8'); ?></span></p>
            </div>
            <div class="info-card">
                <h3>Contact Number</h3>
                <p><span class="private-value"><?= htmlspecialchars($student['contact'], ENT_QUOTES, 'UTF-8'); ?></span></p>
            </div>
        </section>

        <section class="extra-card">
            <h3>Address</h3>
            <p><span class="private-value"><?= htmlspecialchars($student['address'], ENT_QUOTES, 'UTF-8'); ?></span></p>
        </section>

        <section class="extra-card">
            <h3>Civil Status</h3>
            <p><span class="private-value"><?= htmlspecialchars($student['status'], ENT_QUOTES, 'UTF-8'); ?></span></p>
            <p class="lock-note">Private details are hidden until access is allowed.</p>
        </section>
    </main>

    <script>
        const privacyToggle = document.getElementById('privacy-toggle');
        const privacyStatus = document.getElementById('privacy-status');

        privacyToggle.addEventListener('click', () => {
            const isLocked = document.body.classList.toggle('is-locked');
            privacyStatus.textContent = isLocked ? 'Locked' : 'Visible';
            privacyToggle.textContent = isLocked ? 'Allow Access' : 'Hide Info';
            privacyToggle.setAttribute('aria-pressed', String(!isLocked));
        });
    </script>

</body>
</html>