<?php
define("L","\n");

class IA {
    // ===================================
    // META Y CONFIGURACIÓN
    // ===================================
    public static $meta = [
        'charset' => 'UTF-8',
        'lang' => 'es',
        'title' => 'IA para Ecuador - Inteligencia Artificial Local y Privada',
        'description' => 'Soluciones de Inteligencia Artificial local, privada y confidencial para Ecuador. Cumplimiento LOPDP, gestión documental, salud ocupacional.',
        'favicon' => 'favicon.svg',
        'css' => 'styles.css',
        'js' => 'script.js'
    ];

    // ===================================
    // NAVEGACIÓN
    // ===================================
    public static $nav = [
        'logo_icon' => 'IA',
        'logo_text' => 'IA Para Ecuador',
        'menu' => [
            ['href' => '#inicio', 'text' => 'Inicio'],
            ['href' => '#ia-local', 'text' => 'IA Local'],
            ['href' => '#datos-personales', 'text' => 'Pasar exitosamente auditorías de datos personales'],
            ['href' => '#salud-ocupacional', 'text' => 'Pasar exitosamente Inspecciones Ministerio del trabajo'],
            ['href' => '#documentacion', 'text' => 'Gestión Documental'],
            ['href' => '#soluciones', 'text' => 'Soluciones a la medida'],
            ['href' => '#capacitacion', 'text' => 'Workshops y Capacitación'],
            ['href' => '#faq', 'text' => 'Preguntas frecuentes'],
            ['href' => '#referencias', 'text' => 'Referencias'],
            ['href' => '#contacto', 'text' => 'Contacto']
        ]
    ];

    // ===================================
    // SECCIÓN HERO / INICIO
    // ===================================
    public static $hero = [
        'title' => 'Inteligencia Artificial para Ecuador',
        'subtitle' => 'Usos y aplicaciones de la IA para instituciones, empresas, académia, estudiantes, emprendedores, profesionales y especialistas',
        'buttons' => [
            ['href' => '#ia-local', 'text' => 'Explorar Soluciones', 'class' => 'btn-primary'],
            ['href' => '#contacto', 'text' => 'Contactar Ahora', 'class' => 'btn-secondary']
        ],
        'features' => [
            [
                'icon' => 'svg-lock-key',
                'title' => 'IA Local, privada, confidencial sin internet',
                'text' => 'Privacidad garantizada',
                'modal_id' => 'modal-ia-local',
                'section_link' => 'https://iasoloparami.com',
                'section_link_external' => true,
                'section_link_text' => 'Ver detalle y cotizador',
                'modal_content' => [
                    'title' => 'IA Local, Privada y Confidencial',
                    'description' => 'Modelos de inteligencia artificial ejecutándose en tu propia infraestructura sin necesidad de internet',
                    'points' => [
                        'Datos que nunca salen de tu organización',
                        'Cero transferencia a servidores externos o nubes públicas',
                        'Control total sobre información confidencial',
                        'Cumplimiento automático con regulaciones de privacidad',
                        'Procesamiento de documentos sensibles sin riesgos',
                        'Análisis de datos de pacientes, clientes, empleados',
                        'Integración con sistemas existentes',
                        'Funciona sin conexión a internet'
                    ]
                ]
            ],
            [
                'icon' => '🛡️',
                'title' => 'Pasar con éxito auditorías sobre tratamiento de datos personales',
                'text' => 'Cumplir con la LOPDP; que no es llenar un "papelito de consentimiento" especialmente para grandes contribuyentes con millones de usuarios',
                'modal_id' => 'modal-datos-personales',
                'section_link' => '#datos-personales',
                'modal_content' => [
                    'title' => 'Cumplimiento LOPDP - Protección de Datos Personales',
                    'description' => 'Cumplimiento real y tecnológico de la Ley Orgánica de Protección de Datos Personales de Ecuador. Mucho más que hacer firmar un papelito!!!',
                    'points' => [
                        'Aplicamos privacidad y confidencialidad ante todo. Sus datos NUNCA deben subirse a internet',
                        'Brindamos servicio para Identificar datos personales simples y sensibles en bases de datos de todo tamaño y modelo',
                        'Test para verificar el cumplimiento de los estándares tecnológicos y de base de datos para cumplir con la LOPDP',
                        'Recomendaciones para clasificar, sinonimizar, anonimizar y encriptar datos personales simples, sensibles y otros',
                        'Cumplimiento con regulaciones y notificaciones de la SPDP (Superintendencia de Protección de Datos Personales)',
                        'Políticas de privacidad y consentimiento informado efectivos',
                        'Registro de tratamiento de datos personales',
                        'Evaluación de impacto en protección de datos (DPIA)',
                        'Designación de encargado de protección de datos (DPO)',
                        'Auditorías y reportes de cumplimiento',
                        'Evita multas de USD 1,000 hasta USD 100,000',
                        'Preparación para inspecciones de la SPDP'
                    ]
                ]
            ],
            [
                'icon' => '👥',
                'title' => 'Pasar con éxito inspecciones del Ministerio del Trabajo',
                'text' => 'Empresas y entidades',
                'modal_id' => 'modal-salud-ocupacional',
                'section_link' => '#salud-ocupacional',
                'modal_content' => [
                    'title' => 'Cumplimiento de acuerdos ministeriales para pasar con éxito las inspecciones del Ministerio del Trabajo',
                    'description' => 'Sistemas a la medida de cada organización para definir obligaciones y cumplimiento de las 96 obligaciones 2025',
                    'points' => [
                        'Ayudas para el cumplimiento en inspecciones',
                        'Monitoreo de cumplimiento normativo',
                        'Evaluación automática de regulaciones',
                        'Generación de reportes para inspecciones',
                        'Gestión de comités de SST',
                        'Gestión de comités de Equidad de Género',
                        'Registro de capacitaciones y exámenes médicos',
                        'Registro de entrega de documentos a empleados',
                        'Alertas de incidentes y accidentes',
                        'Evita multas de USD 500 hasta USD 50,000',
                        'Evita cierres'
                    ]
                ]
            ],
            [
                'icon' => '📄',
                'title' => 'Gestión Documental con IA',
                'text' => 'Control total de documentos en la era de la IA',
                'modal_id' => 'modal-gestion-documental',
                'section_link' => '#documentacion',
                'modal_content' => [
                    'title' => 'Sistema de Gestión Documental Inteligente',
                    'description' => 'Organiza, busca y gestiona documentos con inteligencia artificial',
                    'points' => [
                        'Búsqueda inteligente en lenguaje natural',
                        'Clasificación automática de documentos',
                        'Control de versiones y trazabilidad completa',
                        'Extracción automática de información clave',
                        'Workflows de aprobación automatizados',
                        'Copias de seguridad y recuperación ante desastres',
                        'Cumplimiento con normativas de archivo',
                        'Análisis de contenido con IA'
                    ]
                ]
            ],
            [
                'icon' => '🔧',
                'title' => 'Soluciones IA a la medida',
                'text' => 'Tiene un problema sin solución? Nuestros expertos en IA lo pueden resolver o ya lo resolvieron para otras organizaciones',
                'modal_id' => 'modal-soluciones',
                'section_link' => '#soluciones',
                'modal_content' => [
                    'title' => 'Soluciones de IA Personalizadas',
                    'description' => 'Desarrollo de soluciones específicas para problemas complejos',
                    'points' => [
                        'Servicios de descarga de comprobantes de compra y venta desde el SRI',
                        'Generación masiva y automática de retenciones electrónicas en la fuente',
                        'Generación masiva y automática de facturas recurrentes',
                        'Sistema Hable con sus datos para que pueda hacer preguntas y consultas a sus bases de datos, pdfs, hojas electrónicas, imágenes, etc.',
                        'Análisis profundo de necesidades específicas',
                        'Arquitectura personalizada conforme regulaciones',
                        'Velocidad de procesamiento optimizada',
                        'Alta disponibilidad y redundancia',
                        'Confidencialidad con encriptación end-to-end',
                        'Integridad de datos con validación automática',
                        'Escalabilidad para crecimiento futuro',
                        'Experiencia en múltiples sectores'
                    ]
                ]
            ],
            [
                'icon' => '📚',
                'title' => 'Capacitación en IA',
                'text' => 'Capacitación y Workshops especializados en IA',
                'modal_id' => 'modal-capacitacion',
                'section_link' => 'https://expertosenia.net',
                'section_link_external' => true,
                'section_link_text' => 'Abrir ExpertosEnIa.net',
                'modal_content' => [
                    'title' => 'Capacitación y Desarrollo de Competencias en IA',
                    'description' => 'Programas de formación especializados para tu equipo',
                    'points' => [
                        'Workshops presenciales y virtuales',
                        'Nivel básico: introducción a IA para decisores',
                        'Nivel intermedio: implementación para especialistas TI',
                        'Nivel avanzado: desarrollo y optimización',
                        'Certificados de participación',
                        'Prácticas en laboratorio con casos reales',
                        'Material didáctico y recursos continuos',
                        'Grupos de hasta 20 personas'
                    ]
                ]
            ],
            [
                'icon' => '💬',
                'title' => 'Soporte y garantía en IA',
                'text' => 'Asistencia continua con los mejores especialistas',
                'modal_id' => 'modal-soporte',
                'section_link' => '#contacto',
                'modal_content' => [
                    'title' => 'Soporte Técnico y Garantía',
                    'description' => 'Acompañamiento permanente en tu transformación digital',
                    'points' => [
                        'Disponibilidad 24/7 para incidencias críticas',
                        'SLA garantizado según nivel de servicio',
                        'Monitoreo proactivo de sistemas',
                        'Actualizaciones de seguridad automáticas',
                        'Optimización continua de rendimiento',
                        'Asesoría estratégica para nuevos casos de uso',
                        'Escalamiento rápido de recursos',
                        'Garantía de funcionamiento'
                    ]
                ]
            ],
            [
                'icon' => '🎯',
                'title' => 'Auto test suficiencia en IA',
                'text' => 'Evalúa tus conocimientos y competencias',
                'modal_id' => 'modal-test-ia',
                'section_link' => 'https://expertosenia.net/test',
                'section_link_external' => true,
                'section_link_text' => 'Realizar Tests',
                'modal_content' => [
                    'title' => 'Tests de Suficiencia en Inteligencia Artificial',
                    'description' => 'Evalúa tu nivel de conocimiento en diferentes áreas de IA con nuestros tests especializados',
                    'points' => [
                        'Test de Fundamentos de IA: conceptos básicos y terminología',
                        'Test de Machine Learning: algoritmos y técnicas',
                        'Test de Deep Learning: redes neuronales y arquitecturas',
                        'Test de IA Generativa: LLMs, prompts y aplicaciones',
                        'Test de Ética en IA: privacidad, sesgos y responsabilidad',
                        'Test de IA Local: implementación y despliegue privado',
                        'Resultados inmediatos con retroalimentación',
                        'Certificado digital de competencias',
                        'Recomendaciones personalizadas de capacitación'
                    ]
                ]
            ]
        ]
    ];

