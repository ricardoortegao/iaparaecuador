# 📘 Guía de Mantenimiento y Expansión

Esta guía te ayudará a mantener y expandir el sitio iaparaecuador.com de manera organizada.

## 📁 Estructura del Proyecto

```
public/
├── index.html      ← Estructura HTML (semántica, accesible)
├── styles.css      ← Estilos (mobile-first, variables CSS)
└── script.js       ← Funcionalidad (vanilla JavaScript)
```

## ➕ Cómo Agregar Nuevos Productos/Servicios

### 1. Agregar una Nueva Sección

**En `index.html`:**

```html
<!-- Agregar después de la última sección, antes del footer -->
<section id="nuevo-producto" class="section">
    <div class="container">
        <h2 class="section-title">Título del Nuevo Producto</h2>
        <p class="section-subtitle">Descripción breve del producto</p>
        
        <!-- Contenido aquí -->
        <div class="content-box">
            <h3 class="content-title">Características</h3>
            <ul class="check-list">
                <li>Característica 1</li>
                <li>Característica 2</li>
                <li>Característica 3</li>
            </ul>
        </div>
    </div>
</section>
```

**En el menú de navegación (dentro de `<nav>`):**

```html
<li><a href="#nuevo-producto" class="nav-link">Nuevo Producto</a></li>
```

### 2. Agregar Tarjetas de Características

```html
<div class="feature-grid">
    <div class="feature-card">
        <div class="feature-icon">🎯</div>
        <h3>Título</h3>
        <p>Descripción</p>
    </div>
    <!-- Más tarjetas... -->
</div>
```

### 3. Agregar Acordeones (Contenido Expandible)

```html
<div class="accordion">
    <div class="accordion-item">
        <button class="accordion-header">
            <span>Título del Acordeón</span>
            <span class="accordion-icon">▼</span>
        </button>
        <div class="accordion-content">
            <div class="org-card">
                <h4>Subtítulo</h4>
                <p>Contenido detallado aquí</p>
            </div>
        </div>
    </div>
</div>
```

### 4. Agregar Cajas de Contenido

```html
<!-- Caja estándar -->
<div class="content-box">
    <h3 class="content-title">Título</h3>
    <p class="content-text">Texto descriptivo</p>
</div>

<!-- Caja de alerta -->
<div class="alert-box">
    <p>Mensaje importante</p>
</div>

<!-- Caja de alerta exitosa -->
<div class="alert-box alert-success">
    <p>Mensaje positivo</p>
</div>
```

## 🎨 Componentes Disponibles

### Listas

```html
<!-- Lista con checks -->
<ul class="check-list">
    <li>Item con ✓</li>
</ul>

<!-- Lista con flechas -->
<ul class="arrow-list">
    <li>Item con →</li>
</ul>
```

### Grids

```html
<!-- Grid de características (responsive automático) -->
<div class="feature-grid">
    <div class="feature-card">...</div>
</div>

<!-- Grid de soluciones -->
<div class="solutions-grid">
    <div class="solution-card">...</div>
</div>

<!-- Grid de servicios -->
<div class="services-grid">
    <div class="service-card service-blue">...</div>
    <div class="service-card service-purple">...</div>
    <div class="service-card service-green">...</div>
</div>
```

### Botones

```html
<a href="#seccion" class="btn btn-primary">Botón Primario</a>
<a href="#seccion" class="btn btn-secondary">Botón Secundario</a>
<a href="#seccion" class="btn btn-primary btn-large">Botón Grande</a>
```

## 🎨 Personalización de Colores

Los colores están definidos como variables CSS en `styles.css`:

```css
:root {
    --color-bg: #0f172a;           /* Fondo principal */
    --color-primary: #8b5cf6;      /* Morado */
    --color-secondary: #06b6d4;    /* Cyan */
    --color-accent: #ec4899;       /* Rosa */
    --color-success: #10b981;      /* Verde */
    --color-warning: #f59e0b;      /* Amarillo */
    --color-danger: #ef4444;       /* Rojo */
}
```

Para cambiar colores, modifica estos valores.

## 📱 Responsive Design

El sitio usa un enfoque **mobile-first**:

1. **Base (móvil)**: Estilos por defecto
2. **Tablet (640px+)**: `@media (min-width: 640px)`
3. **Desktop (1024px+)**: `@media (min-width: 1024px)`

Los grids se adaptan automáticamente:
- Móvil: 1 columna
- Tablet: 2 columnas
- Desktop: 3-4 columnas

## 🔧 Funcionalidades JavaScript

### Menú Móvil
- Se abre/cierra automáticamente
- Se cierra al hacer clic en un enlace

### Navegación Activa
- El enlace del menú se resalta según la sección visible

### Acordeones
- Solo uno abierto a la vez
- Click para expandir/contraer

### Animaciones
- Fade-in al hacer scroll
- Smooth scroll entre secciones

## 📝 Mejores Prácticas

### HTML
- Usa etiquetas semánticas (`<section>`, `<article>`, `<nav>`)
- Mantén IDs únicos para las secciones
- Usa clases descriptivas

### CSS
- Usa las variables CSS definidas
- Mantén el orden: mobile → tablet → desktop
- Agrupa estilos relacionados

### JavaScript
- El código está modular y comentado
- No necesitas modificar `script.js` para agregar contenido
- Los acordeones y menús funcionan automáticamente

## 🚀 Workflow de Actualización

1. **Edita `index.html`** para agregar contenido
2. **Personaliza `styles.css`** si necesitas estilos específicos
3. **Prueba localmente**: Abre `index.html` en el navegador
4. **Commit y push** a GitHub
5. **Cloudflare despliega automáticamente**

## 📊 Ejemplo: Agregar Nuevo Producto

```html
<!-- 1. Agregar al menú -->
<li><a href="#mi-producto" class="nav-link">Mi Producto</a></li>

<!-- 2. Agregar sección -->
<section id="mi-producto" class="section">
    <div class="container">
        <h2 class="section-title">Mi Nuevo Producto</h2>
        
        <div class="feature-grid">
            <div class="feature-card">
                <div class="feature-icon">🚀</div>
                <h3>Rápido</h3>
                <p>Descripción de velocidad</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3>Seguro</h3>
                <p>Descripción de seguridad</p>
            </div>
        </div>

        <div class="content-box">
            <h3 class="content-title">Detalles Técnicos</h3>
            <ul class="check-list">
                <li>Característica 1</li>
                <li>Característica 2</li>
            </ul>
        </div>
    </div>
</section>
```

## 🆘 Solución de Problemas

### El menú móvil no funciona
- Verifica que `script.js` esté cargado
- Revisa la consola del navegador (F12)

### Los estilos no se aplican
- Verifica que `styles.css` esté en la carpeta `public/`
- Limpia la caché del navegador (Ctrl+Shift+R)

### Las animaciones no funcionan
- Asegúrate de que JavaScript esté habilitado
- Verifica que no haya errores en la consola

## 📞 Contacto para Soporte

Si necesitas ayuda adicional, contacta al equipo de desarrollo.

---

**Última actualización**: Enero 2025
