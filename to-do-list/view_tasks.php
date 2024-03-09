<?php
session_start();

echo "<h2>Tasks:</h2>";

if(isset($_SESSION['tasks']) && !empty($_SESSION['tasks'])) {
    echo "<ul>";
    foreach($_SESSION['tasks'] as $task) {
        echo "<li>$task</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No tasks yet.</p>";
}
?>