    // ===================================
    // SECCIÓN IA LOCAL
    // ===================================
    public static $iaLocal = [
        'id' => 'ia-local',
        'title' => 'IA Local, Privada y Confidencial',
        'content_title' => 'Datos Propios de tu Organización',
        'content_text' => 'Implementamos soluciones de IA que funcionan completamente dentro de tu infraestructura, garantizando que tus datos sensibles nunca abandonen tu organización.',
        'check_list' => [
            'Modelos de IA ejecutándose localmente en tu servidor',
            'Cero transferencia de datos a servidores externos',
            'Control total sobre tu información confidencial',
            'Cumplimiento automático con regulaciones de privacidad',
            'Integración con sistemas existentes'
        ],
        'info_box' => [
            'label' => 'Contenido basado en iasoloparami.com',
            'title' => 'Casos de Uso:',
            'items' => [
                'Análisis de documentos confidenciales internos',
                'Procesamiento de datos de pacientes/clientes',
                'Clasificación de información sensible',
                'Generación de reportes automatizados',
                'Extracción de insights de datos privados'
            ]
        ]
    ];

    // ===================================
    // SECCIÓN PROTECCIÓN DE DATOS
    // ===================================
    public static $datosPersonales = [
        'id' => 'datos-personales',
        'title' => 'Protección de Datos Personales - LOPDP',
        'alert' => 'Información basada en regulaciones de la Superintendencia de Protección de Datos Personales (SPDP) de Ecuador. Cumplimiento obligatorio para todas las organizaciones que manejen datos personales.',
        'accordion' => [
            [
                'title' => 'Obligaciones de Sujetos Obligados',
                'items' => [
                    ['size' => 'Pequeño', 'text' => 'Empresas <50 empleados: Políticas básicas de privacidad, consentimiento informado, registro de tratamiento'],
                    ['size' => 'Mediano', 'text' => 'Empresas 50-500 empleados: Evaluación de impacto, encargado de protección datos, auditorías anuales'],
                    ['size' => 'Grande', 'text' => 'Empresas >500 empleados: DPIA completa, DPO designado, cumplimiento activo, reportes trimestrales']
                ]
            ],
            [
                'title' => 'Régimen de Sanciones SPDP',
                'items' => [
                    ['size' => 'Pequeño', 'text' => 'Multas: USD 1,000 - 5,000 + obligación de rectificación'],
                    ['size' => 'Mediano', 'text' => 'Multas: USD 5,000 - 20,000 + medidas correctivas'],
                    ['size' => 'Grande', 'text' => 'Multas: USD 20,000 - 100,000 + resoluciones restrictivas']
                ]
            ],
            [
                'title' => 'Riesgos Clave en Gestión de Datos',
                'items' => [
                    ['size' => 'Confidencialidad', 'text' => 'Acceso no autorizado a datos personales, breach de información sensible'],
                    ['size' => 'Integridad', 'text' => 'Modificación no autorizada de registros, corrupción de datos'],
                    ['size' => 'Disponibilidad', 'text' => 'Indisponibilidad de servicios, caída de sistemas críticos'],
                    ['size' => 'Control de Acceso', 'text' => 'Privilegios excesivos, falta de auditoría de accesos'],
                    ['size' => 'Anonimización', 'text' => 'Datos pseudo-anonimizados reconocibles, re-identificación posible'],
                    ['size' => 'Sinonimización', 'text' => 'Falsa sensación de seguridad, necesidad de controles adicionales']
                ]
            ]
        ]
    ];

