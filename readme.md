# 🧑‍💻 Proyecto: Lecturiosis

Este proyecto es una actividad práctica donde trabajarás con clases en PHP. El objetivo es que clones este repositorio, trabajes localmente agregando **getters y setters** al modelo `User.php`, y luego subas tu trabajo a tu propio repositorio para entregar la tarea en Google Classroom.

---

## 📦 Requisitos

- Tener instalado [Git](https://git-scm.com) ✅
- Tener instalado PHP **versión 8.3 o superior** ✅
- Tener un editor de código (recomendado: [Visual Studio Code](https://code.visualstudio.com)) ✅

---

## 🚀 Instrucciones

### 1. Clona este repositorio

```bash
git clone https://github.com/JulitoM3/lecturiosis.git
cd lecturiosis
```

---

### 2. Crea tu propio repositorio

1. Entra a [GitHub](https://github.com) y crea un nuevo repositorio con el nombre `lecturiosis`.
2. No inicialices con README, `.gitignore` ni licencia.
3. Copia la URL del nuevo repositorio.

---

### 3. Conecta tu carpeta local con tu repositorio

```bash
git remote remove origin
git remote add origin https://github.com/TU-USUARIO/lecturiosisgit
```

---

### 4. Actividad

1. Implementa **getters y setters** en `User.php` para los atributos privados.
2. Crea una interfaz `ModelInterface` con los siguientes métodos:
   - `save()`
   - `delete()`
   - `findById($id)`
3. Crea una clase base `Model` que implemente `ModelInterface`. Simula su comportamiento con `echo` o estructuras básicas de PHP.
4. Haz que la clase `User` **herede** de `Model` y agregue sus propios atributos (`id`, `name`, `email`, etc.).
5. Crea un script `index.php` donde:
   - Instancies un objeto `User`.
   - Asignes valores con los setters.
   - Llamen los métodos `save()`, `findById()`, y `delete()`.

---

### 5. Haz tu primer commit

```bash
git add .
git commit -m "Agregué getters y setters al modelo User"
```

---

### 6. Sube tu código a GitHub

```bash
git push -u origin main
```

> Si usas `master` como rama por defecto, reemplaza `main` por `master`.

---

## ✅ Entrega

1. Copia la URL de tu repositorio (de tu cuenta).
2. Entra a Google Classroom.
3. Busca la tarea correspondiente y **entrega el enlace a tu repositorio de GitHub**.

---

## 📂 Estructura sugerida de la actividad

...
models/
├── ModelInterface.php ← Interfaz con métodos comunes
├── Model.php ← Clase base que implementa la interfaz
└── User.php ← Clase que hereda de Model

---

## 🧠 Criterios de evaluación

| Criterio                                               | Puntos |
| ------------------------------------------------------ | ------ |
| Getters y setters en `User.php`                        | 20     |
| Interfaz `ModelInterface` definida correctamente       | 15     |
| Clase `Model` implementa los métodos de la interfaz    | 20     |
| Herencia correcta de `Model` en `User`                 | 15     |
| Script funcional en `index.php` que prueba los métodos | 20     |
| Repositorio organizado y entregado correctamente       | 10     |

**Total: 100 puntos**

---

## 💡 Tips

- No es necesario usar una base de datos real, puedes simularla.
- Usa `private` para atributos y `public` para métodos.
- Sigue las buenas prácticas: nombres claros, código ordenado y uso correcto de `namespace`.

---
