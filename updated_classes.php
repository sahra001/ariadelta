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
        <div class="d-flex flex-wrap days-grid">
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

<style>
    .form-group {
        margin-bottom: 1rem;
    }

    .form-control {
        width: 100%;
        padding: 0.5rem;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .d-flex {
        display: flex;
    }

    .flex-wrap {
        flex-wrap: wrap;
    }

    .col-3 {
        flex: 0 0 25%;
        max-width: 25%;
        padding: 0.5rem;
    }

    .form-check {
        display: flex;
        align-items: center;
        margin-bottom: 0.5rem;
    }

    .form-check-input {
        margin-right: 0.5rem;
    }

    .days-grid {
        gap: 0.5rem;
    }
</style>
