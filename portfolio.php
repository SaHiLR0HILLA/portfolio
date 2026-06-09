<?php
$contact = [
    'email' => 'sahilrohilla144@gmail.com',
    'phone' => '+91-8527041339',
    'location' => 'India',
];

$stackHighlights = ['PHP', 'Laravel', 'CodeIgniter', 'Drupal', 'MySQL', 'REST APIs', 'Redis', 'Solr'];

$stats = [
    ['value' => '4+', 'label' => 'Years building production systems'],
    ['value' => '15+', 'label' => 'Web apps deployed and maintained'],
    // ['value' => '10+', 'label' => 'Laravel, CI, and Drupal builds'],
    ['value' => '2', 'label' => 'Junior developers mentored'],
];

$skills = [
    ['title' => 'Backend Engineering', 'level' => 94, 'items' => ['PHP', 'Laravel', 'CodeIgniter', 'REST APIs']],
    ['title' => 'Frameworks & CMS', 'level' => 91, 'items' => ['Laravel', 'CodeIgniter', 'Drupal 8/9/10', 'Custom Modules', 'Entities']],
    ['title' => 'Database & Search', 'level' => 88, 'items' => ['MySQL', 'Optimization', 'Redis', 'Apache Solr', 'Data Migration']],
    ['title' => 'Frontend Delivery', 'level' => 82, 'items' => ['JavaScript', 'jQuery', 'AJAX', 'HTML5', 'CSS3']],
];

$services = [
    ['title' => 'Custom CRM Modules', 'text' => 'Lead workflows, dashboards, permissions, follow-ups, reports, and automation.'],
    ['title' => 'Laravel, CI & Drupal Builds', 'text' => 'Full modules, admin panels, content systems, migrations, custom entities, and APIs.'],
    ['title' => 'API Integrations', 'text' => 'REST APIs, third-party services, WhatsApp flows, Voice AI, and internal tooling.'],
    ['title' => 'Performance Fixes', 'text' => 'Query tuning, production debugging, stability improvements, and scalable patterns.'],
];

