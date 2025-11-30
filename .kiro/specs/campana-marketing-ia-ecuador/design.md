# Design Document - Campaña de Marketing IA PARA ECUADOR

## Overview

Este documento describe el diseño de una campaña de marketing profesional intensiva de 30 días para promocionar "IA PARA ECUADOR". La campaña se estructura como un sistema generador de contenido multimedia que produce materiales para redes sociales, televisión y radio, organizados en tres etapas estratégicas progresivas.

La solución consiste en un documento estructurado en Markdown que contiene todos los materiales de campaña listos para implementar, incluyendo textos, descripciones de imágenes, guiones audiovisuales y métricas de éxito. El diseño prioriza la facilidad de implementación, consistencia de marca y medición de resultados.

## Architecture

### Estructura de Tres Etapas

La campaña sigue un modelo de embudo de marketing (funnel) dividido en tres fases de 10 días cada una:

**Etapa 1: Awareness y Conocimiento (Días 1-10)**
- Objetivo: Generar conocimiento de marca y presentar los servicios
- Enfoque: Educativo e informativo
- Servicios destacados: IA Local Privada, Cumplimiento LOPDP, Gestión Documental
- CTAs: Visitar sitio web, conocer más

**Etapa 2: Consideración y Confianza (Días 11-20)**
- Objetivo: Demostrar valor y generar credibilidad
- Enfoque: Casos de uso, testimonios, beneficios concretos
- Servicios destacados: Inspecciones MDT, Soluciones a medida, Capacitación
- CTAs: Solicitar demo, consulta, información detallada

**Etapa 3: Conversión y Acción (Días 21-30)**
- Objetivo: Impulsar la decisión de compra
- Enfoque: Urgencia, ofertas, garantías
- Servicios destacados: QA/Auditoría, Soporte, Garantía de resultados
- CTAs: Contactar ahora, llamar, escribir

### Arquitectura de Contenido por Medio


**Redes Sociales:**
- 30+ publicaciones distribuidas equitativamente (10 por etapa)
- Formatos: Twitter/X (280 caracteres), Facebook/Instagram (400-600 caracteres)
- Componentes: Texto, descripción de imagen, hashtags, CTA
- Frecuencia: 1 publicación diaria

**Televisión:**
- 6 spots distribuidos (2 por etapa)
- Formatos: 30 segundos y 60 segundos por cada spot
- Componentes: Escena visual, audio/narración, texto en pantalla, duración
- Estructura: Problema → Solución → Beneficio → CTA

**Radio:**
- 9 cuñas distribuidas (3 por etapa)
- Formatos: 20 segundos y 30 segundos por cada cuña
- Componentes: Narración, música de fondo, efectos, tono/ritmo
- Técnica: Repetición de contacto para memorización

## Components and Interfaces

### Componente: Generador de Contenido de Redes Sociales

**Responsabilidad:** Crear publicaciones optimizadas para plataformas digitales

**Inputs:**
- Etapa de campaña (1, 2, o 3)
- Servicio a destacar
- Plataforma objetivo (Twitter, Facebook, Instagram)

**Outputs:**
- Texto optimizado por plataforma
- Descripción detallada de imagen sugerida
- Lista de hashtags relevantes
- CTA específico
- Fecha sugerida de publicación

**Reglas de Negocio:**
- Twitter: Máximo 280 caracteres
- Facebook/Instagram: 400-600 caracteres
- Incluir al menos 3-5 hashtags en español
- Mencionar al menos un servicio específico
- Incluir datos de contacto cuando sea relevante

### Componente: Generador de Guiones de TV

**Responsabilidad:** Crear guiones profesionales para spots televisivos

**Inputs:**
- Etapa de campaña
- Duración (30s o 60s)
- Servicio principal a promocionar

**Outputs:**
- Descripción de escenas visuales
- Texto de narración/diálogo
- Texto en pantalla (overlays)
- Indicaciones de timing
- Información de contacto final

**Reglas de Negocio:**
- Cada guión debe tener versión de 30s y 60s
- Incluir elementos visuales relacionados con Ecuador
- Mostrar teléfono, email y sitio web al final
- Estructura: Gancho (3-5s) → Desarrollo (15-40s) → Cierre con CTA (5-10s)