    // ===================================
    // SECCIÓN SALUD OCUPACIONAL
    // ===================================
    public static $saludOcupacional = [
        'id' => 'salud-ocupacional',
        'title' => 'Salud Ocupacional - Ministerio del Trabajo',
        'alert' => 'Cumplimiento de regulaciones del Ministerio del Trabajo en Ecuador. Implementación de sistemas de IA para monitoreo y prevención de riesgos laborales.',
        'accordion' => [
            [
                'title' => 'Obligaciones en Salud y Seguridad',
                'items' => [
                    ['size' => 'Pequeño', 'text' => 'Evaluación básica de riesgos, plan de prevención, capacitación anual, botiquín de emergencia'],
                    ['size' => 'Mediano', 'text' => 'Comité de SST, evaluación periódica de riesgos, médico ocupacional, capacitación trimestral'],
                    ['size' => 'Grande', 'text' => 'Sistema integral SST, auditorías semestrales, responsable SST designado, reportes mensuales']
                ]
            ],
            [
                'title' => 'Sanciones por Incumplimiento',
                'items' => [
                    ['size' => 'Pequeño', 'text' => 'Multas: USD 500 - 2,000 + cierre temporal'],
                    ['size' => 'Mediano', 'text' => 'Multas: USD 2,000 - 10,000 + restricciones operativas'],
                    ['size' => 'Grande', 'text' => 'Multas: USD 10,000 - 50,000 + cierre de operaciones']
                ]
            ]
        ],
        'soluciones' => [
            'title' => 'Soluciones IA para Salud Ocupacional',
            'items' => [
                'Monitoreo de cumplimiento normativo automático',
                'Análisis predictivo de riesgos laborales',
                'Reportes automatizados para auditorías',
                'Generación de alertas de incidentes'
            ]
        ]
    ];

    // ===================================
    // SECCIÓN GESTIÓN DOCUMENTAL
    // ===================================
    public static $documentacion = [
        'id' => 'documentacion',
        'title' => 'Sistemas de Gestión Documental Dinámico',
        'accordion' => [
            [
                'title' => '✨ Beneficios de Gestión Documental',
                'items' => [
                    ['size' => 'Pequeño', 'text' => 'Organización básica, búsqueda rápida, control de versiones, recuperación ante pérdidas'],
                    ['size' => 'Mediano', 'text' => 'Workflows automáticos, auditoría completa, cumplimiento normativo, integración sistemas'],
                    ['size' => 'Grande', 'text' => 'Gobernanza documental avanzada, análisis predictivo, gestión del ciclo de vida completo']
                ]
            ],
            [
                'title' => '⚠️ Riesgos sin Sistema Documental Sólido',
                'items' => [
                    ['size' => 'Pequeño', 'text' => 'Pérdida de información, duplicación de datos, decisiones basadas en información desactualizada'],
                    ['size' => 'Mediano', 'text' => 'Incumplimiento regulatorio, auditorías fallidas, vulnerabilidades de seguridad'],
                    ['size' => 'Grande', 'text' => 'Riesgos legales masivos, multas por no conformidad, pérdida de competitividad']
                ]
            ]
        ],
        'features' => [
            'title' => 'Características Principales',
            'items' => [
                'Documentos privados con control de acceso',
                'Versionamiento automático',
                'Trazabilidad completa de cambios',
                'Búsqueda inteligente con IA',
                'Copias de seguridad automáticas',
                'Cumplimiento regulatorio integrado'
            ]
        ]
    ];

    // ===================================
    // SECCIÓN SOLUCIONES A LA MEDIDA
    // ===================================
    public static $soluciones = [
        'id' => 'soluciones',
        'title' => 'Soluciones a la Medida',
        'subtitle' => 'Problemas complejos de grandes volúmenes de datos requieren soluciones personalizadas',
        'cards' => [
            ['icon' => '⚡', 'title' => 'Velocidad de Procesamiento', 'text' => 'Análisis en tiempo real de millones de registros'],
            ['icon' => '🔄', 'title' => 'Disponibilidad del Sistema', 'text' => 'Arquitectura redundante 99.9% uptime'],
            ['icon' => '🔒', 'title' => 'Confidencialidad', 'text' => 'Encriptación end-to-end y aislamiento de datos'],
            ['icon' => '✓', 'title' => 'Integridad de Datos', 'text' => 'Validación automática y auditoría completa'],
            ['icon' => '👤', 'title' => 'Control de Acceso', 'text' => 'RBAC granular y autenticación multifactor'],
            ['icon' => '👻', 'title' => 'Anonimización', 'text' => 'Técnicas avanzadas de transformación de datos'],
            ['icon' => '🔄', 'title' => 'Sinonimización', 'text' => 'Preservación de estructura con privacidad'],
            ['icon' => '📈', 'title' => 'Escalabilidad', 'text' => 'Infraestructura adaptable al crecimiento']
        ],
        'metodologia' => [
            'title' => 'Metodología de Implementación',
            'steps' => [
                ['number' => '1', 'title' => 'Preliminar y piloto', 'text' => 'Identificar datos personales en una muestra de sus datos, sin costo, sin compromiso'],
                ['number' => '2', 'title' => 'Diagnóstico', 'text' => 'Análisis detallado o por fases de tus necesidades específicas'],
                ['number' => '3', 'title' => 'Diseño', 'text' => 'Arquitectura personalizada conforme plan y presupuesto'],
                ['number' => '4', 'title' => 'Implementación', 'text' => 'Desarrollo e integración en tu infraestructura'],
                ['number' => '5', 'title' => 'Validación', 'text' => 'Testing exhaustivo y cumplimiento normativo']
            ]
        ]
    ];

