@echo off
REM Script de despliegue para iaparaecuador.com
REM Genera HTML estático desde PHP para Cloudflare Pages

echo ========================================
echo Despliegue iaparaecuador.com
echo ========================================
echo.

echo [1/3] Generando index.html desde index.php...
php public\index.php > public\index.html

if %ERRORLEVEL% NEQ 0 (
    echo ERROR: No se pudo generar index.html
    exit /b 1
)

echo [2/3] Verificando archivo generado...
if exist public\index.html (
    echo OK: index.html generado correctamente
    for %%A in (public\index.html) do echo Tamaño: %%~zA bytes
) else (
    echo ERROR: index.html no existe
    exit /b 1
)

echo [3/3] Verificando contenido...
findstr /C:"QA" public\index.html >nul
if %ERRORLEVEL% EQU 0 (
    echo OK: Feature QA encontrado en HTML
) else (
    echo ADVERTENCIA: Feature QA no encontrado
)

echo.
echo ========================================
echo Despliegue completado exitosamente
echo ========================================
echo.
echo Archivos listos para Cloudflare Pages:
echo - public\index.html
echo - public\styles.css
echo - public\script.js
echo - public\manifest.json
echo - public\sitemap.xml
echo - public\_headers
echo.
echo Siguiente paso:
echo 1. Commit y push al repositorio Git
echo 2. Cloudflare Pages desplegará automáticamente
echo.
pause
