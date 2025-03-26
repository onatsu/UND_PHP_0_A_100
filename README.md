# UND-training-PHP

Repositorio base para el curso de PHP.

Este proyecto incluye una configuración mínima para trabajar con PHP, PHPUnit y Docker, siguiendo buenas prácticas de desarrollo y preparación para testing.

---

## 🛠 Requisitos

- [Docker](https://www.docker.com/)
- [Make](https://www.gnu.org/software/make/) (en Mac viene por defecto)
- Un editor de texto o IDE (VS Code o PhpStorm recomendados)

---

## ▶️ Primeros pasos

```bash
# Clona el repositorio
git clone https://github.com/onatsu/UND_PHP_0_A_100.git
cd UND-training-PHP

# Levanta los servicios
make start

# Instala las dependencias PHP e inicia el proyecto
make init

# ejecutar los test
make test
```

## 📘 Glosario básico de PHP Módulo 1

---

### `<?php ?>`  
Etiqueta de apertura y cierre del código PHP.  
**Ejemplo:**  
```php
<?php echo "Hola"; ?>
```

### `echo`
Imprime texto o variables por pantalla.  
**Ejemplo:**
```php
echo "Feliz cumpleaños!";
```

### `Variable`
Se define con `$` y guarda un valor.  
**Ejemplo:**
```php
$nombre = "Ana";
```

### `Array`
Colección de elementos.  
**Ejemplo:**
```php
$dias = ["Lun", "Mar", "Mié"];
```

### `if / else`
Estructura condicional.  
**Ejemplo:**
```php
if ($edad > 18) {
    echo "Mayor de edad";
} else {
    echo "Menor de edad";
}
```

### `foreach`
Bucle para recorrer arrays.  
**Ejemplo:**
```php
foreach ($dias as $dia) {
    echo $dia;
}
```

### `function`
Define una función reutilizable.  
**Ejemplo:**
```php
function saluda($nombre) {
    echo "Hola $nombre";
}
```

### `return`
Devuelve un valor desde una función.  
**Ejemplo:**
```php
return $edad > 18;
```

### `class`
Define una clase (orientación a objetos).  
**Ejemplo:**
```php
class Persona {
    public $nombre;
}
```

### `new`
Crea una instancia (objeto) de una clase.  
**Ejemplo:**
```php
$p = new Persona();
```

### `public / private / protected`
Controlan la visibilidad de métodos o propiedades.  
**Ejemplo:**
```php
public $nombre;
```

### `__construct()`
Método especial que se ejecuta al crear el objeto.  
**Ejemplo:**
```php
function __construct($nombre) {
    $this->nombre = $nombre;
}
```

### `$this`
Referencia al objeto actual.  
**Ejemplo:**
```php
$this->nombre = "Ana";
```

### `namespace`
Organización del código en módulos o paquetes.  
**Ejemplo:**
```php
namespace App;
```

### `use`
Importa una clase o namespace.  
**Ejemplo:**
```php
use App\Persona;
```

### `require / include`
Incluye otro archivo PHP.  
**Ejemplo:**
```php
require 'utils.php';
```

### `DateTime`
Clase para trabajar con fechas.  
**Ejemplo:**
```php
$hoy = new DateTime();
```

### `== / ===`
Comparación (igualdad / igualdad estricta).  
**Ejemplo:**
```php
if ($a === $b)
```

### `null`
Representa un valor vacío o sin definir.  
**Ejemplo:**
```php
$valor = null;
```

### `isset()` / `empty()`
Comprueban si una variable existe o está vacía.  
**Ejemplo:**
```php
if (isset($nombre)) {
    echo "Existe";
}

if (empty($nombre)) {
    echo "Está vacía";
}
```

### `composer`
Gestor de dependencias de PHP y autoloading.  
**Ejemplo:**
```bash
composer install
```

## 🧪 Glosario básico de Testing en PHP módulo 1

---

### `test` / `prueba`
Bloque de código que verifica el comportamiento de otro.  
**Ejemplo:**
```php
public function testSaludo() {
    $this->assertEquals("Hola", $servicio->saludar());
}
```

### `PHPUnit`
Framework de testing más usado en PHP.  
**Ejemplo de ejecución:**
```bash
vendor/bin/phpunit
```

### `assertEquals`
Comprueba que dos valores sean iguales.  
**Ejemplo:**
```php
$this->assertEquals(5, $resultado);
```

### `assertTrue` / `assertFalse`
Comprueban que una condición sea verdadera o falsa.  
**Ejemplo:**
```php
$this->assertTrue($usuario->esMayorDeEdad());
$this->assertFalse($pedido->estaPagado());
```

### `expectException`
Se usa para comprobar que un método lanza una excepción.  
**Ejemplo:**
```php
$this->expectException(\InvalidArgumentException::class);
```

### `@test`
Anotación opcional para marcar métodos como test en vez de usar `testNombre()`.  
**Ejemplo:**
```php
/**
 * @test
 */
public function devuelve_error_si_el_email_es_invalido() { ... }
```

### `Test-Driven Development (TDD)`
Enfoque donde se escribe primero el test, luego el código que lo hace pasar.  
**Ciclo:**
1. Escribir un test que falla
2. Hacer que pase
3. Refactorizar

## 📄 Glosario – Lectura de ficheros CSV en PHP

---

### `while`
Bucle que se repite mientras una condición sea verdadera.  
Aquí se usa para leer cada línea del fichero hasta el final.  
**Ejemplo:**
```php
while (($fila = fgetcsv($handle)) !== false) {
    // procesar línea
}
```

### `file_exists()`
Comprueba si un fichero existe.  
**Ejemplo:**
```php
if (file_exists('datos.csv')) { ... }
```


### `is_readable()`
Verifica si un fichero se puede leer.  
**Ejemplo:**
```php
if (is_readable('datos.csv')) { ... }
```


### `fopen()`
Abre un fichero para leerlo o escribirlo.  
Devuelve un *resource* que representa el fichero abierto.  
**Ejemplo:**
```php
$handle = fopen('datos.csv', 'r');
```


### `'r'`
Modo de apertura de fichero: solo lectura.  
Otros modos:
- `'w'` → solo escritura (borra el contenido anterior)
- `'a'` → escritura al final del fichero (append)


### `fgetcsv()`
Lee una línea del fichero y la convierte en un array (automáticamente separa por comas).  
**Ejemplo:**
```php
$fila = fgetcsv($handle);
```


### `array_combine()`
Crea un array asociativo usando un array como claves y otro como valores.  
Muy útil para convertir cabeceras CSV en claves.  
**Ejemplo:**
```php
array_combine(['nombre', 'email'], ['Ana', 'ana@example.com']);
// Resultado: ['nombre' => 'Ana', 'email' => 'ana@example.com']
```


### `fclose()`
Cierra un fichero abierto con `fopen`.  
**Ejemplo:**
```php
fclose($handle);
```


### `throw new \RuntimeException()`
Lanza una excepción si ocurre un error. Útil para cortar la ejecución si el fichero no es válido.  
**Ejemplo:**
```php
throw new \RuntimeException("No se puede leer el fichero");
```


### `__DIR__`
Constante mágica que devuelve la ruta del directorio actual.  
**Ejemplo:**
```php
$path = __DIR__ . '/cumples.csv';
```

## 🧪 Glosario básico de Testing en PHP módulo 2

---

### `setUp()`
Método que se ejecuta antes de cada test. Sirve para preparar el entorno.  
**Ejemplo:**
```php
protected function setUp(): void {
    $this->servicio = new Servicio();
}
```

### `tearDown()`
Método que se ejecuta después de cada test. Se usa para limpiar.  
**Ejemplo:**
```php
protected function tearDown(): void {
    // limpiar recursos
}
```
### `test double`
Término genérico para mocks, stubs, spies y fakes usados en pruebas.

### `mock`
Objeto falso que simula el comportamiento de una clase o interfaz.  
**Ejemplo:**
```php
$repositorio = $this->createMock(RepositorioUsuarios::class);
```

### `stub`
Mock más simple, que devuelve valores predefinidos.  
**Ejemplo:**
```php
$stub->method('buscar')->willReturn($usuario);
```

### `expects()`
Define cuántas veces se espera que se llame un método del spy.  
**Ejemplo:**
```php
$notificador->expects($this->once());
```

### `method()`
Indica qué método se quiere espiar.  
**Ejemplo:**
```php
->method('enviarFelicitacion')
```

### `with()`
Especifica los argumentos esperados en la llamada al método.  
**Ejemplo:**
```php
->with('ana@example.com', '¡Feliz cumpleaños Ana!')
```

### `once()` / `never()` / `exactly(n)`
Indican cuántas veces se espera que se llame el método.
- `once()` → una vez
- `never()` → ninguna
- `exactly(2)` → exactamente dos veces  
  **Ejemplo:**
```php
$this->once();
$this->never();
$this->exactly(2);
```

### Ejemplo completo de spy en PHPUnit:

```php
public function test_guardador_guarda_datos_al_procesar()
{
    $repositorio = $this->createMock(RepositorioDeDatos::class);

    $repositorio->expects($this->once())
        ->method('guardar')
        ->with($this->equalTo(['id' => 123, 'valor' => 'prueba']));

    $servicio = new ProcesadorDeDatos($repositorio);

    $entrada = ['id' => 123, 'valor' => 'prueba'];
    $servicio->procesar($entrada);
}
```