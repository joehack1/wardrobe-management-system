# Wardrobe Management System

A full-stack application for managing your wardrobe, built with **Vue 3** (frontend) and **Laravel** (backend).

---

## Features

- **User Authentication**: Register and log in.
- **Clothing Items**: Add, edit, and delete clothing items.
- **Categorization**: Organize items into categories (e.g., tops, bottoms, shoes).
- **Tags**: Add tags to clothing items (e.g., casual, formal).
- **Favorites**: Mark clothing items as favorites.
- **Responsive UI**: User-friendly and mobile-friendly interface.

---

## Technologies Used

- **Frontend**: Vue 3, Vue Router, Pinia, Axios
- **Backend**: Laravel, MySQL
- **Tools**: Composer, npm, Vite

---

## Setup Instructions

Follow these steps to set up and run the project locally.

---

### **1. Clone the Repository**

Clone the repository to your local machine:

```bash
git clone https://github.com/your-username/wardrobe-management-system.git
cd wardrobe-management-system
```

### **2. Set Up the Backend (Laravel)**

Navigate to the backend directory:

```bash
cd wardrobe-backend
```

Install PHP dependencies:

```bash
composer install
```

Create a .env file and configure your database:

```bash
cp .env.example .env
```

Update the following lines in .env:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=wardrobe
DB_USERNAME=root
DB_PASSWORD=your_password
```

Generate an application key:

```bash
php artisan key:generate
```

Run migrations to create the database tables:

```bash
php artisan migrate
```

(Optional) Seed the database with sample data:

```bash
php artisan db:seed
```

Start the Laravel development server:

```bash
php artisan serve
```

The backend will be available at:

```
http://localhost:8000
```

### **3. Set Up the Frontend (Vue 3)**

Navigate to the frontend directory:

```bash
cd wardrobe-frontend
```

Install JavaScript dependencies:

```bash
npm install
```

Start the Vue development server:

```bash
npm run dev
```

The frontend will be available at:

```
http://localhost:5173
```

### **4. Configure API Connection**

Ensure the frontend is configured to communicate with the backend. Update the baseURL in src/api.js:

```javascript
import axios from 'axios';

const api = axios.create({
    baseURL: 'http://localhost:8000/api', // Laravel backend URL
});

export default api;
```

### **5. Access the Application**

Open your browser and go to:

```
http://localhost:5173
```

Register or log in to start using the application.

### **6. Build for Production**

When you're ready to deploy the app:

Build the Vue frontend:

```bash
npm run build
```

Deploy the dist folder to a hosting service (e.g., Netlify, Vercel, GitHub Pages).

Deploy the Laravel backend to a hosting service (e.g., Heroku, DigitalOcean, AWS).

## Folder Structure

```
wardrobe-management-system/
├── wardrobe-backend/       # Laravel backend
│   ├── app/                # Application logic
│   ├── database/           # Migrations and seeders
│   ├── routes/             # API routes
│   └── ...
├── wardrobe-frontend/      # Vue 3 frontend
│   ├── src/                # Vue components and logic
│   ├── public/             # Static assets
│   └── ...
└── README.md               # Project documentation
```

## Troubleshooting

- **CORS Issues**: Configure CORS in Laravel by updating config/cors.php.
- **Database Issues**: Ensure your database credentials in .env are correct.
- **Port Conflicts**: Use a different port for the frontend or backend if needed.

## License

This project is licensed under the MIT License. See the LICENSE file for details.