    // ===================================
    // SECCIÓN CAPACITACIÓN
    // ===================================
    public static $capacitacion = [
        'id' => 'capacitacion',
        'title' => 'Capacitación, Asesoría y Soporte',
        'services' => [
            [
                'class' => 'service-blue',
                'title' => 'Workshops Especializados',
                'text' => 'Capacitación intensiva en IA local, protección de datos, cumplimiento normativo',
                'items' => ['4-8 horas', 'Grupos hasta 20 personas', 'Certificados', 'Prácticas en laboratorio']
            ],
            [
                'class' => 'service-purple',
                'title' => 'Asesoría Empresarial',
                'text' => 'Consultoría personalizada para implementación de soluciones IA',
                'items' => ['Análisis de necesidades', 'Roadmap estratégico', 'Evaluación de riesgos', 'Planes de acción']
            ],
            [
                'class' => 'service-green',
                'title' => 'Soporte Técnico Continuo',
                'text' => 'Monitoreo, mantenimiento y optimización de sistemas',
                'items' => ['Disponible 24/7', 'SLA garantizado', 'Actualizaciones', 'Escalamiento rápido']
            ]
        ],
        'programas' => [
            'title' => 'Catálogo de Programas de Capacitación',
            'items' => [
                [
                    'title' => 'Nivel Básico: Introducción a IA Local',
                    'target' => 'Ideal para: Decisores, gerentes, coordinadores',
                    'text' => 'Conceptos fundamentales de IA privada, beneficios para privacidad, casos de uso empresariales.'
                ],
                [
                    'title' => 'Nivel Intermedio: Implementación de Soluciones',
                    'target' => 'Ideal para: Administradores, especialistas TI, analistas',
                    'text' => 'Instalación, configuración, integración con sistemas existentes, mantenimiento operativo.'
                ],
                [
                    'title' => 'Nivel Avanzado: Desarrollo y Optimización',
                    'target' => 'Ideal para: Desarrolladores, arquitectos, científicos de datos',
                    'text' => 'Fine-tuning de modelos, optimización de rendimiento, arquitecturas avanzadas, MLOps.'
                ]
            ]
        ]
    ];

    // ===================================
    // SECCIÓN FAQ
    // ===================================
    public static $faq = [
        'id' => 'faq',
        'title' => 'Preguntas Frecuentes',
        'subtitle' => 'Respuestas a las consultas más comunes sobre IA local y privada',
        'questions' => [
            [
                'question' => '¿Qué es la IA local y en qué se diferencia de la IA en la nube?',
                'answer' => 'La IA local ejecuta modelos de inteligencia artificial directamente en tu infraestructura (servidores propios), sin enviar datos a servicios externos. A diferencia de la IA en la nube (como ChatGPT, Claude), tus datos nunca salen de tu organización, garantizando privacidad total y cumplimiento con regulaciones como la LOPDP de Ecuador.'
            ],
            [
                'question' => '¿Mi empresa está obligada a cumplir con la LOPDP?',
                'answer' => 'Sí, si tu organización procesa datos personales de ciudadanos ecuatorianos (empleados, clientes, pacientes, etc.). La Ley Orgánica de Protección de Datos Personales aplica a todas las empresas públicas y privadas en Ecuador, independientemente de su tamaño. El incumplimiento puede resultar en multas de hasta USD 100,000.'
            ],
            [
                'question' => '¿Cuánto tiempo toma implementar una solución de IA local?',
                'answer' => 'Depende de la complejidad del proyecto. Una implementación básica puede estar lista en 2-4 semanas. Soluciones más complejas con integración a sistemas existentes pueden tomar 2-3 meses. Incluimos capacitación del personal y soporte continuo en todas nuestras implementaciones.'
            ],
            [
                'question' => '¿Necesito hardware especializado para IA local?',
                'answer' => 'No necesariamente. Muchas soluciones funcionan en servidores convencionales. Para casos de alto rendimiento, recomendamos GPUs, pero evaluamos tu infraestructura actual y optimizamos los modelos para trabajar con tus recursos existentes. También ofrecemos asesoría para upgrades cuando sea necesario.'
            ],
            [
                'question' => '¿Qué tipo de datos puede procesar la IA local?',
                'answer' => 'Prácticamente cualquier tipo: documentos (PDF, Word, Excel), correos electrónicos, bases de datos, imágenes médicas, registros de empleados, contratos, historias clínicas, datos financieros, etc. La IA puede analizar, clasificar, extraer información, generar resúmenes y responder preguntas sobre tus datos.'
            ],
            [
                'question' => '¿Cómo se garantiza la seguridad de los datos?',
                'answer' => 'Implementamos múltiples capas de seguridad: encriptación de datos en reposo y en tránsito, control de acceso basado en roles (RBAC), auditoría completa de accesos, aislamiento de red, y cumplimiento con estándares ISO 27001. Tus datos nunca salen de tu infraestructura.'
            ],
            [
                'question' => '¿Ofrecen soporte y mantenimiento continuo?',
                'answer' => 'Sí, todos nuestros proyectos incluyen soporte técnico 24/7, actualizaciones de seguridad, optimización de rendimiento, y capacitación continua. Ofrecemos diferentes niveles de SLA según las necesidades de tu organización.'
            ],
            [
                'question' => '¿Puedo integrar la IA con mis sistemas actuales?',
                'answer' => 'Absolutamente. Diseñamos soluciones que se integran con tus sistemas existentes: ERP, CRM, sistemas de gestión documental, bases de datos, Active Directory, etc. Usamos APIs estándar y protocolos seguros para garantizar compatibilidad.'
            ],
            [
                'question' => '¿Qué pasa si mi organización crece? ¿La solución es escalable?',
                'answer' => 'Todas nuestras soluciones están diseñadas para escalar. Puedes empezar con una implementación pequeña y expandir según tus necesidades. La arquitectura permite agregar más capacidad de procesamiento, usuarios, y funcionalidades sin necesidad de rehacer el sistema.'
            ],
            [
                'question' => '¿Cuál es el ROI de implementar IA local?',
                'answer' => 'El retorno de inversión varía según el caso de uso, pero típicamente incluye: reducción de 60-80% en tiempo de procesamiento de documentos, disminución de errores humanos, cumplimiento normativo (evitando multas), automatización de tareas repetitivas, y mejor toma de decisiones basada en datos. Muchos clientes recuperan la inversión en 6-12 meses.'
            ]
        ]
    ];

