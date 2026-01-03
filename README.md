.

📚 BookWorld – Online Library & Book Store Website

BookWorld is a responsive, user-friendly web application designed for book lovers.
It provides an online platform to explore books, read reviews, learn about the library, and manage user accounts with login and registration features.

This project is ideal for academic projects, portfolios, and beginner-to-intermediate web development learning.

🌟 Features

📖 About Us Page – Information about the library, mission, and services

🛒 Product Page – Display books with pricing

⭐ Review Page – User reviews and ratings system

🔐 User Authentication

Login system (login.php)

Registration system (rejister.php)

🧭 Navigation Bar – Responsive menu with icons

🧾 Footer Section – Quick links and site info

💻 Responsive Design – Works on desktop and mobile

🎨 Modern UI – CSS animations, icons, and clean layout

🛠️ Technologies Used

HTML5 – Page structure

CSS3 – Styling, animations, responsive layout

JavaScript – Navigation interactions

PHP – Backend login & registration

MySQL – Database connection (db.php)

Font Awesome – Icons

Swiper.js – UI components (if enabled)

📁 Project Structure
BookWorld/
│
├── navigation.html      # Home page with navbar
├── About.html           # About Us page
├── product.html         # Book products page
├── review.html          # Reviews & ratings page
├── footer.html          # Footer layout
│
├── login.php            # User login
├── rejister.php         # User registration
├── db.php               # Database connection
│
├── navigation.css
├── review.css
├── footer.css
├── about.css
│
├── navigation.js        # Navbar interactions
├── images/              # Book images & assets
└── README.md

⚙️ Setup Instructions
1️⃣ Clone the Repository
git clone https://github.com/your-username/BookWorld.git

2️⃣ Move to Project Folder
cd BookWorld

3️⃣ Database Setup

Create a MySQL database (example: bookworld)

Import your user table

Update database credentials in db.php

$conn = mysqli_connect("localhost", "root", "", "bookworld");

4️⃣ Run the Project

Use XAMPP / WAMP / LAMP

Place the project inside the htdocs folder

Open in browser:

http://localhost/BookWorld/navigation.html

🎯 Purpose of the Project

Academic web development project

Demonstrates frontend + backend integration

Suitable for library systems, bookstore demos, SDG education projects

Helps beginners understand real-world website structure

🚀 Future Improvements

Add admin dashboard

Book search & filter system

Online checkout & payment integration

User review submission

API-based book data

👤 Author

Nilusha Dilshan
📍 Sri Lanka
💻 Web Development Student

📜 License

This project is for educational purposes.
Feel free to modify and improve it.
