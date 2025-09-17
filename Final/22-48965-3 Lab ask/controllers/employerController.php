<?php
require_once('../models/db.php');
$con = getConnection();

// Add or Update Employer (combined)
if (isset($_POST['submit_employer'])) {
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $name = mysqli_real_escape_string($con, $_POST['employer_name']);
    $company = mysqli_real_escape_string($con, $_POST['company_name']);
    $contact = mysqli_real_escape_string($con, $_POST['contact_no']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    if ($id > 0) {
        // Update existing
        $sql = "UPDATE employers SET employer_name='$name', company_name='$company',
                contact_no='$contact', username='$username', password='$password' WHERE id=$id";
    } else {
        // Insert new
        $sql = "INSERT INTO employers (employer_name, company_name, contact_no, username, password)
                VALUES ('$name', '$company', '$contact', '$username', '$password')";
    }
    mysqli_query($con, $sql);
    header("Location: ../views/employer.php");
    exit;
}

// Delete Employer
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    mysqli_query($con, "DELETE FROM employers WHERE id=$id");
    header("Location: ../views/employer.php");
    exit;
}

// Get all employers
function get_employers() {
    $con = getConnection();
    $res = mysqli_query($con, "SELECT * FROM employers ORDER BY id");
    $data = [];
    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row;
    }
    return $data;
}

// Return JSON for editing form population
if (isset($_POST['edit'])) {
    $id = intval($_POST['edit']);
    $con = getConnection();
    $res = mysqli_query($con, "SELECT * FROM employers WHERE id=$id");
    $row = mysqli_fetch_assoc($res);
    echo json_encode($row);
    exit;
}

// Search Employers (AJAX)
if (isset($_POST['search'])) {
    $search = mysqli_real_escape_string($con, $_POST['search']);
    $res = mysqli_query($con, "SELECT * FROM employers 
        WHERE employer_name LIKE '%$search%' OR company_name LIKE '%$search%' OR username LIKE '%$search%'
        ORDER BY id DESC");
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr data-id='{$row['id']}'>
                <td>{$row['id']}</td>
                <td class='ename'>" . htmlspecialchars($row['employer_name']) . "</td>
                <td class='cname'>" . htmlspecialchars($row['company_name']) . "</td>
                <td class='contact'>" . htmlspecialchars($row['contact_no']) . "</td>
                <td class='uname'>" . htmlspecialchars($row['username']) . "</td>
                <td class='pass'>" . htmlspecialchars($row['password']) . "</td>
                <td>
                  <a href='#' class='edit' data-id='{$row['id']}'>Edit</a> |
                  <a href='../controllers/employerController.php?delete={$row['id']}' onclick='return confirm(\"Delete this employer?\");'>Delete</a>
                </td>
              </tr>";
    }
    exit;
}
?>
