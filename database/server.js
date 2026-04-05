require('dotenv').config();
const express = require('express');
const mysql = require('mysql2');
const bcrypt = require('bcrypt');

const app = express();
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

const port = process.env.PORT || 3000;

const db = mysql.createConnection({
    host: process.env.DB_HOST,
    user: process.env.DB_USER,
    password: process.env.DB_PASSWORD,
    database: process.env.DB_NAME
});

db.connect((err) => {
    if (err) {
        console.error('Koneksi DB Gagal: ' + err.message);
        return;
    }
    console.log('Mantap! Database ' + process.env.DB_NAME + ' Berhasil Terhubung! ✅');

    const userTable = `
    CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL, 
        email VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )`;

    const productTable = `
    CREATE TABLE IF NOT EXISTS products (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        description TEXT,
        price DECIMAL(10, 2) NOT NULL,
        stock INT DEFAULT 0,
        category VARCHAR(100),
        image_url VARCHAR(255)
    )`;

    const orderTable = `
    CREATE TABLE IF NOT EXISTS orders (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT,
        product_id INT,
        quantity INT DEFAULT 1,
        order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
        FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
    )`;

    db.query(userTable, () => {
        console.log("Tabel 'users' Ready! ");
        db.query(productTable, () => {
            console.log("Tabel 'products' Ready! ");
            db.query(orderTable, (err) => {
                if (err) console.log("Gagal buat relasi: ", err);
                else console.log("Relasi 3 Tabel Berhasil Terbentuk! ");
            });
        });
    });
});

// --- API ROUTES ---

app.get('/', (req, res) => {
    res.send('Backend Apparel E-Commerce Ready! 🚀✨');
});

// API REGISTER
app.post('/api/register', async (req, res) => {
    const { username, password, email } = req.body;
    try {
        const hashedPassword = await bcrypt.hash(password, 10);
        const query = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
        db.query(query, [username, hashedPassword, email], (err) => {
            if (err) return res.status(500).json({ message: "Gagal daftar!" });
            res.status(201).json({ message: "User Terdaftar Aman! 🛡️" });
        });
    } catch (e) { res.status(500).send("Error hashing"); }
});

// API LOGIN
app.post('/api/login', (req, res) => {
    const { username, password } = req.body;
    const query = "SELECT * FROM users WHERE username = ?";
    db.query(query, [username], async (err, results) => {
        if (err || results.length === 0) return res.status(404).json({ message: "User tidak ditemukan!" });
        const match = await bcrypt.compare(password, results[0].password);
        if (match) res.status(200).json({ message: `Login Berhasil! Halo ${username}! 🏠` });
        else res.status(401).json({ message: "Password salah! ❌" });
    });
});

// API GET PROFILE
app.get('/api/profile/:username', (req, res) => {
    const query = "SELECT id, username, email FROM users WHERE username = ?";
    db.query(query, [req.params.username], (err, results) => {
        if (results.length > 0) res.status(200).json(results[0]);
        else res.status(404).send("User Not Found");
    });
});

// API ADD PRODUCT
app.post('/api/products', (req, res) => {
    const { name, description, price, stock, category, image_url } = req.body;
    const query = "INSERT INTO products (name, description, price, stock, category, image_url) VALUES (?, ?, ?, ?, ?, ?)";
    db.query(query, [name, description, price, stock, category, image_url], (err, result) => {
        if (err) return res.status(500).send(err);
        res.status(201).json({ message: "Produk Berhasil Ditambah! 🛍️", id: result.insertId });
    });
});

app.listen(port, () => {
  console.log(`Server berjalan di http://localhost:${port}`);
});