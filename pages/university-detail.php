<?php
// Variables passed via layout context: $title, $university
?>
<div class="container">
    <h1><?php echo htmlspecialchars($university['name']); ?></h1>
    <p><strong>State:</strong> <?php echo htmlspecialchars($university['state']); ?></p>
    <p><strong>Address:</strong> <?php echo htmlspecialchars($university['address']); ?></p>
    <p><strong>Website:</strong> <a href="<?php echo htmlspecialchars($university['email']); ?>" target="_blank">Visit University</a></p>
    <img src="<?= BASE_URL . htmlspecialchars($university['img']) ?>" alt="<?php echo htmlspecialchars($university['name']); ?>">
</div>