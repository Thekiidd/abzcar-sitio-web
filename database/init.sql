-- Tabla de Servicios
CREATE TABLE servicios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    categoria VARCHAR(50) NOT NULL
);

-- Tabla de Testimonios
CREATE TABLE testimonios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_cliente VARCHAR(100) NOT NULL,
    comentario TEXT NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de Contactos
CREATE TABLE contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    mensaje TEXT NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de Proyectos Realizados
CREATE TABLE proyectos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    imagen VARCHAR(255),
    fecha DATE
);

-- Tabla de Preguntas Frecuentes (FAQs)
CREATE TABLE faqs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pregunta VARCHAR(255) NOT NULL,
    respuesta TEXT NOT NULL
); 