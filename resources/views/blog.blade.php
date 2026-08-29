<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>บทความ | เกษมณี ศรีเงิน</title>
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

        .section-title {
            font-size: 2rem;
            font-weight: 300;
            letter-spacing: -0.02em;
            margin-bottom: 2.5rem;
            color: var(--text-main);
            border-left: 3px solid var(--accent-color);
            padding-left: 1rem;
        }

        .post-list {
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
        }

        .post-item {
            display: flex;
            flex-direction: column;
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 2.5rem;
        }

        .post-item:last-child {
            border-bottom: none;
        }

        .post-meta {
            font-size: 0.8rem;
            color: var(--accent-color);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-bottom: 0.5rem;
        }

        .post-title {
            font-size: 1.5rem;
            font-weight: 400;
            margin-bottom: 0.75rem;
            color: var(--text-main);
        }

        .post-excerpt {
            color: var(--text-muted);
            font-size: 0.95rem;
            font-weight: 300;
            margin-bottom: 1rem;
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
                <li><a href="/about">เกี่ยวกับฉัน</a></li>
                <li><a href="/blog" class="active">บทความ</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2 class="section-title">เรื่องราวของฉัน</h2>
        
        <div class="post-list">
            <article class="post-item" style="border-bottom: none; padding-bottom: 0;">
                <div class="post-meta">About Me &bull; Introduction</div>
                <h3 class="post-title">ยินดีที่ได้รู้จัก, ฉันคือ เกษมณี ศรีเงิน</h3>
                <p class="post-excerpt" style="line-height: 1.8; font-size: 1.05rem; margin-bottom: 1.5rem;">
                    สวัสดีค่ะ! ฉันชื่อ <strong>เกษมณี ศรีเงิน</strong> ปัจจุบันกำลังศึกษาอยู่ในระดับปริญญาตรี สาขาเทคโนโลยีสารสนเทศ (IT) ห้องเรียน IDI เทียบโอน (รหัสนักศึกษา 68152310198-6)
                </p>
                <p class="post-excerpt" style="line-height: 1.8; font-size: 1.05rem; margin-bottom: 1.5rem;">
                    ฉันมีความสนใจและมุ่งมั่นที่จะพัฒนาทักษะด้านเทคโนโลยีและการพัฒนาเว็บไซต์ โดยเฉพาะการออกแบบและการเขียนโค้ดที่เน้นความเรียบง่าย (Minimalism) แต่มีความอบอุ่นและเปี่ยมไปด้วยประสิทธิภาพ การศึกษาในหลักสูตรเทียบโอนนี้ช่วยเปิดโอกาสให้ฉันได้เรียนรู้สิ่งใหม่ ๆ และเตรียมความพร้อมสำหรับการก้าวเข้าสู่การทำงานจริงในสายอาชีพไอที
                </p>
                <p class="post-excerpt" style="line-height: 1.8; font-size: 1.05rem;">
                    ขอบคุณที่เข้ามาแวะเวียนและทำความรู้จักกันนะคะ หากคุณต้องการพูดคุยหรือมีข้อเสนอแนะใด ๆ สามารถติดต่อผ่านช่องทางต่าง ๆ หรือทำความรู้จักฉันเพิ่มเติมได้เลยค่ะ
                </p>
            </article>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 Ketmanee Sringen.</p>
        <p>Minimalist Design</p>
    </footer>
</body>

</html>
