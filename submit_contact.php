
require 'vendor/autoload.php'; // Load PHPSpreadsheet

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

// Get form data
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$message = htmlspecialchars($_POST['message']);

// Path to the Excel file
$filePath = "contact_data.xlsx";

try {
    // Load existing spreadsheet or create a new one
    if (file_exists($filePath)) {
        $spreadsheet = IOFactory::load($filePath);
    } else {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        // Add header row
        $sheet->setCellValue('A1', 'Name')
              ->setCellValue('B1', 'Email')
              ->setCellValue('C1', 'Phone')
              ->setCellValue('D1', 'Message')
              ->setCellValue('E1', 'Submitted At');
    }

    // Get active sheet
    $sheet = $spreadsheet->getActiveSheet();

    // Find the next empty row
    $row = $sheet->getHighestRow() + 1;

    // Insert form data
    $sheet->setCellValue("A$row", $name)
          ->setCellValue("B$row", $email)
          ->setCellValue("C$row", $phone)
          ->setCellValue("D$row", $message)
          ->setCellValue("E$row", date('Y-m-d H:i:s'));

    // Save the spreadsheet
    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save($filePath);

    // Redirect back to the contact page with success message
    echo "<script>alert('Your message has been submitted successfully!'); window.location.href = 'contact.php';</script>";

} catch (Exception $e) {
    // Handle errors
    echo "<script>alert('Failed to submit your message. Please try again later.'); window.location.href = 'contact.php';</script>";
}
