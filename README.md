# Desafío Técnico

Este desafío se trata de resolver preguntas de desarrollo de algoritmos y/o modelar datos.

## Pregunta Nº 1: Programación

Se desarrollaron dos algoritmos:
  * Determinar la cantidad de 0’s a la derecha de n! (factorial).
  * Dado un número entero, entregar su representación en palabras.
  
Ambos algoritmos fueron desarrollados en lenguaje java. Estos se compilan de la siguiente manera

```
$ javac count_ceros.java
$ java Main

$ javac convert_number_to_words.java
$ java Main

```

## Pregunta Nº 2: Modelo de Datos

Se crearon las tablas(SQL) respecto al siguiente enunciado:
Un establecimiento educacional necesita un sistema para administrar sus cursos. Cada curso
tendrá un profesor a cargo y una serie de alumnos inscritos. Cada profesor, así como cada
alumno puede estar en más de un curso. Además cada curso tendrá una cantidad no
determinada de pruebas, y el sistema debe permitir ingresar la nota (entre 1.0 y 7.0) para cada
alumno en cada prueba.

En la carpeta modelo de datos se encuentra el archivo DB.sql que contiene las tablas además de dos consultas.

## Pregunta Nº 3: Diseño Orientado a Objetos

Se dearrollaron dos problemas: 
* Diseñe lo necesario para resolver el problema del establecimiento educacional de la
sección anterior (Modelo de Datos).
* Diseñe un mazo de cartas con propiedades y métodos básicos que considere para ser
utilizado en distintas aplicaciones que utilicen cartas.

El primero de estos fue desarrollado en Laravel. En cambio el segundo fue desarrollado en java. Ambos se encuentran en la carpeta Pregunta 3 Diseño Orientado a Objetos y 4 Desarrollo Front-end.

## Pregunta Nº 4: Desarrollo Front-end

Se desarrollo una agenda semanal con Javascript, HTML y CSS que reciba el JSON desde una URL estática y permita dibujar la agenda con bloques de 30. Esta fue desarrollado en Laravel, para ello en la carpeta Pregunta 3 Diseño Orientado a Objetos y 4 Desarrollo Front-end hay otra carpeta llamada OOP establecimiento educacional y Front Agenda, la cual se compila de la siguiente manera:
```
$ php artisan serve

```
Luego se debe ingrear la url en el explorador de la siguiente manera:
```
http://localhost:8000/agenda
```

