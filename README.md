# Text Analyzer App

A **modern text analysis tool** built with **Laravel 12**, **TailwindCSS**, and **MySQL**, designed to help users easily **analyze, clean, and transform text**. This application supports **text statistics, case conversion, word replacement**, and **data persistence** for previous analyses.

## Screenshots

**Home Page — Text Analyzer**  

<img width="1280" height="712" alt="image" src="https://github.com/user-attachments/assets/1252ebfc-eff1-4aa7-a2c7-c028e0801010" /><br>
  
## Tech Stack

- **Backend:** Laravel 12  
- **Frontend:** Blade + TailwindCSS  
- **Database:** MySQL 
- **Version Control:** GitHub  

## Quick Start

```bash
# Clone repository
git clone https://github.com/fahrilhadi/text-analyzer.git
cd text-analyzer

# Install dependencies
composer install
npm install
npm run dev

# Setup environment
cp .env.example .env
php artisan key:generate

# Run migrations with seeder
php artisan migrate:fresh --seed

# Serve application
php artisan serve