    // ===================================
    // SECCIÓN REFERENCIAS
    // ===================================
    public static $referencias = [
        'id' => 'referencias',
        'title' => 'Referencias y Recursos Autorizados',
        'subtitle' => 'Fuentes oficiales y recursos técnicos sobre IA, protección de datos y regulaciones en Ecuador',
        'categories' => [
            [
                'title' => 'Regulación y Cumplimiento en Ecuador',
                'items' => [
                    [
                        'name' => 'Superintendencia de Protección de Datos Personales (SPDP)',
                        'description' => 'Organismo oficial de control y regulación de datos personales en Ecuador',
                        'url' => 'https://spdp.gob.ec/'
                    ],
                    [
                        'name' => 'Ley Orgánica de Protección de Datos Personales',
                        'description' => 'Texto completo de la LOPDP - Registro Oficial',
                        'url' => 'https://spdp.gob.ec/'
                    ],
                    [
                        'name' => 'Ministerio del Trabajo - Ecuador',
                        'description' => 'Normativas de salud ocupacional y seguridad laboral',
                        'url' => 'https://www.trabajo.gob.ec/'
                    ]
                ]
            ],
            [
                'title' => 'Inteligencia Artificial y Tecnología',
                'items' => [
                    [
                        'name' => 'Ollama - IA Local Open Source',
                        'description' => 'Plataforma para ejecutar modelos de IA localmente',
                        'url' => 'https://ollama.ai/'
                    ],
                    [
                        'name' => 'Hugging Face',
                        'description' => 'Repositorio de modelos de IA open source',
                        'url' => 'https://huggingface.co/'
                    ],
                    [
                        'name' => 'LangChain',
                        'description' => 'Framework para desarrollo de aplicaciones con LLMs',
                        'url' => 'https://www.langchain.com/'
                    ],
                    [
                        'name' => 'LlamaIndex',
                        'description' => 'Framework para indexación y búsqueda con IA',
                        'url' => 'https://www.llamaindex.ai/'
                    ]
                ]
            ],
            [
                'title' => 'Seguridad y Privacidad',
                'items' => [
                    [
                        'name' => 'OWASP - Open Web Application Security',
                        'description' => 'Estándares de seguridad en aplicaciones web',
                        'url' => 'https://owasp.org/'
                    ],
                    [
                        'name' => 'NIST Cybersecurity Framework',
                        'description' => 'Marco de referencia para ciberseguridad',
                        'url' => 'https://www.nist.gov/cyberframework'
                    ],
                    [
                        'name' => 'ISO 27001 Information Security',
                        'description' => 'Estándar internacional de seguridad de la información',
                        'url' => 'https://www.iso.org/isoiec-27001-information-security.html'
                    ]
                ]
            ],
            [
                'title' => 'Recursos Educativos',
                'items' => [
                    [
                        'name' => 'Fast.ai - Cursos Prácticos de IA',
                        'description' => 'Cursos gratuitos de deep learning y IA',
                        'url' => 'https://www.fast.ai/'
                    ],
                    [
                        'name' => 'DeepLearning.AI',
                        'description' => 'Cursos especializados en IA por Andrew Ng',
                        'url' => 'https://www.deeplearning.ai/'
                    ],
                    [
                        'name' => 'Papers With Code',
                        'description' => 'Investigación académica en IA con implementaciones',
                        'url' => 'https://paperswithcode.com/'
                    ]
                ]
            ]
        ]
    ];

    // ===================================
    // SECCIÓN CONTACTO
    // ===================================
    public static $contacto = [
        'id' => 'contacto',
        'title' => 'Contacto',
        'cards' => [
            ['icon' => '📧', 'title' => 'Email', 'text' => 'contacto@libresoft.ec', 'href' => 'mailto:ricardo.ortega@libresoft.ec'],
            ['icon' => '📱', 'title' => 'Teléfono', 'text' => '(02)252-4710', 'href' => 'tel:+593959595168'],
            ['icon' => '📍', 'title' => 'Ubicación', 'text' => 'Quito, Ecuador', 'href' => null]
        ],
        'cta' => [
            'title' => '¿Listo para aplicar la IA y mejorar tu organización?',
            'text' => 'Agenda una consulta gratuita Zoom y descubre cómo podemos ayudarte',
            'button_text' => 'Agendar Consulta',
            'button_href' => 'mailto:ricardo.ortega@libresoft.ec'
        ]
    ];

    // ===================================
    // BOTONES FLOTANTES
    // ===================================
    public static $floatingButtons = [
        'whatsapp' => [
            'phone' => '593999999999',
            'message' => 'Hola, me interesa conocer más sobre las soluciones de IA para Ecuador',
            'position' => 'right'
        ],
        'telegram' => [
            'username' => 'iaparaecuador',
            'position' => 'left'
        ]
    ];

    // ===================================
    // FOOTER
    // ===================================
    public static $footer = [
        'copyright' => '© 2025 IA para Ecuador. Todos los derechos reservados LIBRESOFT S. A..',
        'tagline' => 'Soluciones de Inteligencia Artificial Local, Privada, a la medida de sus datos'
    ];

    // ===================================
    // MÉTODOS DE RENDERIZADO
    // ===================================
    
    public static function renderHead() {
        $meta = self::$meta;
        print '<!DOCTYPE html>'.L;
        print '<html lang="'.$meta['lang'].'">'.L;
        print '<head>'.L;
        print '    <meta charset="'.$meta['charset'].'">'.L;
        print '    <meta name="viewport" content="width=device-width, initial-scale=1.0">'.L;
        print '    <title>'.$meta['title'].'</title>'.L;
        print '    <meta name="description" content="'.$meta['description'].'">'.L;
        print '    <link rel="icon" type="image/svg+xml" href="'.$meta['favicon'].'">'.L;
        print '    <link rel="stylesheet" href="'.$meta['css'].'">'.L;
        print '</head>'.L;
        print '<body>'.L;
    }

    public static function renderNav() {
        $nav = self::$nav;
        print '    <nav id="navbar" class="navbar">'.L;
        print '        <div class="container">'.L;
        print '            <div class="nav-content">'.L;
        print '                <a href="#inicio" class="logo">'.L;
        print '                    <div class="logo-icon">'.$nav['logo_icon'].'</div>'.L;
        print '                    <span class="logo-text">'.$nav['logo_text'].'</span>'.L;
        print '                </a>'.L;
        print '                <ul class="nav-menu" id="navMenu">'.L;
        foreach ($nav['menu'] as $item) {
            print '                    <li><a href="'.$item['href'].'" class="nav-link">'.$item['text'].'</a></li>'.L;
        }
        print '                </ul>'.L;
        print '                <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Menú">'.L;
        print '                    <span></span>'.L;
        print '                    <span></span>'.L;
        print '                    <span></span>'.L;
        print '                </button>'.L;
        print '            </div>'.L;
        print '        </div>'.L;
        print '    </nav>'.L;
    }

