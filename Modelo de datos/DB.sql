CREATE TABLE Curso (
	codigo int NOT NULL,
	codigo_alumno int NOT NULL,
	codigo_profesor int NOT NULL,
	PRIMARY KEY (codigo),
	CONSTRAINT fk_Curso_Profesor FOREIGN KEY (codigo_profesor) REFERENCES Profesor (codigo),
	CONSTRAINT fk_Curso_Alumno FOREIGN KEY (codigo_alumno) REFERENCES Alumno (codigo)
);

CREATE TABLE Alumno (
	codigo int NOT NULL,
PRIMARY KEY (codigo) 
);

CREATE TABLE Prueba (
	codigo int NOT NULL,
	codigo_curso int  NOT NULL,
	nota  int NOT NULL,
	codigo_alumno int NOT NULL,
	PRIMARY KEY (codigo) ,
	CONSTRAINT fk_Prueba_alumno FOREIGN KEY (codigo_alumno) REFERENCES Alumno (codigo),
	CONSTRAINT fk_Prueba_curso FOREIGN KEY (codigo_curso) REFERENCES Curso (codigo)
);

CREATE TABLE Profesor (
	codigo int NOT NULL,
	PRIMARY KEY (codigo) 
);


/*Escriba una consulta SQL que entregue a los alumnos y el promedio que tiene en cada
curso.*/
SELECT codigo_alumno,codigo_curso, AVG(nota)
FROM Prueba
GROUP BY codigo_alumno,codigo_curso;

/*Escriba una consulta SQL que entregue la lista de todos los alumnos con más de un
ramo con promedio rojo (nota final < 4.0).*/
SELECT bad_avg.codigo_alumno,bad_avg.codigo_curso,count(bad_avg.promedio) as cantidad_promedio_rojo
FROM ( SELECT codigo_alumno,codigo_curso, avg(nota) as promedio
FROM Prueba
GROUP BY codigo_alumno,codigo_curso
HAVING promedio < 4) bad_avg
GROUP BY bad_avg.codigo_alumno,bad_avg.codigo_curso;