### Componente: Generador de Cuñas de Radio

**Responsabilidad:** Crear guiones para spots radiales

**Inputs:**
- Etapa de campaña
- Duración (20s o 30s)
- Servicio a promocionar

**Outputs:**
- Texto de narración
- Indicaciones de tono y ritmo
- Sugerencias de música de fondo
- Efectos de sonido
- Repetición de datos de contacto

**Reglas de Negocio:**
- Cada cuña debe tener versión de 20s y 30s
- Repetir sitio web o teléfono al menos 2 veces
- Lenguaje claro y directo para comprensión auditiva
- Un beneficio principal por cuña
- Música de fondo apropiada al mensaje

### Componente: Validador de Consistencia de Marca

**Responsabilidad:** Asegurar coherencia en todos los materiales

**Validaciones:**
- Uso correcto del nombre "IA PARA ECUADOR"
- Inclusión de datos de contacto oficiales
- Mención de colores de marca en descripciones visuales
- Terminología alineada con sitio web
- Referencias a Ecuador/Quito cuando sea apropiado
- Propuestas de valor consistentes

### Componente: Generador de Métricas y KPIs

**Responsabilidad:** Definir indicadores de éxito por medio y etapa

**Outputs por Medio:**
- Redes Sociales: Alcance, engagement rate, clicks, conversiones
- TV: Impresiones, recall de marca, tráfico web post-emisión
- Radio: Frecuencia, llamadas recibidas, menciones de código

**Outputs por Etapa:**
- Etapa 1: Alcance, conocimiento de marca, visitas al sitio
- Etapa 2: Engagement, solicitudes de información, tiempo en sitio
- Etapa 3: Conversiones, contactos, ventas cerradas

## Data Models

### Modelo: Campaña

```typescript
interface Campana {
  nombre: string;
  duracionTotal: number; // 30 días
  etapas: Etapa[];
  datosContacto: DatosContacto;
  coloresMarca: string[];
  serviciosPrincipales: Servicio[];
}
```

### Modelo: Etapa

```typescript
interface Etapa {
  numero: 1 | 2 | 3;
  nombre: string; // "Awareness", "Consideración", "Conversión"
  objetivo: string;
  duracion: number; // 10 días
  diasInicio: number;
  diasFin: number;
  temaCentral: string;
  contenidoRedesSociales: PublicacionRedSocial[];
  guionesTV: GuionTV[];
  cunasRadio: CunaRadio[];
  kpis: KPI[];
}
```

### Modelo: PublicacionRedSocial

```typescript
interface PublicacionRedSocial {
  id: string;
  etapa: number;
  plataforma: 'Twitter' | 'Facebook' | 'Instagram';
  fechaSugerida: string;
  titulo: string;
  texto: string;
  longitudTexto: number;
  descripcionImagen: string;
  hashtags: string[];
  cta: string;
  servicioMencionado: string;
  incluyeContacto: boolean;
}
```

### Modelo: GuionTV

```typescript
interface GuionTV {
  id: string;
  etapa: number;
  titulo: string;
  versiones: {
    duracion30s: GuionDetalle;
    duracion60s: GuionDetalle;
  };
  servicioDestacado: string;
}

interface GuionDetalle {
  duracion: number;
  escenas: Escena[];
  informacionContacto: DatosContacto;
}

interface Escena {
  tiempo: string; // "0:00-0:05"
  visual: string;
  audio: string;
  textoEnPantalla?: string;
}
```

### Modelo: CunaRadio

```typescript
interface CunaRadio {
  id: string;
  etapa: number;
  titulo: string;
  versiones: {
    duracion20s: CunaDetalle;
    duracion30s: CunaDetalle;
  };
  servicioDestacado: string;
}

interface CunaDetalle {
  duracion: number;
  narracion: string;
  tono: string;
  ritmo: string;
  musicaFondo: string;
  efectosSonido: string[];
  repeticionesContacto: number;
}
```

### Modelo: DatosContacto

```typescript
interface DatosContacto {
  telefono: string; // "+593-2-252-4710"
  email: string; // "contacto@libresoft.ec"
  sitioWeb: string; // "iaparaecuador.com"
  whatsapp?: string;
}
```

