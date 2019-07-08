# Sopa de Letras - Laravel 5.8
Simple juego de sopa de letras, un poco distinto al clásico. En este caso, tenemos que seleccionar un tablero de los predefinidos y el sistema automáticamente buscará cuantas veces aparece la palabra 'OIE'.

## Instalación
Para instalar y ejecutar el sistema, siga los siguientes pasos:

```
$ git clone https://github.com/matiechaza/sopa-de-letras.git
$ cd sopa-de-letras
$ cp .env.example .env
$ composer install
$ php artisan key:generate
$ php artisan serve
```
Ahora ya puedes acceder a la aplicación ingresando http://127.0.0.1:8000 en tu navegador.

## Test
Se pueden ejecutar los test del sistema con el siguiente comando:
```
$ php vendor/phpunit/phpunit/phpunit tests\Unit --testdox
```


## Arquitecura elegida
Se decidio implementar un arquitectura inspirada en la Hexagonal para trabajar enfocado en la solución del sistema y luego montarla al framework, en este caso Laravel.


## Beneficios de la arquitectura
- Desacoplamiento del framework.
- Alto rendimiento. Ya que podemos implementar un CommandBus Asíncrono para las tareas costosas.
- Reutilización (la lógica del sistema se puede reutilizar en HTTP, CLI, API, etc.).
- Mejor mantenimiento.
- Fácilidad para testear.
- Entre más beneficios que no son aplicables en este ejercicio.
