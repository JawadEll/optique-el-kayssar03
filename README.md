# 👓 Optique El Kayssar03

Application Laravel pour la gestion d’un cabinet d’optique.  
Développé avec ❤️ pour simplifier le suivi des patients, des ordonnances, et des produits optiques.

---

## 🎯 Objectif

Ce projet permet de gérer facilement les patients, les ordonnances, les produits optiques (montures, verres, etc.) dans un environnement professionnel et moderne.

---

## 👤 Utilisateurs

- 🧑‍⚕️ Opticien(ne)
- 👩‍💼 Assistant(e) / Secrétaire
- 🧑‍💻 Accès client possible à l’avenir

---

## ⚙️ Fonctionnalités principales

- 📁 Gestion des patients
- 🧾 Ordonnances et corrections ophtalmiques
- 🕶️ Produits optiques (stock de lunettes, montures, etc.)
- 📅 Rendez-vous *(optionnel)*
- 📊 Tableau de bord synthétique
- 💵 Facturation *(si activée)*

---

## 🛠️ Technologies utilisées

- ⚙️ Laravel (PHP)
- 🗂️ SQLite
- 🎨 Blade + Bootstrap

---

## 🚀 Installation

```bash
# 1. Cloner le projet
git clone https://github.com/JawadEll/optique-el-kayssar03.git
cd optique-el-kayssar03

# 2. Installer les dépendances
composer install
npm install && npm run dev

# 3. Configurer l’environnement
cp .env.example .env
php artisan key:generate

# 4. Lancer les migrations (si nécessaire)
php artisan migrate

# 5. Lancer le serveur
php artisan serve
