<?php
include '../controllers/employerController.php';
$employers = get_employers();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employer Management</title>
</head>
<body>
<a href="login.php">Logout!!!</a>
<h2>Employer Management</h2>

<!-- Single form for Add/Edit -->
<form method="POST" onsubmit="return validateForm();">
    <input type="hidden" name="id" id="employer_id" value="">
    <input type="text" name="employer_name" id="employer_name" placeholder="Employer Name"><br>
    <input type="text" name="company_name" id="company_name" placeholder="Company Name"><br>
    <input type="text" name="contact_no" id="contact_no" placeholder="Contact No"><br>
    <input type="text" name="username" id="username" placeholder="Username"><br>
    <input type="password" name="password" id="password" placeholder="Password"><br>
    <button type="submit" name="submit_employer" id="submit_button">Add Employer</button>
</form>

<hr>

<!-- Search -->
<input type="text" id="search" placeholder="Search Employer...">
<table border="1" width="100%">
    <thead>
        <tr>
            <th>ID</th><th>Name</th><th>Company</th><th>Contact</th><th>Username</th><th>Password</th><th>Action</th>
        </tr>
    </thead>
    <tbody id="employerTable">
        <?php foreach($employers as $emp): ?>
        <tr data-id="<?= $emp['id'] ?>">
            <td><?= $emp['id'] ?></td>
            <td class="ename"><?= htmlspecialchars($emp['employer_name']) ?></td>
            <td class="cname"><?= htmlspecialchars($emp['company_name']) ?></td>
            <td class="contact"><?= htmlspecialchars($emp['contact_no']) ?></td>
            <td class="uname"><?= htmlspecialchars($emp['username']) ?></td>
            <td class="pass"><?= htmlspecialchars($emp['password']) ?></td>
            <td>
                <a href="#" class="edit" data-id="<?= $emp['id'] ?>">Edit</a> |
                <a href="../controllers/employerController.php?delete=<?= $emp['id'] ?>" onclick="return confirm('Delete this employer?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
// Validate non-empty inputs
function validateForm() {
    let fields = ["employer_name", "company_name", "contact_no", "username", "password"];
    for (let i = 0; i < fields.length; i++) {
        let val = document.getElementById(fields[i]).value.trim();
        if (val === "") {
            alert(fields[i].replace(/_/g, " ") + " cannot be empty!");
            return false;
        }
    }
    return true;
}

// Search functionality with AJAX
document.getElementById("search").addEventListener("keyup", function() {
    var search = this.value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../controllers/employerController.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("employerTable").innerHTML = xhr.responseText;
        }
    };
    xhr.send("search=" + encodeURIComponent(search));
});

// Edit employer click handler
document.addEventListener("click", function(e) {
    if (e.target.classList.contains("edit")) {
        e.preventDefault();
        var id = e.target.getAttribute("data-id");
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../controllers/employerController.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var employer = JSON.parse(xhr.responseText);
                document.getElementById("employer_id").value = employer.id;
                document.getElementById("employer_name").value = employer.employer_name;
                document.getElementById("company_name").value = employer.company_name;
                document.getElementById("contact_no").value = employer.contact_no;
                document.getElementById("username").value = employer.username;
                document.getElementById("password").value = employer.password;
                document.getElementById("submit_button").textContent = "Update Employer";
                window.scrollTo(0,0); // Scroll to top where form is
            }
        };
        xhr.send("edit=" + encodeURIComponent(id));
    }
});
</script>

</body>
</html>
