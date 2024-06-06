
# mPDF
mPDF es una librería PHP utilizada para la generación de documentos PDF de todo tipo. Esta librería posee multitud de métodos y propiedades que la hacen muy útil en la elaboración de documentos a partir de cualquier tipo de dato entrante. mPDF proporciona al programador la posibilidad de utilizar un formato adicional donde volcar la información, haciendo posible la creación de un sinfín de aplicaciones, tales como venta de entradas, facturación, elaboración de documentación ad-hoc, entre otros.


## Propiedades Principales de mPDF 
1. **mode**  
- **Descripción** : Define el modo de codificación de caracteres. Usualmente se utiliza 'utf-8'. 
- **Ejemplo** : `['mode' => 'utf-8']` 
2. **format**  
- **Descripción** : Establece el formato del papel (e.g., 'A4', 'A3', 'Letter'). 
- **Ejemplo** : `['format' => 'A4']` 
3. **default_font_size**  
- **Descripción** : Define el tamaño de fuente predeterminado para el documento. 
- **Ejemplo** : `['default_font_size' => 12]` 
4. **default_font**  
- **Descripción** : Define la fuente predeterminada para el documento. 
- **Ejemplo** : `['default_font' => 'Arial']` 
5. **margin_left**  
- **Descripción** : Define el margen izquierdo en unidades de milímetros. 
- **Ejemplo** : `['margin_left' => 15]` 
6. **margin_right**  
- **Descripción** : Define el margen derecho en unidades de milímetros. 
- **Ejemplo** : `['margin_right' => 15]` 
7. **margin_top**  
- **Descripción** : Define el margen superior en unidades de milímetros. 
- **Ejemplo** : `['margin_top' => 16]` 
8. **margin_bottom**  
- **Descripción** : Define el margen inferior en unidades de milímetros. 
- **Ejemplo** : `['margin_bottom' => 16]` 
9. **margin_header**  
- **Descripción** : Define el margen del encabezado en unidades de milímetros. 
- **Ejemplo** : `['margin_header' => 9]` 
10. **margin_footer**  
- **Descripción** : Define el margen del pie de página en unidades de milímetros. 
- **Ejemplo** : `['margin_footer' => 9]` 
11. **orientation**  
- **Descripción** : Define la orientación del documento ('P' para vertical, 'L' para horizontal). 
- **Ejemplo** : `['orientation' => 'P']` 
12. **tempDir**  
- **Descripción** : Define el directorio temporal usado por mPDF para almacenar archivos temporales. 
- **Ejemplo** : `['tempDir' => '/tmp']` 
13. **dpi**  
- **Descripción** : Establece la resolución en puntos por pulgada (DPI) utilizada para imágenes. 
- **Ejemplo** : `['dpi' => 96]` 
14. **img_dpi**  
- **Descripción** : Define la resolución en puntos por pulgada (DPI) para imágenes incrustadas. 
- **Ejemplo** : `['img_dpi' => 96]` 
15. **defaultfooterline**  
- **Descripción** : Define si se debe mostrar una línea por defecto en el pie de página. 
- **Ejemplo** : `['defaultfooterline' => 1]` 
16. **defaultheaderline**  
- **Descripción** : Define si se debe mostrar una línea por defecto en el encabezado. 
- **Ejemplo** : `['defaultheaderline' => 1]` 
17. **useAdobeCJK**  
- **Descripción** : Permite el uso de fuentes CJK (chino, japonés, coreano) de Adobe. 
- **Ejemplo** : `['useAdobeCJK' => true]` 
18. **autoScriptToLang**  
- **Descripción** : Determina si mPDF debe intentar automáticamente establecer el idioma basado en el script del texto. 
- **Ejemplo** : `['autoScriptToLang' => true]` 
19. **autoLangToFont**  
- **Descripción** : Determina si mPDF debe intentar automáticamente seleccionar una fuente adecuada basada en el idioma del texto. 
- **Ejemplo** : `['autoLangToFont' => true]` 
20. **showImageErrors**  
- **Descripción** : Muestra errores cuando no se pueden cargar imágenes. 
- **Ejemplo** : `['showImageErrors' => true]` 
21. **debug**  
- **Descripción** : Habilita el modo de depuración para mostrar errores y advertencias detalladas. 
- **Ejemplo** : `['debug' => true]`

