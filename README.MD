
# Create a PDF with mPDF 
How to create a PDF with mPDF library.

`[SimPIL are a series of ultra-simple examples of how to perform different operations with code. Uncomplicated.]`

## Install
Simply clone the repo & require for library mPDF with composer (composer require mpdf/mpdf) 

## Perform
Just replace code and use your template (in template.php)

## Files

- html2pdf.php: a sample document with mPDF object
- template.php: your HTML template with labels (to be filled however you want)
- vendor {folder} with mPDF dependencies {must be downloaded from the author's repository - composer require mpdf/mpdf}
- info/: documents with information about properties and methods of the mPDF object [EN](info/mPDF-methods-properties.md) [ES](info/mPDF-métodos-propiedades.md)
- img/logo.svg: only important images are here.

# Building

To use this application, you need to have the following PHP extensions installed:

- **GD**: Required by the `mpdf/mpdf` library for generating PDF files.

### Installing PHP Extensions

#### On Linux (Ubuntu/Debian)

To install the GD extension, run:

    sudo apt-get update
    sudo apt-get install php-gd


After installing, restart your web server:

```sh
sudo systemctl restart apache2
# or if using nginx
sudo systemctl restart nginx

```
#### On Windows 
 
1. Locate your `php.ini` file (typically found in your PHP installation directory).
 
2. Open `php.ini` in a text editor.
 
3. Find the line that contains `;extension=gd` and remove the semicolon (`;`) at the beginning to uncomment it:

```ini
extension=gd
```
 
4. Save the `php.ini` file and restart your web server (Apache, Nginx, etc.).

#### On macOS (using Homebrew) 

To install PHP and the GD extension, run:

    $ brew install php

Verify that the GD extension is enabled in your `php.ini` file.

### Verifying GD Installation 

To check if the GD extension is correctly installed and enabled, run:

    $ php -m | grep gd

If `gd` appears in the output, the extension is enabled.

## Installing Dependencies 

Clone git repository:

    $ git clone https://github.com/davidgbonacho/Create-PDF-mPDF.git

Navigate to the project directory:

    $ cd Create-PDF-mPDF

Install dependencies:
    
    $ composer install



![](img/logo.svg)
---
`título:` Create a PDF with mPDF [`SimPIL`] 02/12/24\
`autor:` David G. Bonacho &nbsp;&nbsp;  [www.tizedit.com](https://www.tizedit.com)

