<img src="https://img.icons8.com/ios-filled/100/vision.png" width="60" align="right" />

# 👓 Optique El Kayssar03

**Application Laravel** pour la gestion complète d’un **cabinet d’optique** : patients, ordonnances, produits optiques, rendez-vous et plus.

> 📦 Projet développé avec passion dans le cadre d’un projet professionnel en Laravel + SQLite.

---

## 🧭 Sommaire

- [🎯 Objectif](#-objectif)
- [👥 Utilisateurs](#-utilisateurs)
- [🧩 Fonctionnalités](#-fonctionnalités)
- [🛠️ Technologies](#️-technologies)
- [🚀 Installation](#-installation)
- [📸 Aperçu visuel](#-aperçu-visuel)
- [📄 Licence](#-licence)

---

## 🎯 Objectif

Le but de cette application est de :
- simplifier le travail d’un opticien,
- gérer les **fiches patients**, **ordonnances**, **produits**,
- avoir un **dashboard clair** et suivre les activités du cabinet.

---

## 👥 Utilisateurs

| Rôle         | Description                             |
|--------------|-----------------------------------------|
| 🧑‍⚕️ Opticien  | Gère tout le cabinet (consultations, stock) |
| 👩‍💼 Secrétaire | Assiste à l’accueil et la gestion       |
| 🧑‍💻 Client     | *(optionnel)* futur accès externe        |

---

## 🧩 Fonctionnalités

✅ Fiches patients  
✅ Gestion des ordonnances  
✅ Stock de lunettes, montures, verres  
✅ Dashboard clair (statistiques, état général)  
✅ Rendez-vous *(optionnel)*  
✅ Facturation *(si activée)*  

---

## 🛠️ Technologies

| Technologie | Description                  |
|-------------|------------------------------|
| Laravel     | Framework PHP MVC principal  |
| SQLite      | Base de données légère       |
| Blade       | Moteur de templates Laravel  |
| Bootstrap   | Interface responsive et simple |

---

## 🚀 Installation rapide

```bash
# 1. Cloner le projet
git clone https://github.com/JawadEll/optique-el-kayssar03.git
cd optique-el-kayssar03

# 2. Installer les dépendances
composer install
npm install && npm run dev

# 3. Configuration environnement
cp .env.example .env
php artisan key:generate

# 4. Migrer la base
php artisan migrate

# 5. Lancer le serveur
php artisan serve
