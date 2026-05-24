<!-- Header Start -->
<div
    class="jumbotron find-a-uni-jumbotron jumbotron-fluid position-relative overlay-bottom"
    style="margin-bottom: 90px"
>
  <div class="container text-center my-5 py-5">
    <h1 class="text-white mt-4 mb-4">Find A University</h1>
  </div>
</div>
<!-- Header End -->


<?php if (!empty($data) && is_array($data)): ?>
  <div class="container">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <?php foreach ($data as $index => $item):
        // Clean up country name to form a valid HTML ID (e.g., "United Kingdom" -> "UnitedKingdom")
        $tabId = preg_replace('/[^A-Za-z0-9\-]/', '', $item['country']);
        ?>
        <li class="nav-item" role="presentation">
          <button
              class="nav-link <?php echo $index === 0 ? 'active' : ''; ?>"
              id="<?php echo $tabId; ?>-tab"
              data-bs-toggle="tab"
              data-bs-target="#<?php echo $tabId; ?>"
              type="button"
              role="tab"
              aria-controls="<?php echo $tabId; ?>"
              aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">
            <?php echo htmlspecialchars($item['country']); ?>
          </button>
        </li>
      <?php endforeach; ?>
    </ul>

    <div class="tab-content shadow" id="myTabContent">
      <?php foreach ($data as $index => $item):
        $tabId = preg_replace('/[^A-Za-z0-9\-]/', '', $item['country']);
        ?>
        <div
            class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>"
            id="<?php echo $tabId; ?>"
            role="tabpanel"
            aria-labelledby="<?php echo $tabId; ?>-tab">

          <div class="card p-3">
            <div class="row">

              <?php if (!empty($item['universities'])): ?>
                <?php foreach ($item['universities'] as $university): ?>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-12 pb-3">
                    <div class="card p-3 rounded h-100 text-center d-flex flex-column justify-content-between shadow">

                      <a href="/lpkeducation/universities/<?php echo htmlspecialchars($university['slug']); ?>">
                        <img
                            src="<?php echo htmlspecialchars($university['img']); ?>"
                            class="img-fluid mb-2"
                            alt="<?php echo htmlspecialchars($university['name']); ?>"
                            style="max-height: 100px; object-fit: contain; width: 100%;">
                      </a>

                      <div class="card-body p-0 mt-2">
                        <p class="mb-0 fw-bold">
                          <a href="/lpkeducation/universities/<?php echo htmlspecialchars($university['slug']); ?>" class="text-decoration-none text-dark">
                            <?php echo htmlspecialchars($university['name']); ?>
                          </a>
                        </p>
                        <?php if (!empty($university['state'])): ?>
                          <small class="text-muted d-block mt-1">
                            <i class="bi bi-geo-alt"></i> <?php echo htmlspecialchars($university['state']); ?>
                          </small>
                        <?php endif; ?>
                      </div>

                    </div>
                  </div>
                <?php endforeach; ?>
              <?php else: ?>
                <div class="col-12 text-center py-3">
                  <p class="text-muted mb-0">No universities listed for this country yet.</p>
                </div>
              <?php endif; ?>

            </div>
          </div>

        </div>
      <?php endforeach; ?>
    </div>

  </div>
<?php endif; ?>
<!--Main content End -->