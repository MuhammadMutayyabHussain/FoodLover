<?php
include_once '../../helper/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $member_name = $_POST['member_name'];
    $designation = $_POST['designation'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $twitter = $_POST['twitter'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image']['name'];
        $temp_image = $_FILES['image']['tmp_name'];
        $upload_dir = "../../uploads/teammembers/";
        $target_image = $upload_dir . basename($image);

        if (move_uploaded_file($temp_image, $target_image)) {


            $MySqlCommand = "SELECT MAX(id) FROM teammembers";
            $Result = mysqli_query($conn, $MySqlCommand);
            $MaxID = mysqli_fetch_array($Result);
            $UserID = $MaxID['0'];
            $UserID = $UserID + 1;
            $Status = 1;

            $sql = "INSERT INTO teammembers (id,name, designation, facebook, insta, twitter, image, status) VALUES ($UserID, '$member_name', '$designation', '$facebook', '$instagram', '$twitter', '$image', '$Status')";
            if ($conn->query($sql) === TRUE) {
                echo 'New member added successfully. <a href="../add-team-member.php"> Add another member</a>';

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error uploading image.";
        }
    } else {
        echo "No image uploaded.";
    }
}

$conn->close();