    public static function renderHero() {
        $hero = self::$hero;
        print '    <main>'.L;
        print '        <section id="inicio" class="hero">'.L;
        print '            <div class="container">'.L;
        print '                <div class="hero-content">'.L;
        print '                    <h1 class="hero-title">'.$hero['title'].'</h1>'.L;
        print '                    <p class="hero-subtitle">'.$hero['subtitle'].'</p>'.L;
        print '                    <div class="hero-buttons">'.L;
        foreach ($hero['buttons'] as $btn) {
            print '                        <a href="'.$btn['href'].'" class="btn '.$btn['class'].'">'.$btn['text'].'</a>'.L;
        }
        print '                    </div>'.L;
        print '                </div>'.L;
        print '                <div class="feature-grid">'.L;
        foreach ($hero['features'] as $feature) {
            print '                    <div class="feature-card" data-modal="'.$feature['modal_id'].'">'.L;
            print '                        <div class="feature-icon">'.L;
            if ($feature['icon'] === 'svg-lock-key') {
                print '<svg viewBox="0 0 64 64" width="48" height="48" xmlns="http://www.w3.org/2000/svg">'.L;
                print '  <defs>'.L;
                print '    <linearGradient id="lockGradient" x1="0%" y1="0%" x2="0%" y2="100%">'.L;
                print '      <stop offset="0%" style="stop-color:#ff8c00;stop-opacity:1" />'.L;
                print '      <stop offset="100%" style="stop-color:#ff6600;stop-opacity:1" />'.L;
                print '    </linearGradient>'.L;
                print '    <linearGradient id="keyGradient" x1="0%" y1="0%" x2="100%" y2="0%">'.L;
                print '      <stop offset="0%" style="stop-color:#ffd700;stop-opacity:1" />'.L;
                print '      <stop offset="100%" style="stop-color:#ffed4e;stop-opacity:1" />'.L;
                print '    </linearGradient>'.L;
                print '  </defs>'.L;
                print '  <!-- Candado -->'.L;
                print '  <rect x="18" y="28" width="28" height="24" rx="3" fill="url(#lockGradient)" stroke="#cc5500" stroke-width="2"/>'.L;
                print '  <path d="M 22 28 L 22 20 Q 22 12 32 12 Q 42 12 42 20 L 42 28" fill="none" stroke="url(#lockGradient)" stroke-width="3" stroke-linecap="round"/>'.L;
                print '  <circle cx="32" cy="38" r="3" fill="#fff" opacity="0.9"/>'.L;
                print '  <rect x="30.5" y="38" width="3" height="8" rx="1.5" fill="#fff" opacity="0.9"/>'.L;
                print '  <!-- Llave -->'.L;
                print '  <circle cx="50" cy="18" r="5" fill="url(#keyGradient)" stroke="#daa520" stroke-width="1.5"/>'.L;
                print '  <circle cx="50" cy="18" r="2" fill="none" stroke="#daa520" stroke-width="1"/>'.L;
                print '  <rect x="48" y="18" width="12" height="3" rx="1" fill="url(#keyGradient)" stroke="#daa520" stroke-width="1"/>'.L;
                print '  <rect x="56" y="16" width="2" height="2" fill="url(#keyGradient)"/>'.L;
                print '  <rect x="56" y="19" width="2" height="2" fill="url(#keyGradient)"/>'.L;
                print '</svg>'.L;
            } else {
                print $feature['icon'];
            }
            print '</div>'.L;
            print '                        <h3>'.$feature['title'].'</h3>'.L;
            print '                        <p>'.$feature['text'].'</p>'.L;
            print '                    </div>'.L;
        }
        print '                </div>'.L;
        print '            </div>'.L;
        print '        </section>'.L;
    }

    public static function renderModals() {
        $hero = self::$hero;
        print '    <!-- MODALS -->'.L;
        foreach ($hero['features'] as $feature) {
            print '    <div id="'.$feature['modal_id'].'" class="modal">'.L;
            print '        <div class="modal-content">'.L;
            print '            <div class="modal-header">'.L;
            print '                <h2>'.$feature['modal_content']['title'].'</h2>'.L;
            print '                <button class="modal-close">&times;</button>'.L;
            print '            </div>'.L;
            print '            <div class="modal-body">'.L;
            print '                <p class="modal-description">'.$feature['modal_content']['description'].'</p>'.L;
            print '                <ul class="modal-list">'.L;
            foreach ($feature['modal_content']['points'] as $point) {
                print '                    <li>'.$point.'</li>'.L;
            }
            print '                </ul>'.L;
            print '                <div class="modal-actions">'.L;
            $linkText = isset($feature['section_link_text']) ? $feature['section_link_text'] : 'Ver Sección Completa';
            $linkTarget = isset($feature['section_link_external']) && $feature['section_link_external'] ? ' target="_blank" rel="noopener noreferrer"' : '';
            print '                    <a href="'.$feature['section_link'].'"'.$linkTarget.' class="btn btn-primary modal-btn">'.$linkText.'</a>'.L;
            print '                    <button class="btn btn-secondary modal-btn modal-close-btn">Cerrar</button>'.L;
            print '                </div>'.L;
            print '            </div>'.L;
            print '        </div>'.L;
            print '    </div>'.L;
        }
    }

    public static function renderIALocal() {
        $data = self::$iaLocal;
        print '        <section id="'.$data['id'].'" class="section">'.L;
        print '            <div class="container">'.L;
        print '                <h2 class="section-title">'.$data['title'].'</h2>'.L;
        print '                <div class="content-box">'.L;
        print '                    <h3 class="content-title">'.$data['content_title'].'</h3>'.L;
        print '                    <p class="content-text">'.$data['content_text'].'</p>'.L;
        print '                    <ul class="check-list">'.L;
        foreach ($data['check_list'] as $item) {
            print '                        <li>'.$item.'</li>'.L;
        }
        print '                    </ul>'.L;
        print '                    <div class="info-box">'.L;
        print '                        <p class="info-label">'.$data['info_box']['label'].'</p>'.L;
        print '                        <h4>'.$data['info_box']['title'].'</h4>'.L;
        print '                        <ul>'.L;
        foreach ($data['info_box']['items'] as $item) {
            print '                            <li>'.$item.'</li>'.L;
        }
        print '                        </ul>'.L;
        print '                    </div>'.L;
        print '                </div>'.L;
        print '            </div>'.L;
        print '        </section>'.L;
    }

    public static function renderDatosPersonales() {
        $data = self::$datosPersonales;
        print '        <section id="'.$data['id'].'" class="section section-alt">'.L;
        print '            <div class="container">'.L;
        print '                <h2 class="section-title">'.$data['title'].'</h2>'.L;
        print '                <div class="alert-box">'.L;
        print '                    <p>'.$data['alert'].'</p>'.L;
        print '                </div>'.L;
        print '                <div class="accordion">'.L;
        foreach ($data['accordion'] as $section) {
            print '                    <div class="accordion-item">'.L;
            print '                        <button class="accordion-header">'.L;
            print '                            <span>'.$section['title'].'</span>'.L;
            print '                            <span class="accordion-icon">▼</span>'.L;
            print '                        </button>'.L;
            print '                        <div class="accordion-content">'.L;
            foreach ($section['items'] as $item) {
                print '                            <div class="org-card">'.L;
                print '                                <h4>'.$item['size'].'</h4>'.L;
                print '                                <p>'.$item['text'].'</p>'.L;
                print '                            </div>'.L;
            }
            print '                        </div>'.L;
            print '                    </div>'.L;
        }
        print '                </div>'.L;
        print '            </div>'.L;
        print '        </section>'.L;
    }

