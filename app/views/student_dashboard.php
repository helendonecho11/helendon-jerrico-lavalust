<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-Slinger Student HQ - Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Rubik:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root { --red: #e0182d; --blue: #0a2472; --ink: #0b0b0f; --paper: #eef1f8; --gold: #ffcc00; }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { min-height: 100vh; color: var(--ink); font-family: Rubik, sans-serif; background: var(--paper); background-image: radial-gradient(circle, rgba(11,11,15,.08) 1px, transparent 1.4px); background-size: 14px 14px; }
        .navbar { display: flex; align-items: center; justify-content: space-between; gap: 20px; padding: 18px 8%; background: var(--ink); border-bottom: 5px solid var(--red); }
        .logo { color: var(--red); font: 30px Bangers, cursive; letter-spacing: 1px; }
        .nav-links { display: flex; gap: 12px; }
        .nav-links a, .access-button { display: inline-block; color: white; text-decoration: none; font-weight: 800; text-transform: uppercase; letter-spacing: .5px; border-radius: 4px; }
        .nav-links a { padding: 10px 22px; background: var(--blue); font-size: 14px; }
        .nav-links .active { background: var(--red); border: 2px solid var(--gold); }
        .container { width: 88%; max-width: 1000px; margin: 60px auto; }
        .welcome-card { position: relative; padding: 50px 40px; text-align: center; background: white; border: 4px solid var(--ink); border-radius: 6px; box-shadow: 10px 10px 0 var(--red); }
        .welcome-card::before { content: 'ISSUE #01'; position: absolute; top: -16px; left: 30px; padding: 4px 14px; color: var(--ink); background: var(--gold); border: 2px solid var(--ink); border-radius: 3px; font: 14px Bangers, cursive; letter-spacing: 2px; }
        .label { margin-bottom: 12px; color: var(--red); font-size: 14px; font-weight: 800; letter-spacing: 3px; text-transform: uppercase; }
        h1 { margin-bottom: 18px; color: var(--blue); font: 54px/1.1 Bangers, cursive; letter-spacing: 1px; -webkit-text-stroke: 1.5px var(--ink); }
        .welcome-card p { max-width: 480px; margin: 0 auto 30px; color: #3c3c46; font-size: 17px; }
        .access-button { padding: 16px 32px; background: var(--red); border: 3px solid var(--ink); box-shadow: 5px 5px 0 var(--ink); font-size: 15px; }
        @media (max-width: 800px) { .navbar { flex-direction: column; padding: 18px 6%; } .nav-links { flex-wrap: wrap; justify-content: center; } .container { width: 92%; margin: 40px auto; } h1 { font-size: 38px; } }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">WEB-SLINGER HQ</div>
        <div class="nav-links">
            <a href="<?= site_url('student'); ?>" class="active">Home</a>
            <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
        </div>
    </nav>
    <main class="container">
        <div class="welcome-card">
            <div class="label">Student Portal</div>
            <h1>Welcome, <?= htmlspecialchars($student['name'], ENT_QUOTES, 'UTF-8'); ?></h1>
            <p>Your student ID card is web-slung and ready. Swing over to your profile to see the full dossier.</p>
            <a href="<?= site_url('student/profile'); ?>" class="access-button">View My Profile</a>
        </div>
    </main>
</body>
</html>