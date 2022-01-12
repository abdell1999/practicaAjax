CREATE DATABASE practica_ajax;
USE practica_ajax;
CREATE TABLE employees (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(45) NOT NULL,
  lastname1 VARCHAR(45) NOT NULL,
  lastname2 VARCHAR(45),
  image VARCHAR(500) UNIQUE NOT NULL
);



INSERT INTO employees (name, lastname1, lastname2, image)
VALUES ("Abdellah", "Bukad-duh", "Rappani", "https://img.myloview.es/posters/three-persons-admin-icon-outline-three-persons-admin-vector-icon-for-web-design-isolated-on-white-background-700-200485248.jpg");

INSERT INTO employees (name, lastname1, lastname2, image)
VALUES ("Carlos", "Ruíz", "Peña", "http://www.hotavatars.com/wp-content/uploads/2019/01/I80W1Q0.png");

INSERT INTO employees (name, lastname1, lastname2, image)
VALUES ("Jhon", "Kent", "", "https://lastfm.freetls.fastly.net/i/u/270x205/298000f3ae5d4532b389f8d1f4794dd4.jpg");

INSERT INTO employees (name, lastname1, lastname2, image)
VALUES ("Martha", "Kent", "", "https://mediamass.net/jdd/public/documents/celebrities/3842.jpg");