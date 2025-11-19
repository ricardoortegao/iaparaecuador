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
            ['href' => '#datos-personales', 'text' => 'Protección de Datos'],
            ['href' => '#salud-ocupacional', 'text' => 'Salud Ocupacional'],
            ['href' => '#documentacion', 'text' => 'Gestión Documental'],
            ['href' => '#soluciones', 'text' => 'Soluciones'],
            ['href' => '#capacitacion', 'text' => 'Capacitación'],
            ['href' => '#faq', 'text' => 'FAQ'],
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
            ['icon' => '🛡️', 'title' => 'Datos Seguros', 'text' => 'Protección conforme LOPDP'],
            ['icon' => '⚡', 'title' => 'IA Local', 'text' => 'Privacidad garantizada'],
            ['icon' => '👥', 'title' => 'Para Todos', 'text' => 'Empresas y especialistas'],
            ['icon' => '📄', 'title' => 'Gestión Documental', 'text' => 'Control total de documentos'],
            ['icon' => '📚', 'title' => 'Capacitación', 'text' => 'Workshops especializados'],
            ['icon' => '💬', 'title' => 'Soporte 24/7', 'text' => 'Asesoría continua']
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
                ['number' => '1', 'title' => 'Diagnóstico', 'text' => 'Análisis profundo de tus necesidades específicas'],
                ['number' => '2', 'title' => 'Diseño', 'text' => 'Arquitectura personalizada conforme regulaciones'],
                ['number' => '3', 'title' => 'Implementación', 'text' => 'Desarrollo e integración en tu infraestructura'],
                ['number' => '4', 'title' => 'Validación', 'text' => 'Testing exhaustivo y cumplimiento normativo']
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
                        'url' => 'https://www.datospersonales.gob.ec/'
                    ],
                    [
                        'name' => 'Ley Orgánica de Protección de Datos Personales',
                        'description' => 'Texto completo de la LOPDP - Registro Oficial',
                        'url' => 'https://www.registroficial.gob.ec/'
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
            ['icon' => '📧', 'title' => 'Email', 'text' => 'contacto@iaparaecuador.com', 'href' => 'mailto:contacto@iaparaecuador.com'],
            ['icon' => '📱', 'title' => 'Teléfono', 'text' => '+593 99 999 9999', 'href' => 'tel:+593999999999'],
            ['icon' => '📍', 'title' => 'Ubicación', 'text' => 'Quito, Ecuador', 'href' => null]
        ],
        'cta' => [
            'title' => '¿Listo para transformar tu organización con IA?',
            'text' => 'Agenda una consulta gratuita y descubre cómo podemos ayudarte',
            'button_text' => 'Agendar Consulta',
            'button_href' => 'mailto:contacto@iaparaecuador.com'
        ]
    ];

    // ===================================
    // FOOTER
    // ===================================
    public static $footer = [
        'copyright' => '© 2025 IA para Ecuador. Todos los derechos reservados.',
        'tagline' => 'Soluciones de Inteligencia Artificial Local y Privada'
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
            print '                    <div class="feature-card">'.L;
            print '                        <div class="feature-icon">'.$feature['icon'].'</div>'.L;
            print '                        <h3>'.$feature['title'].'</h3>'.L;
            print '                        <p>'.$feature['text'].'</p>'.L;
            print '                    </div>'.L;
        }
        print '                </div>'.L;
        print '            </div>'.L;
        print '        </section>'.L;
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
        self::renderFooter();
    }
}

// ===================================
// RENDERIZADO PRINCIPAL
// ===================================
IA::render();
?>
