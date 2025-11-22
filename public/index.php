<?php
define("L","\n");

class IA {
    // ===================================
    // META Y CONFIGURACIÓN
    // ===================================
    public static $meta = [
        'charset' => 'UTF-8',
        'lang' => 'es',
        'title' => 'Soluciones IA con inmediata aplicación en Ecuador',
        'description' => 'Soluciones de Inteligencia Artificial local, privada y confidencial para Ecuador. Cumplimiento LOPDP, gestión documental, SUT, SST, SRI, IESS',
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
            ['href' => '#ia-local', 'text' => 'IA&nbsp;privada solo para mí'],
            ['href' => '#datos-personales', 'text' => 'Pasar auditorías SPDP'],
            ['href' => '#salud-ocupacional', 'text' => 'Pasar inspecciones MDT'],
            ['href' => '#documentacion', 'text' => 'Gestión Documental Moderna'],
            ['href' => '#soluciones', 'text' => 'Soluciones IA a la medida'],
            ['href' => '#capacitacion', 'text' => 'Workshops IA'],
            ['href' => '#faq', 'text' => 'Preguntas frecuentes'],
            ['href' => '#referencias', 'text' => 'Referencias autorizadas'],
            ['href' => '#contacto', 'text' => 'Contacto']
        ]
    ];

    // ===================================
    // SECCIÓN HERO / INICIO
    // ===================================
    public static $hero = [
        'title' => 'Inteligencia Artificial para Ecuador',
        'subtitle' => 'Usos y aplicaciones reales de la IA para instituciones, empresas, académia, estudiantes, emprendedores, profesionales y especialistas. La IA multiplicando la productividad de las personas y organizaciones.',
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
                    'title' => 'IA Local, privada, confidencial sin internet',
                    'description' => 'Modelos de inteligencia artificial ejecutándose en tu propia infraestructura (laptop, PC, servidor), tus datos, sin necesidad de conexión a internet',
                    'points' => [
                        'Datos que nunca salen de tu organización',
                        'Cero transferencia a servidores externos o nubes públicas',
                        'Control total sobre información confidencial',
                        'Inteligencia artificial exclusiva a la medida para tus datos y tus necesidades',
                        'Procesamiento de documentos sensibles sin riesgos',
                        'Análisis de datos de clientes, pacientes, productos, empleados, contabilidad',
                        'Opcional Integración con sistemas existentes',
                        'Funciona sin conexión a internet'
                    ]
                ]
            ],
            [
                'icon' => 'svg-checklist-audit',
                'title' => 'Pasar con éxito auditorías sobre tratamiento de datos personales SPDP',
                'text' => 'Cumplir con la LOPDP; que no es llenar un "papelito de consentimiento" especialmente para grandes contribuyentes con millones de usuarios',
                'modal_id' => 'modal-datos-personales',
                'section_link' => '#datos-personales',
                'modal_content' => [
                    'title' => 'Pasar con éxito auditorías sobre tratamiento de datos personales SPDP',
                    'description' => 'Cumplimiento real y tecnológico de la Ley Orgánica de Protección de Datos Personales de Ecuador y controles de la Superintendencia SPDP. Mucho más que hacer firmar un papelito!!!',
                    'points' => [
                        'Aplicamos privacidad y confidencialidad ante todo. Sus datos NUNCA deben subirse a internet',
                        'Brindamos servicio para Identificar datos personales simples y sensibles en bases de datos de todo tamaño y modelo',
                        'Trabajamos directamente con tus esquemas digitales de datos, sabemos que la documentación no siempre está actualizada',
                        'Resoluciones y Marco obligatorio para empresas, organizaciones y peronas para el tratamiento de datos personales',
                        'Tratamiento: seudonimización, anonimización, ocultación, encriptado, eliminación, transferencia, consentimiento informado',
                        'Métodos directos para identificar y verificar el cumplimiento de los estándares tecnológicos, repositorios / bases de datos / aplicaciones para cumplir con la LOPDP',
                        'Recomendaciones para clasificar, sinonimizar, anonimizar y encriptar datos personales simples, sensibles y otros',
                        'Cumplimiento con regulaciones y notificaciones de la SPDP (Superintendencia de Protección de Datos Personales)',
                        'Políticas de privacidad y consentimiento informado efectivos',
                        'Registro de tratamiento de datos personales',
                        'Evaluación de impacto en protección de datos (DPIA)',
                        'Asistencia en designación de encargado de protección de datos (DPO)',
                        'Reportes y evidencias de cumplimiento',
                        'Evita multas de USD 1,000 hasta USD 100,000',
                        'Preparación para inspecciones de la SPDP'
                    ]
                ]
            ],
            [
                'icon' => 'svg-checklist-inspector',
                'title' => 'Pasar con éxito inspecciones del Ministerio del Trabajo',
                'text' => 'Empresas y entidades',
                'modal_id' => 'modal-salud-ocupacional',
                'section_link' => '#salud-ocupacional',
                'modal_content' => [
                    'title' => 'Pasar con éxito inspecciones del Ministerio del Trabajo',
                    'description' => 'Sistemas a la medida de cada organización para definir obligaciones y cumplimiento de las 96 obligaciones 2025, SUT, equidad de género, ...',
                    'points' => [
                        'Herramientas digitales para orientarte en el cumplimiento normativo con el sustento legal',
                        'Ayudas para el cumplimiento en inspecciones',
                        'Monitoreo de cumplimiento normativo',
                        'Herramientas para gestión de comités de SST',
                        'Herramientas para gestión de comités de Equidad de Género',
                        'Registro de capacitaciones y exámenes médicos',
                        'Registro de entrega de documentos a empleados',
                        'Alertas de incidentes y accidentes',
                        'Evita multas de USD 500 hasta USD 50,000',
                        'Evita cierres o suspensiones de tu negocio'
                    ]
                ]
            ],
            [
                'icon' => 'svg-docs-ai-brain',
                'title' => 'Gestión Documental con IA',
                'text' => 'Control total de documentos en la era de la IA',
                'modal_id' => 'modal-gestion-documental',
                'section_link' => '#documentacion',
                'modal_content' => [
                    'title' => 'Sistema de Gestión Documental Inteligente con IA',
                    'description' => 'Organiza, busca y gestiona documentos con inteligencia artificial. El Ministerio del Trabajo exige desde julio 2025 que cada empleador almacene y gestione sus documentos',
                    'points' => [
                        'Clasificación automática de documentos según estructura MDT SUT, SRI, IESS, SuperCIAS, SupTel ...',
                        'Búsqueda inteligente en lenguaje natural',
                        'Control de versiones y trazabilidad completa',
                        'Extracción automática de metadatos y de información clave',
                        'Workflows de aprobación automatizados',
                        'Copias de seguridad y recuperación ante desastres',
                        'Cumplimiento con normativas modernas para archivo',
                        'Organización eficiente para grandes volúmenes de datos y archivos complejoso',
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
                    'description' => 'Desarrollo de soluciones específicas para problemas complejos SRI, IESS, MDT, SuperCias, ...',
                    'points' => [
                        'Servicios de descarga de comprobantes de compra y venta desde el SRI',
                        'Generación masiva y automática de retenciones electrónicas en la fuente',
                        'Generación masiva y automática de facturas recurrentes',
                        'Sistema Hable con sus datos para que pueda hacer preguntas y consultas a sus bases de datos, pdfs, hojas electrónicas, imágenes, etc.',
                        'Emparejamiento codificación SRI, SuperCIAS, SENAE, SERCOP, ...',
                        'Análisis profundo de necesidades específicas',
                        'Arquitectura personalizada conforme regulaciones',
                        'Velocidad de procesamiento optimizada',
                        'Alta disponibilidad y redundancia',
                        'Confidencialidad con encriptación end-to-end',
                        'Integridad de datos con validación automática',
                        'Escalabilidad para crecimiento futuro',
                        'Casos de éxito en múltiples sectores'
                    ]
                ]
            ],
            [
                'icon' => 'svg-guarantee-money',
                'title' => 'Resultados inmediatos y garantizados',
                'text' => 'No vendemos humo. Vendemos IA productiva con resultados. Garantía de satisfacción o devolución de dinero',
                'modal_id' => 'modal-garantia',
                'section_link' => '#contacto',
                'modal_content' => [
                    'title' => 'Garantía de Resultados o Devolución de Dinero',
                    'description' => 'Estamos tan seguros de la calidad de nuestros servicios que ofrecemos garantía total de satisfacción',
                    'points' => [
                        'Resultados inmediatos: Soluciones implementadas y funcionando rápidamente',
                        'Garantía de resultados: Si no cumplimos lo prometido, no pagas',
                        'Aplica a: Servicios, Cumplimiento LOPDP, SUT, SST, IESS, sistemas de salud ocupacional',
                        'Excepciones: Venta de equipos y servicios de capacitación',
                        'Compromiso escrito: Acuerdos claros de entregables y plazos',
                        'Soporte incluido: Asistencia técnica durante el período de garantía',
                        'Sin letra pequeña: Condiciones transparentes y justas',
                        'Tu satisfacción es nuestra prioridad'
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
                    'description' => 'Programas de formación especializados para tu personal',
                    'points' => [
                        'Workshops presenciales y virtuales',
                        'Nivel básico: introducción a IA para quienes toman decisiones',
                        'Nivel intermedio: implementación para especialistas TI',
                        'Nivel avanzado: desarrolladores, ingenieros y arquitectos de sistemas',
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
                    'title' => 'Soporte Técnico y Garantía en IA',
                    'description' => 'Acompañamiento permanente en tu transformación digital con especialistas experimentados',
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
                    'description' => 'Evalúa tu nivel de conocimiento y experiencia en diferentes áreas de IA con nuestros tests especializados',
                    'points' => [
                        'Tests por actividades: generales, académicas, técnicas, médicas',
                        'Tests especializados para especialistas en IA',
                        'Tests especializados para estudiantes y profesores',
                        'Tests especializados para expertos en hojas electrónicas',
                        'Te podemos ayudar para que mejores tu suficiencia en IA'
                    ]
                ]
            ],
            [
                'icon' => 'svg-human-ai-synergy',
                'title' => 'La IA analiza datos, el ser humano toma decisiones',
                'text' => 'Simbiosis perfecta entre inteligencia artificial y experiencia humana',
                'modal_id' => 'modal-human-ai',
                'section_link' => '#contacto',
                'modal_content' => [
                    'title' => 'Simbiosis: Inteligencia Artificial + Experiencia Humana',
                    'description' => 'La IA procesa grandes volúmenes de datos, pero son nuestros expertos humanos quienes toman las decisiones finales, garantizando soluciones aplicables y efectivas',
                    'points' => [
                        'IA procesa millones de registros en segundos, humanos interpretan el contexto',
                        'IA identifica patrones ocultos, humanos validan su relevancia',
                        'IA genera múltiples escenarios, humanos eligen la mejor estrategia',
                        'IA realiza inferencias estadísticas, humanos aplican juicio experto',
                        'IA produce resúmenes automáticos, humanos verifican precisión',
                        'IA proyecta tendencias futuras, humanos ajustan según realidad del negocio',
                        'IA sugiere optimizaciones, humanos evalúan viabilidad práctica',
                        'IA detecta anomalías, humanos investigan causas raíz',
                        'IA automatiza tareas repetitivas, humanos se enfocan en decisiones estratégicas',
                        'IA aprende de datos históricos, humanos aportan conocimiento del dominio',
                        'IA opera 24/7 sin fatiga, humanos supervisan y ajustan continuamente',
                        'Resultado: Soluciones tecnológicamente avanzadas y humanamente aplicables'
                    ]
                ]
            ],
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
            'Modelos de IA ejecutándose localmente en tu propia infraestructura',
            'Confidencialidad absoluta: Cero transferencia de datos a cloud, nube, internet ...',
            'Con tus propios datos, sin alucinaciones',
            'Control total sobre tu información confidencial',
            'Monitoreo automático con regulaciones de privacidad',
            'Agentes y context memory para aprovechar los avances en IA 2025',
            'Integración opcional con sistemas existentes'
        ],
        'info_box' => [
            'label' => 'Detalles en iasoloparami.com',
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
        'title' => 'Inspecciones Ministerio del Trabajo',
        'alert' => 'Cumplimiento de resoluciones y normativa del Ministerio del Trabajo en Ecuador. Implementación de sistemas de IA para monitoreo del SUT, contratos, finiquitos, exámenes médicos, capacitación y otros documentos laborales.',
        'accordion' => [
            [
                'title' => 'Obligaciones del Ministerio del Trabajo 2025',
                'items' => [
                    ['size' => 'Pequeño', 'text' => 'Guardar documentos con su hash, evaluación básica de riesgos, plan de prevención, capacitación anual, botiquín de emergencia'],
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
            'title' => 'Soluciones IA para inspecciones Ministerio del Trabajo',
            'items' => [
                'Análisis de cumplimiento normativo según el número de empleados y el sector',
                'Análisis predictivo de cumplimiento',
                'Reportes inteligentes para inspecciones del MDT',
                'Generación de alertas'
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
                'title' => '✨ Beneficios de Gestión Documental Inteligente',
                'items' => [
                    ['size' => 'Pequeño', 'text' => 'Organización básica, búsqueda rápida, control de versiones, recuperación ante pérdidas'],
                    ['size' => 'Mediano', 'text' => 'Workflows automáticos, auditoría completa, cumplimiento normativo, integración sistemas'],
                    ['size' => 'Grande', 'text' => 'Gobernanza documental avanzada, análisis predictivo, gestión del ciclo de vida completo']
                ]
            ],
            [
                'title' => '⚠️ Riesgos sin Sistema Documental Inteligente',
                'items' => [
                    ['size' => 'Pequeño', 'text' => 'Extravío de información, multiplicación de datos, decisiones basadas en información desactualizada'],
                    ['size' => 'Mediano', 'text' => 'Dificultas para cumplimiento de obligaciones, auditorías con observaciones, vulnerabilidades de seguridad'],
                    ['size' => 'Grande', 'text' => 'Riesgos legales masivos, multas por no conformidad, pérdida de competitividad, suspensiones y/o cierres']
                ]
            ]
        ],
        'features' => [
            'title' => 'Características Sistema Documental Inteligente',
            'items' => [
                'Documentos privados con control de acceso',
                'Multimodal: texto, imágenes, videos, audios, bases de datos',
                'Versionamiento automático',
                'Trazabilidad completa de cambios',
                'Optimización de almacenamiento',
                'Búsqueda inteligente con IA',
                'Copias de seguridad automáticas',
                'Facilidades para cumplimiento regulatorio',
                'Adaptable a MDT, SRI, IESS, SuperCIAS, SupTEL, Min Turismo, ...'
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
                'question' => '¿La IA toma decisiones por sí sola o necesita supervisión humana?',
                'answer' => 'La IA NO toma decisiones finales. Nuestro enfoque garantiza que la IA procesa datos, identifica patrones y genera recomendaciones, pero SIEMPRE son profesionales humanos expertos quienes revisan, validan y toman las decisiones finales. Esto asegura que las soluciones sean aplicables, éticas y alineadas con los objetivos de tu organización. La IA es una herramienta poderosa, pero el juicio humano es insustituible.'
            ],
            [
                'question' => '¿Cómo se asegura que las recomendaciones de la IA sean aplicables a mi negocio?',
                'answer' => 'Nuestro equipo de expertos humanos trabaja en cada proyecto para: 1) Entrenar y ajustar los modelos de IA con datos específicos de tu industria, 2) Validar todas las salidas de la IA contra el conocimiento del dominio, 3) Incorporar reglas de negocio y restricciones operativas, 4) Realizar pruebas piloto con tu personal antes del despliegue completo, y 5) Mantener un ciclo continuo de retroalimentación humana para mejorar la precisión. La IA aprende de los datos, pero los humanos aportan el contexto y la experiencia.'
            ],
            [
                'question' => '¿Qué pasa si la IA genera una recomendación incorrecta o inapropiada?',
                'answer' => 'Implementamos múltiples salvaguardas: 1) Todas las salidas críticas de la IA pasan por revisión humana obligatoria antes de implementarse, 2) Sistemas de alertas para detectar anomalías o resultados fuera de rango esperado, 3) Logs completos de auditoría para rastrear cómo se generó cada recomendación, 4) Mecanismos de retroalimentación para que los usuarios reporten problemas, y 5) Actualizaciones continuas del modelo basadas en casos reales. Además, capacitamos a tu personal para identificar y cuestionar resultados sospechosos. La responsabilidad final siempre recae en humanos, no en la máquina.'
            ],
            [
                'question' => '¿Cuál es el ROI (Retorno de Inversión) al implementar nuestras soluciones IA?',
                'answer' => 'El retorno de inversión varía según el caso de uso, pero típicamente incluye: reducción de 60-80% en tiempo de procesamiento de documentos, disminución de errores humanos, cumplimiento normativo (evitando multas), automatización de tareas repetitivas, y mejor toma de decisiones basada en datos. Muchos clientes recuperan la inversión en 6-12 meses.'
            ],
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
                        'description' => 'Normativas y resoluciones sobre asuntos laborales',
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
    
    public static function renderJsonLD() {
        print '    <script type="application/ld+json">'.L;
        print '    {'.L;
        print '      "@context": "https://schema.org",'.L;
        print '      "@type": "Organization",'.L;
        print '      "name": "IA para Ecuador",'.L;
        print '      "url": "https://iaparaecuador.com",'.L;
        print '      "logo": "https://iaparaecuador.com/favicon.svg",'.L;
        print '      "description": "Soluciones de Inteligencia Artificial local, privada y confidencial para Ecuador",'.L;
        print '      "address": {'.L;
        print '        "@type": "PostalAddress",'.L;
        print '        "addressLocality": "Quito",'.L;
        print '        "addressCountry": "EC"'.L;
        print '      },'.L;
        print '      "contactPoint": {'.L;
        print '        "@type": "ContactPoint",'.L;
        print '        "telephone": "+593-2-252-4710",'.L;
        print '        "contactType": "customer service",'.L;
        print '        "email": "contacto@libresoft.ec",'.L;
        print '        "availableLanguage": "Spanish"'.L;
        print '      },'.L;
        print '      "sameAs": ['.L;
        print '        "https://iasoloparami.com",'.L;
        print '        "https://expertosenia.net"'.L;
        print '      ],'.L;
        print '      "areaServed": "EC",'.L;
        print '      "serviceType": ['.L;
        print '        "Inteligencia Artificial Local",'.L;
        print '        "Cumplimiento LOPDP",'.L;
        print '        "Gestión Documental",'.L;
        print '        "Salud Ocupacional",'.L;
        print '        "Capacitación en IA"'.L;
        print '      ]'.L;
        print '    }'.L;
        print '    </script>'.L;
        print '    <script type="application/ld+json">'.L;
        print '    {'.L;
        print '      "@context": "https://schema.org",'.L;
        print '      "@type": "WebSite",'.L;
        print '      "name": "IA para Ecuador",'.L;
        print '      "url": "https://iaparaecuador.com",'.L;
        print '      "potentialAction": {'.L;
        print '        "@type": "SearchAction",'.L;
        print '        "target": "https://iaparaecuador.com/?s={search_term_string}",'.L;
        print '        "query-input": "required name=search_term_string"'.L;
        print '      }'.L;
        print '    }'.L;
        print '    </script>'.L;
    }

    public static function renderHead() {
        $meta = self::$meta;
        print '<!DOCTYPE html>'.L;
        print '<html lang="'.$meta['lang'].'">'.L;
        print '<head>'.L;
        print '    <meta charset="'.$meta['charset'].'">'.L;
        print '    <meta name="viewport" content="width=device-width, initial-scale=1.0">'.L;
        print '    <title>'.$meta['title'].'</title>'.L;
        print '    <meta name="description" content="'.$meta['description'].'">'.L;
        print '    <meta name="keywords" content="IA Ecuador, Inteligencia Artificial, IA Local, IA Privada, LOPDP, Protección Datos, Salud Ocupacional, Gestión Documental, IA Confidencial">'.L;
        print '    <meta name="author" content="IA para Ecuador">'.L;
        print '    <meta name="robots" content="index, follow">'.L;
        print '    <link rel="canonical" href="https://iaparaecuador.com/">'.L;
        print '    <link rel="icon" type="image/svg+xml" href="'.$meta['favicon'].'">'.L;
        print '    <link rel="manifest" href="/manifest.json">'.L;
        print '    <meta name="theme-color" content="#8b5cf6">'.L;
        print '    <!-- Open Graph / Facebook -->'.L;
        print '    <meta property="og:type" content="website">'.L;
        print '    <meta property="og:url" content="https://iaparaecuador.com/">'.L;
        print '    <meta property="og:title" content="'.$meta['title'].'">'.L;
        print '    <meta property="og:description" content="'.$meta['description'].'">'.L;
        print '    <meta property="og:image" content="https://iaparaecuador.com/og-image.png">'.L;
        print '    <meta property="og:locale" content="es_EC">'.L;
        print '    <!-- Twitter -->'.L;
        print '    <meta property="twitter:card" content="summary_large_image">'.L;
        print '    <meta property="twitter:url" content="https://iaparaecuador.com/">'.L;
        print '    <meta property="twitter:title" content="'.$meta['title'].'">'.L;
        print '    <meta property="twitter:description" content="'.$meta['description'].'">'.L;
        print '    <meta property="twitter:image" content="https://iaparaecuador.com/og-image.png">'.L;
        print '    <!-- JSON-LD Schema -->'.L;
        self::renderJsonLD();
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
            } elseif ($feature['icon'] === 'svg-checklist-audit') {
                print '<svg viewBox="0 0 64 64" width="48" height="48" xmlns="http://www.w3.org/2000/svg">'.L;
                print '  <defs>'.L;
                print '    <linearGradient id="paperGradient" x1="0%" y1="0%" x2="0%" y2="100%">'.L;
                print '      <stop offset="0%" style="stop-color:#ffffff;stop-opacity:1" />'.L;
                print '      <stop offset="100%" style="stop-color:#f0f0f0;stop-opacity:1" />'.L;
                print '    </linearGradient>'.L;
                print '    <linearGradient id="magnifierGradient" x1="0%" y1="0%" x2="100%" y2="100%">'.L;
                print '      <stop offset="0%" style="stop-color:#4fc3f7;stop-opacity:1" />'.L;
                print '      <stop offset="100%" style="stop-color:#29b6f6;stop-opacity:1" />'.L;
                print '    </linearGradient>'.L;
                print '  </defs>'.L;
                print '  <!-- Papel/Documento -->'.L;
                print '  <rect x="12" y="8" width="32" height="44" rx="2" fill="url(#paperGradient)" stroke="#d0d0d0" stroke-width="2"/>'.L;
                print '  <!-- Líneas del checklist -->'.L;
                print '  <line x1="20" y1="18" x2="36" y2="18" stroke="#e0e0e0" stroke-width="1.5"/>'.L;
                print '  <line x1="20" y1="26" x2="36" y2="26" stroke="#e0e0e0" stroke-width="1.5"/>'.L;
                print '  <line x1="20" y1="34" x2="36" y2="34" stroke="#e0e0e0" stroke-width="1.5"/>'.L;
                print '  <line x1="20" y1="42" x2="36" y2="42" stroke="#e0e0e0" stroke-width="1.5"/>'.L;
                print '  <!-- Checkmarks verdes -->'.L;
                print '  <path d="M 16 16 L 18 18 L 21 14" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'.L;
                print '  <path d="M 16 24 L 18 26 L 21 22" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'.L;
                print '  <path d="M 16 32 L 18 34 L 21 30" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'.L;
                print '  <path d="M 16 40 L 18 42 L 21 38" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'.L;
                print '  <!-- Lupa -->'.L;
                print '  <circle cx="44" cy="44" r="10" fill="url(#magnifierGradient)" stroke="#0288d1" stroke-width="2" opacity="0.95"/>'.L;
                print '  <circle cx="44" cy="44" r="7" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/>'.L;
                print '  <line x1="51" y1="51" x2="58" y2="58" stroke="#0288d1" stroke-width="3.5" stroke-linecap="round"/>'.L;
                print '</svg>'.L;
            } elseif ($feature['icon'] === 'svg-checklist-inspector') {
                print '<svg viewBox="0 0 64 64" width="48" height="48" xmlns="http://www.w3.org/2000/svg">'.L;
                print '  <defs>'.L;
                print '    <linearGradient id="paperGradient2" x1="0%" y1="0%" x2="0%" y2="100%">'.L;
                print '      <stop offset="0%" style="stop-color:#ffffff;stop-opacity:1" />'.L;
                print '      <stop offset="100%" style="stop-color:#f0f0f0;stop-opacity:1" />'.L;
                print '    </linearGradient>'.L;
                print '    <linearGradient id="inspectorGradient" x1="0%" y1="0%" x2="0%" y2="100%">'.L;
                print '      <stop offset="0%" style="stop-color:#fbbf24;stop-opacity:1" />'.L;
                print '      <stop offset="100%" style="stop-color:#f59e0b;stop-opacity:1" />'.L;
                print '    </linearGradient>'.L;
                print '  </defs>'.L;
                print '  <!-- Papel/Documento -->'.L;
                print '  <rect x="12" y="8" width="32" height="44" rx="2" fill="url(#paperGradient2)" stroke="#d0d0d0" stroke-width="2"/>'.L;
                print '  <!-- Líneas del checklist -->'.L;
                print '  <line x1="20" y1="18" x2="36" y2="18" stroke="#e0e0e0" stroke-width="1.5"/>'.L;
                print '  <line x1="20" y1="26" x2="36" y2="26" stroke="#e0e0e0" stroke-width="1.5"/>'.L;
                print '  <line x1="20" y1="34" x2="36" y2="34" stroke="#e0e0e0" stroke-width="1.5"/>'.L;
                print '  <line x1="20" y1="42" x2="36" y2="42" stroke="#e0e0e0" stroke-width="1.5"/>'.L;
                print '  <!-- Checkmarks verdes -->'.L;
                print '  <path d="M 16 16 L 18 18 L 21 14" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'.L;
                print '  <path d="M 16 24 L 18 26 L 21 22" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'.L;
                print '  <path d="M 16 32 L 18 34 L 21 30" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'.L;
                print '  <path d="M 16 40 L 18 42 L 21 38" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'.L;
                print '  <!-- Inspector (cabeza de persona) -->'.L;
                print '  <circle cx="46" cy="42" r="9" fill="url(#inspectorGradient)" stroke="#d97706" stroke-width="2"/>'.L;
                print '  <!-- Cara -->'.L;
                print '  <circle cx="43" cy="40" r="1.5" fill="#ffffff"/>'.L;
                print '  <circle cx="49" cy="40" r="1.5" fill="#ffffff"/>'.L;
                print '  <path d="M 42 46 Q 46 48 50 46" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"/>'.L;
                print '  <!-- Casco/Sombrero inspector -->'.L;
                print '  <ellipse cx="46" cy="35" rx="10" ry="4" fill="#d97706" opacity="0.8"/>'.L;
                print '  <rect x="41" y="32" width="10" height="3" rx="1" fill="#d97706"/>'.L;
                print '  <!-- Hombros/Cuello -->'.L;
                print '  <path d="M 38 51 L 38 54 L 54 54 L 54 51" fill="url(#inspectorGradient)" stroke="#d97706" stroke-width="1.5"/>'.L;
                print '</svg>'.L;
            } elseif ($feature['icon'] === 'svg-docs-ai-brain') {
                print '<svg viewBox="0 0 64 64" width="48" height="48" xmlns="http://www.w3.org/2000/svg">'.L;
                print '  <defs>'.L;
                print '    <linearGradient id="doc1Gradient" x1="0%" y1="0%" x2="0%" y2="100%">'.L;
                print '      <stop offset="0%" style="stop-color:#60a5fa;stop-opacity:1" />'.L;
                print '      <stop offset="100%" style="stop-color:#3b82f6;stop-opacity:1" />'.L;
                print '    </linearGradient>'.L;
                print '    <linearGradient id="doc2Gradient" x1="0%" y1="0%" x2="0%" y2="100%">'.L;
                print '      <stop offset="0%" style="stop-color:#34d399;stop-opacity:1" />'.L;
                print '      <stop offset="100%" style="stop-color:#10b981;stop-opacity:1" />'.L;
                print '    </linearGradient>'.L;
                print '    <linearGradient id="doc3Gradient" x1="0%" y1="0%" x2="0%" y2="100%">'.L;
                print '      <stop offset="0%" style="stop-color:#a78bfa;stop-opacity:1" />'.L;
                print '      <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:1" />'.L;
                print '    </linearGradient>'.L;
                print '    <linearGradient id="brainGradient" x1="0%" y1="0%" x2="100%" y2="100%">'.L;
                print '      <stop offset="0%" style="stop-color:#f472b6;stop-opacity:1" />'.L;
                print '      <stop offset="100%" style="stop-color:#ec4899;stop-opacity:1" />'.L;
                print '    </linearGradient>'.L;
                print '  </defs>'.L;
                print '  <!-- Documento 1 (azul) -->'.L;
                print '  <rect x="8" y="20" width="16" height="22" rx="1.5" fill="url(#doc1Gradient)" stroke="#2563eb" stroke-width="1.5"/>'.L;
                print '  <line x1="11" y1="25" x2="21" y2="25" stroke="#ffffff" stroke-width="1" opacity="0.7"/>'.L;
                print '  <line x1="11" y1="29" x2="21" y2="29" stroke="#ffffff" stroke-width="1" opacity="0.7"/>'.L;
                print '  <line x1="11" y1="33" x2="18" y2="33" stroke="#ffffff" stroke-width="1" opacity="0.7"/>'.L;
                print '  <!-- Documento 2 (verde) -->'.L;
                print '  <rect x="18" y="16" width="16" height="22" rx="1.5" fill="url(#doc2Gradient)" stroke="#059669" stroke-width="1.5"/>'.L;
                print '  <line x1="21" y1="21" x2="31" y2="21" stroke="#ffffff" stroke-width="1" opacity="0.7"/>'.L;
                print '  <line x1="21" y1="25" x2="31" y2="25" stroke="#ffffff" stroke-width="1" opacity="0.7"/>'.L;
                print '  <line x1="21" y1="29" x2="28" y2="29" stroke="#ffffff" stroke-width="1" opacity="0.7"/>'.L;
                print '  <!-- Documento 3 (morado) -->'.L;
                print '  <rect x="28" y="22" width="16" height="22" rx="1.5" fill="url(#doc3Gradient)" stroke="#7c3aed" stroke-width="1.5"/>'.L;
                print '  <line x1="31" y1="27" x2="41" y2="27" stroke="#ffffff" stroke-width="1" opacity="0.7"/>'.L;
                print '  <line x1="31" y1="31" x2="41" y2="31" stroke="#ffffff" stroke-width="1" opacity="0.7"/>'.L;
                print '  <line x1="31" y1="35" x2="38" y2="35" stroke="#ffffff" stroke-width="1" opacity="0.7"/>'.L;
                print '  <!-- Cerebro IA (rosa/magenta) -->'.L;
                print '  <ellipse cx="48" cy="38" rx="11" ry="13" fill="url(#brainGradient)" stroke="#db2777" stroke-width="2"/>'.L;
                print '  <!-- Detalles del cerebro -->'.L;
                print '  <path d="M 42 32 Q 44 34 42 36" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/>'.L;
                print '  <path d="M 46 30 Q 48 32 46 34" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/>'.L;
                print '  <path d="M 50 30 Q 52 32 50 34" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/>'.L;
                print '  <path d="M 54 32 Q 52 34 54 36" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/>'.L;
                print '  <path d="M 42 38 Q 44 40 42 42" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/>'.L;
                print '  <path d="M 46 40 Q 48 42 46 44" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/>'.L;
                print '  <path d="M 50 40 Q 52 42 50 44" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/>'.L;
                print '  <path d="M 54 38 Q 52 40 54 42" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/>'.L;
                print '  <!-- Conexiones neuronales -->'.L;
                print '  <circle cx="44" cy="36" r="1.5" fill="#ffffff" opacity="0.8"/>'.L;
                print '  <circle cx="48" cy="38" r="1.5" fill="#ffffff" opacity="0.8"/>'.L;
                print '  <circle cx="52" cy="36" r="1.5" fill="#ffffff" opacity="0.8"/>'.L;
                print '  <circle cx="46" cy="42" r="1.5" fill="#ffffff" opacity="0.8"/>'.L;
                print '  <circle cx="50" cy="42" r="1.5" fill="#ffffff" opacity="0.8"/>'.L;
                print '</svg>'.L;
            } elseif ($feature['icon'] === 'svg-guarantee-money') {
                print '<svg viewBox="0 0 64 64" width="48" height="48" xmlns="http://www.w3.org/2000/svg">'.L;
                print '  <defs>'.L;
                print '    <linearGradient id="shieldGradient" x1="0%" y1="0%" x2="0%" y2="100%">'.L;
                print '      <stop offset="0%" style="stop-color:#34d399;stop-opacity:1" />'.L;
                print '      <stop offset="100%" style="stop-color:#10b981;stop-opacity:1" />'.L;
                print '    </linearGradient>'.L;
                print '    <linearGradient id="dollarGradient" x1="0%" y1="0%" x2="0%" y2="100%">'.L;
                print '      <stop offset="0%" style="stop-color:#fbbf24;stop-opacity:1" />'.L;
                print '      <stop offset="100%" style="stop-color:#f59e0b;stop-opacity:1" />'.L;
                print '    </linearGradient>'.L;
                print '  </defs>'.L;
                print '  <!-- Escudo de garantía (verde) -->'.L;
                print '  <path d="M 32 8 L 48 16 L 48 32 Q 48 48 32 56 Q 16 48 16 32 L 16 16 Z" fill="url(#shieldGradient)" stroke="#059669" stroke-width="2.5"/>'.L;
                print '  <!-- Borde interno del escudo -->'.L;
                print '  <path d="M 32 12 L 44 18 L 44 32 Q 44 44 32 50 Q 20 44 20 32 L 20 18 Z" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.3"/>'.L;
                print '  <!-- Símbolo de dólar (amarillo/dorado) -->'.L;
                print '  <text x="32" y="38" font-family="Arial, sans-serif" font-size="24" font-weight="bold" fill="url(#dollarGradient)" text-anchor="middle" stroke="#d97706" stroke-width="0.5">$</text>'.L;
                print '  <!-- Número 0 (cero costo si no funciona) -->'.L;
                print '  <circle cx="24" cy="24" r="6" fill="none" stroke="url(#dollarGradient)" stroke-width="2.5"/>'.L;
                print '  <text x="24" y="28" font-family="Arial, sans-serif" font-size="10" font-weight="bold" fill="url(#dollarGradient)" text-anchor="middle">0</text>'.L;
                print '  <!-- Checkmark de compromiso (blanco) -->'.L;
                print '  <path d="M 26 42 L 30 46 L 38 36" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>'.L;
                print '  <!-- Estrellas de calidad -->'.L;
                print '  <circle cx="40" cy="20" r="2" fill="#fbbf24" opacity="0.8"/>'.L;
                print '  <circle cx="46" cy="26" r="1.5" fill="#fbbf24" opacity="0.6"/>'.L;
                print '  <!-- Sello de garantía (texto 30d) -->'.L;
                print '  <circle cx="44" cy="42" r="7" fill="#059669" stroke="#ffffff" stroke-width="1.5" opacity="0.9"/>'.L;
                print '  <text x="44" y="44" font-family="Arial, sans-serif" font-size="7" font-weight="bold" fill="#ffffff" text-anchor="middle">30d</text>'.L;
                print '</svg>'.L;
            } elseif ($feature['icon'] === 'svg-human-ai-synergy') {
                self::renderIcon($feature['icon'], '48');
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

    public static function renderIcon($icon, $size = '48') {
        if ($icon === 'svg-lock-key') {
            print '<svg viewBox="0 0 64 64" width="'.$size.'" height="'.$size.'" xmlns="http://www.w3.org/2000/svg" style="display:inline-block;vertical-align:middle;">'.L;
            print '  <defs><linearGradient id="lockGradient'.$size.'" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:#ff8c00;stop-opacity:1" /><stop offset="100%" style="stop-color:#ff6600;stop-opacity:1" /></linearGradient><linearGradient id="keyGradient'.$size.'" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" style="stop-color:#ffd700;stop-opacity:1" /><stop offset="100%" style="stop-color:#ffed4e;stop-opacity:1" /></linearGradient></defs>'.L;
            print '  <rect x="18" y="28" width="28" height="24" rx="3" fill="url(#lockGradient'.$size.')" stroke="#cc5500" stroke-width="2"/><path d="M 22 28 L 22 20 Q 22 12 32 12 Q 42 12 42 20 L 42 28" fill="none" stroke="url(#lockGradient'.$size.')" stroke-width="3" stroke-linecap="round"/><circle cx="32" cy="38" r="3" fill="#fff" opacity="0.9"/><rect x="30.5" y="38" width="3" height="8" rx="1.5" fill="#fff" opacity="0.9"/><circle cx="50" cy="18" r="5" fill="url(#keyGradient'.$size.')" stroke="#daa520" stroke-width="1.5"/><circle cx="50" cy="18" r="2" fill="none" stroke="#daa520" stroke-width="1"/><rect x="48" y="18" width="12" height="3" rx="1" fill="url(#keyGradient'.$size.')" stroke="#daa520" stroke-width="1"/><rect x="56" y="16" width="2" height="2" fill="url(#keyGradient'.$size.')"/><rect x="56" y="19" width="2" height="2" fill="url(#keyGradient'.$size.')"/></svg>'.L;
        } elseif ($icon === 'svg-checklist-audit') {
            print '<svg viewBox="0 0 64 64" width="'.$size.'" height="'.$size.'" xmlns="http://www.w3.org/2000/svg" style="display:inline-block;vertical-align:middle;"><defs><linearGradient id="paperGrad'.$size.'" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:#ffffff;stop-opacity:1" /><stop offset="100%" style="stop-color:#f0f0f0;stop-opacity:1" /></linearGradient><linearGradient id="magnGrad'.$size.'" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" style="stop-color:#4fc3f7;stop-opacity:1" /><stop offset="100%" style="stop-color:#29b6f6;stop-opacity:1" /></linearGradient></defs><rect x="12" y="8" width="32" height="44" rx="2" fill="url(#paperGrad'.$size.')" stroke="#d0d0d0" stroke-width="2"/><line x1="20" y1="18" x2="36" y2="18" stroke="#e0e0e0" stroke-width="1.5"/><line x1="20" y1="26" x2="36" y2="26" stroke="#e0e0e0" stroke-width="1.5"/><line x1="20" y1="34" x2="36" y2="34" stroke="#e0e0e0" stroke-width="1.5"/><line x1="20" y1="42" x2="36" y2="42" stroke="#e0e0e0" stroke-width="1.5"/><path d="M 16 16 L 18 18 L 21 14" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M 16 24 L 18 26 L 21 22" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M 16 32 L 18 34 L 21 30" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M 16 40 L 18 42 L 21 38" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="44" cy="44" r="10" fill="url(#magnGrad'.$size.')" stroke="#0288d1" stroke-width="2" opacity="0.95"/><circle cx="44" cy="44" r="7" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/><line x1="51" y1="51" x2="58" y2="58" stroke="#0288d1" stroke-width="3.5" stroke-linecap="round"/></svg>'.L;
        } elseif ($icon === 'svg-checklist-inspector') {
            print '<svg viewBox="0 0 64 64" width="'.$size.'" height="'.$size.'" xmlns="http://www.w3.org/2000/svg" style="display:inline-block;vertical-align:middle;"><defs><linearGradient id="paper2Grad'.$size.'" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:#ffffff;stop-opacity:1" /><stop offset="100%" style="stop-color:#f0f0f0;stop-opacity:1" /></linearGradient><linearGradient id="inspGrad'.$size.'" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:#fbbf24;stop-opacity:1" /><stop offset="100%" style="stop-color:#f59e0b;stop-opacity:1" /></linearGradient></defs><rect x="12" y="8" width="32" height="44" rx="2" fill="url(#paper2Grad'.$size.')" stroke="#d0d0d0" stroke-width="2"/><line x1="20" y1="18" x2="36" y2="18" stroke="#e0e0e0" stroke-width="1.5"/><line x1="20" y1="26" x2="36" y2="26" stroke="#e0e0e0" stroke-width="1.5"/><line x1="20" y1="34" x2="36" y2="34" stroke="#e0e0e0" stroke-width="1.5"/><line x1="20" y1="42" x2="36" y2="42" stroke="#e0e0e0" stroke-width="1.5"/><path d="M 16 16 L 18 18 L 21 14" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M 16 24 L 18 26 L 21 22" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M 16 32 L 18 34 L 21 30" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M 16 40 L 18 42 L 21 38" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="46" cy="42" r="9" fill="url(#inspGrad'.$size.')" stroke="#d97706" stroke-width="2"/><circle cx="43" cy="40" r="1.5" fill="#ffffff"/><circle cx="49" cy="40" r="1.5" fill="#ffffff"/><path d="M 42 46 Q 46 48 50 46" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"/><ellipse cx="46" cy="35" rx="10" ry="4" fill="#d97706" opacity="0.8"/><rect x="41" y="32" width="10" height="3" rx="1" fill="#d97706"/><path d="M 38 51 L 38 54 L 54 54 L 54 51" fill="url(#inspGrad'.$size.')" stroke="#d97706" stroke-width="1.5"/></svg>'.L;
        } elseif ($icon === 'svg-docs-ai-brain') {
            print '<svg viewBox="0 0 64 64" width="'.$size.'" height="'.$size.'" xmlns="http://www.w3.org/2000/svg" style="display:inline-block;vertical-align:middle;"><defs><linearGradient id="doc1Grad'.$size.'" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:#60a5fa;stop-opacity:1" /><stop offset="100%" style="stop-color:#3b82f6;stop-opacity:1" /></linearGradient><linearGradient id="doc2Grad'.$size.'" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:#34d399;stop-opacity:1" /><stop offset="100%" style="stop-color:#10b981;stop-opacity:1" /></linearGradient><linearGradient id="doc3Grad'.$size.'" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:#a78bfa;stop-opacity:1" /><stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:1" /></linearGradient><linearGradient id="brainGrad'.$size.'" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" style="stop-color:#f472b6;stop-opacity:1" /><stop offset="100%" style="stop-color:#ec4899;stop-opacity:1" /></linearGradient></defs><rect x="8" y="20" width="16" height="22" rx="1.5" fill="url(#doc1Grad'.$size.')" stroke="#2563eb" stroke-width="1.5"/><line x1="11" y1="25" x2="21" y2="25" stroke="#ffffff" stroke-width="1" opacity="0.7"/><line x1="11" y1="29" x2="21" y2="29" stroke="#ffffff" stroke-width="1" opacity="0.7"/><line x1="11" y1="33" x2="18" y2="33" stroke="#ffffff" stroke-width="1" opacity="0.7"/><rect x="18" y="16" width="16" height="22" rx="1.5" fill="url(#doc2Grad'.$size.')" stroke="#059669" stroke-width="1.5"/><line x1="21" y1="21" x2="31" y2="21" stroke="#ffffff" stroke-width="1" opacity="0.7"/><line x1="21" y1="25" x2="31" y2="25" stroke="#ffffff" stroke-width="1" opacity="0.7"/><line x1="21" y1="29" x2="28" y2="29" stroke="#ffffff" stroke-width="1" opacity="0.7"/><rect x="28" y="22" width="16" height="22" rx="1.5" fill="url(#doc3Grad'.$size.')" stroke="#7c3aed" stroke-width="1.5"/><line x1="31" y1="27" x2="41" y2="27" stroke="#ffffff" stroke-width="1" opacity="0.7"/><line x1="31" y1="31" x2="41" y2="31" stroke="#ffffff" stroke-width="1" opacity="0.7"/><line x1="31" y1="35" x2="38" y2="35" stroke="#ffffff" stroke-width="1" opacity="0.7"/><ellipse cx="48" cy="38" rx="11" ry="13" fill="url(#brainGrad'.$size.')" stroke="#db2777" stroke-width="2"/><path d="M 42 32 Q 44 34 42 36" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/><path d="M 46 30 Q 48 32 46 34" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/><path d="M 50 30 Q 52 32 50 34" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/><path d="M 54 32 Q 52 34 54 36" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/><path d="M 42 38 Q 44 40 42 42" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/><path d="M 46 40 Q 48 42 46 44" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/><path d="M 50 40 Q 52 42 50 44" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/><path d="M 54 38 Q 52 40 54 42" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.6"/><circle cx="44" cy="36" r="1.5" fill="#ffffff" opacity="0.8"/><circle cx="48" cy="38" r="1.5" fill="#ffffff" opacity="0.8"/><circle cx="52" cy="36" r="1.5" fill="#ffffff" opacity="0.8"/><circle cx="46" cy="42" r="1.5" fill="#ffffff" opacity="0.8"/><circle cx="50" cy="42" r="1.5" fill="#ffffff" opacity="0.8"/></svg>'.L;
        } elseif ($icon === 'svg-guarantee-money') {
            print '<svg viewBox="0 0 64 64" width="'.$size.'" height="'.$size.'" xmlns="http://www.w3.org/2000/svg" style="display:inline-block;vertical-align:middle;"><defs><linearGradient id="shieldGrad'.$size.'" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:#34d399;stop-opacity:1" /><stop offset="100%" style="stop-color:#10b981;stop-opacity:1" /></linearGradient><linearGradient id="dollarGrad'.$size.'" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:#fbbf24;stop-opacity:1" /><stop offset="100%" style="stop-color:#f59e0b;stop-opacity:1" /></linearGradient></defs><path d="M 32 8 L 48 16 L 48 32 Q 48 48 32 56 Q 16 48 16 32 L 16 16 Z" fill="url(#shieldGrad'.$size.')" stroke="#059669" stroke-width="2.5"/><path d="M 32 12 L 44 18 L 44 32 Q 44 44 32 50 Q 20 44 20 32 L 20 18 Z" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.3"/><text x="32" y="38" font-family="Arial, sans-serif" font-size="24" font-weight="bold" fill="url(#dollarGrad'.$size.')" text-anchor="middle" stroke="#d97706" stroke-width="0.5">$</text><circle cx="24" cy="24" r="6" fill="none" stroke="url(#dollarGrad'.$size.')" stroke-width="2.5"/><text x="24" y="28" font-family="Arial, sans-serif" font-size="10" font-weight="bold" fill="url(#dollarGrad'.$size.')" text-anchor="middle">0</text><path d="M 26 42 L 30 46 L 38 36" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><circle cx="40" cy="20" r="2" fill="#fbbf24" opacity="0.8"/><circle cx="46" cy="26" r="1.5" fill="#fbbf24" opacity="0.6"/><circle cx="44" cy="42" r="7" fill="#059669" stroke="#ffffff" stroke-width="1.5" opacity="0.9"/><text x="44" y="44" font-family="Arial, sans-serif" font-size="7" font-weight="bold" fill="#ffffff" text-anchor="middle">30d</text></svg>'.L;
        } elseif ($icon === 'svg-human-ai-synergy') {
            print '<svg viewBox="0 0 64 64" width="'.$size.'" height="'.$size.'" xmlns="http://www.w3.org/2000/svg" style="display:inline-block;vertical-align:middle;">'.L;
            print '  <defs>'.L;
            print '    <linearGradient id="humanGrad'.$size.'" x1="0%" y1="0%" x2="0%" y2="100%">'.L;
            print '      <stop offset="0%" style="stop-color:#60a5fa;stop-opacity:1" />'.L;
            print '      <stop offset="100%" style="stop-color:#3b82f6;stop-opacity:1" />'.L;
            print '    </linearGradient>'.L;
            print '    <linearGradient id="aiGrad'.$size.'" x1="0%" y1="0%" x2="0%" y2="100%">'.L;
            print '      <stop offset="0%" style="stop-color:#a78bfa;stop-opacity:1" />'.L;
            print '      <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:1" />'.L;
            print '    </linearGradient>'.L;
            print '    <linearGradient id="connectionGrad'.$size.'" x1="0%" y1="0%" x2="100%" y2="0%">'.L;
            print '      <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />'.L;
            print '      <stop offset="50%" style="stop-color:#10b981;stop-opacity:1" />'.L;
            print '      <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:1" />'.L;
            print '    </linearGradient>'.L;
            print '  </defs>'.L;
            print '  <!-- Humano (izquierda - azul) -->'.L;
            print '  <circle cx="18" cy="24" r="8" fill="url(#humanGrad'.$size.')" stroke="#2563eb" stroke-width="2"/>'.L;
            print '  <circle cx="15" cy="22" r="1.5" fill="#ffffff"/>'.L;
            print '  <circle cx="21" cy="22" r="1.5" fill="#ffffff"/>'.L;
            print '  <path d="M 14 27 Q 18 29 22 27" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"/>'.L;
            print '  <path d="M 10 32 L 10 42 L 14 42 L 14 50 M 22 42 L 26 42 L 26 50 M 10 36 L 26 36" fill="none" stroke="url(#humanGrad'.$size.')" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>'.L;
            print '  <!-- IA/Cerebro (derecha - morado) -->'.L;
            print '  <ellipse cx="46" cy="24" rx="9" ry="10" fill="url(#aiGrad'.$size.')" stroke="#7c3aed" stroke-width="2"/>'.L;
            print '  <path d="M 40 20 Q 42 22 40 24" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.7"/>'.L;
            print '  <path d="M 44 18 Q 46 20 44 22" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.7"/>'.L;
            print '  <path d="M 48 18 Q 50 20 48 22" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.7"/>'.L;
            print '  <path d="M 52 20 Q 50 22 52 24" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.7"/>'.L;
            print '  <path d="M 40 26 Q 42 28 40 30" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.7"/>'.L;
            print '  <path d="M 48 28 Q 50 30 48 32" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.7"/>'.L;
            print '  <path d="M 52 26 Q 50 28 52 30" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.7"/>'.L;
            print '  <circle cx="42" cy="24" r="1.5" fill="#ffffff" opacity="0.8"/>'.L;
            print '  <circle cx="46" cy="26" r="1.5" fill="#ffffff" opacity="0.8"/>'.L;
            print '  <circle cx="50" cy="24" r="1.5" fill="#ffffff" opacity="0.8"/>'.L;
            print '  <!-- Conexión/Sinergia (centro - verde) -->'.L;
            print '  <path d="M 26 32 Q 32 28 38 32" fill="none" stroke="url(#connectionGrad'.$size.')" stroke-width="3" stroke-linecap="round"/>'.L;
            print '  <circle cx="32" cy="29" r="4" fill="#10b981" stroke="#059669" stroke-width="2"/>'.L;
            print '  <path d="M 30 29 L 32 31 L 34 27" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'.L;
            print '  <!-- Flechas bidireccionales -->'.L;
            print '  <path d="M 28 40 L 32 44 L 36 40" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'.L;
            print '  <path d="M 36 48 L 32 44 L 28 48" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'.L;
            print '  <!-- Datos (símbolos) -->'.L;
            print '  <circle cx="12" cy="52" r="1.5" fill="#3b82f6" opacity="0.6"/>'.L;
            print '  <circle cx="18" cy="54" r="1.5" fill="#3b82f6" opacity="0.6"/>'.L;
            print '  <circle cx="24" cy="52" r="1.5" fill="#3b82f6" opacity="0.6"/>'.L;
            print '  <circle cx="52" cy="52" r="1.5" fill="#8b5cf6" opacity="0.6"/>'.L;
            print '  <circle cx="46" cy="54" r="1.5" fill="#8b5cf6" opacity="0.6"/>'.L;
            print '  <circle cx="40" cy="52" r="1.5" fill="#8b5cf6" opacity="0.6"/>'.L;
            print '</svg>'.L;
        } else {
            print $icon;
        }
    }

    public static function renderModals() {
        $hero = self::$hero;
        print '    <!-- MODALS -->'.L;
        foreach ($hero['features'] as $feature) {
            print '    <div id="'.$feature['modal_id'].'" class="modal">'.L;
            print '        <div class="modal-content">'.L;
            print '            <div class="modal-header">'.L;
            print '                <div class="modal-title-wrapper">'.L;
            print '                    <div class="modal-icon">'.L;
            self::renderIcon($feature['icon'], '32');
            print '                    </div>'.L;
            print '                    <h2>'.$feature['modal_content']['title'].'</h2>'.L;
            print '                </div>'.L;
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
