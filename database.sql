-- Database Pengelolaan Penilaian
CREATE DATABASE IF NOT EXISTS kelola_nilai;

USE kelola_nilai;

-- Tabel Siswa
CREATE TABLE IF NOT EXISTS siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL
);

-- Tabel Nilai
CREATE TABLE IF NOT EXISTS nilai (
    id INT AUTO_INCREMENT PRIMARY KEY,
    siswa_id INT NOT NULL,
    mata_pelajaran VARCHAR(50) NOT NULL,
    nilai INT NOT NULL,
    FOREIGN KEY (siswa_id) REFERENCES siswa(id) ON DELETE CASCADE
);

-- Contoh data awal
INSERT INTO siswa (nama) VALUES ('Ali'), ('Budi'), ('Citra');
INSERT INTO nilai (siswa_id, mata_pelajaran, nilai) VALUES
(1, 'Matematika', 85),
(1, 'Bahasa Indonesia', 90),
(2, 'Matematika', 70),
(3, 'Bahasa Inggris', 95);