    public static function renderSaludOcupacional() {
        $data = self::$saludOcupacional;
        print '        <section id="'.$data['id'].'" class="section">'.L;
        print '            <div class="container">'.L;
        print '                <h2 class="section-title">'.$data['title'].'</h2>'.L;
        print '                <div class="alert-box alert-success">'.L;
        print '                    <p>'.$data['alert'].'</p>'.L;
        print '                </div>'.L;
        print '                <div class="accordion">'.L;
        foreach ($data['accordion'] as $section) {
            print '                    <div class="accordion-item">'.L;
            print '                        <button class="accordion-header">'.L;
            print '                            <span>'.$section['title'].'</span>'.L;
            print '                            <span class="accordion-icon">▼</span>'.L;
            print '                        </button>'.L;
            print '                        <div class="accordion-content">'.L;
            foreach ($section['items'] as $item) {
                print '                            <div class="org-card">'.L;
                print '                                <h4>'.$item['size'].'</h4>'.L;
                print '                                <p>'.$item['text'].'</p>'.L;
                print '                            </div>'.L;
            }
            print '                        </div>'.L;
            print '                    </div>'.L;
        }
        print '                </div>'.L;
        print '                <div class="content-box" style="margin-top: 2rem;">'.L;
        print '                    <h3 class="content-title">'.$data['soluciones']['title'].'</h3>'.L;
        print '                    <ul class="arrow-list">'.L;
        foreach ($data['soluciones']['items'] as $item) {
            print '                        <li>'.$item.'</li>'.L;
        }
        print '                    </ul>'.L;
        print '                </div>'.L;
        print '            </div>'.L;
        print '        </section>'.L;
    }

    public static function renderDocumentacion() {
        $data = self::$documentacion;
        print '        <section id="'.$data['id'].'" class="section section-alt">'.L;
        print '            <div class="container">'.L;
        print '                <h2 class="section-title">'.$data['title'].'</h2>'.L;
        print '                <div class="accordion">'.L;
        foreach ($data['accordion'] as $section) {
            print '                    <div class="accordion-item">'.L;
            print '                        <button class="accordion-header">'.L;
            print '                            <span>'.$section['title'].'</span>'.L;
            print '                            <span class="accordion-icon">▼</span>'.L;
            print '                        </button>'.L;
            print '                        <div class="accordion-content">'.L;
            foreach ($section['items'] as $item) {
                print '                            <div class="org-card">'.L;
                print '                                <h4>'.$item['size'].'</h4>'.L;
                print '                                <p>'.$item['text'].'</p>'.L;
                print '                            </div>'.L;
            }
            print '                        </div>'.L;
            print '                    </div>'.L;
        }
        print '                </div>'.L;
        print '                <div class="content-box" style="margin-top: 2rem;">'.L;
        print '                    <h3 class="content-title">'.$data['features']['title'].'</h3>'.L;
        print '                    <div class="features-two-col">'.L;
        foreach ($data['features']['items'] as $item) {
            print '                        <div class="feature-item">▸ '.$item.'</div>'.L;
        }
        print '                    </div>'.L;
        print '                </div>'.L;
        print '            </div>'.L;
        print '        </section>'.L;
    }

    public static function renderSoluciones() {
        $data = self::$soluciones;
        print '        <section id="'.$data['id'].'" class="section">'.L;
        print '            <div class="container">'.L;
        print '                <h2 class="section-title">'.$data['title'].'</h2>'.L;
        print '                <p class="section-subtitle">'.$data['subtitle'].'</p>'.L;
        print '                <div class="solutions-grid">'.L;
        foreach ($data['cards'] as $card) {
            print '                    <div class="solution-card">'.L;
            print '                        <div class="solution-icon">'.$card['icon'].'</div>'.L;
            print '                        <h3>'.$card['title'].'</h3>'.L;
            print '                        <p>'.$card['text'].'</p>'.L;
            print '                    </div>'.L;
        }
        print '                </div>'.L;
        print '                <div class="content-box" style="margin-top: 3rem;">'.L;
        print '                    <h3 class="content-title">'.$data['metodologia']['title'].'</h3>'.L;
        print '                    <div class="methodology">'.L;
        foreach ($data['metodologia']['steps'] as $step) {
            print '                        <div class="method-step">'.L;
            print '                            <div class="step-number">'.$step['number'].'</div>'.L;
            print '                            <div class="step-content">'.L;
            print '                                <h4>'.$step['title'].'</h4>'.L;
            print '                                <p>'.$step['text'].'</p>'.L;
            print '                            </div>'.L;
            print '                        </div>'.L;
        }
        print '                    </div>'.L;
        print '                </div>'.L;
        print '            </div>'.L;
        print '        </section>'.L;
    }

    public static function renderCapacitacion() {
        $data = self::$capacitacion;
        print '        <section id="'.$data['id'].'" class="section section-alt">'.L;
        print '            <div class="container">'.L;
        print '                <h2 class="section-title">'.$data['title'].'</h2>'.L;
        print '                <div class="services-grid">'.L;
        foreach ($data['services'] as $service) {
            print '                    <div class="service-card '.$service['class'].'">'.L;
            print '                        <h3>'.$service['title'].'</h3>'.L;
            print '                        <p>'.$service['text'].'</p>'.L;
            print '                        <ul>'.L;
            foreach ($service['items'] as $item) {
                print '                            <li>'.$item.'</li>'.L;
            }
            print '                        </ul>'.L;
            print '                    </div>'.L;
        }
        print '                </div>'.L;
        print '                <div class="content-box" style="margin-top: 3rem;">'.L;
        print '                    <h3 class="content-title">'.$data['programas']['title'].'</h3>'.L;
        foreach ($data['programas']['items'] as $programa) {
            print '                    <div class="training-program">'.L;
            print '                        <h4>'.$programa['title'].'</h4>'.L;
            print '                        <p class="program-target">'.$programa['target'].'</p>'.L;
            print '                        <p>'.$programa['text'].'</p>'.L;
            print '                    </div>'.L;
        }
        print '                </div>'.L;
        print '            </div>'.L;
        print '        </section>'.L;
    }

    public static function renderFAQ() {
        $data = self::$faq;
        print '        <section id="'.$data['id'].'" class="section section-alt">'.L;
        print '            <div class="container">'.L;
        print '                <h2 class="section-title">'.$data['title'].'</h2>'.L;
        print '                <p class="section-subtitle">'.$data['subtitle'].'</p>'.L;
        print '                <div class="accordion">'.L;
        foreach ($data['questions'] as $item) {
            print '                    <div class="accordion-item">'.L;
            print '                        <button class="accordion-header">'.L;
            print '                            <span>'.$item['question'].'</span>'.L;
            print '                            <span class="accordion-icon">▼</span>'.L;
            print '                        </button>'.L;
            print '                        <div class="accordion-content">'.L;
            print '                            <div class="org-card">'.L;
            print '                                <p>'.$item['answer'].'</p>'.L;
            print '                            </div>'.L;
            print '                        </div>'.L;
            print '                    </div>'.L;
        }
        print '                </div>'.L;
        print '            </div>'.L;
        print '        </section>'.L;
    }

