CREATE DATABASE IF NOT EXISTS db_crud_mysqli;

USE db_crud_mysqli;

CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL UNIQUE,
    jurusan VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO mahasiswa (nama, nim, jurusan, email) VALUES
('Andi Saputra', '2024001', 'Teknik Informatika', 'andi@example.com'),
('Siti Aminah', '2024002', 'Sistem Informasi', 'siti@example.com'),
('Budi Pratama', '2024003', 'Teknik Komputer', 'budi@example.com');
