<?php
require '../includes/config.inc.php';
session_start();
$id = $_SESSION['p_id'];
$sql = "SELECT * FROM `physcho` WHERE psy_id='$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['name']);
    $femail = mysqli_real_escape_string($conn, $_POST['email']);
    $fquali = mysqli_real_escape_string($conn, $_POST['quali']);
    $fcontact = $_POST['contact'];
    $fbio = mysqli_real_escape_string($conn, $_POST['bio']);
    $fgender = $_POST['gender'];

    if (!empty($_POST['name']) && !empty($_POST['quali'])  && !empty($_POST['bio']) && !empty($_POST['contact'])) {
        if (!preg_match('/[^\w -.]/', $fname)) {
        } else {

            $_SESSION['error'] = "Your Name Cannot Contain Numbers or Illegal Characters!";
            echo '<script>window.location.href="../psyprofile.php?error=true"</script>';
            exit();
        }
        if (preg_match("#[0-9]+#", $fquali)) {
            $_SESSION['error'] = "Your Qualification Cannot Contain Numbers!";
            echo '<script>window.location.href="../psyprofile.php?error=true"</script>';
            exit();
        }



        $sqlu = "UPDATE `physcho` SET `psy_name` = '$fname' ,`psy_contact` = '$fcontact', `psy_email` = '$femail', `psy_gender` = '$fgender', `psy_qualification` = '$fquali', `psy_bio` = '$fbio'  WHERE `physcho`.`psy_id` = '$id'";
        $resultu = mysqli_query($conn, $sqlu);
        echo mysqli_error($conn);
        var_dump($resultu);
        echo "<br";
        var_dump($resultu);

        if ($resultu) {
            header('Location: ../psyprofile.php?success=true');
            exit(0);
        } else {
            header('Location: ../psyprofile.php?error=true');
            exit(0);
        }
    } else {
        $error = true;
        $_SESSION['error'] = "Field Cannot be Empty";
        echo '<script>
        window.location.href = "../psyprofile.php?error=true"
        </script>';

        exit();
    }
}