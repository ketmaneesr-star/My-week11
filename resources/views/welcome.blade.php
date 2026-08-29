<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>หน้าแรก | เกษมณี ศรีเงิน</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;300;400;500;600&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-color: #faf9f6; /* Warm off-white */
            --text-main: #1c1917; /* Deep charcoal */
            --text-muted: #78716c; /* Warm gray */
            --accent-color: #8c7853; /* Elegant muted gold/bronze */
            --border-color: #e7e5e4;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', 'Prompt', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            line-height: 1.6;
        }

        header {
            padding: 2rem;
            max-width: 1000px;
            width: 100%;
            margin: 0 auto;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 1.5rem;
        }

        .logo {
            font-size: 1.25rem;
            font-weight: 500;
            text-decoration: none;
            color: var(--text-main);
            letter-spacing: -0.025em;
        }

        .logo span {
            color: var(--accent-color);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 400;
            transition: all 0.25s ease;
        }

        .nav-links a:hover, .nav-links a.active {
            color: var(--text-main);
        }

        main {
            max-width: 1000px;
            width: 100%;
            margin: auto;
            padding: 4rem 2rem;
        }

        .hero {
            max-width: 600px;
            animation: fadeIn 0.8s ease-out;
        }

        .hero-subtitle {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            color: var(--accent-color);
            margin-bottom: 1rem;
            font-weight: 500;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 300;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            letter-spacing: -0.03em;
        }

        .hero p {
            font-size: 1.1rem;
            color: var(--text-muted);
            margin-bottom: 2.5rem;
            font-weight: 300;
        }

        .cta-group {
            display: flex;
            gap: 1.5rem;
        }

        .cta-link {
            text-decoration: none;
            color: var(--text-main);
            font-size: 0.95rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: gap 0.2s ease;
        }

        .cta-link:hover {
            gap: 0.75rem;
            color: var(--accent-color);
        }

        footer {
            max-width: 1000px;
            width: 100%;
            margin: 0 auto;
            padding: 2rem;
            border-top: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            color: var(--text-muted);
            font-size: 0.8rem;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="/" class="logo">Ketmanee<span>.</span></a>
            <ul class="nav-links">
                <li><a href="/" class="active">หน้าแรก</a></li>
                <li><a href="/about">เกี่ยวกับฉัน</a></li>
                <li><a href="/blog">บทความ</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="hero">
            <div class="hero-subtitle">Personal Profile</div>
            <h1>ยินดีต้อนรับเข้าสู่เว็บไซต์ของฉัน</h1>
            <p>ยินดีต้อนรับสู่พื้นที่สะสมผลงานและการเรียนรู้ของฉัน นำเสนอข้อมูลส่วนตัวและเรื่องราวที่น่าสนใจเกี่ยวกับการพัฒนาเว็บและเทคโนโลยี</p>
            <div class="cta-group">
                <a href="/about" class="cta-link">ดูข้อมูลส่วนตัวของฉัน &rarr;</a>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 Ketmanee Sringen.</p>
        <p>Minimalist Design</p>
    </footer>
</body>

</html>