    public static function renderReferencias() {
        $data = self::$referencias;
        print '        <section id="'.$data['id'].'" class="section">'.L;
        print '            <div class="container">'.L;
        print '                <h2 class="section-title">'.$data['title'].'</h2>'.L;
        print '                <p class="section-subtitle">'.$data['subtitle'].'</p>'.L;
        foreach ($data['categories'] as $category) {
            print '                <div class="content-box">'.L;
            print '                    <h3 class="content-title">'.$category['title'].'</h3>'.L;
            print '                    <div class="reference-list">'.L;
            foreach ($category['items'] as $item) {
                print '                        <div class="reference-item">'.L;
                print '                            <h4 class="reference-name">'.L;
                print '                                <a href="'.$item['url'].'" target="_blank" rel="noopener noreferrer">'.$item['name'].' ↗</a>'.L;
                print '                            </h4>'.L;
                print '                            <p class="reference-description">'.$item['description'].'</p>'.L;
                print '                            <p class="reference-url"><small>'.$item['url'].'</small></p>'.L;
                print '                        </div>'.L;
            }
            print '                    </div>'.L;
            print '                </div>'.L;
        }
        print '            </div>'.L;
        print '        </section>'.L;
    }

    public static function renderContacto() {
        $data = self::$contacto;
        print '        <section id="'.$data['id'].'" class="section section-alt">'.L;
        print '            <div class="container">'.L;
        print '                <h2 class="section-title">'.$data['title'].'</h2>'.L;
        print '                <div class="contact-grid">'.L;
        foreach ($data['cards'] as $card) {
            print '                    <div class="contact-card">'.L;
            print '                        <div class="contact-icon">'.$card['icon'].'</div>'.L;
            print '                        <h3>'.$card['title'].'</h3>'.L;
            if ($card['href']) {
                print '                        <p><a href="'.$card['href'].'">'.$card['text'].'</a></p>'.L;
            } else {
                print '                        <p>'.$card['text'].'</p>'.L;
            }
            print '                    </div>'.L;
        }
        print '                </div>'.L;
        print '                <div class="cta-box">'.L;
        print '                    <h3>'.$data['cta']['title'].'</h3>'.L;
        print '                    <p>'.$data['cta']['text'].'</p>'.L;
        print '                    <a href="'.$data['cta']['button_href'].'" class="btn btn-primary btn-large">'.$data['cta']['button_text'].'</a>'.L;
        print '                </div>'.L;
        print '            </div>'.L;
        print '        </section>'.L;
        print '    </main>'.L;
    }

    public static function renderFloatingButtons() {
        $buttons = self::$floatingButtons;
        
        // Telegram Button (izquierda)
        $telegramUrl = 'https://t.me/'.$buttons['telegram']['username'];
        print '    <a href="'.$telegramUrl.'" target="_blank" rel="noopener noreferrer" class="floating-btn floating-btn-telegram" aria-label="Contactar por Telegram">'.L;
        print '        <svg viewBox="0 0 32 32" width="32" height="32" fill="currentColor">'.L;
        print '            <path d="M16 0c-8.838 0-16 7.162-16 16s7.162 16 16 16 16-7.163 16-16-7.163-16-16-16zM23.863 10.969l-2.625 12.369c-0.194 0.875-0.712 1.087-1.444 0.681l-4-2.95-1.919 1.85c-0.213 0.213-0.394 0.394-0.8 0.394l0.288-4.075 7.381-6.669c0.319-0.287-0.069-0.444-0.5-0.156l-9.119 5.744-3.931-1.231c-0.856-0.262-0.869-0.85 0.175-1.262l15.369-5.925c0.713-0.256 1.331 0.169 1.094 1.231z"/>'.L;
        print '        </svg>'.L;
        print '    </a>'.L;
        
        // WhatsApp Button (derecha)
        $whatsappUrl = 'https://wa.me/'.$buttons['whatsapp']['phone'].'?text='.urlencode($buttons['whatsapp']['message']);
        print '    <a href="'.$whatsappUrl.'" target="_blank" rel="noopener noreferrer" class="floating-btn floating-btn-whatsapp" aria-label="Contactar por WhatsApp">'.L;
        print '        <svg viewBox="0 0 32 32" width="32" height="32" fill="currentColor">'.L;
        print '            <path d="M16 0c-8.837 0-16 7.163-16 16 0 2.825 0.737 5.607 2.137 8.048l-2.137 7.952 7.933-2.127c2.42 1.37 5.173 2.127 8.067 2.127 8.837 0 16-7.163 16-16s-7.163-16-16-16zM16 29.467c-2.482 0-4.908-0.646-7.07-1.87l-0.507-0.292-4.713 1.262 1.262-4.669-0.292-0.508c-1.207-2.100-1.847-4.507-1.847-6.923 0-7.435 6.050-13.485 13.485-13.485s13.485 6.050 13.485 13.485c0 7.435-6.050 13.485-13.485 13.485zM21.960 18.828c-0.305-0.153-1.802-0.890-2.082-0.992s-0.483-0.153-0.686 0.153c-0.203 0.305-0.788 0.992-0.966 1.195s-0.356 0.230-0.661 0.077c-0.305-0.153-1.288-0.475-2.453-1.513-0.907-0.808-1.520-1.807-1.698-2.112s-0.018-0.470 0.134-0.622c0.138-0.137 0.305-0.356 0.458-0.534s0.203-0.305 0.305-0.509c0.102-0.203 0.051-0.381-0.025-0.534s-0.686-1.653-0.940-2.263c-0.248-0.594-0.499-0.513-0.686-0.522-0.178-0.008-0.381-0.010-0.584-0.010s-0.534 0.076-0.813 0.381c-0.280 0.305-1.067 1.043-1.067 2.543s1.093 2.951 1.245 3.154c0.153 0.203 2.109 3.230 5.109 4.528 0.714 0.309 1.271 0.494 1.704 0.632 0.717 0.228 1.369 0.195 1.884 0.118 0.575-0.086 1.802-0.736 2.056-1.447s0.254-1.320 0.178-1.447c-0.076-0.127-0.280-0.203-0.584-0.356z"/>'.L;
        print '        </svg>'.L;
        print '    </a>'.L;
    }

    public static function renderFooter() {
        $footer = self::$footer;
        print '    <footer class="footer">'.L;
        print '        <div class="container">'.L;
        print '            <p>'.$footer['copyright'].'</p>'.L;
        print '            <p>'.$footer['tagline'].'</p>'.L;
        print '        </div>'.L;
        print '    </footer>'.L;
        print '    <script src="'.self::$meta['js'].'"></script>'.L;
        print '</body>'.L;
        print '</html>'.L;
    }

    public static function render() {
        self::renderHead();
        self::renderNav();
        self::renderHero();
        self::renderIALocal();
        self::renderDatosPersonales();
        self::renderSaludOcupacional();
        self::renderDocumentacion();
        self::renderSoluciones();
        self::renderCapacitacion();
        self::renderFAQ();
        self::renderReferencias();
        self::renderContacto();
        self::renderModals();
        self::renderFloatingButtons();
        self::renderFooter();
    }
}

// ===================================
// RENDERIZADO PRINCIPAL
// ===================================
IA::render();
?>
