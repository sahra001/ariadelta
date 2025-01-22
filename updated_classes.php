<?php
// Include the database connection file
// include('../includes/db.php');

// Ensure $conn is a valid mysqli connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
?>
<form method="post">
    <div class="form-group">
        <label for="class_name">Class Name:</label>
        <input type="text" class="form-control" id="class_name" name="class_name" required>
    </div>

    <div class="form-group">
        <label for="creation_date">Creation Date:</label>
        <input type="date" class="form-control" id="creation_date" name="creation_date" required>
    </div>

    <!-- Adjusted layout for days of the week -->
    <div class="form-group">
        <label>Days of the Week:</label>
        <div class="d-flex flex-wrap">
            <div class="form-check col-3">
                <input type="checkbox" class="form-check-input" id="monday" name="days[]" value="Monday">
                <label class="form-check-label" for="monday">Monday</label>
            </div>
            <div class="form-check col-3">
                <input type="checkbox" class="form-check-input" id="tuesday" name="days[]" value="Tuesday">
                <label class="form-check-label" for="tuesday">Tuesday</label>
            </div>
            <div class="form-check col-3">
                <input type="checkbox" class="form-check-input" id="wednesday" name="days[]" value="Wednesday">
                <label class="form-check-label" for="wednesday">Wednesday</label>
            </div>
            <div class="form-check col-3">
                <input type="checkbox" class="form-check-input" id="thursday" name="days[]" value="Thursday">
                <label class="form-check-label" for="thursday">Thursday</label>
            </div>
            <div class="form-check col-3">
                <input type="checkbox" class="form-check-input" id="friday" name="days[]" value="Friday">
                <label class="form-check-label" for="friday">Friday</label>
            </div>
            <div class="form-check col-3">
                <input type="checkbox" class="form-check-input" id="saturday" name="days[]" value="Saturday">
                <label class="form-check-label" for="saturday">Saturday</label>
            </div>
            <div class="form-check col-3">
                <input type="checkbox" class="form-check-input" id="sunday" name="days[]" value="Sunday">
                <label class="form-check-label" for="sunday">Sunday</label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
