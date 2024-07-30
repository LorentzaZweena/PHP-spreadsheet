<?php 
    //call the autoload
    require 'vendor/autoload.php';

    //load phpspreadsheet class using namespaces
    use PhpOffice\PhpSpreadsheet\Spreadsheet;

    //call iofactory instead of xlsx writer
    use PhpOffice\PhpSpreadsheet\IOFactory;

    //phpspreadsheet Date class
    use PhpOffice\PhpSpreadsheet\Shared\Date;

    //phpspreadsheet numberformat style class
    use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

    //make a new spreadsheet object
    $spreadsheet = new Spreadsheet();

    //get current active sheet (first sheet)
    $activeWorksheet = $spreadsheet->getActiveSheet();

    //set default font
    $spreadsheet ->getDefaultStyle() ->getFont() ->setName('Arial') ->setSize(14);

    //set column dimension to autosize
    $spreadsheet ->getActiveSheet() ->getColumnDimension('B') ->setAutoSize(true);
    $spreadsheet ->getActiveSheet() ->getColumnDimension('C') ->setAutoSize(true);
    $spreadsheet ->getActiveSheet() ->getColumnDimension('A') ->setAutoSize(true);

    //simple text data
    $spreadsheet ->getActiveSheet() ->setCellValue('A1', "String") ->setCellValue('B1', "Simple text") ->setCellValue('C1', "This is Phpspreadsheet");

    //symbols
    $spreadsheet ->getActiveSheet() ->setCellValue('A2', "String again") ->setCellValue('B2', "Symbols") ->setCellValue('C2', "ÙÝÖНϙϾϢЏ");

    //utf-8 string
    $spreadsheet ->getActiveSheet() ->setCellValue('A3', "String again and again") ->setCellValue('B3', "UTF-8") ->setCellValue('C3', "Hej på dig, jag är här");

    //numbers
    $spreadsheet ->getActiveSheet() ->setCellValue('A4', "Numbers") ->setCellValue('B4', "Integer") ->setCellValue('C4', 128);
    
    //float
    $spreadsheet ->getActiveSheet() ->setCellValue('A5', "Numbers") ->setCellValue('B5', "Float") ->setCellValue('C5', 128.97);

    //Negative
    $spreadsheet ->getActiveSheet() ->setCellValue('A6', "Numbers") ->setCellValue('B6', "Negative") ->setCellValue('C6', -349.78);

    //boolean
    $spreadsheet ->getActiveSheet() ->setCellValue('A7', "Numbers") ->setCellValue('B7', "Boolean") ->setCellValue('C7', true) ->setCellValue('D7', false);

    //date datatype | make a variable from current timestamp
    $dateTimeNow = time();

    //date
    $spreadsheet ->getActiveSheet() ->setCellValue('A8', "Date / time") ->setCellValue('B8', "Date") ->setCellValue('C8', Date::PHPToExcel($dateTimeNow));

    //set the cell format into a date
    $spreadsheet ->getActiveSheet() ->getStyle('C8') ->getNumberFormat() ->setFormatCode(NumberFormat::FORMAT_DATE_YYYYMMDD);

    //set the header first, so the result will be treated as an xlsx file
    header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

    //make it an attachment so we can define filename
    header('Content-Disposition: attachment;filename="result.xlsx"');

    //create I0Factory object
    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');

    //save into php output
    $writer->save('php://output');
?>