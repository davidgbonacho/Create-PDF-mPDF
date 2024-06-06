
# mPDF
mPDF is a PHP library used for generating all kinds of PDF documents. This library has numerous methods and properties that make it very useful in the creation of documents from any type of incoming data. mPDF provides the programmer with the possibility of using an additional format to output information, making it possible to create a multitude of applications, such as ticket sales, invoicing, ad-hoc documentation creation, among others.

## Common Properties of the mPDF Object 
1. **mode**  
- **Description** : Defines the character encoding mode. Commonly 'utf-8'. 
- **Example** : `['mode' => 'utf-8']` 
2. **format**  
- **Description** : Sets the paper format (e.g., 'A4', 'A3', 'Letter'). 
- **Example** : `['format' => 'A4']` 
3. **default_font_size**  
- **Description** : Sets the default font size for the document. 
- **Example** : `['default_font_size' => 12]` 
4. **default_font**  
- **Description** : Sets the default font for the document. 
- **Example** : `['default_font' => 'Arial']` 
5. **margin_left**  
- **Description** : Sets the left margin in millimeters. 
- **Example** : `['margin_left' => 15]` 
6. **margin_right**  
- **Description** : Sets the right margin in millimeters. 
- **Example** : `['margin_right' => 15]` 
7. **margin_top**  
- **Description** : Sets the top margin in millimeters. 
- **Example** : `['margin_top' => 16]` 
8. **margin_bottom**  
- **Description** : Sets the bottom margin in millimeters. 
- **Example** : `['margin_bottom' => 16]` 
9. **margin_header**  
- **Description** : Sets the header margin in millimeters. 
- **Example** : `['margin_header' => 9]` 
10. **margin_footer**  
- **Description** : Sets the footer margin in millimeters. 
- **Example** : `['margin_footer' => 9]` 
11. **orientation**  
- **Description** : Sets the document orientation ('P' for portrait, 'L' for landscape). 
- **Example** : `['orientation' => 'P']` 
12. **tempDir**  
- **Description** : Defines the temporary directory used by mPDF for storing temporary files. 
- **Example** : `['tempDir' => '/tmp']` 
13. **dpi**  
- **Description** : Sets the resolution in dots per inch (DPI) used for images. 
- **Example** : `['dpi' => 96]` 
14. **img_dpi**  
- **Description** : Defines the resolution in dots per inch (DPI) for embedded images. 
- **Example** : `['img_dpi' => 96]` 
15. **defaultfooterline**  
- **Description** : Sets whether to show a default line in the footer. 
- **Example** : `['defaultfooterline' => 1]` 
16. **defaultheaderline**  
- **Description** : Sets whether to show a default line in the header. 
- **Example** : `['defaultheaderline' => 1]` 
17. **useAdobeCJK**  
- **Description** : Enables the use of Adobe CJK (Chinese, Japanese, Korean) fonts. 
- **Example** : `['useAdobeCJK' => true]` 
18. **autoScriptToLang**  
- **Description** : Determines if mPDF should automatically set the language based on the script of the text. 
- **Example** : `['autoScriptToLang' => true]` 
19. **autoLangToFont**  
- **Description** : Determines if mPDF should automatically select a suitable font based on the text's language. 
- **Example** : `['autoLangToFont' => true]` 
20. **showImageErrors**  
- **Description** : Displays errors when images fail to load. 
- **Example** : `['showImageErrors' => true]` 
21. **debug**  
- **Description** : Enables debug mode to show detailed errors and warnings. 
- **Example** : `['debug' => true]`

These properties can be set when instantiating the mPDF object via an associative array passed to the constructor, allowing customization of the behavior and appearance of the generated PDF document. For more details and a complete list of properties, you can refer to the [official mPDF documentation]() .


## Common Methods of the mPDF Object 
1. **__construct($config)**  
- **Description** : Constructor of the mPDF class. It allows configuring various initial options such as page size, margins, default fonts, etc. 
- **Example** : `$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);` 
2. **AddPage($orientation, $type, $resetpagenum, $pagenumstyle, $suppress)**  
- **Description** : Adds a new page to the document. 
- **Example** : `$mpdf->AddPage('L');` // Landscape orientation 
3. **WriteHTML($html, $mode)**  
- **Description** : Writes HTML content to the PDF document. 
- **Example** : `$mpdf->WriteHTML('<h1>Hello, World!</h1>');` 
4. **Output($filename, $dest)**  
- **Description** : Outputs the generated document to a file or directly to the browser. 
- **Example** : `$mpdf->Output('document.pdf', \Mpdf\Output\Destination::FILE);` 
5. **SetWatermarkText($text, $alpha, $size, $color, $outline)**  
- **Description** : Adds a text watermark to the document. 
- **Example** : `$mpdf->SetWatermarkText('CONFIDENTIAL');` 
6. **SetWatermarkImage($file, $alpha, $size, $pos, $dpi)**  
- **Description** : Adds an image watermark to the document. 
- **Example** : `$mpdf->SetWatermarkImage('watermark.png');` 
7. **SetHeader($content, $side)**  
- **Description** : Sets the content of the document's header. 
- **Example** : `$mpdf->SetHeader('Page Header');` 
8. **SetFooter($content, $side)**  
- **Description** : Sets the content of the document's footer. 
- **Example** : `$mpdf->SetFooter('{PAGENO}');` // Page number 
9. **SetProtection($permissions, $user_pass, $owner_pass, $length)**  
- **Description** : Protects the PDF document with a password and sets permissions. 
- **Example** : `$mpdf->SetProtection(['copy', 'print'], 'user', 'owner');` 
10. **AddBookmark($text, $level, $y, $parent)**  
- **Description** : Adds a bookmark to the document. 
- **Example** : `$mpdf->AddBookmark('Chapter 1', 0);` 
11. **AddTOC($id, $pagebreak, $toc_orientation)**  
- **Description** : Adds a table of contents to the document. 
- **Example** : `$mpdf->AddTOC();` 
12. **SetTitle($title)**  
- **Description** : Sets the title of the PDF document. 
- **Example** : `$mpdf->SetTitle('Document Title');` 
13. **SetAuthor($author)**  
- **Description** : Sets the author of the PDF document. 
- **Example** : `$mpdf->SetAuthor('Document Author');` 
14. **SetSubject($subject)**  
- **Description** : Sets the subject of the PDF document. 
- **Example** : `$mpdf->SetSubject('Document Subject');` 
15. **SetKeywords($keywords)**  
- **Description** : Sets the keywords of the PDF document. 
- **Example** : `$mpdf->SetKeywords('keyword1, keyword2, keyword3');` 
16. **SetDisplayMode($zoom, $layout)**  
- **Description** : Configures the initial display mode of the PDF document. 
- **Example** : `$mpdf->SetDisplayMode('fullpage');` 
17. **AddFont($family, $style, $file)**  
- **Description** : Adds a custom font to the PDF document. 
- **Example** : `$mpdf->AddFont('Arial', '', 'arial.ttf');`
- 
Here are some of the most commonly used methods of the mPDF class. The library has many more features that allow you to customize and control almost every aspect of PDF generation. For a complete and detailed list, you can refer to the [official mPDF documentation](https://mpdf.github.io/).
