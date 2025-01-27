<?php
function getUserType($klant_id, $mysqli) {
    $sql = "SELECT t.type FROM tblklant k, tbltypes t WHERE k.klant_id = ? AND t.type_id = k.type_id";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $klant_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
    return $row['type'];
}

function login ($mysqli, $emailoruser, $wachtwoord) {
    $sql = "SELECT * FROM tblklant WHERE email = ? or naam = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $emailoruser, $emailoruser);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($wachtwoord, $row['wachtwoord'])) {
            $klant_id = $row['klant_id'];
            return $klant_id;
        }
    } else {
        return 0;
    }
    $stmt->close();
}

function register($mysqli, $naam, $email, $wachtwoord) {
    $sql = "INSERT INTO tblklant (naam, email, wachtwoord) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sss", $naam, $email, $wachtwoord);
    $stmt->execute();
    $stmt->close();

    return login($mysqli, $email, $wachtwoord);
}

?>