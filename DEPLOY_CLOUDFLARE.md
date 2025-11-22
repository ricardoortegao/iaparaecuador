# Despliegue en Cloudflare Pages - iaparaecuador.com

## Requisitos Previos
- Cuenta de Cloudflare
- Dominio iaparaecuador.com configurado en Cloudflare
- Repositorio Git (GitHub, GitLab, o Bitbucket)

## Configuración de Cloudflare Pages

### 1. Crear Proyecto en Cloudflare Pages

1. Ir a **Cloudflare Dashboard** → **Pages**
2. Click en **Create a project**
3. Conectar repositorio Git
4. Seleccionar el repositorio del proyecto

### 2. Configuración de Build

```
Framework preset: None
Build command: (dejar vacío)
Build output directory: /public
Root directory: iaparaecuador
```

### 3. Variables de Entorno

No se requieren variables de entorno especiales para este proyecto.

### 4. Configuración PHP en Cloudflare

Cloudflare Pages no soporta PHP nativamente. Opciones:

#### Opción A: Usar Cloudflare Workers (Recomendado)
- Convertir index.php a generación estática
- Usar Cloudflare Workers para funcionalidad dinámica

#### Opción B: Usar Cloudflare Workers + PHP WASM
- Implementar PHP usando WebAssembly
- Más complejo pero mantiene compatibilidad total

#### Opción C: Pre-generar HTML estático
```bash
# Ejecutar localmente para generar HTML
php index.php > index.html
```

### 5. Configuración de Dominio

1. En Cloudflare Pages → **Custom domains**
2. Agregar: `iaparaecuador.com` y `www.iaparaecuador.com`
3. Cloudflare configurará automáticamente los registros DNS

### 6. Configuración SSL/TLS

1. Ir a **SSL/TLS** → **Overview**
2. Seleccionar: **Full (strict)**
3. Habilitar: **Always Use HTTPS**
4. Habilitar: **Automatic HTTPS Rewrites**

### 7. Optimizaciones de Rendimiento

#### En Cloudflare Dashboard:

**Speed → Optimization**
- ✅ Auto Minify: HTML, CSS, JavaScript
- ✅ Brotli compression
- ✅ Early Hints
- ✅ Rocket Loader (opcional)

**Caching → Configuration**
- Browser Cache TTL: 4 hours
- Caching Level: Standard

### 8. Configuración de Seguridad

**Security → Settings**
- Security Level: Medium
- Challenge Passage: 30 minutes
- Browser Integrity Check: On

**Security → WAF**
- Habilitar reglas de seguridad básicas

### 9. Analytics y Monitoreo

**Analytics → Web Analytics**
- Habilitar Cloudflare Web Analytics
- Agregar el snippet si es necesario

## Archivos Importantes

### Archivos de Configuración
- `_headers` - Headers HTTP para Cloudflare
- `.htaccess` - Configuración Apache (si se usa)
- `manifest.json` - PWA manifest
- `robots.txt` - Configuración para crawlers
- `sitemap.xml` - Mapa del sitio

### Archivos de Contenido
- `index.php` - Página principal (requiere PHP)
- `styles.css` - Estilos
- `script.js` - JavaScript interactivo
- `favicon.svg` - Icono del sitio

## SEO y Metadatos

El sitio incluye:
- ✅ JSON-LD Schema (Organization + WebSite)
- ✅ Open Graph tags (Facebook)
- ✅ Twitter Card tags
- ✅ Meta tags completos
- ✅ Sitemap XML
- ✅ Robots.txt optimizado para IA crawlers
- ✅ Canonical URLs
- ✅ PWA Manifest

## Crawlers de IA Permitidos

El archivo `robots.txt` permite explícitamente:
- GPTBot (OpenAI)
- ChatGPT-User
- CCBot (Common Crawl)
- anthropic-ai (Claude)
- Claude-Web
- Google-Extended

## Comandos Útiles

### Generar HTML estático desde PHP
```bash
cd iaparaecuador/public
php index.php > index.html
```

### Validar sitemap
```bash
curl https://iaparaecuador.com/sitemap.xml
```

### Probar headers
```bash
curl -I https://iaparaecuador.com/
```

## Troubleshooting

### PHP no funciona en Cloudflare Pages
**Solución**: Pre-generar HTML o usar Cloudflare Workers

### Estilos no se cargan
**Verificar**: 
- Rutas relativas en CSS
- Headers de Content-Type
- Caché de Cloudflare

### Imágenes no aparecen
**Verificar**:
- Rutas de archivos
- Permisos de archivos
- Configuración de _headers

## Contacto y Soporte

Para soporte técnico:
- Email: contacto@libresoft.ec
- Teléfono: (02) 252-4710

## Actualizaciones

Para actualizar el sitio:
1. Hacer commit y push al repositorio
2. Cloudflare Pages desplegará automáticamente
3. Verificar en: https://iaparaecuador.com

## Notas Importantes

⚠️ **PHP en Cloudflare Pages**: Cloudflare Pages no ejecuta PHP nativamente. Considerar:
- Pre-generar HTML estático
- Usar Cloudflare Workers para lógica dinámica
- Migrar a hosting con soporte PHP (si se requiere funcionalidad dinámica)

✅ **Ventajas de Cloudflare Pages**:
- CDN global automático
- SSL gratuito
- DDoS protection
- Analytics incluido
- Despliegue automático desde Git
