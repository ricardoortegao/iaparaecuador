# Guía de Despliegue - iaparaecuador.com

## Resumen de Cambios Recientes

### Feature Agregado: QA & Auditoría de Software

Se agregó un nuevo feature "QA & Auditoría de Software" con:
- ✅ Ícono SVG personalizado (clipboard con checkmarks verdes y estrella dorada)
- ✅ Modal con descripción completa del servicio
- ✅ Link externo a https://auditoriadesoftware.com
- ✅ Actualización en JSON-LD Schema
- ✅ Actualización en manifest.json
- ✅ Actualización en meta keywords
- ✅ Sitemap actualizado con fecha 2025-11-28

## Archivos Modificados

1. **public/index.php**
   - Agregado feature en array `$hero['features']`
   - Agregado ícono SVG `svg-qa-audit`
   - Actualizado JSON-LD `serviceType`
   - Actualizado `sameAs` con auditoriadesoftware.com
   - Actualizado meta keywords

2. **public/manifest.json**
   - Actualizada descripción incluyendo QA

3. **public/sitemap.xml**
   - Actualizada fecha a 2025-11-28

4. **public/index.html** (generado)
   - HTML estático generado desde PHP

## Proceso de Despliegue

### Opción 1: Usando el Script Automatizado (Windows)

```bash
deploy.bat
```

Este script:
1. Genera `index.html` desde `index.php`
2. Verifica que el archivo se generó correctamente
3. Confirma que el feature QA está presente

### Opción 2: Manual

```bash
# Generar HTML estático
php public/index.php > public/index.html

# Verificar generación
dir public/index.html

# Verificar contenido
findstr /C:"QA" public/index.html
```

### Opción 3: Linux/Mac

```bash
# Generar HTML estático
php public/index.php > public/index.html

# Verificar generación
ls -lh public/index.html

# Verificar contenido
grep "QA" public/index.html
```

## Despliegue en Cloudflare Pages

### Método Automático (Recomendado)

1. **Commit y Push al repositorio:**
   ```bash
   git add .
   git commit -m "Agregado feature QA & Auditoría de Software"
   git push origin main
   ```

2. **Cloudflare Pages desplegará automáticamente**
   - Monitorear en: https://dash.cloudflare.com/
   - El despliegue toma ~2-3 minutos

3. **Verificar en producción:**
   - https://iaparaecuador.com/

### Método Manual

Si prefieres desplegar manualmente:

1. **Generar HTML:**
   ```bash
   php public/index.php > public/index.html
   ```

2. **Subir archivos vía Cloudflare Dashboard:**
   - Ir a Pages → iaparaecuador → Upload
   - Subir carpeta `public/`

## Verificación Post-Despliegue

### 1. Verificar Feature QA

Abrir https://iaparaecuador.com/ y verificar:
- ✅ El botón "QA & Auditoría de Software" aparece en la grilla de features
- ✅ El ícono SVG se muestra correctamente (clipboard azul con checkmarks verdes y estrella dorada)
- ✅ Al hacer clic, se abre el modal con la información
- ✅ El botón "Ver detalle en AuditoriaDeSoftware.com" funciona
- ✅ El link abre en nueva pestaña

### 2. Verificar SEO

```bash
# Verificar JSON-LD
curl -s https://iaparaecuador.com/ | grep -A 20 "application/ld+json"

# Verificar meta tags
curl -s https://iaparaecuador.com/ | grep "QA"

# Verificar sitemap
curl https://iaparaecuador.com/sitemap.xml
```

### 3. Verificar Performance

- Google PageSpeed Insights: https://pagespeed.web.dev/
- GTmetrix: https://gtmetrix.com/
- WebPageTest: https://www.webpagetest.org/

### 4. Verificar Manifest

```bash
curl https://iaparaecuador.com/manifest.json
```

## Estructura de Archivos para Cloudflare

```
public/
├── index.html          # ✅ Generado desde PHP
├── index.php           # Fuente (no se usa en producción)
├── styles.css          # Estilos
├── script.js           # JavaScript
├── favicon.svg         # Ícono
├── manifest.json       # ✅ Actualizado
├── sitemap.xml         # ✅ Actualizado
├── robots.txt          # Configuración crawlers
└── _headers            # Headers HTTP Cloudflare
```

## Troubleshooting

### El feature QA no aparece

1. Verificar que `index.html` se generó correctamente:
   ```bash
   findstr /C:"QA & Auditoría" public\index.html
   ```

2. Limpiar caché de Cloudflare:
   - Dashboard → Caching → Purge Everything

3. Verificar en modo incógnito del navegador

### El ícono SVG no se muestra

1. Verificar que el SVG está en el HTML:
   ```bash
   findstr /C:"clipboardGradient" public\index.html
   ```

2. Verificar consola del navegador (F12) para errores

### El link a auditoriadesoftware.com no funciona

1. Verificar que el link tiene `target="_blank"`:
   ```bash
   findstr /C:"auditoriadesoftware.com" public\index.html
   ```

2. Verificar que el dominio está accesible:
   ```bash
   curl -I https://auditoriadesoftware.com
   ```

## Rollback

Si necesitas revertir los cambios:

```bash
# Revertir último commit
git revert HEAD

# O restaurar versión anterior
git checkout <commit-hash> public/index.php
php public/index.php > public/index.html
git add .
git commit -m "Rollback: Revertir feature QA"
git push
```

## Contacto

Para soporte técnico:
- Email: contacto@libresoft.ec
- Teléfono: (02) 252-4710

## Notas Importantes

⚠️ **Siempre regenerar index.html después de modificar index.php:**
```bash
php public/index.php > public/index.html
```

✅ **Cloudflare Pages sirve archivos estáticos:**
- No ejecuta PHP en producción
- Usa `index.html` generado
- Caché agresivo (configurado en `_headers`)

🚀 **Optimizaciones activas:**
- Minificación automática (HTML, CSS, JS)
- Compresión Brotli
- CDN global
- SSL/TLS automático
- DDoS protection

## Checklist de Despliegue

Antes de hacer push:

- [ ] Ejecutar `php public/index.php > public/index.html`
- [ ] Verificar que `index.html` contiene "QA"
- [ ] Verificar tamaño de `index.html` (~117KB)
- [ ] Probar localmente abriendo `public/index.html` en navegador
- [ ] Verificar que todos los links funcionan
- [ ] Verificar que el modal se abre correctamente
- [ ] Commit con mensaje descriptivo
- [ ] Push a repositorio
- [ ] Monitorear despliegue en Cloudflare Dashboard
- [ ] Verificar en producción
- [ ] Limpiar caché si es necesario

## Próximos Pasos

Después del despliegue exitoso:

1. Monitorear analytics en Cloudflare
2. Verificar tráfico al nuevo feature
3. Revisar conversiones/clicks al link de auditoriadesoftware.com
4. Considerar agregar más contenido sobre QA si hay demanda
5. Actualizar otros sitios relacionados (iasoloparami.com, expertosenia.net)
