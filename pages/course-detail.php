<?php
// Variables passed via layout context: $title, $course, $details
?>
<div class="container">
    <h1><?php echo htmlspecialchars($course['name']); ?></h1>
    <p><strong>Intake:</strong> <?php echo htmlspecialchars($course['intake']); ?></p>
    
    <h3>Entry Requirements</h3>
    <p><?php echo htmlspecialchars($details['entryRequirements']); ?></p>
</div>