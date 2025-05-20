<?php
include 'data.php';  // или require_once 'data.php';

// Получаем id из GET
$id = $_GET['id'] ?? null;

if (!$id || !isset($factions[$id])) {
    http_response_code(404);
    echo "Фракция не найдена";
    exit;
}

$faction = $factions[$id];
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title><?= htmlspecialchars($faction['name']) ?> — Barsuk Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #111;
            color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar, .footer {
            background-color: #1f1f1f;
        }
        .nav-link, .navbar-brand {
            color: #f8f9fa !important;
        }
        .nav-link:hover {
            color: #ffa500 !important;
        }
        .container {
            flex: 1;
            padding: 40px 20px;
        }
        h1 {
            border-bottom: 2px solid #ffa500;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .emblem {
            max-width: 250px;
            max-height: 250px;
            object-fit: contain;
            margin-bottom: 20px;
            border: 2px solid #ffa500;
            border-radius: 8px;
            background-color: #222;
        }
        .info {
            font-size: 18px;
            line-height: 1.5;
        }
        .info strong {
            color: #ffa500;
        }
        .btn-back {
            margin-top: 30px;
            background-color: #ffa500;
            color: #000;
            border: none;
            padding: 10px 25px;
            font-weight: 600;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }
        .btn-back:hover {
            background-color: #cc8400;
            color: #000;
            text-decoration: none;
        }
    </style>
</head>
<body>

<!-- Навигация -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Barsuk Project</a>
        <button class="navbar-toggler" data-bs-target="#navbarNavDropdown" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="guides.html">Гайды</a></li>
                <li class="nav-item"><a class="nav-link" href="factions.html">Фракции</a></li>
                <li class="nav-item"><a class="nav-link" href="mods.html">Моды</a></li>
                <li class="nav-item"><a class="nav-link" href="rules.html">Правила</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Контент -->
<div class="container text-center">
    <h1><?= htmlspecialchars($faction['name']) ?></h1>
    <?php if ($faction['emblem']): ?>
        <img src="<?= htmlspecialchars($faction['emblem']) ?>" alt="Эмблема <?= htmlspecialchars($faction['name']) ?>" class="emblem">
    <?php endif; ?>
    <p class="info"><strong>Сторона:</strong> <?= htmlspecialchars($faction['side']) ?></p>
    <p class="info"><strong>Командир:</strong> <?= htmlspecialchars($faction['commander']) ?></p>
    <p class="info"><strong>Описание:</strong> <?= htmlspecialchars($faction['description']) ?></p>
    <p class="info"><strong>Discord:</strong>
        <?php if ($faction['discord'] !== "N/D"): ?>
            <a href="<?= htmlspecialchars($faction['discord']) ?>" target="_blank" style="color:#ffa500;"><?= htmlspecialchars($faction['discord']) ?></a>
        <?php else: ?>
            Не доступен
        <?php endif; ?>
    </p>
    <a href="factions.html" class="btn-back">← Вернуться к списку фракций</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
