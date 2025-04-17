# 📇 Contact Manager App (LAMP + jQuery)

A responsive and interactive **Contact Manager Web Application** built using the **LAMP stack** (Linux, Apache, MySQL, PHP) with **jQuery** for dynamic behavior. The app features full **CRUD operations**, **live search**, and **alphabetical grouping** of contacts.

> Ideal for portfolio projects, resume highlights, and interview showcases!

---

## 🚀 Features

- ✅ Add new contacts with Name, Email, and Phone
- 🔤 View contacts grouped alphabetically (A–Z)
- 🔍 Live search filter powered by jQuery
- ✏️ Inline editing & updating of contact details
- 🗑️ Delete contact entries
- 🎨 Responsive UI using Bootstrap

---

## 🛠 Tech Stack

| Layer      | Technology                      |
|------------|----------------------------------|
| Frontend   | HTML5, CSS3, Bootstrap, jQuery   |
| Backend    | PHP (Procedural)                 |
| Database   | MySQL                            |
| Web Server | Apache                           |
| Platform   | LAMP (Linux, Apache, MySQL, PHP) |

---

## 📸 Screenshots

### ➕ Add Contact  
![Add Contact](screenshots/add-contact.png)

### 🔍 Live Search  
![Search Contact](screenshots/search.png)

### ✏️ Edit Contact  
![Edit Contact](screenshots/edit.png)

---

## 📖 How to Run Locally

1. 🔽 Clone the Repository:
   ```bash
   git clone https://github.com/your-username/contact-manager-app.git
   ```

2. 🗂️ Move the project into your Apache server directory:  
   - For **XAMPP**: `htdocs/`  
   - For **Linux**: `/var/www/html/`

3. 🛢️ Import the MySQL Database:
   - Import `contact_app.sql` file using **phpMyAdmin** or **MySQL CLI**.

4. 🔧 Update `db.php` with your MySQL credentials:
   ```php
   // db.php
   $conn = new mysqli("localhost", "your_username", "your_password", "your_db_name");
   ```

5. ▶️ Launch in your browser:
   ```
   http://localhost/contact-manager-app/
   ```

---

## 📁 Folder Structure

```
contact-manager-app/
│
├── index.html              # Main UI file
├── style.css               # Custom CSS
├── script.js               # jQuery functionality
├── db.php                  # Database connection
│
├── add_contact.php         # Add contact
├── get_contacts.php        # Fetch contacts
├── delete_contact.php      # Delete contact
├── update_contact.php      # Update contact
│
└── screenshots/
    ├── add-contact.png
    ├── search.png
    └── edit.png
```

---

## 🌐 Live Demo

🚧 **Coming Soon** – Will be hosted on a Linux server like 000webhost or InfinityFree.

---

## 👤 Author

**Vagini Alagarsamy**  
📧 Email: [vaginipy97@gmail.com](mailto:vaginipy97@gmail.com)  
🔗 [GitHub](https://github.com/av-coder-hub)  
🔗 [LinkedIn](https://www.linkedin.com/in/vaginialagarsamy)

---

## 🙌 Want to Contribute?

Feel free to:

- Fork the repo
- Add features
- Open pull requests
- Star ⭐ the project if you found it useful!

---

## 🙏 Acknowledgments

- [Bootstrap](https://getbootstrap.com/) – Responsive UI framework  
- [jQuery](https://jquery.com/) – JavaScript enhancements  
- [Font Awesome](https://fontawesome.com/) – Icon library  
- GitHub – Code hosting and collaboration  
