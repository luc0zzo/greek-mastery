<?php
// Percorso in cui salvare l'immagine
$target_dir = "../img/private/";

// Ottieni il nome del file
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// Ottieni l'estensione del file
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Verifica se il file è un'immagine reale o un falso
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        // Controlla se il file esiste già
        if (file_exists($target_file)) {
            echo "Spiacente, il file esiste già.";
        } else {
            // Controlla la dimensione del file
            if ($_FILES["fileToUpload"]["size"] > 5000000) { // 5MB
                echo "Spiacente, il file è troppo grande.";
            } else {
                // Accetta solo alcuni formati di file
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    echo "Spiacente, solo file JPG, JPEG, PNG & GIF sono ammessi.";
                } else {
                    // Se tutto è ok, carica il file
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        echo "Il file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " è stato caricato con successo.";
                    } else {
                        echo "Si è verificato un errore durante il caricamento del file.";
                    }
                }
            }
        }
    } else {
        echo "Il file non è un'immagine valida.";
    }
}
?>