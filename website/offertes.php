<?php
session_start();
include 'connect.php';



// Haal klantgegevens op uit de database
$email = $_SESSION['email'];
$sql = "SELECT * FROM tblklant WHERE email = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$klant = $result->fetch_assoc();

// Verwerk offerte-aanvraag
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $type = $_POST['type'];
    $telefoonnummer = $_POST['telefoonnummer'] ?? $klant['telefoonnummer'];
    $naam = $_POST['naam'];
    $omschrijving = $_POST['omschrijving'];

    // Update telefoonnummer als het nog niet in de database staat
    if (empty($klant['telefoonnummer']) && !empty($telefoonnummer)) {
        $update_sql = "UPDATE tblklant SET telefoonnummer = ? WHERE email = ?";
        $update_stmt = $mysqli->prepare($update_sql);
        $update_stmt->bind_param("ss", $telefoonnummer, $email);
        $update_stmt->execute();
        $update_stmt->close();
    }

    // Voeg offerte toe aan de database
    $insert_sql = "INSERT INTO tbloffertes (naam, email, telefoonnummer, type_offerte, omschrijving) VALUES (?, ?, ?, ?, ?)";
    $insert_stmt = $mysqli->prepare($insert_sql);
    $insert_stmt->bind_param("sssss", $naam, $email, $telefoonnummer, $type, $omschrijving);

    if ($insert_stmt->execute()) {
        echo "<script>alert('Offerte succesvol aangevraagd!');</script>";
    } else {
        echo "<script>alert('Er is iets misgegaan. Probeer het opnieuw.');</script>";
    }

    $insert_stmt->close();
}

$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offerte Aanvragen</title>
    <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/s.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=WindSong:wght@400;500&display=swap" rel="stylesheet">

</head>

<body>
    <?php include 'functies/pagina/header.php'; ?>
    <main class="bg">
    <h1>Vraag hier uw offerte aan</h1>
    <div class="center-container glass-blur"> 
        
        <form method="POST">
            <label>
                <span>Type offerte</span>
                <br>
                <select name="type" required>
                    <option value="Website">Website</option>
                    <option value="Webshop">Webshop</option>
                    <option value="Webapplicatie">Webapplicatie</option>
                    <option value="Andere">Andere</option>
                </select>
            </label>
            <label>
                <span>Telefoonnummer</span>
                <input type="text" name="telefoonnummer" value="<?php echo htmlspecialchars($klant['telefoonnummer'] ?? ''); ?>" placeholder="Vul uw telefoonnummer in" required maxlength="10" pattern="\d{10}" title="Voer precies 10 cijfers in"/>
                <br>
            </label>
            
            <label>
                <span>Naam</span>
                <input type="text" name="naam" value="<?php echo htmlspecialchars($klant['naam']); ?>" readonly />
            </label>
            <label>
                <span>Korte omschrijving</span>
                <textarea name="omschrijving" rows="5" required></textarea>
            </label>
            <br>
            <button type="submit">Offerte aanvragen</button>
        </form>
    </div>
    </main>
    <?php include 'functies/pagina/footer.php'; ?>
</body>

</html>