### Modelo: Servicio

```typescript
interface Servicio {
  id: string;
  nombre: string;
  descripcionCorta: string;
  beneficioPrincipal: string;
  publicoObjetivo: string[];
}
```

### Modelo: KPI

```typescript
interface KPI {
  nombre: string;
  descripcion: string;
  metrica: string;
  objetivoMinimo: number;
  medio: 'Redes Sociales' | 'TV' | 'Radio' | 'General';
}
```


## Correctness Properties

*A property is a characteristic or behavior that should hold true across all valid executions of a system—essentially, a formal statement about what the system should do. Properties serve as the bridge between human-readable specifications and machine-verifiable correctness guarantees.*

### Property Reflection

Después de analizar todos los criterios de aceptación, he identificado las siguientes redundancias:

- **Propiedad 1.4 es redundante**: La duración total de 30 días se deriva matemáticamente de tener 3 etapas de 10 días cada una (propiedades 1.1 y 1.2)
- **Propiedades de tono y lenguaje (3.5, 4.4, 5.5, 8.5)**: Son subjetivas y no verificables automáticamente, por lo que no se convertirán en propiedades
- **Propiedades de análisis semántico complejo (3.7, 4.7, 5.2, 6.2, 6.4, 7.2)**: Requieren comprensión profunda del contenido que va más allá de verificación estructural

Las propiedades restantes proporcionan validación única y verificable de la campaña.

### Property 1: Estructura de tres etapas numeradas

*Para cualquier* campaña generada, debe contener exactamente tres etapas numeradas secuencialmente como 1, 2, 3.

**Validates: Requirements 1.1**

### Property 2: Duración de etapas

*Para cualquier* etapa en una campaña, la duración debe ser exactamente 10 días consecutivos.

**Validates: Requirements 1.2**

### Property 3: Objetivos únicos por etapa

*Para cualquier* campaña, los objetivos de las tres etapas deben ser diferentes entre sí (no debe haber objetivos duplicados).

**Validates: Requirements 1.3**

### Property 4: Tema central por etapa

*Para cualquier* etapa, debe existir un tema central definido y no vacío que guíe el contenido.

**Validates: Requirements 1.5**

### Property 5: Mínimo de publicaciones en redes sociales

*Para cualquier* campaña completa, el número total de publicaciones de redes sociales debe ser al menos 30, distribuidas entre las tres etapas.

**Validates: Requirements 2.1**

### Property 6: Longitud de texto para Twitter

*Para cualquier* publicación destinada a Twitter/X, la longitud del texto debe ser como máximo 280 caracteres.

**Validates: Requirements 2.2**

### Property 7: Longitud de texto para Facebook/Instagram

*Para cualquier* publicación destinada a Facebook o Instagram, la longitud del texto debe estar entre 400 y 600 caracteres inclusive.

**Validates: Requirements 2.3**

### Property 8: Descripción de imagen no vacía

*Para cualquier* publicación que incluya imagen, la descripción de la imagen debe contener al menos 50 caracteres de contenido sustancial.

**Validates: Requirements 2.4**

### Property 9: Mención de servicios

*Para cualquier* contenido de campaña, debe referenciar al menos uno de los siete servicios principales: IA Local Privada, Cumplimiento LOPDP, Inspecciones MDT, Gestión Documental, Soluciones a Medida, Capacitación, o QA/Auditoría.

**Validates: Requirements 2.5**

### Property 10: Presencia de hashtags

*Para cualquier* publicación de redes sociales, debe incluir al menos 3 hashtags en español.

**Validates: Requirements 2.6**

### Property 11: Presencia de CTA

*Para cualquier* publicación de redes sociales, debe contener un llamado a la acción (CTA) identificable con verbos de acción como "visita", "contacta", "solicita", "descubre", "conoce", etc.

**Validates: Requirements 2.7**

### Property 12: Mínimo de guiones de TV

*Para cualquier* campaña completa, debe contener al menos 6 guiones de spots televisivos distribuidos entre las tres etapas.

**Validates: Requirements 3.1**

