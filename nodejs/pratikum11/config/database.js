// import mysql
const mysql = require("mysql")

// import dotenv
require("dotenv").config();

// destructing object process.env
const { DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE } = process.env;

// make connection
const db = mysql.createConnection({
    host: DB_HOST,
    user: DB_USER,
    password: DB_PASSWORD,
    database: DB_DATABASE,
});

// connect to database
db.connect(function (err) {
    if (err) {
        console.log("koneksi error:" + err.stack);
        return;
    } else {
        console.log("koneksi berhasil");
        return;
    }
});

// export db
module.exports = db;