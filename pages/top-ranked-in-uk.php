<!-- Header Start -->
<div
  class="jumbotron jumbotron-fluid position-relative overlay-bottom"
  style="margin-bottom: 90px">
  <div class="container text-center my-5 py-5">
    <h1 class="text-white mt-4 mb-4">Top Ranked Universities In UK</h1>
  </div>
</div>
<!-- Header End -->

<!--Main Content Start -->
<div class="container">
    <p>
        Choosing the right university is a life-defining decision for an international student. While a high global or national ranking ensures academic excellence and strong career prospects, the location of the university is often just as critical to long-term success and well-being. Balancing both factors is the key to finding the perfect fit.
        <br> <br>
        Here is a guide to navigating university rankings and location factors, tailored for LPK Education clients.
    </p>

    <!-- Main Listing Grid -->
    <div class="row g-3 mt-5">

        <!-- Item 1: South Essex College -->
        <div class="col-12">
          <?php
          // 1. Index the countries array by their 'id' for instant lookups
          $countriesById = [];
          if (isset($universities['country'])) {
            $countriesById = array_column($universities['country'], null, 'id');
          }

          // 2. Loop through the universities and render the layout
          // 2. Reverse the array while preserving the keys (true) so the last item is processed first
          $reversedUniversities = array_reverse($universities, true);

          foreach ($reversedUniversities as $key => $university) {
            // Skip the 'country' key since it holds the reference list, not a university
            if ($key === 'country') {
              continue;
            }

            // Find the country matching this university's country_id
            $countryId = $university['country_id'] ?? null;
            $countryName = isset($countriesById[$countryId]) ? $countriesById[$countryId]['name'] : 'Unknown Country';
            ?>

            <div class="card institution-card shadow-sm p-3 bg-white mb-3">
              <div class="row align-items-center text-center text-md-start g-3">
                <div class="col-md-3">
                  <div class="logo-wrapper">
                    <img src="<?php echo htmlspecialchars($university['img']); ?>" class="logo-img" alt="<?php echo htmlspecialchars($university['name']); ?> Logo">
                  </div>
                </div>
                <div class="col-md-3">
                  <h2 class="h5 mb-0 fw-bold"><?php echo htmlspecialchars($university['name']); ?></h2>
                </div>
                <div class="col-md-3">
                  <span class="text-muted"><i class="bi bi-geo-alt"></i> <?php echo htmlspecialchars($countryName); ?></span>
                </div>
                <div class="col-md-3 text-center text-md-end">
                  <a href="universities/<?php echo urlencode($university['slug']); ?>" class="btn btn-primary px-4">Read More</a>
                </div>
              </div>
            </div>

            <?php
          }
          ?>
        </div>
    </div>
</div>
    <!--Main Content end -->