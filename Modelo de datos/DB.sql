CREATE TABLE Curso (
	codigo int NOT NULL,
	nombre varchar(255) NOT NULL,
	codigo_profesor int NOT NULL,
	PRIMARY KEY (codigo),
	CONSTRAINT fk_Curso_Profesor FOREIGN KEY (codigo_profesor) REFERENCES Profesor (codigo)
);

CREATE TABLE Alumno (
	codigo int NOT NULL,
	nombre varchar(255) NOT NULL,
	PRIMARY KEY (codigo) 
);

CREATE TABLE Curso_Alumno (
	codigo int NOT NULL,
	codigo_curso int NOT NULL,
	codigo_alumno int NOT NULL,
	PRIMARY KEY (codigo),
	CONSTRAINT fk_Curso_Curso FOREIGN KEY (codigo_curso) REFERENCES Curso (codigo),
	CONSTRAINT fk_Curso_Alumno FOREIGN KEY (codigo_alumno) REFERENCES Alumno (codigo)
);

CREATE TABLE Prueba (
	codigo int NOT NULL,
	codigo_curso_alumno int  NOT NULL,
	nota  int NOT NULL,
	PRIMARY KEY (codigo) ,
	CONSTRAINT fk_Prueba_curso_alumno FOREIGN KEY (codigo_curso_alumno) REFERENCES Curso_Alumno (codigo)

);

CREATE TABLE Profesor (
	codigo int NOT NULL,
	nombre varchar(255) NOT NULL,
	PRIMARY KEY (codigo) 
);


/*Escriba una consulta SQL que entregue a los alumnos y el promedio que tiene en cada
curso.*/
SELECT AVG(Prueba.nota) AS Promedio, Alumno.codigo , Curso.codigo 
FROM Alumno
INNER JOIN Curso_Alumno on Alumno.codigo = Curso_Alumno.codigo_alumno
INNER JOIN Prueba on Curso_Alumno.codigo = Prueba.codigo_curso_alumno
INNER JOIN Curso on Curso.codigo = Curso_Alumno.codigo_curso
GROUP BY Alumno.codigo, Curso.codigo;


/*Escriba una consulta SQL que entregue la lista de todos los alumnos con más de un
ramo con promedio rojo (nota final < 4.0).*/

SELECT promedio_rojo.alumno, promedio_rojo.curso, count(promedio_rojo.promedio) as cantidad_promedio_rojo, promedio_rojo.promedio
FROM (SELECT AVG(Prueba.nota) AS promedio, Alumno.codigo AS alumno , Curso.codigo AS curso
FROM Alumno
INNER JOIN Curso_Alumno on Alumno.codigo = Curso_Alumno.codigo_alumno
INNER JOIN Prueba on Curso_Alumno.codigo = Prueba.codigo_curso_alumno
INNER JOIN Curso on Curso.codigo = Curso_Alumno.codigo_curso
GROUP BY Alumno.codigo, Curso.codigo
HAVING promedio < 4) promedio_rojo
GROUP BY promedio_rojo.alumno, promedio_rojo.curso
HAVING cantidad_promedio_rojo > 1 ;


