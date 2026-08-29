<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เกี่ยวกับฉัน | เกษมณี ศรีเงิน</title>
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
            animation: fadeIn 0.8s ease-out;
        }

        .profile-section {
            max-width: 650px;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 300;
            letter-spacing: -0.02em;
            margin-bottom: 2rem;
            color: var(--text-main);
            border-left: 3px solid var(--accent-color);
            padding-left: 1rem;
        }

        .info-card {
            border: 1px solid var(--border-color);
            padding: 2.5rem;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 1rem 0;
            border-bottom: 1px solid #f5f5f4;
        }

        .info-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .info-item:first-child {
            padding-top: 0;
        }

        .info-label {
            color: var(--text-muted);
            font-weight: 400;
            font-size: 0.95rem;
        }

        .info-value {
            color: var(--text-main);
            font-weight: 500;
            font-size: 1rem;
            text-align: right;
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
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="/" class="logo">Ketmanee<span>.</span></a>
            <ul class="nav-links">
                <li><a href="/">หน้าแรก</a></li>
                <li><a href="/about" class="active">เกี่ยวกับฉัน</a></li>
                <li><a href="/blog">บทความ</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="profile-section">
            <h2 class="section-title">ข้อมูลส่วนตัว</h2>
            
            <div class="info-card">
                <div class="info-item">
                    <span class="info-label">ชื่อ - นามสกุล</span>
                    <span class="info-value">นางสาวเกษมณี ศรีเงิน</span>
                </div>
                <div class="info-item">
                    <span class="info-label">รหัสนักศึกษา</span>
                    <span class="info-value">68152310198-6</span>
                </div>
                <div class="info-item">
                    <span class="info-label">ห้องเรียน</span>
                    <span class="info-value">IDI เทียบโอน</span>
                </div>
                <div class="info-item">
                    <span class="info-label">สาขาที่เรียน</span>
                    <span class="info-value">เทคโนโลยีสารสนเทศ (IT)</span>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 Ketmanee Sringen.</p>
        <p>Minimalist Design</p>
    </footer>
</body>

</html>
