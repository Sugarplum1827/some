CREATE TABLE patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    address VARCHAR(255) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    contact VARCHAR(15) NOT NULL,
    birthplace VARCHAR(50) NOT NULL,
    nationality VARCHAR(30) NOT NULL,
    religion VARCHAR(30) NOT NULL,
    civil VARCHAR(20) NOT NULL,
    birthday DATE NOT NULL,
    blood VARCHAR(5) NOT NULL,
    diagnosis TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