### Property 13: Versiones duales de guiones TV

*Para cualquier* guión de TV, debe proporcionar exactamente dos versiones: una de 30 segundos y una de 60 segundos.

**Validates: Requirements 3.2**

### Property 14: Secciones requeridas en guiones TV

*Para cualquier* guión de TV, debe incluir las cuatro secciones: escena/visual, audio/narración, texto en pantalla, y duración/timing.

**Validates: Requirements 3.3**

### Property 15: Referencias a Ecuador en guiones TV

*Para cualquier* guión de TV, las descripciones de escenas deben contener al menos una referencia a Ecuador, Quito, o elementos ecuatorianos identificables.

**Validates: Requirements 3.4**

### Property 16: Información de contacto en guiones TV

*Para cualquier* guión de TV, debe incluir los tres datos de contacto: teléfono (+593-2-252-4710), email (contacto@libresoft.ec), y sitio web (iaparaecuador.com).

**Validates: Requirements 3.6**

### Property 17: Mínimo de cuñas de radio

*Para cualquier* campaña completa, debe contener al menos 9 guiones de cuñas radiales distribuidos entre las tres etapas.

**Validates: Requirements 4.1**

### Property 18: Versiones duales de cuñas de radio

*Para cualquier* cuña de radio, debe proporcionar exactamente dos versiones: una de 20 segundos y una de 30 segundos.

**Validates: Requirements 4.2**

### Property 19: Elementos estructurales en cuñas de radio

*Para cualquier* cuña de radio, debe incluir indicaciones de: tono, ritmo, y efectos de sonido o música de fondo.

**Validates: Requirements 4.3**

### Property 20: Repetición de contacto en radio

*Para cualquier* cuña de radio, el sitio web o teléfono debe aparecer al menos 2 veces en el texto de narración.

**Validates: Requirements 4.5**

### Property 21: Especificación de música en radio

*Para cualquier* cuña de radio que mencione música, debe especificar el tipo o estilo de música de fondo apropiada.

**Validates: Requirements 4.6**

### Property 22: Servicios destacados en Etapa 1

*Para cualquier* contenido de la Etapa 1, debe mencionar al menos dos de los tres servicios diferenciadores: IA Local Privada, Cumplimiento LOPDP, o Gestión Documental.

**Validates: Requirements 5.3**

### Property 23: Colores de marca en Etapa 1

*Para cualquier* descripción visual de la Etapa 1, debe mencionar al menos uno de los colores de marca: morado, naranja, azul, o verde.

**Validates: Requirements 5.4**

### Property 24: CTAs dirigidos a sitio web en Etapa 1

*Para cualquier* CTA en la Etapa 1, debe contener referencia explícita al sitio web "iaparaecuador.com" o la acción "visitar sitio".

**Validates: Requirements 5.6**

### Property 25: Testimonios o estadísticas en Etapa 2

*Para cualquier* contenido de la Etapa 2, debe incluir al menos una mención de testimonios, casos de éxito, o estadísticas numéricas de valor.

**Validates: Requirements 6.3**

### Property 26: Elementos de credibilidad en Etapa 2

*Para cualquier* contenido de la Etapa 2, debe mencionar al menos uno de: garantía, certificación, experiencia, años de servicio, o clientes satisfechos.

**Validates: Requirements 6.5**

### Property 27: CTAs de consulta en Etapa 2

*Para cualquier* CTA en la Etapa 2, debe contener palabras relacionadas con: "demo", "consulta", "información", "asesoría", o "cotización".

**Validates: Requirements 6.6**

### Property 28: Ofertas o promociones en Etapa 3

*Para cualquier* contenido de la Etapa 3, debe incluir mención de: oferta, promoción, descuento, tiempo limitado, o incentivo especial.

**Validates: Requirements 7.3**

### Property 29: Mención de garantía en Etapa 3

*Para cualquier* contenido de la Etapa 3, debe mencionar explícitamente la "garantía de satisfacción" o "garantía de resultados".

**Validates: Requirements 7.4**

### Property 30: CTAs de contacto directo en Etapa 3

*Para cualquier* CTA en la Etapa 3, debe contener al menos una de las acciones directas: "llama", "contacta", "escribe", "WhatsApp", o incluir el número de teléfono.

**Validates: Requirements 7.6**

### Property 31: Datos de contacto oficiales

*Para cualquier* pieza de contenido que incluya información de contacto, debe usar exactamente: teléfono "+593-2-252-4710", email "contacto@libresoft.ec", y sitio web "iaparaecuador.com".

**Validates: Requirements 8.1**

### Property 32: Nombre de marca consistente

*Para cualquier* mención de la marca en el contenido, debe usar exactamente el formato "IA PARA ECUADOR" (mayúsculas, con espacios).

**Validates: Requirements 8.2**

### Property 33: Terminología de servicios consistente

*Para cualquier* mención de servicios, debe usar los nombres oficiales: "IA Local Privada", "Cumplimiento LOPDP", "Inspecciones MDT", "Gestión Documental", "Soluciones a Medida", "Capacitación", "QA y Auditoría".

**Validates: Requirements 8.3**

### Property 34: Colores de marca en descripciones visuales

*Para cualquier* descripción de imagen o elemento visual, debe mencionar al menos uno de los colores oficiales: morado (#8b5cf6), naranja, azul, o verde.

**Validates: Requirements 8.4**

### Property 35: Referencias geográficas a Ecuador

*Para cualquier* contenido que mencione ubicación o contexto geográfico, debe incluir referencia a "Ecuador", "Quito", "ecuatoriano", o contexto local.

**Validates: Requirements 8.6**

### Property 36: Propuestas de valor clave

*Para cualquier* contenido que mencione beneficios o propuestas de valor, debe incluir al menos una de: privacidad, confidencialidad, cumplimiento legal, garantía, resultados, o soporte local.

**Validates: Requirements 8.7**

### Property 37: KPIs para redes sociales

*Para cualquier* sección de métricas de redes sociales, debe incluir al menos tres de los siguientes KPIs: alcance, impresiones, engagement, clicks, conversiones, o seguidores.

**Validates: Requirements 9.1**

### Property 38: Métricas para TV

*Para cualquier* guión de TV, debe incluir sugerencias de métricas como: impresiones, GRP, recall de marca, o tráfico web post-emisión.

**Validates: Requirements 9.2**

### Property 39: Métricas para radio

*Para cualquier* cuña de radio, debe incluir sugerencias de métricas como: frecuencia de emisión, alcance, llamadas recibidas, o menciones de código promocional.

**Validates: Requirements 9.3**

### Property 40: Objetivos numéricos por etapa

*Para cualquier* etapa de campaña, debe definir al menos dos objetivos numéricos medibles (ej: "1000 visitas al sitio", "50 solicitudes de información").

**Validates: Requirements 9.4**

### Property 41: Estructura de secciones clara

*Para cualquier* documento de campaña, debe contener secciones claramente identificadas con encabezados para cada etapa y cada tipo de medio.

**Validates: Requirements 10.1**

### Property 42: Título y fecha en cada pieza

*Para cualquier* pieza de contenido individual, debe incluir un título descriptivo y una fecha sugerida de publicación o emisión.

**Validates: Requirements 10.2**

### Property 43: Detalle suficiente en descripciones de imagen

*Para cualquier* descripción de imagen, debe contener al menos 100 caracteres de detalle que permitan a un diseñador crear la imagen sin ambigüedad.

**Validates: Requirements 10.3**

### Property 44: Formato estándar de guiones

*Para cualquier* guión de TV o radio, debe seguir formato estándar con secciones claramente delimitadas y timing especificado.

**Validates: Requirements 10.4**

### Property 45: Notas de implementación

*Para cualquier* tipo de medio (redes sociales, TV, radio), debe incluir una sección de notas de implementación o mejores prácticas.

**Validates: Requirements 10.6**


## Error Handling

### Validación de Contenido

**Errores de Longitud de Texto:**
- Si una publicación de Twitter excede 280 caracteres, el sistema debe truncar y agregar "..." o reformular
- Si una publicación de Facebook/Instagram está fuera del rango 400-600, debe ajustarse automáticamente

**Errores de Datos de Contacto:**
- Si faltan datos de contacto en una pieza que los requiere, debe agregarse automáticamente
- Si los datos de contacto no coinciden con los oficiales, debe corregirse a los valores estándar

**Errores de Estructura:**
- Si un guión de TV/radio no tiene ambas versiones de duración, debe generarse la versión faltante
- Si faltan secciones requeridas en un guión, debe completarse con contenido placeholder marcado para revisión

### Validación de Consistencia

**Inconsistencias de Marca:**
- Si el nombre de marca está mal escrito, debe corregirse a "IA PARA ECUADOR"
- Si los nombres de servicios no coinciden con los oficiales, debe estandarizarse

**Inconsistencias de Etapa:**
- Si el contenido de una etapa no coincide con su objetivo (ej: CTAs de conversión en Etapa 1), debe ajustarse o marcarse para revisión
- Si la distribución de contenido entre etapas es desigual, debe rebalancearse

### Manejo de Contenido Faltante

**Contenido Incompleto:**
- Si una etapa tiene menos del mínimo de piezas requeridas, debe generarse contenido adicional
- Si faltan descripciones de imágenes, debe crearse contenido descriptivo basado en el tema de la pieza

**Métricas Faltantes:**
- Si una pieza no tiene KPIs asociados, debe asignarse métricas estándar según el tipo de medio
- Si una etapa no tiene objetivos numéricos, debe establecerse objetivos basados en benchmarks de la industria

## Testing Strategy

### Enfoque Dual de Testing

La campaña de marketing requiere tanto pruebas unitarias como pruebas basadas en propiedades para garantizar calidad y corrección:

**Unit Tests:** Verifican ejemplos específicos, casos de uso concretos y condiciones de borde. Son útiles para validar que piezas individuales de contenido cumplen con requisitos específicos.

**Property-Based Tests:** Verifican que las propiedades universales se mantengan a través de múltiples generaciones de contenido. Son esenciales para garantizar consistencia en toda la campaña.

### Property-Based Testing

**Framework:** Para este proyecto en TypeScript/JavaScript, utilizaremos **fast-check** como biblioteca de property-based testing.

**Configuración:** Cada property test debe ejecutar un mínimo de 100 iteraciones para asegurar cobertura adecuada dado el carácter aleatorio del proceso.

**Etiquetado:** Cada property test debe incluir un comentario que referencie explícitamente la propiedad de corrección del documento de diseño usando el formato:
```
// Feature: campana-marketing-ia-ecuador, Property X: [texto de la propiedad]
```

**Implementación:** Cada propiedad de corrección debe ser implementada por UN SOLO property test. No dividir propiedades en múltiples tests.

### Unit Testing

**Casos Específicos a Probar:**

1. **Validación de Formato de Publicaciones:**
   - Publicación de Twitter con exactamente 280 caracteres
   - Publicación de Facebook con 500 caracteres (punto medio del rango)
   - Publicación con todos los elementos requeridos (texto, imagen, hashtags, CTA)

2. **Validación de Guiones:**
   - Guión de TV de 30s con timing correcto
   - Guión de radio de 20s con repetición de contacto
   - Guión con todas las secciones estructurales

3. **Validación de Etapas:**
   - Etapa 1 con objetivo de "Awareness"
   - Etapa 2 con testimonios
   - Etapa 3 con ofertas y urgencia

4. **Validación de Datos de Contacto:**
   - Formato correcto de teléfono ecuatoriano
   - Email válido
   - URL del sitio web correcta

5. **Casos de Borde:**
   - Texto vacío o muy corto
   - Descripción de imagen sin detalles
   - Guión sin timing especificado
   - Contenido sin CTA

### Integration Testing

**Flujo Completo de Campaña:**
- Generar una campaña completa de 30 días
- Verificar que todas las etapas estén presentes y conectadas
- Validar que el contenido progrese lógicamente de awareness a conversión
- Confirmar que todos los medios estén representados

**Consistencia Entre Medios:**
- Verificar que el mismo servicio se presente consistentemente en redes sociales, TV y radio
- Validar que los mensajes de una etapa sean coherentes entre todos los medios
- Confirmar que los datos de contacto sean idénticos en todas las piezas

### Métricas de Calidad del Código

**Cobertura de Tests:**
- Objetivo: 80%+ de cobertura de código
- Todas las propiedades de corrección deben tener tests
- Todos los componentes principales deben tener unit tests

**Calidad de Tests:**
- Tests deben ser independientes y no tener efectos secundarios
- Tests deben ser determinísticos (excepto property tests que son intencionalmente aleatorios)
- Tests deben ejecutarse en menos de 5 segundos en total

### Validación Manual

**Revisión de Contenido:**
- Revisar manualmente al menos 3 piezas de cada tipo de medio
- Verificar que el tono y estilo sean apropiados para el mercado ecuatoriano
- Confirmar que las descripciones de imágenes sean suficientemente detalladas

**Revisión de Coherencia:**
- Leer el flujo completo de una etapa para verificar narrativa coherente
- Validar que los CTAs sean apropiados para cada etapa
- Confirmar que no haya contradicciones entre piezas

## Implementation Notes

### Tecnologías Recomendadas

**Generación de Contenido:**
- TypeScript para type safety y mejor mantenibilidad
- Plantillas de texto con variables para personalización
- Validadores de esquema (Zod o similar) para modelos de datos

**Testing:**
- Jest como framework de testing principal
- fast-check para property-based testing
- Faker.js para generación de datos de prueba

**Documentación:**
- Markdown para el documento final de campaña
- Posibilidad de exportar a PDF usando markdown-pdf
- Generación de presentaciones con Marp si es necesario

### Estructura de Archivos Sugerida

```
campana-marketing/
├── src/
│   ├── generators/
│   │   ├── redes-sociales.ts
│   │   ├── tv.ts
│   │   └── radio.ts
│   ├── validators/
│   │   ├── consistencia-marca.ts
│   │   └── estructura-contenido.ts
│   ├── models/
│   │   ├── campana.ts
│   │   ├── etapa.ts
│   │   └── contenido.ts
│   └── utils/
│       ├── datos-contacto.ts
│       └── servicios.ts
├── tests/
│   ├── unit/
│   ├── property/
│   └── integration/
├── output/
│   └── campana-30-dias.md
└── package.json
```

### Consideraciones de Localización

**Idioma Español de Ecuador:**
- Usar "usted" en lugar de "tú" para formalidad
- Evitar regionalismos de otros países hispanohablantes
- Incluir referencias culturales ecuatorianas cuando sea apropiado

**Formato de Datos:**
- Fechas en formato DD/MM/YYYY
- Teléfonos en formato ecuatoriano: +593-X-XXX-XXXX
- Moneda en USD (dólar estadounidense, moneda oficial de Ecuador)

### Mejores Prácticas de Contenido

**Redes Sociales:**
- Usar emojis con moderación para no parecer poco profesional
- Incluir preguntas para fomentar engagement
- Variar el formato: algunos posts informativos, otros con estadísticas, otros con testimonios

**TV:**
- Mantener mensajes simples y claros
- Usar regla de tres: presentar máximo 3 beneficios por spot
- Incluir elementos visuales memorables

**Radio:**
- Escribir para el oído, no para el ojo
- Usar frases cortas y ritmo dinámico
- Repetir información clave (especialmente contacto)

### Cronograma de Implementación

**Fase 1: Desarrollo (5 días)**
- Días 1-2: Implementar modelos de datos y generadores básicos
- Días 3-4: Crear contenido para las 3 etapas
- Día 5: Validación y ajustes

**Fase 2: Testing (2 días)**
- Día 6: Implementar unit tests y property tests
- Día 7: Ejecutar tests y corregir errores

**Fase 3: Refinamiento (2 días)**
- Día 8: Revisión manual de contenido
- Día 9: Ajustes finales y generación de documento

**Fase 4: Entrega (1 día)**
- Día 10: Exportar a formatos finales y documentación de uso

### Extensibilidad Futura

El diseño permite fácilmente:
- Agregar nuevos medios (ej: LinkedIn, YouTube, podcasts)
- Extender la campaña más allá de 30 días
- Crear variantes para diferentes segmentos de público
- Integrar con herramientas de programación de publicaciones
- Generar reportes automáticos de métricas

