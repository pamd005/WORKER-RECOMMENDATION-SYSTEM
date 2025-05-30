# 👷 Worker Recommendation System

A simple web-based application that helps recommend suitable workers for tasks or jobs based on user input. Built using PHP, HTML, and CSS, and runs locally on a XAMPP server.

---

## 💡 Features

* 📋 Form to enter job/task requirements
* 📑 Display list of recommended workers
* 🎯 Match based on skill, location, and experience
* 🎨 Clean and simple interface

---

## 🛠️ Tech Stack

* **Frontend**: HTML5, CSS3
* **Backend**: PHP
* **Database**: MySQL (via XAMPP)
* **Server**: Apache (XAMPP)

---

## 📁 Folder Structure

```
worker-recommendation-system/
│
├── index.html            # Home page
├── recommend.php         # Recommendation logic
├── style.css             # Styling
├── db_config.php         # Database connection
├── workers.sql           # Sample database
└── README.md
```

---

## 🧑‍💻 How to Run (Using XAMPP)

1. **Install XAMPP** if not already: [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html)

2. **Start Apache and MySQL** from the XAMPP Control Panel

3. **Import Database**:

   * Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   * Create a new database (e.g., `worker_system`)
   * Import `workers.sql` file

4. **Move Project Folder** to:

   ```
   C:\xampp\htdocs\worker-recommendation-system
   ```

5. **Open in Browser**:

   ```
   http://localhost/worker-recommendation-system/index.html
   ```

---

## 📌 Notes

* You can edit `recommend.php` to improve the recommendation logic.
* Add or modify workers in the MySQL table for better results.

---

## 👤 Author

**Prathmesh**
GitHub: [@pamd005](https://github.com/pamd005)

