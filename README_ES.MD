# Crear un PDF con mPDF 

Cómo generar un PDF utilizando la biblioteca mPDF.
`[SimPIL es una serie de ejemplos ultra-simples que muestran cómo realizar diferentes operaciones con código. Sin complicaciones.]`
## Instalación 

Simplemente clona el repositorio e instala la biblioteca mPDF con Composer:


```bash
composer require mpdf/mpdf
```

## Uso 
Reemplaza el código y utiliza tu propia plantilla (en el archivo `template.php`).
## Archivos 
 
- **html2pdf.php** : un documento de ejemplo con un objeto mPDF.
 
- **template.php** : tu plantilla HTML con etiquetas (puedes rellenarlas como prefieras).
 
- **vendor** : carpeta con las dependencias de mPDF (debe descargarse desde el repositorio del autor con `composer require mpdf/mpdf`).
 
- **info/** : documentos con información sobre las propiedades y métodos del objeto mPDF. [EN](https://chatgpt.com/c/info/mPDF-methods-properties.md)  [ES]() .
 
- **img/logo.svg** : incluye solo imágenes importantes.

# Configuración 

Para utilizar esta aplicación, necesitas tener las siguientes extensiones de PHP instaladas:
 
- **GD** : requerida por la biblioteca `mpdf/mpdf` para generar archivos PDF.

### Instalación de Extensiones PHP 

#### En Linux (Ubuntu/Debian) 

Para instalar la extensión GD, ejecuta:


```bash
sudo apt-get update
sudo apt-get install php-gd
```

Después de instalar, reinicia tu servidor web:


```bash
sudo systemctl restart apache2
# o si utilizas nginx
sudo systemctl restart nginx
```

#### En Windows 
 
1. Localiza el archivo `php.ini` (generalmente está en el directorio de instalación de PHP).
 
2. Abre el archivo `php.ini` con un editor de texto.
 
3. Busca la línea que contiene `;extension=gd` y elimina el punto y coma (`;`) al inicio para descomentarla:


```ini
extension=gd
```
 
1. Guarda el archivo `php.ini` y reinicia tu servidor web (Apache, Nginx, etc.).

#### En macOS (con Homebrew) 

Para instalar PHP y la extensión GD, ejecuta:


```bash
brew install php
```
Verifica que la extensión GD esté habilitada en tu archivo `php.ini`.
### Verificación de la Instalación de GD 

Para confirmar si la extensión GD está instalada y habilitada, ejecuta:


```bash
php -m | grep gd
```
Si `gd` aparece en el resultado, la extensión está habilitada.
## Instalación de Dependencias 

Clona el repositorio de Git:


```bash
git clone https://github.com/davidgbonacho/Create-PDF-mPDF.git
```

Navega al directorio del proyecto:


```bash
cd Create-PDF-mPDF
```

Instala las dependencias:


```bash
composer install
```

[Text in English here](README.MD) 


![](img/logo.svg)
---
`título:` Crear un PDF con mPDF [`SimPIL`] 12/02/2024\
`autor:` David G. Bonacho &nbsp;&nbsp;  [www.tizedit.com](https://www.tizedit.com)

