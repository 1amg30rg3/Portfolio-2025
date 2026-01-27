# George Gavasheli - Portfolio 2025

A modern, full-stack portfolio application built with Laravel, Inertia.js, and Vue.js.

## 🚀 Live Demo

[ggavasheli.com](https://ggavasheli.com)

## � Tech Stack

**Backend**
- Laravel 11
- PHP 8.2+
- MySQL

**Frontend**
- Vue.js 3
- Inertia.js
- Vite
- SCSS

## ✨ Features

- Single Page Application (SPA) experience
- Responsive design for all devices
- Contact form with email integration
- Custom toast notifications with progress bars
- Smooth scroll navigation
- Project showcase
- Professional experience timeline

## 📦 Installation

### Prerequisites
- PHP >= 8.2
- Composer
- Node.js >= 18.x
- MySQL

### Setup

```bash
# Clone repository
git clone https://github.com/1amg30rg3/Portfolio-2025.git
cd portfolio-2025

# Install dependencies
composer install
npm install

# Environment setup
cp .env.example .env
php artisan key:generate

# Configure database in .env
DB_DATABASE=portfolio
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Run migrations
php artisan migrate

# Build assets
npm run build

# Start development
php artisan serve
npm run dev
```

Visit `http://localhost:8000`

## 📁 Project Structure

```
portfolio-2025/
├── app/Http/Controllers/    # Controllers
├── resources/
│   ├── js/
│   │   ├── Components/      # Vue components
│   │   ├── Pages/           # Inertia pages
│   │   └── Sections/        # Page sections
│   └── scss/                # Styles
├── routes/web.php           # Routes
└── database/migrations/     # Migrations
```

## 🎨 Key Highlights

- **Custom Toast System**: Built from scratch with animated progress bars and smooth transitions
- **Component Architecture**: Modular, reusable Vue 3 components with Composition API
- **Performance**: Optimized with Vite bundling and code splitting
- **SEO Ready**: Comprehensive meta tags and semantic HTML

## 📧 Contact

**George Gavasheli**
- Email: g.gavash3li@gmail.com
- Portfolio: [ggavasheli.com](https://ggavasheli.com)
- LinkedIn: [linkedin.com/in/george-gavasheli](https://www.linkedin.com/in/giorgi-gavasheli-0033691b1/)

## 📄 License

MIT License
