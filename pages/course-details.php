<!-- Header Start -->
<div
  class="jumbotron jumbotron-fluid position-relative overlay-bottom"
  style="margin-bottom: 90px">
  <div class="container text-center my-5 py-5">
    <h1 class="text-white mt-4 mb-4">Course Details</h1>
  </div>
</div>
<!-- Header End -->

<!--Main Content Start -->
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card p-3 rounded shadow">
        <h3><?php echo htmlspecialchars($course['name'] ?? ''); ?></h3>
        <p>Duration: <?php echo htmlspecialchars($course['courseDuration'] ?? ''); ?></p>
        <p>Study Level: <?php echo htmlspecialchars($course['studyLevel'] ?? ''); ?></p>
        <p>Intake: <?php echo htmlspecialchars($course['intake'] ?? ''); ?></p>
        <p>Fee Range: <?php echo htmlspecialchars($course['feeRange'] ?? ''); ?></p>
        <p>Location: <?php echo htmlspecialchars($course['location'] ?? ''); ?></p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card p-3 rounded shadow">
        <h3 class="my-3"><?php echo htmlspecialchars($university['name'] ?? ''); ?></h3>
        <img src="<?= BASE_URL.htmlspecialchars($university['img'] ?? '') ?>" class="card-img-top img-fluid" alt="university logo" style="max-width: 100px;">

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
    </div>
  </div>




  <div class="row mt-5">
    <div class="col-md-6">
      <div class="card p-3 rounded">
        <div class="card-body">
          <h3>About <?php echo htmlspecialchars($course['name'] ?? ''); ?></h3>
          <p>
            <?php echo htmlspecialchars($course['about'] ?? 'No Data to display'); ?>
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
</div>
<!--Main content End -->