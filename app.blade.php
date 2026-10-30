<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel POS Foundations' }}</title>
    <style>
        :root { --navy:#10233f; --blue:#2563eb; --ink:#172033; --muted:#64748b; --line:#e2e8f0; --green:#15803d; --green-bg:#dcfce7; --red:#b91c1c; --red-bg:#fee2e2; }
        * { box-sizing:border-box; } body { margin:0; font-family:Inter,ui-sans-serif,system-ui,-apple-system,"Segoe UI",sans-serif; color:var(--ink); background:#f8fafc; }
        a { color:inherit; text-decoration:none; } .nav { background:var(--navy); color:white; } .nav-inner { max-width:1120px; margin:auto; padding:18px 24px; display:flex; align-items:center; justify-content:space-between; gap:24px; }
        .brand { display:flex; align-items:center; gap:12px; font-weight:800; letter-spacing:-.02em; } .brand-mark { width:36px; height:36px; border-radius:10px; display:grid; place-items:center; background:#60a5fa; color:#10233f; font-weight:900; }
        .links { display:flex; flex-wrap:wrap; gap:6px; } .links a { padding:9px 13px; border-radius:8px; color:#cbd5e1; font-size:14px; } .links a:hover,.links a.active { background:#1e3a5f; color:white; }
        .container { max-width:1120px; margin:auto; padding:48px 24px 70px; } .eyebrow { color:var(--blue); font-weight:800; text-transform:uppercase; letter-spacing:.12em; font-size:12px; }
        h1 { font-size:clamp(32px,5vw,54px); line-height:1.04; letter-spacing:-.055em; margin:12px 0 18px; color:var(--navy); } h2 { margin:0 0 10px; color:var(--navy); letter-spacing:-.03em; } p { color:var(--muted); line-height:1.7; }
        .hero { display:grid; grid-template-columns:1.2fr .8fr; align-items:center; gap:56px; } .hero p { max-width:620px; font-size:18px; } .button { display:inline-block; margin-top:14px; padding:12px 17px; border-radius:9px; background:var(--blue); color:#fff; font-weight:700; } .button.secondary { background:#e2e8f0; color:var(--navy); margin-left:8px; }
        .hero-card { background:linear-gradient(145deg,#10233f,#1d4ed8); border-radius:22px; padding:28px; color:white; box-shadow:0 18px 45px #1e3a5f2b; } .hero-card .big { font-size:52px; font-weight:900; line-height:1; margin:18px 0 8px; } .hero-card p { color:#dbeafe; margin:0; }
        .grid { display:grid; grid-template-columns:repeat(3,1fr); gap:18px; margin-top:45px; } .card { background:white; border:1px solid var(--line); border-radius:14px; padding:22px; box-shadow:0 4px 14px #0f172a08; } .card p { font-size:14px; margin-bottom:0; }
        .page-head { display:flex; align-items:end; justify-content:space-between; gap:20px; margin-bottom:28px; } .page-head h1 { font-size:42px; margin-bottom:10px; } .page-head p { margin:0; }
        .table-wrap { overflow:auto; background:white; border:1px solid var(--line); border-radius:14px; box-shadow:0 4px 14px #0f172a08; } table { width:100%; border-collapse:collapse; min-width:680px; } th,td { text-align:left; padding:16px 18px; border-bottom:1px solid var(--line); font-size:14px; } th { background:#f8fafc; color:#475569; font-size:12px; text-transform:uppercase; letter-spacing:.08em; } tr:last-child td { border-bottom:0; }
        .badge { display:inline-block; border-radius:999px; padding:5px 10px; font-size:12px; font-weight:700; } .active { color:var(--green); background:var(--green-bg); } .inactive { color:var(--red); background:var(--red-bg); } .about { max-width:760px; } .about .card { margin-top:24px; } footer { text-align:center; padding:24px; color:#94a3b8; font-size:13px; border-top:1px solid var(--line); background:white; }
        @media (max-width:760px) { .nav-inner,.page-head { align-items:flex-start; flex-direction:column; } .hero { grid-template-columns:1fr; gap:30px; } .grid { grid-template-columns:1fr; } .container { padding-top:34px; } }
    </style>
</head>
<body>
    <nav class="nav"><div class="nav-inner">
        <a class="brand" href="{{ route('home') }}"><span class="brand-mark">P</span><span>Laravel POS</span></a>
        <div class="links"><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a><a class="{{ request()->routeIs('customers') ? 'active' : '' }}" href="{{ route('customers') }}">Customers</a><a class="{{ request()->routeIs('users') ? 'active' : '' }}" href="{{ route('users') }}">Users</a></div>
    </div></nav>
    <main class="container">@yield('content')</main><footer>IT0049 Web System Technologies &middot; Laravel Foundations</footer>
</body>
</html>
