CREATE TABLE usuarios (
         id INT AUTO_INCREMENT PRIMARY KEY,
         username VARCHAR(50) UNIQUE NOT NULL,
         password VARCHAR(255) NOT NULL,
         email VARCHAR(100) UNIQUE NOT NULL,
         nombre VARCHAR(100),
         apellido VARCHAR(100),
         fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );