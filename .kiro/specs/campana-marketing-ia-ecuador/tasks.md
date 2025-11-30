# Implementation Plan - Campaña de Marketing IA PARA ECUADOR

- [ ] 1. Crear estructura base del proyecto y modelos de datos
  - Configurar proyecto TypeScript con dependencias necesarias (Jest, fast-check)
  - Implementar interfaces y tipos para Campaña, Etapa, PublicacionRedSocial, GuionTV, CunaRadio
  - Crear constantes para datos de contacto, colores de marca y servicios principales
  - Implementar modelo de DatosContacto con validación
  - _Requirements: 8.1, 8.2, 8.3, 8.4_

- [ ]* 1.1 Write property test for estructura de tres etapas
  - **Property 1: Estructura de tres etapas numeradas**
  - **Validates: Requirements 1.1**

- [ ]* 1.2 Write property test for duración de etapas
  - **Property 2: Duración de etapas**
  - **Validates: Requirements 1.2**

- [ ]* 1.3 Write property test for objetivos únicos
  - **Property 3: Objetivos únicos por etapa**
  - **Validates: Requirements 1.3**

- [ ]* 1.4 Write property test for tema central
  - **Property 4: Tema central por etapa**
  - **Validates: Requirements 1.5**

- [ ] 2. Implementar generador de contenido para Etapa 1 (Awareness)
  - Crear función para generar 10 publicaciones de redes sociales para Etapa 1
  - Implementar generador de textos para Twitter (máx 280 caracteres)
  - Implementar generador de textos para Facebook/Instagram (400-600 caracteres)
  - Crear descripciones de imágenes con elementos visuales de Ecuador y tecnología
  - Generar hashtags relevantes en español (#IAEcuador, #InteligenciaArtificial, etc.)
  - Incluir CTAs dirigidos a visitar el sitio web
  - Destacar servicios: IA Local Privada, Cumplimiento LOPDP, Gestión Documental
  - _Requirements: 2.1, 2.2, 2.3, 2.4, 2.5, 2.6, 2.7, 5.1, 5.2, 5.3, 5.6_

- [ ]* 2.1 Write property test for longitud de texto Twitter
  - **Property 6: Longitud de texto para Twitter**
  - **Validates: Requirements 2.2**

- [ ]* 2.2 Write property test for longitud de texto Facebook/Instagram
  - **Property 7: Longitud de texto para Facebook/Instagram**
  - **Validates: Requirements 2.3**

- [ ]* 2.3 Write property test for descripción de imagen
  - **Property 8: Descripción de imagen no vacía**
  - **Validates: Requirements 2.4**

- [ ]* 2.4 Write property test for mención de servicios
  - **Property 9: Mención de servicios**
  - **Validates: Requirements 2.5**

- [ ]* 2.5 Write property test for presencia de hashtags
  - **Property 10: Presencia de hashtags**
  - **Validates: Requirements 2.6**

- [ ]* 2.6 Write property test for presencia de CTA
  - **Property 11: Presencia de CTA**
  - **Validates: Requirements 2.7**

- [ ]* 2.7 Write property test for servicios en Etapa 1
  - **Property 22: Servicios destacados en Etapa 1**
  - **Validates: Requirements 5.3**

- [ ]* 2.8 Write property test for colores de marca en Etapa 1
  - **Property 23: Colores de marca en Etapa 1**
  - **Validates: Requirements 5.4**

- [ ]* 2.9 Write property test for CTAs en Etapa 1
  - **Property 24: CTAs dirigidos a sitio web en Etapa 1**
  - **Validates: Requirements 5.6**

- [ ] 3. Implementar generador de contenido para Etapa 2 (Consideración)
  - Crear función para generar 10 publicaciones de redes sociales para Etapa 2
  - Incluir testimonios hipotéticos y estadísticas de valor
  - Destacar servicios: Inspecciones MDT, Soluciones a Medida, Capacitación
  - Incorporar elementos de credibilidad (garantías, experiencia, certificaciones)
  - Incluir CTAs para solicitar demos, consultas o información detallada
  - _Requirements: 2.1-2.7, 6.1, 6.2, 6.3, 6.5, 6.6_

- [ ]* 3.1 Write property test for testimonios en Etapa 2
  - **Property 25: Testimonios o estadísticas en Etapa 2**
  - **Validates: Requirements 6.3**

- [ ]* 3.2 Write property test for credibilidad en Etapa 2
  - **Property 26: Elementos de credibilidad en Etapa 2**
  - **Validates: Requirements 6.5**

- [ ]* 3.3 Write property test for CTAs en Etapa 2
  - **Property 27: CTAs de consulta en Etapa 2**
  - **Validates: Requirements 6.6**

- [ ] 4. Implementar generador de contenido para Etapa 3 (Conversión)
  - Crear función para generar 10 publicaciones de redes sociales para Etapa 3
  - Incluir ofertas especiales, promociones o incentivos de tiempo limitado
  - Destacar servicios: QA/Auditoría, Soporte, Garantía de resultados
  - Enfatizar garantía de satisfacción y resultados inmediatos
  - Incluir CTAs de contacto directo (llamar, email, WhatsApp)
  - _Requirements: 2.1-2.7, 7.1, 7.2, 7.3, 7.4, 7.6_

- [ ]* 4.1 Write property test for ofertas en Etapa 3
  - **Property 28: Ofertas o promociones en Etapa 3**
  - **Validates: Requirements 7.3**

- [ ]* 4.2 Write property test for garantía en Etapa 3
  - **Property 29: Mención de garantía en Etapa 3**
  - **Validates: Requirements 7.4**

- [ ]* 4.3 Write property test for CTAs en Etapa 3
  - **Property 30: CTAs de contacto directo en Etapa 3**
  - **Validates: Requirements 7.6**

- [ ] 5. Checkpoint - Verificar contenido de redes sociales
  - Ensure all tests pass, ask the user if questions arise.

- [ ] 6. Implementar generador de guiones de TV
  - Crear función para generar 6 guiones de TV (2 por etapa)
  - Implementar versión de 30 segundos para cada guión
  - Implementar versión de 60 segundos para cada guión
  - Estructurar guiones con secciones: escena, audio, texto en pantalla, duración
  - Incluir elementos visuales relacionados con Ecuador y tecnología
  - Agregar información de contacto al final de cada guión
  - Distribuir guiones: 2 en Etapa 1, 2 en Etapa 2, 2 en Etapa 3
  - _Requirements: 3.1, 3.2, 3.3, 3.4, 3.6_

- [ ]* 6.1 Write property test for mínimo de guiones TV
  - **Property 12: Mínimo de guiones de TV**
  - **Validates: Requirements 3.1**

- [ ]* 6.2 Write property test for versiones duales TV
  - **Property 13: Versiones duales de guiones TV**
  - **Validates: Requirements 3.2**

- [ ]* 6.3 Write property test for secciones en guiones TV
  - **Property 14: Secciones requeridas en guiones TV**
  - **Validates: Requirements 3.3**

- [ ]* 6.4 Write property test for referencias a Ecuador en TV
  - **Property 15: Referencias a Ecuador en guiones TV**
  - **Validates: Requirements 3.4**

- [ ]* 6.5 Write property test for contacto en guiones TV
  - **Property 16: Información de contacto en guiones TV**
  - **Validates: Requirements 3.6**

- [ ] 7. Implementar generador de cuñas de radio
  - Crear función para generar 9 cuñas de radio (3 por etapa)
  - Implementar versión de 20 segundos para cada cuña
  - Implementar versión de 30 segundos para cada cuña
  - Incluir indicaciones de tono, ritmo y efectos de sonido
  - Especificar tipo de música de fondo apropiada
  - Repetir sitio web o teléfono al menos 2 veces en cada cuña
  - Distribuir cuñas: 3 en Etapa 1, 3 en Etapa 2, 3 en Etapa 3
  - _Requirements: 4.1, 4.2, 4.3, 4.5, 4.6_

- [ ]* 7.1 Write property test for mínimo de cuñas de radio
  - **Property 17: Mínimo de cuñas de radio**
  - **Validates: Requirements 4.1**

- [ ]* 7.2 Write property test for versiones duales radio
  - **Property 18: Versiones duales de cuñas de radio**
  - **Validates: Requirements 4.2**

- [ ]* 7.3 Write property test for elementos en cuñas radio
  - **Property 19: Elementos estructurales en cuñas de radio**
  - **Validates: Requirements 4.3**

- [ ]* 7.4 Write property test for repetición de contacto
  - **Property 20: Repetición de contacto en radio**
  - **Validates: Requirements 4.5**

- [ ]* 7.5 Write property test for música en radio
  - **Property 21: Especificación de música en radio**
  - **Validates: Requirements 4.6**

- [ ] 8. Checkpoint - Verificar contenido audiovisual
  - Ensure all tests pass, ask the user if questions arise.

- [ ] 9. Implementar validador de consistencia de marca
  - Crear función para validar uso correcto de "IA PARA ECUADOR"
  - Validar que todos los datos de contacto sean los oficiales
  - Verificar mención de colores de marca en descripciones visuales
  - Validar terminología de servicios alineada con sitio web
  - Verificar referencias a Ecuador/Quito en contenido
  - Validar propuestas de valor consistentes
  - _Requirements: 8.1, 8.2, 8.3, 8.4, 8.6, 8.7_

- [ ]* 9.1 Write property test for datos de contacto oficiales
  - **Property 31: Datos de contacto oficiales**
  - **Validates: Requirements 8.1**

- [ ]* 9.2 Write property test for nombre de marca
  - **Property 32: Nombre de marca consistente**
  - **Validates: Requirements 8.2**

- [ ]* 9.3 Write property test for terminología de servicios
  - **Property 33: Terminología de servicios consistente**
  - **Validates: Requirements 8.3**

- [ ]* 9.4 Write property test for colores de marca
  - **Property 34: Colores de marca en descripciones visuales**
  - **Validates: Requirements 8.4**

- [ ]* 9.5 Write property test for referencias geográficas
  - **Property 35: Referencias geográficas a Ecuador**
  - **Validates: Requirements 8.6**

- [ ]* 9.6 Write property test for propuestas de valor
  - **Property 36: Propuestas de valor clave**
  - **Validates: Requirements 8.7**

- [ ] 10. Implementar generador de métricas y KPIs
  - Crear KPIs para redes sociales (alcance, engagement, clicks, conversiones)
  - Crear métricas para TV (impresiones, recall, tráfico web)
  - Crear métricas para radio (frecuencia, llamadas, códigos promocionales)
  - Definir objetivos numéricos mínimos para cada etapa
  - Crear marco de medición integral para toda la campaña
  - _Requirements: 9.1, 9.2, 9.3, 9.4, 9.5_

- [ ]* 10.1 Write property test for KPIs de redes sociales
  - **Property 37: KPIs para redes sociales**
  - **Validates: Requirements 9.1**

- [ ]* 10.2 Write property test for métricas de TV
  - **Property 38: Métricas para TV**
  - **Validates: Requirements 9.2**

- [ ]* 10.3 Write property test for métricas de radio
  - **Property 39: Métricas para radio**
  - **Validates: Requirements 9.3**

- [ ]* 10.4 Write property test for objetivos numéricos
  - **Property 40: Objetivos numéricos por etapa**
  - **Validates: Requirements 9.4**

- [ ] 11. Implementar generador del documento final de campaña
  - Crear función para estructurar contenido en formato Markdown
  - Organizar contenido en secciones por etapa y medio
  - Incluir título descriptivo y fecha sugerida para cada pieza
  - Asegurar descripciones de imagen con al menos 100 caracteres
  - Aplicar formato estándar de guiones audiovisuales
  - Incluir notas de implementación y mejores prácticas para cada medio
  - _Requirements: 10.1, 10.2, 10.3, 10.4, 10.5, 10.6_

- [ ]* 11.1 Write property test for estructura de secciones
  - **Property 41: Estructura de secciones clara**
  - **Validates: Requirements 10.1**

- [ ]* 11.2 Write property test for título y fecha
  - **Property 42: Título y fecha en cada pieza**
  - **Validates: Requirements 10.2**

- [ ]* 11.3 Write property test for detalle de imágenes
  - **Property 43: Detalle suficiente en descripciones de imagen**
  - **Validates: Requirements 10.3**

- [ ]* 11.4 Write property test for formato de guiones
  - **Property 44: Formato estándar de guiones**
  - **Validates: Requirements 10.4**

- [ ]* 11.5 Write property test for notas de implementación
  - **Property 45: Notas de implementación**
  - **Validates: Requirements 10.6**

- [ ] 12. Generar campaña completa de 30 días
  - Ejecutar todos los generadores para crear campaña completa
  - Validar que se cumplan todas las propiedades de corrección
  - Aplicar validador de consistencia de marca
  - Generar documento Markdown final con toda la campaña
  - Incluir sección de resumen ejecutivo al inicio
  - Agregar calendario de publicación sugerido
  - _Requirements: 1.1-10.6_

- [ ]* 12.1 Write property test for mínimo de publicaciones
  - **Property 5: Mínimo de publicaciones en redes sociales**
  - **Validates: Requirements 2.1**

- [ ] 13. Checkpoint Final - Validación completa
  - Ensure all tests pass, ask the user if questions arise.

- [ ] 14. Crear documentación de uso y exportación
  - Escribir README con instrucciones de uso del generador
  - Documentar cómo modificar o extender la campaña
  - Crear script para exportar a PDF si es necesario
  - Incluir ejemplos de cómo adaptar para diferentes segmentos
  - Documentar proceso de medición de KPIs
  - _Requirements: 10.5, 10.6_