$projects = [
    [
        'name' => 'My-Medical-Tour',
        'type' => 'Medical Tourism Platform',
        'link' => '#',
        'summary' => 'A comprehensive medical tourism platform connecting international patients with hospitals, doctors, and treatment packages. Developed custom workflows for enquiries, lead management, hospital onboarding, patient coordination, and automated communications.',
        'stack' => ['PHP', 'Laravel', 'MySQL', 'AJAX', 'REST APIs'],
        'flow' => [
            'Analysis' => 'Gathered business requirements, mapped patient journeys, treatment workflows, and user roles.',
            'Development' => 'Built modules for hospital management, doctor profiles, treatment packages, enquiry handling, and lead tracking.',
            'Integration' => 'Integrated third-party APIs, notifications, and automated communication systems.',
            'Deployment' => 'Performed testing, optimization, production deployment, and continuous feature enhancements.',
        ],
    ],

    [
        'name' => 'Med Tour Care',
        'type' => 'Multilingual Healthcare Platform',
        'link' => '#',
        'summary' => 'A multilingual healthcare platform supporting region-specific content across multiple languages through a custom localization system. Developed healthcare directories, enquiry workflows, SEO-friendly language routing, content management, and API integrations.',
        'stack' => ['Laravel','Drupal', 'PHP', 'MySQL', 'JavaScript', 'REST APIs'],
        'flow' => [
            'Planning' => 'Designed multilingual architecture, content relationships, URL structures, and international SEO strategy.',
            'Development' => 'Built custom language management, translated content mapping, enquiry forms, hospital listings, and doctor directories.',
            'Localization' => 'Implemented language-specific URLs, metadata management, content synchronization, and manual translation workflows.',
            'Optimization' => 'Enhanced performance, search experience, multilingual SEO, and supported ongoing platform improvements.',
        ],
    ],
];
$experience = [
    [
        'role' => 'Software Developer',
        'company' => 'Vaidam Health Private Limited',
        'period' => 'June 2023 - Present',
        'items' => [
            'Designed and developed custom CRM modules using PHP, Laravel, and CodeIgniter.',
            'Maintained Custom CRM, Connect Panel, vaidam.com, and medijourney.co.in for high-traffic usage.',
            'Resolved critical production issues and improved platform stability.',
            'Optimized MySQL queries and database performance for faster response times.',
            'Developed Voice AI Agent and WhatsApp Automation System using Node.js.',
            'Managed projects including Vaidam Health, Medijourney, Cancer Rounds, GS Medical Ae, Truskope, Swiss Health Clinic CH, Primcare BKK, and Lifeline Turkey.',
        ],
    ],
    [
        'role' => 'Associate Software Developer',
        'company' => 'OpenSense Labs Private Limited',
        'period' => 'April 2022 - June 2023',
        'items' => [
            'Developed and maintained 6+ Drupal 8, 9, and 10 projects.',
            'Built custom modules, custom entities, APIs, and headless Drupal integrations.',
            'Led data migration initiatives with data integrity and zero-downtime planning.',
            'Worked on Carbon Check, OpenSense Labs Rebuild, Clear Plus, ICT, and Leevcb.',
        ],
    ],
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sahil Rohilla | Full Stack Web Developer</title>
    <meta name="description" content="Modern portfolio of Sahil Rohilla, a full stack web developer skilled in PHP, Laravel, CodeIgniter, Drupal, APIs, and MySQL.">
    <style>
        :root {
            --ink: #111827;
            --ink-soft: #1f2937;
            --text: #263142;
            --muted: #64748b;
            --line: #d7dee8;
            --paper: #f7f8fb;
            --white: #ffffff;
            --mint: #16a085;
            --green: #0f766e;
            --blue: #2563eb;
            --yellow: #f6b73c;
            --coral: #ef5a47;
            --violet: #7c3aed;
            --shadow: 0 24px 70px rgba(17, 24, 39, .14);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            color: var(--text);
            background:
                linear-gradient(90deg, rgba(17, 24, 39, .04) 1px, transparent 1px),
                linear-gradient(rgba(17, 24, 39, .04) 1px, transparent 1px),
                #fbfcfe;
            background-size: 42px 42px;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Arial, sans-serif;
            line-height: 1.65;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            background:
                radial-gradient(circle at 18% 12%, rgba(22, 160, 133, .18), transparent 26rem),
                radial-gradient(circle at 84% 18%, rgba(239, 90, 71, .14), transparent 24rem),
                radial-gradient(circle at 55% 82%, rgba(37, 99, 235, .12), transparent 26rem);
            z-index: -1;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .shell {
            width: min(1180px, calc(100% - 32px));
            margin: 0 auto;
        }

        .nav {
            position: sticky;
            top: 14px;
            z-index: 20;
            width: min(1180px, calc(100% - 32px));
            margin: 14px auto 0;
            border: 1px solid rgba(215, 222, 232, .9);
            border-radius: 8px;
            background: rgba(255, 255, 255, .82);
            box-shadow: 0 18px 54px rgba(17, 24, 39, .08);
            backdrop-filter: blur(22px);
        }

        .nav-inner {
            width: 100%;
            min-height: 68px;
            padding: 0 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-weight: 900;
            color: var(--ink);
            min-width: max-content;
        }

        .brand-mark {
            width: 44px;
            height: 44px;
            display: grid;
            place-items: center;
            border-radius: 8px;
            color: white;
            background:
                linear-gradient(135deg, rgba(15,118,110,.96), rgba(37,99,235,.92), rgba(239,90,71,.92)),
                repeating-linear-gradient(45deg, rgba(255,255,255,.22) 0 2px, transparent 2px 9px);
            box-shadow: 0 14px 32px rgba(37, 99, 235, .24);
            font-size: 14px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 6px;
            border: 1px solid rgba(215, 222, 232, .92);
            border-radius: 8px;
            background: rgba(247, 248, 251, .82);
        }

        .nav-links a {
            padding: 8px 12px;
            border-radius: 7px;
            color: var(--muted);
            font-size: 14px;
            font-weight: 800;
        }

        .nav-links a:hover {
            color: white;
            background: var(--ink);
        }

        .nav-cta {
            min-height: 42px;
            padding: 0 14px;
            color: white;
            background: linear-gradient(135deg, var(--green), var(--blue));
            box-shadow: 0 14px 30px rgba(37, 99, 235, .2);
        }

        .btn {
            min-height: 46px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 0 18px;
            border: 1px solid transparent;
            border-radius: 8px;
            font-weight: 900;
            transition: transform .2s ease, box-shadow .2s ease, background .2s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-dark {
            color: white;
            background: var(--ink);
            box-shadow: 0 18px 40px rgba(17, 24, 39, .22);
        }

        .btn-line {
            color: var(--ink);
            background: white;
            border-color: var(--line);
        }

        .hero {
            position: relative;
            min-height: calc(100vh - 96px);
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(360px, .9fr);
            align-items: center;
            gap: 46px;
            padding: 72px 0 64px;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 34px auto auto -72px;
            width: 180px;
            height: 180px;
            border: 34px solid rgba(239, 90, 71, .12);
            border-radius: 50%;
            z-index: -1;
        }

        .hero-copy-panel {
            position: relative;
            padding: 18px 0;
        }

        .pill {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 8px 12px;
            border: 1px solid rgba(22, 160, 133, .28);
            border-radius: 8px;
            color: #0d5f59;
            background: rgba(232, 247, 244, .86);
            font-size: 13px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: .08em;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            border-radius: 99px;
            background: var(--mint);
            box-shadow: 0 0 0 6px rgba(22, 160, 133, .14);
        }

        h1,
        h2,
        h3,
        p {
            margin-top: 0;
        }

        h1 {
            max-width: 780px;
            margin: 20px 0 18px;
            color: var(--ink);
            font-size: clamp(46px, 7vw, 88px);
            line-height: .92;
            letter-spacing: 0;
        }

        h1 span {
            color: var(--green);
            background: linear-gradient(90deg, var(--green), var(--blue), var(--coral));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .lead {
            max-width: 710px;
            margin-bottom: 28px;
            color: var(--muted);
            font-size: 19px;
        }

        .hero-actions,
        .contact-row,
        .tag-row {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .contact-row {
            margin-top: 26px;
        }

        .contact-card {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            min-height: 42px;
            padding: 0 12px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: rgba(255, 255, 255, .8);
            color: var(--muted);
            font-size: 14px;
            font-weight: 800;
            transition: border-color .2s ease, transform .2s ease, box-shadow .2s ease;
        }

        .contact-card:hover {
            transform: translateY(-2px);
            border-color: rgba(37, 99, 235, .28);
            box-shadow: 0 14px 34px rgba(17, 24, 39, .08);
        }

        .stack-showcase {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            max-width: 680px;
            margin-top: 26px;
        }

        .stack-badge {
            position: relative;
            overflow: hidden;
            padding: 9px 12px;
            border: 1px solid rgba(17, 24, 39, .08);
            border-radius: 8px;
            background: rgba(255, 255, 255, .82);
            box-shadow: 0 10px 28px rgba(17, 24, 39, .06);
            color: var(--ink);
            font-size: 13px;
            font-weight: 900;
        }

        .stack-badge::before {
            content: "";
            position: absolute;
            inset: 0;
            width: 4px;
            background: linear-gradient(180deg, var(--green), var(--blue), var(--coral));
        }

        .icon-box {
            width: 24px;
            height: 24px;
            display: grid;
            place-items: center;
            border-radius: 7px;
            color: white;
            background: var(--ink);
            font-size: 11px;
            line-height: 1;
        }

        .hero-visual {
            position: relative;
            min-height: 590px;
            display: grid;
            align-items: center;
        }

        .dashboard-shell {
            position: relative;
            overflow: hidden;
            padding: 18px;
            border: 1px solid rgba(215, 222, 232, .78);
            border-radius: 8px;
            background:
                linear-gradient(135deg, rgba(255,255,255,.88), rgba(255,255,255,.62)),
                radial-gradient(circle at 16% 12%, rgba(22,160,133,.18), transparent 18rem),
                radial-gradient(circle at 88% 84%, rgba(239,90,71,.16), transparent 18rem);
            box-shadow: var(--shadow);
        }

        .dashboard-shell::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(90deg, rgba(17,24,39,.04) 1px, transparent 1px),
                linear-gradient(rgba(17,24,39,.04) 1px, transparent 1px);
            background-size: 24px 24px;
            mask-image: linear-gradient(145deg, black, transparent 72%);
        }

        .dashboard-shell > * {
            position: relative;
            z-index: 1;
        }

        .profile-panel,
        .console-panel,
        .metric-card {
            border: 1px solid rgba(255, 255, 255, .16);
            border-radius: 8px;
            box-shadow: var(--shadow);
        }

        .profile-panel {
            position: relative;
            overflow: hidden;
            padding: 26px;
            color: white;
            background:
                linear-gradient(135deg, rgba(17, 24, 39, .96), rgba(31, 41, 55, .96)),
                linear-gradient(45deg, rgba(22, 160, 133, .4), rgba(239, 90, 71, .4));
            box-shadow: none;
        }

        .profile-panel::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(90deg, rgba(255,255,255,.07) 1px, transparent 1px),
                linear-gradient(rgba(255,255,255,.07) 1px, transparent 1px);
            background-size: 28px 28px;
            mask-image: linear-gradient(135deg, black, transparent 68%);
        }

        .profile-panel::after {
            content: "";
            position: absolute;
            inset: auto -80px -120px auto;
            width: 280px;
            height: 280px;
            border: 45px solid rgba(246, 183, 60, .18);
            border-radius: 50%;
        }

        .profile-panel > * {
            position: relative;
            z-index: 1;
        }

        .avatar {
            width: 98px;
            height: 98px;
            display: grid;
            place-items: center;
            border: 1px solid rgba(255,255,255,.22);
            border-radius: 8px;
            background:
                linear-gradient(135deg, rgba(22,160,133,.9), rgba(239,90,71,.88)),
                repeating-linear-gradient(45deg, rgba(255,255,255,.14) 0 2px, transparent 2px 11px);
            font-size: 38px;
            font-weight: 900;
        }

        .profile-panel h2 {
            margin: 18px 0 8px;
            font-size: 31px;
            line-height: 1.05;
        }

        .profile-panel p {
            max-width: 420px;
            color: rgba(255,255,255,.72);
            margin-bottom: 22px;
        }

        .mini-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
        }

        .mini-card {
            padding: 14px;
            border: 1px solid rgba(255, 255, 255, .13);
            border-radius: 8px;
            background: rgba(255,255,255,.08);
        }

        .mini-card strong {
            display: block;
            font-size: 22px;
            line-height: 1;
        }

        .mini-card span {
            color: rgba(255,255,255,.68);
            font-size: 12px;
            font-weight: 800;
        }

        .console-panel {
            margin-top: 16px;
            width: 100%;
            overflow: hidden;
            background: #0b1020;
            color: #cbd5e1;
            box-shadow: none;
        }

        .console-top {
            height: 42px;
            display: flex;
            align-items: center;
            gap: 7px;
            padding: 0 14px;
            background: #111827;
            border-bottom: 1px solid rgba(255,255,255,.09);
        }

        .console-top span {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .console-top span:nth-child(1) { background: var(--coral); }
        .console-top span:nth-child(2) { background: var(--yellow); }
        .console-top span:nth-child(3) { background: var(--mint); }

        .code-lines {
            overflow-x: auto;
            padding: 18px;
            font-family: "SFMono-Regular", Consolas, "Liberation Mono", monospace;
            font-size: 13px;
            line-height: 1.9;
        }

        .code-lines div {
            white-space: nowrap;
        }

        .code-lines b {
            color: #67e8f9;
            font-weight: 700;
        }

        .code-lines i {
            color: #fbbf24;
            font-style: normal;
        }

        .metric-card {
            position: absolute;
            right: -12px;
            top: 68px;
            width: 190px;
            padding: 16px;
            background: white;
            border-color: rgba(215, 222, 232, .86);
        }

        .hero-orbit {
            position: absolute;
            left: -20px;
            bottom: 36px;
            width: 172px;
            padding: 14px;
            border: 1px solid rgba(215, 222, 232, .86);
            border-radius: 8px;
            background: white;
            box-shadow: 0 22px 48px rgba(17, 24, 39, .12);
        }

        .hero-orbit strong {
            display: block;
            color: var(--ink);
            font-size: 18px;
            line-height: 1.15;
        }

        .hero-orbit span {
            color: var(--muted);
            font-size: 12px;
            font-weight: 850;
        }

        .orbit-icons {
            display: flex;
            gap: 6px;
            margin-top: 10px;
        }

        .orbit-icons i {
            width: 24px;
            height: 24px;
            display: grid;
            place-items: center;
            border-radius: 7px;
            color: white;
            background: var(--ink);
            font-size: 10px;
            font-style: normal;
            font-weight: 900;
        }

        .metric-card strong {
            display: block;
            color: var(--ink);
            font-size: 30px;
            line-height: 1;
        }

        .metric-card span {
            color: var(--muted);
            font-size: 13px;
            font-weight: 800;
        }

        .progress {
            height: 8px;
            margin-top: 12px;
            overflow: hidden;
            border-radius: 8px;
            background: #edf2f7;
        }

        .progress b {
            display: block;
            height: 100%;
            width: 98%;
            border-radius: inherit;
            background: linear-gradient(90deg, var(--green), var(--yellow), var(--coral));
        }

        section {
            padding: 78px 0;
        }

        .section-head {
            display: grid;
            grid-template-columns: minmax(0, .9fr) minmax(260px, .55fr);
            align-items: end;
            gap: 32px;
            margin-bottom: 28px;
        }

        .section-kicker {
            margin-bottom: 8px;
            color: var(--green);
            font-size: 13px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: .12em;
        }

        h2 {
            margin-bottom: 0;
            color: var(--ink);
            font-size: clamp(30px, 4vw, 50px);
            line-height: 1.06;
            letter-spacing: 0;
        }

        .section-head p {
            margin-bottom: 0;
            color: var(--muted);
        }

        .grid {
            display: grid;
            gap: 18px;
        }

        .grid-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .grid-4 {
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }

        .card {
            border: 1px solid var(--line);
            border-radius: 8px;
            background: rgba(255,255,255,.9);
            box-shadow: 0 18px 54px rgba(17, 24, 39, .07);
            transition: transform .22s ease, box-shadow .22s ease, border-color .22s ease;
        }

        .card:hover {
            transform: translateY(-4px);
            border-color: rgba(37, 99, 235, .26);
            box-shadow: 0 24px 70px rgba(17, 24, 39, .12);
        }

        .stat-card {
            position: relative;
            overflow: hidden;
            padding: 22px;
        }

        .stat-card::after {
            content: "";
            position: absolute;
            right: -26px;
            top: -26px;
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: rgba(22, 160, 133, .12);
        }

        .stat-card strong {
            display: block;
            margin-bottom: 8px;
            color: var(--ink);
            font-size: 38px;
            line-height: 1;
        }

        .stat-card p {
            margin-bottom: 0;
            color: var(--muted);
            font-weight: 800;
        }

        .service-card,
        .skill-card,
        .project-card,
        .timeline-card,
        .info-card {
            padding: 24px;
        }

        .service-card {
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--green), var(--yellow), var(--coral));
        }

        .service-card h3,
        .skill-card h3,
        .project-card h3,
        .timeline-card h3,
        .info-card h3 {
            margin-bottom: 10px;
            color: var(--ink);
            font-size: 20px;
            line-height: 1.25;
        }

        .service-card p,
        .project-card p,
        .info-card p {
            margin-bottom: 0;
            color: var(--muted);
        }

        .skill-card {
            min-height: 100%;
        }

        .skill-meter {
            height: 9px;
            margin: 16px 0;
            border-radius: 8px;
            background: #e8edf3;
            overflow: hidden;
        }

        .skill-meter span {
            display: block;
            height: 100%;
            border-radius: inherit;
            background: linear-gradient(90deg, var(--blue), var(--green));
        }

        .tag-row {
            margin-top: 14px;
        }

        .tag {
            padding: 7px 10px;
            border: 1px solid #cce6df;
            border-radius: 8px;
            color: #0f4d49;
            background: #ebf8f5;
            font-size: 13px;
            font-weight: 850;
        }

        .projects-wrap {
            display: grid;
            gap: 22px;
        }

        .project-card {
            position: relative;
            display: grid;
            grid-template-columns: minmax(0, .8fr) minmax(0, 1.2fr);
            gap: 24px;
            overflow: hidden;
            background:
                linear-gradient(135deg, rgba(255,255,255,.96), rgba(247,250,252,.94)),
                radial-gradient(circle at top right, rgba(239, 90, 71, .18), transparent 18rem);
        }

        .project-card::before {
            content: "";
            position: absolute;
            inset: 0 auto 0 0;
            width: 6px;
            background: linear-gradient(180deg, var(--green), var(--blue), var(--coral));
        }

        .project-label {
            display: inline-flex;
            margin-bottom: 14px;
            padding: 7px 10px;
            border-radius: 8px;
            color: white;
            background: var(--ink);
            font-size: 12px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: .08em;
        }

        .flow-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
        }

        .flow-step {
            min-height: 144px;
            padding: 16px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background:
                linear-gradient(135deg, rgba(255,255,255,.82), rgba(247,248,251,.92)),
                radial-gradient(circle at top right, rgba(37,99,235,.12), transparent 9rem);
        }

        .flow-step strong {
            display: block;
            margin-bottom: 8px;
            color: var(--ink);
            font-size: 15px;
        }

        .flow-step span {
            color: var(--muted);
            font-size: 14px;
        }

        .dark-band {
            color: white;
            background:
                linear-gradient(135deg, rgba(17, 24, 39, .98), rgba(30, 41, 59, .96)),
                repeating-linear-gradient(45deg, rgba(255,255,255,.04) 0 1px, transparent 1px 16px);
        }

        .dark-band h2,
        .dark-band h3 {
            color: white;
        }

        .dark-band .section-head p,
        .dark-band .timeline-card li,
        .dark-band .info-card p {
            color: rgba(255,255,255,.72);
        }

        .dark-band .card {
            background: rgba(255,255,255,.07);
            border-color: rgba(255,255,255,.13);
            box-shadow: none;
        }

        .timeline {
            display: grid;
            gap: 18px;
        }

        .timeline-top {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 18px;
            margin-bottom: 16px;
        }

        .company {
            color: #7dd3fc;
            font-weight: 900;
        }

        .period {
            flex: 0 0 auto;
            padding: 7px 10px;
            border: 1px solid rgba(255,255,255,.15);
            border-radius: 8px;
            color: rgba(255,255,255,.82);
            font-size: 13px;
            font-weight: 900;
        }

        .clean-list {
            margin: 0;
            padding-left: 20px;
        }

        .clean-list li + li {
            margin-top: 8px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 18px;
        }

        .education-item + .education-item {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid var(--line);
        }

        .education-item strong {
            display: block;
            color: var(--ink);
        }

        .education-item span {
            color: var(--coral);
            font-size: 13px;
            font-weight: 900;
        }

        .contact-section {
            padding-bottom: 44px;
        }

        .contact-box {
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto;
            align-items: center;
            gap: 24px;
            padding: 34px;
            border-radius: 8px;
            color: white;
            background: linear-gradient(135deg, var(--green), var(--blue) 55%, var(--coral));
            box-shadow: var(--shadow);
        }

        .contact-box h2 {
            color: white;
            margin-bottom: 10px;
        }

        .contact-box p {
            margin-bottom: 0;
            color: rgba(255,255,255,.78);
        }

        .contact-box .btn {
            color: var(--ink);
            background: white;
        }

        footer {
            padding: 24px 0 36px;
            color: var(--muted);
            text-align: center;
            font-size: 14px;
        }

        .reveal {
            opacity: 0;
            transform: translateY(18px);
            transition: opacity .65s ease, transform .65s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: none;
        }

        @media (max-width: 980px) {
            .nav {
                width: min(100% - 24px, 1180px);
            }

            .nav-links {
                gap: 2px;
            }

            .nav-links a {
                padding: 8px 9px;
            }

            .hero,
            .section-head,
            .project-card,
            .info-grid,
            .contact-box {
                grid-template-columns: 1fr;
            }

            .hero {
                min-height: auto;
                padding-top: 46px;
            }

            .hero-visual {
                min-height: auto;
            }

            .metric-card,
            .hero-orbit {
                position: static;
                width: 100%;
                margin-top: 16px;
            }

            .grid-4 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 720px) {
            .nav {
                top: 8px;
                width: min(100% - 18px, 1180px);
                margin-top: 8px;
            }

            .nav-inner {
                min-height: 62px;
                gap: 10px;
            }

            .nav-links {
                display: none;
            }

            .nav-cta {
                display: none;
            }

            .grid-2,
            .grid-4,
            .mini-grid,
            .flow-grid {
                grid-template-columns: 1fr;
            }

            .shell {
                width: min(100% - 22px, 1180px);
            }

            .hero,
            section {
                padding: 48px 0;
            }

            h1 {
                font-size: clamp(42px, 13vw, 58px);
            }

            .lead {
                font-size: 17px;
            }

            .contact-row .contact-card,
            .hero-actions .btn,
            .contact-box .btn {
                width: 100%;
            }

            .stack-showcase {
                gap: 8px;
            }

            .stack-badge {
                padding: 8px 10px;
                font-size: 12px;
            }

            .timeline-top {
                display: block;
            }

            .period {
                display: inline-flex;
                margin-top: 10px;
            }

            .profile-panel,
            .contact-box {
                padding: 24px;
            }

            .dashboard-shell {
                padding: 10px;
            }

            .avatar {
                width: 84px;
                height: 84px;
                font-size: 30px;
            }

            .profile-panel h2 {
                font-size: 26px;
            }

            .code-lines {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <nav class="nav">
        <div class="nav-inner">
            <a class="brand" href="#top" aria-label="Sahil Rohilla home">
                <span class="brand-mark">SR</span>
                <span>Sahil Rohilla</span>
            </a>
            <div class="nav-links">
                <a href="#work">Work</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#experience">Experience</a>
                <a href="#contact">Contact</a>
            </div>
            <a class="btn nav-cta" href="mailto:<?= htmlspecialchars($contact['email']) ?>">Hire Me</a>
        </div>
    </nav>

    <main id="top">
        <header class="shell hero">
            <div class="hero-copy-panel reveal">
                <span class="pill"><span class="status-dot"></span> Available for full stack work</span>
                <h1>Hi, I am Sahil Rohilla. I build <span>fast, reliable web products</span>.</h1>
                <p class="lead">
                    Software Developer with 4+ years of hands-on experience in PHP, Laravel, CodeIgniter, Drupal,
                    APIs, MySQL optimization, CRM systems, healthcare platforms, and production support.
                </p>
                <div class="hero-actions">
                    <a class="btn btn-dark" href="#projects">See Project Work</a>
                    <a class="btn btn-line" href="mailto:<?= htmlspecialchars($contact['email']) ?>">Send Email</a>
                </div>
                <div class="contact-row">
                    <a class="contact-card" href="mailto:<?= htmlspecialchars($contact['email']) ?>"><span class="icon-box">@</span><?= htmlspecialchars($contact['email']) ?></a>
                    <a class="contact-card" href="tel:+918527041339"><span class="icon-box">T</span><?= htmlspecialchars($contact['phone']) ?></a>
                    <span class="contact-card"><span class="icon-box">IN</span><?= htmlspecialchars($contact['location']) ?></span>
                </div>
                <div class="stack-showcase" aria-label="Core technology stack">
                    <?php foreach ($stackHighlights as $tech): ?>
                        <span class="stack-badge"><?= htmlspecialchars($tech) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="hero-visual reveal">
                <div class="dashboard-shell">
                    <div class="profile-panel">
                        <div class="avatar">SR</div>
                        <h2>Full Stack Web Developer</h2>
                        <p>Focused on clean backend logic, useful admin tools, scalable database work, and interfaces teams can use daily.</p>
                        <div class="mini-grid">
                            <?php foreach ($stats as $stat): ?>
                                <div class="mini-card">
                                    <strong><?= htmlspecialchars($stat['value']) ?></strong>
                                    <span><?= htmlspecialchars($stat['label']) ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="metric-card">
                        <strong>98%</strong>
                        <span>Code quality focus</span>
                        <div class="progress"><b></b></div>
                    </div>
                    <div class="hero-orbit">
                        <strong>PHP ecosystem</strong>
                        <span>Laravel, CI, Drupal, APIs</span>
                        <div class="orbit-icons">
                            <i>PHP</i>
                            <i>LA</i>
                            <i>CI</i>
                            <i>DR</i>
                        </div>
                    </div>
                    <div class="console-panel" aria-label="Portfolio visual code sample">
                        <div class="console-top"><span></span><span></span><span></span></div>
                        <div class="code-lines">
                            <div><b>$developer</b> = <i>"Sahil Rohilla"</i>;</div>
                            <div><b>$stack</b> = [PHP, Laravel, CodeIgniter, Drupal];</div>
                            <div><b>$focus</b> = CRM + APIs + MySQL;</div>
                            <div><b>deploy</b>(clean_code, performance);</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="shell reveal">
            <div class="grid grid-4">
                <?php foreach ($stats as $stat): ?>
                    <article class="card stat-card">
                        <strong><?= htmlspecialchars($stat['value']) ?></strong>
                        <p><?= htmlspecialchars($stat['label']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="work" class="shell reveal">
            <div class="section-head">
                <div>
                    <div class="section-kicker">What I Deliver</div>
                    <h2>Useful systems, not just good-looking screens.</h2>
                </div>
                <p>I work on the complete lifecycle: understanding requirements, designing modules, writing code, testing, deployment, and post-launch improvements.</p>
            </div>
            <div class="grid grid-4">
                <?php foreach ($services as $service): ?>
                    <article class="card service-card">
                        <h3><?= htmlspecialchars($service['title']) ?></h3>
                        <p><?= htmlspecialchars($service['text']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="skills" class="shell reveal">
            <div class="section-head">
                <div>
                    <div class="section-kicker">Skills</div>
                    <h2>Technical toolkit for production-ready builds.</h2>
                </div>
                <p>Backend-first strength with enough frontend, database, search, and deployment experience to ship complete features.</p>
            </div>
            <div class="grid grid-4">
                <?php foreach ($skills as $skill): ?>
                    <article class="card skill-card">
                        <h3><?= htmlspecialchars($skill['title']) ?></h3>
                        <div class="skill-meter"><span style="width: <?= (int) $skill['level'] ?>%"></span></div>
                        <div class="tag-row">
                            <?php foreach ($skill['items'] as $item): ?>
                                <span class="tag"><?= htmlspecialchars($item) ?></span>
                            <?php endforeach; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="projects" class="shell reveal">
            <div class="section-head">
                <div>
                    <div class="section-kicker">Projects</div>
                    <h2>Two start-to-end project stories.</h2>
                </div>
                <p>These are placeholders using ABC and XYZ as requested. Change the names, links, and details from the PHP array at the top.</p>
            </div>
            <div class="projects-wrap">
                <?php foreach ($projects as $project): ?>
                    <article class="card project-card">
                        <div>
                            <span class="project-label"><?= htmlspecialchars($project['type']) ?></span>
                            <h3><?= htmlspecialchars($project['name']) ?></h3>
                            <p><?= htmlspecialchars($project['summary']) ?></p>
                            <div class="tag-row">
                                <?php foreach ($project['stack'] as $tech): ?>
                                    <span class="tag"><?= htmlspecialchars($tech) ?></span>
                                <?php endforeach; ?>
                            </div>
                            <div style="margin-top: 20px;">
                                <a class="btn btn-line" href="<?= htmlspecialchars($project['link']) ?>">Open Project Link</a>
                            </div>
                        </div>
                        <div class="flow-grid">
                            <?php foreach ($project['flow'] as $step => $detail): ?>
                                <div class="flow-step">
                                    <strong><?= htmlspecialchars($step) ?></strong>
                                    <span><?= htmlspecialchars($detail) ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="experience" class="dark-band">
            <div class="shell reveal">
                <div class="section-head">
                    <div>
                        <div class="section-kicker">Experience</div>
                        <h2>Professional work with real production responsibility.</h2>
                    </div>
                    <p>Experience across Laravel, CodeIgniter, Drupal, CRM modules, database optimization, API work, automation, debugging, mentoring, and live support.</p>
                </div>
                <div class="timeline">
                    <?php foreach ($experience as $job): ?>
                        <article class="card timeline-card">
                            <div class="timeline-top">
                                <div>
                                    <h3><?= htmlspecialchars($job['role']) ?></h3>
                                    <div class="company"><?= htmlspecialchars($job['company']) ?></div>
                                </div>
                                <span class="period"><?= htmlspecialchars($job['period']) ?></span>
                            </div>
                            <ul class="clean-list">
                                <?php foreach ($job['items'] as $item): ?>
                                    <li><?= htmlspecialchars($item) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="shell reveal">
            <div class="section-head">
                <div>
                    <div class="section-kicker">Background</div>
                    <h2>Education, achievements, and working style.</h2>
                </div>
                <p>Practical engineering mindset, clean code habits, and steady collaboration with teams and stakeholders.</p>
            </div>
            <div class="info-grid">
                <article class="card info-card">
                    <h3>Education</h3>
                    <div class="education-item">
                        <strong>Bachelor of Technology (B.Tech)</strong>
                        <span>August 2018 - August 2021</span>
                        <p>Ganga Institute of Technology & Management, Kablana, Haryana</p>
                    </div>
                    <div class="education-item">
                        <strong>Diploma in Engineering</strong>
                        <span>August 2013 - August 2016</span>
                        <p>Chotu Ram Rural Institute of Technology, Jind, Haryana</p>
                    </div>
                </article>
                <article class="card info-card">
                    <h3>Highlights</h3>
                    <ul class="clean-list">
                        <li>Successfully deployed and maintained 15+ web applications in production environments.</li>
                        <li>Achieved 98% code quality score through best practices and code review standards.</li>
                        <li>Strong hands-on experience across PHP, Laravel, CodeIgniter, and Drupal 8, 9, and 10.</li>
                        <li>Good understanding of OOPS concepts, design patterns, and software architecture.</li>
                        <li>Languages: English and Hindi. Soft skills: problem-solving, collaboration, communication, time management, and adaptability.</li>
                    </ul>
                </article>
            </div>
        </section>

        <section id="contact" class="shell contact-section reveal">
            <div class="contact-box">
                <div>
                    <h2>Need a developer who can own the work from start to launch?</h2>
                    <p>Let us discuss Laravel, CodeIgniter, Drupal, CRM modules, APIs, automation, database performance, or full stack web development.</p>
                </div>
                <a class="btn" href="mailto:<?= htmlspecialchars($contact['email']) ?>">Contact Sahil</a>
            </div>
        </section>
    </main>

    <footer class="shell">
        <p>Declaration: I hereby declare that the above information is true to the best of my knowledge and belief.</p>
        <p>Copyright <?= date('Y') ?> Sahil Rohilla. All rights reserved.</p>
    </footer>

    <script>
        const reveals = document.querySelectorAll('.reveal');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.14 });

        reveals.forEach((item) => observer.observe(item));
    </script>
</body>
</html>
