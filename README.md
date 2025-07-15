<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Présentation - Optique El Kayssar03</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      padding-top: 40px;
      font-family: 'Segoe UI', sans-serif;
    }
    .section-title {
      margin-top: 50px;
      margin-bottom: 20px;
    }
    code {
      background: #eee;
      padding: 2px 6px;
      border-radius: 4px;
    }
    .card {
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .icon {
      font-size: 1.4rem;
      color: #6c63ff;
      margin-right: 10px;
    }
  </style>
</head>
<body>

<div class="container">
  <h1 class="text-center mb-4">👓 Optique El Kayssar03</h1>
  <p class="lead text-center">Application Laravel pour la gestion d’un cabinet d’optique</p>

  <hr>

  <div class="section">
    <h3 class="section-title">🎯 Objectif</h3>
    <p>Ce projet permet de gérer facilement les patients, les ordonnances, les produits optiques (montures, verres, etc.) dans un environnement professionnel et moderne.</p>
  </div>

  <div class="section">
    <h3 class="section-title">👤 Utilisateurs</h3>
    <ul>
      <li>🧑‍⚕️ Opticien(ne)</li>
      <li>👩‍💼 Assistant(e) / Secrétaire</li>
      <li>🧑‍💻 Accès client possible à l’avenir</li>
    </ul>
  </div>

  <div class="section">
    <h3 class="section-title">⚙️ Fonctionnalités principales</h3>
    <ul>
      <li>📁 Gestion des patients</li>
      <li>🧾 Ordonnances et corrections ophtalmiques</li>
      <li>🕶️ Produits optiques (stock de lunettes, montures, etc.)</li>
      <li>📅 Rendez-vous *(optionnel)*</li>
      <li>📊 Tableau de bord synthétique</li>
      <li>💵 Facturation *(si activée)*</li>
    </ul>
  </div>

  <div class="section">
    <h3 class="section-title">🛠️ Technologies utilisées</h3>
    <ul>
      <li>⚙️ Laravel (PHP)</li>
      <li>🗂️ SQLite</li>
      <li>🎨 Blade + Bootstrap</li>
    </ul>
  </div>

  <div class="section">
    <h3 class="section-title">🚀 Installation</h3>
    <div class="card p-3">
      <p><strong>1. Cloner le projet</strong></p>
      <code>git clone https://github.com/JawadEll/optique-el-kayssar03.git</code><br>
      <code>cd optique-el-kayssar03</code>

      <p class="mt-3"><strong>2. Installer les dépendances</strong></p>
      <code>composer install</code><br>
      <code>npm install && npm run dev</code>

      <p class="mt-3"><strong>3. Configurer l’environnement</strong></p>
      <code>cp .env.example .env</code><br>
      <code>php artisan key:generate</code>

      <p class="mt-3"><strong>4. Lancer la migration (si nécessaire)</strong></p>
      <code>php artisan migrate</code>

      <p class="mt-3"><strong>5. Démarrer le serveur</strong></p>
      <code>php artisan serve</code>
    </div>
  </div>

  <div class="text-center mt-5">
    <p class="text-muted">Développé avec ❤️ pour Optique El Kayssar</p>
  </div>
</div>

</body>
</html>
