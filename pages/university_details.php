<!-- Header Start -->
<div
  class="jumbotron jumbotron-fluid position-relative overlay-bottom"
  style="margin-bottom: 90px">
  <div class="container text-center my-5 py-5">
    <h1 class="text-white mt-4 mb-4">University Details</h1>
  </div>
</div>
<!-- Header End -->

<!--Main Content Start -->
<div class="container">
  <div class="text-center">
    <img src="<?= BASE_URL.htmlspecialchars($university['img'] ?? '') ?>" class="card-img-top border shadow" alt="university logo" style="max-width: 500px;">
    <h3 class="text-center my-3"><?php echo htmlspecialchars($university['name'] ?? ''); ?></h3>

    <?php
    if($university['email']){
      echo '<p class="mb-0">Email: '.htmlspecialchars($university['email'] ?? '').'</p>';
    }
    if($university['address']){
      echo '<p class="mb-0">Address: '.htmlspecialchars($university['address'] ?? '').'</p>';
    }

     if($university['state']){
      echo '<p class="mb-0">State: '.htmlspecialchars($university['state'] ?? '').'</p>';
    }

     if($university['postcode']){
       echo '<p class="mb-0">Postcode: '.htmlspecialchars($university['postcode'] ?? '').'</p>';
     }
    ?>
  </div>


  <div class="row my-5">
    <div class="col-md-6">
      <div class="card p-3 rounded shadow">
        <div class="card-body">
          <h3>About <?php echo htmlspecialchars($university['name'] ?? ''); ?></h3>
          <p class="pt-3">
            <?php echo htmlspecialchars($university['about'] ?? ''); ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div id="form">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfUzVwjx-YutYlHX9JGJmnMkpF-MVyhoyChYEBB3yw2f8G6Ug/viewform?embedded=true" width="1200" height="600" frameborder="0" marginheight="0" marginwidth="0" style="width: 100%;">Loading…</iframe>
      </div>
    </div>
  </div>

  <div class="hr"> </div>

  <div>
    <h2 class="my-5 text-center">Popular Course In <?php echo htmlspecialchars($university['name'] ?? ''); ?></h2>

    <?php if (!empty($courses) && is_array($courses)): ?>
      <div class="row">
        <?php foreach ($courses as $course): ?>
          <div class="col-lg-4 col-md-6 pb-4">
            <div class="card p-3 rounded text-center h-100 shadow">
              <h5><?php echo htmlspecialchars($course['name']); ?></h5>

              <p>Intake : <?php echo htmlspecialchars($course['intake']); ?></p>
              <p>Mode of Study : <?php echo htmlspecialchars($course['modeOfStudy']); ?></p>
              <p>Fee Range : <?php echo htmlspecialchars($course['feeRange']); ?></p>
              <p>Course Duration : <?php echo htmlspecialchars($course['courseDuration']); ?></p>

              <a href="/lpkeducation/courses/<?php echo htmlspecialchars($course['slug']); ?>" class="btn btn-outline-primary mt-auto">
                Check Eligibility
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <div class="alert alert-info text-center" role="alert">
        No courses are currently available for this university.
      </div>
    <?php endif; ?>
  </div>
</div>
<!--Main content End -->