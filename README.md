# IA para Ecuador

Sitio web oficial de IA para Ecuador, hospedado en Cloudflare Pages.

## 🚀 Estado Actual

Sitio en construcción con placeholder minimalista.

## 📁 Estructura

```
iaparaecuador/
├── public/              # Archivos estáticos (root de Cloudflare)
│   ├── index.html      # Página principal (placeholder)
│   ├── favicon.svg     # Favicon
│   ├── robots.txt      # SEO
│   └── _headers        # Headers de Cloudflare
├── src/                # Código fuente (Workers AI)
│   ├── index.ts        # Worker principal
│   └── types.ts        # Tipos TypeScript
├── package.json        # Dependencias
├── wrangler.jsonc      # Configuración Cloudflare
└── tsconfig.json       # Configuración TypeScript
```

## 🛠️ Desarrollo Local

```bash
# Instalar dependencias
npm install

# Desarrollo local
npm run dev

# Deploy a Cloudflare
npm run deploy
```

## 🌐 Dominio

- **Producción**: iaparaecuador.com
- **Hosting**: Cloudflare Pages
- **Workers AI**: Habilitado

## 📝 Notas

- El sitio está conectado a GitHub para deploy automático
- Cada push a la rama principal despliega automáticamente
- Workers AI está configurado para futuras funcionalidades de chat

---

**LibreSoft Ecuador** - 2025
