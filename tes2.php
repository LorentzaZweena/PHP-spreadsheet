<?php 
    //call the autoload
    require 'vendor/autoload.php';

    //load phpspreadsheet class using namespaces
    use PhpOffice\PhpSpreadsheet\Spreadsheet;

    //call iofactory instead of xlsx writer
    use PhpOffice\PhpSpreadsheet\IOFactory;

    //make a new spreadsheet object
    $spreadsheet = new Spreadsheet();

    //get current active sheet (first sheet)
    $activeWorksheet = $spreadsheet->getActiveSheet();

    //set the value of cell a1 to "Hello world"
    $activeWorksheet->setCellValue('A1', 'Hello World !');

    //set the header first, so the result will be treated as an xlsx file
    header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

    //make it an attachment so we can define filename
    header('Content-Disposition: attachment;filename="result.xlsx"');

    //create I0Factory object
    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');

    //save into php output
    $writer->save('php://output');
?>