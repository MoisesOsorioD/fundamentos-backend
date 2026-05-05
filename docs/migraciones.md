# Migraciones en Laravel

Las migraciones sirven para **crear y modificar la estructura de la base de datos usando código**.

También son un **control de versiones de la estructura de la base de datos**, lo que permite llevar un historial de cambios y poder avanzar o retroceder cuando sea necesario.

---

# 1. Crear una migración

```bash
php artisan make:migration create_products_table
```

 Crea un archivo en:

```
database/migrations/
```

---

# 2. Estructura básica

```php
public function up(): void
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('products');
}
```

---

# ¿Qué hacen estos métodos?

* `up()` → crea o modifica la tabla
* `down()` → revierte el cambio(rollback)

---

# 3. Tipos de columnas más usadas

```php
$table->id(); // clave primaria (BIGINT autoincremental)

$table->string('name'); // texto corto
$table->text('description'); // texto largo

$table->integer('quantity'); // número entero
$table->decimal('price', 10, 2); // decimal (10 dígitos, 2 decimales)

$table->boolean('status'); // true / false

$table->date('date'); // fecha
$table->timestamp('created_at'); // fecha + hora

$table->timestamps(); // created_at y updated_at
```

---

# 4. Claves foráneas (FOREIGN KEYS)

## ¿Qué es?

Es un campo que conecta una tabla con otra.

Ejemplo:

```
entries
- product_id
```

 `product_id` apunta a `products.id`

---

## Forma correcta en Laravel

```php
$table->foreignId('product_id')
      ->constrained()
      ->onDelete('cascade')
      ->onUpdate('cascade');
```

---

## ¿Qué hace cada parte?

| Parte               | Significado                                    |
| ------------------- | ---------------------------------------------- |
| foreignId           | crea columna `product_id`                      |
| constrained()       | conecta con tabla `products`                   |
| onDelete('cascade') | si borras el producto → se borran sus entradas |
| onUpdate('cascade') | si cambia el id → se actualiza                 |

---

## Si quieres especificar manualmente

```php
$table->foreignId('product_id')
      ->constrained('products')
      ->onDelete('cascade');
```

---

# 5. Ejemplo REAL

## Tabla: entries

```php
Schema::create('entries', function (Blueprint $table) {
    $table->id();

    // relación con productos
    $table->foreignId('product_id')
          ->constrained()
          -->onDelete('cascade')
          ->onUpdate('cascade');

    // relación con proveedores
    $table->foreignId('supplier_id')
          ->constrained()
          ->onDelete('cascade')
          ->onUpdate('cascade');

    // atributos
    $table->integer('quantity');
    $table->date('entry_date')->nullable();

    $table->timestamps();
});
```

---

# 6. nullable()

Permite valores vacíos:

```php
$table->text('entry_date')->nullable();
```

---

# 7. Métodos para ejecutar migraciones

```bash
php artisan migrate
```

 ejecuta todas las migraciones

---

## Revertir

```bash
php artisan migrate:rollback
```

 revierte el último cambio

---

## Reiniciar todo

```bash
php artisan migrate:fresh
```

 borra todo y vuelve a crear

---

# 8. Buenas prácticas

✔ Usar nombres en plural para tablas
✔ Usar `_id` para claves foráneas
✔ Usar `foreignId()->constrained()`
✔ Mantener orden lógico de campos

---

# Resumen final

* Migraciones = control de versiones de la estructura de la base de datos
* Permiten crear, modificar y eliminar tablas con código
* `foreignId` = crea relación
* `constrained` = conecta automáticamente
* `cascade` = mantiene integridad
* No manejan datos, solo estructura