Estas propiedades se pueden establecer cuando se instancia el objeto mPDF mediante un array asociativo pasado al constructor, lo que permite personalizar el comportamiento y la apariencia del documento PDF generado. Para más detalles y una lista completa de propiedades, puedes consultar la [documentación oficial de mPDF](https://mpdf.github.io/) .

## Métodos Principales de mPDF 
1. **__construct($config)**  
- **Descripción** : Constructor de la clase mPDF. Permite configurar diversas opciones iniciales como el tamaño de página, márgenes, fuentes predeterminadas, etc. 
- **Ejemplo** : `$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);` 
2. **AddPage($orientation, $type, $resetpagenum, $pagenumstyle, $suppress)**  
- **Descripción** : Añade una nueva página al documento. 
- **Ejemplo** : `$mpdf->AddPage('L');` // Orientación horizontal 
3. **WriteHTML($html, $mode)**  
- **Descripción** : Escribe contenido HTML en el documento PDF. 
- **Ejemplo** : `$mpdf->WriteHTML('<h1>Hola, Mundo!</h1>');` 
4. **Output($filename, $dest)**  
- **Descripción** : Envía el documento generado a un archivo o directamente al navegador. 
- **Ejemplo** : `$mpdf->Output('documento.pdf', \Mpdf\Output\Destination::FILE);` 
5. **SetWatermarkText($text, $alpha, $size, $color, $outline)**  
- **Descripción** : Añade una marca de agua de texto al documento. 
- **Ejemplo** : `$mpdf->SetWatermarkText('CONFIDENCIAL');` 
6. **SetWatermarkImage($file, $alpha, $size, $pos, $dpi)**  
- **Descripción** : Añade una marca de agua de imagen al documento. 
- **Ejemplo** : `$mpdf->SetWatermarkImage('marca_de_agua.png');` 
7. **SetHeader($content, $side)**  
- **Descripción** : Establece el contenido del encabezado del documento. 
- **Ejemplo** : `$mpdf->SetHeader('Encabezado de Página');` 
8. **SetFooter($content, $side)**  
- **Descripción** : Establece el contenido del pie de página del documento. 
- **Ejemplo** : `$mpdf->SetFooter('{PAGENO}');` // Número de página 
9. **SetProtection($permissions, $user_pass, $owner_pass, $length)**  
- **Descripción** : Protege el documento PDF con una contraseña y establece permisos. 
- **Ejemplo** : `$mpdf->SetProtection(['copy', 'print'], 'usuario', 'propietario');` 
10. **AddBookmark($text, $level, $y, $parent)**  
- **Descripción** : Añade un marcador al documento. 
- **Ejemplo** : `$mpdf->AddBookmark('Capítulo 1', 0);` 
11. **AddTOC($id, $pagebreak, $toc_orientation)**  
- **Descripción** : Añade una tabla de contenidos al documento. 
- **Ejemplo** : `$mpdf->AddTOC();` 
12. **SetTitle($title)**  
- **Descripción** : Establece el título del documento PDF. 
- **Ejemplo** : `$mpdf->SetTitle('Título del Documento');` 
13. **SetAuthor($author)**  
- **Descripción** : Establece el autor del documento PDF. 
- **Ejemplo** : `$mpdf->SetAuthor('Autor del Documento');` 
14. **SetSubject($subject)**  
- **Descripción** : Establece el asunto del documento PDF. 
- **Ejemplo** : `$mpdf->SetSubject('Asunto del Documento');` 
15. **SetKeywords($keywords)**  
- **Descripción** : Establece las palabras clave del documento PDF. 
- **Ejemplo** : `$mpdf->SetKeywords('palabra1, palabra2, palabra3');` 
16. **SetDisplayMode($zoom, $layout)**  
- **Descripción** : Configura el modo de visualización inicial del documento PDF. 
- **Ejemplo** : `$mpdf->SetDisplayMode('fullpage');` 
17. **AddFont($family, $style, $file)**  
- **Descripción** : Añade una fuente personalizada al documento PDF. 
- **Ejemplo** : `$mpdf->AddFont('Arial', '', 'arial.ttf');`

Estos son algunos de los métodos más utilizados de la clase mPDF. La librería tiene muchas más funcionalidades que permiten personalizar y controlar casi todos los aspectos de la generación de PDFs. Para una lista completa y detallada, puedes consultar la [documentación oficial de mPDF](https://mpdf.github.io/) .

