
---

# 📚 Book Store Website

Welcome to the **Book Store Website**! This is a fully functional e-commerce platform designed for selling books online. The website allows users to browse products, add items to their cart, place orders, and manage their accounts. Admins can manage products, view orders, and handle user data through a dedicated admin dashboard.

## 🌟 Features

### For Users:
- **Browse Products**: View available books with details like name, price, and images.
- **Search Functionality**: Search for specific books using keywords.
- **Shopping Cart**: Add/remove books to/from the cart and update quantities.
- **Checkout Process**: Place orders with payment methods and view order history.
- **User Authentication**: Register, log in, and manage account details.

### For Admins:
- **Dashboard**: View key metrics like total orders, revenue, and user count.
- **Product Management**: Add, edit, or delete books from the store.
- **Order Management**: View and update the status of placed orders.
- **User Management**: View and delete user accounts.

---

## 🛠 Technologies Used

- **Frontend**:
  - HTML5
  - CSS3 (Custom styles +  BootStrap Framework)
  - JavaScript (Vanilla JS)

- **Backend**:
  - PHP (Server-side scripting)
  - MySQL (Database management)

- **Tools & Libraries**:
  - Font Awesome (Icons)
  - BootStrap(front-end framework)
  - Google Fonts (Typography)

---

## 🚀 Installation & Setup

### Prerequisites
1. **Web Server**: Install [XAMPP](https://www.apachefriends.org/) or any other local server environment.
2. **Code Editor**: Use [VS Code](https://code.visualstudio.com/) or any preferred editor.
3. **Browser**: Modern browsers like Chrome, Firefox, or Edge.

### Steps to Run Locally

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your-username/book-store.git
   cd book-store
   ```

2. **Set Up the Database**:
   - Open `config.php` and update the database credentials:
     ```php
     $host = 'localhost';
     $user = 'root'; // Default XAMPP username
     $password = ''; // Default XAMPP password
     $database = 'shop_db';
     ```
   - Import the SQL file (`shop_db.sql`) into your MySQL database using phpMyAdmin or the MySQL CLI:
     ```sql
     CREATE DATABASE book_store;
     USE book_store;
     SOURCE path/to/database.sql;
     ```

3. **Run the Application**:
   - Start Apache and MySQL in XAMPP.
   - Place the project folder inside the `htdocs` directory of XAMPP.
   - Access the website at: `http://localhost/book-store`.

4. **Admin Access**:
   - Default Admin Credentials:
     - Email: `kotaa@gmail.com`
     - Password: `123`

---

## 📂 Project Structure

```
book-store/
├── css/               # Custom and Milligram CSS files
│   ├── style.css      # Main styles for the frontend
│   └── admin_style.css # Styles for the admin dashboard
├── js/                # JavaScript files
│   ├── script.js      # Frontend interactivity
│   └── admin_script.js # Admin-specific scripts
├── images/            # Product and UI images
├── uploaded_img/      # Uploaded product images
├── config.php         # Database connection configuration
├── index.php          # Homepage
├── login.php          # User login page
├── register.php       # User registration page
├── shop.php           # Product listing page
├── cart.php           # Shopping cart page
├── checkout.php       # Checkout page
├── orders.php         # User order history
├── admin/             # Admin dashboard files
│   ├── dashboard.php  # Admin overview
│   ├── products.php   # Manage products
│   ├── orders.php     # Manage orders
│   └── users.php      # Manage users
└── README.md          # This file
```

---

## 🎨 Design Philosophy

The design follows a **minimalist approach** inspired by the **Milligram CSS framework**, ensuring a clean and responsive layout. Custom styles are added to enhance the user experience while maintaining simplicity.

---

## 🤝 Contributing

Contributions are welcome! If you'd like to contribute, please follow these steps:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeatureName`).
3. Commit your changes (`git commit -m "Add YourFeatureName"`).
4. Push to the branch (`git push origin feature/YourFeatureName`).
5. Open a pull request.

---

## 📜 License

This project is licensed under the **MIT License**. See the [LICENSE](LICENSE) file for more details.

---

## 🙏 Acknowledgments

- Special thanks to [Font Awesome](https://fontawesome.com/) for the icons.
- Inspiration drawn from modern e-commerce platforms.

---

## 📞 Contact

For questions or feedback, feel free to reach out:

- **GitHub**: [@kotaainthehub](https://github.com/kotaainthehub)
- **Email**: riznirox31@example.com

---

Happy coding! 🚀✨

---




