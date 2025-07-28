<?php
// Simple file upload form and handler
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . '/uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        $fileName = basename($_FILES['fileToUpload']['name']);
        $targetFile = $uploadDir . $fileName;
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile)) {
            $message = 'Archivo subido exitosamente: ' . htmlspecialchars($fileName);
        } else {
            $message = 'Error al subir el archivo.';
        }
    } else {
        $message = 'No se seleccionó ningún archivo o hubo un error al subir.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir Archivo</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2em; }
        .container { max-width: 400px; margin: auto; padding: 2em; border: 1px solid #ccc; border-radius: 8px; }
        .message { margin-bottom: 1em; color: green; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Subir Archivo</h2>
        <?php if ($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="fileToUpload">Selecciona un archivo:</label><br>
            <input type="file" name="fileToUpload" id="fileToUpload" required><br><br>
            <input type="submit" value="Subir Archivo">
        </form>
    </div>
</body>
</html>
