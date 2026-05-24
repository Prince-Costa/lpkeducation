<!-- Navbar Start -->
<div class="p-0 bg-white navbar-light sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg py-3 py-lg-0">
            <a href="<?= BASE_URL ?>" class="navbar-brand">
                <img src="<?= BASE_URL ?>img/logo.png" alt="logo" class="img-fluid" style="max-width: 200px;">
            </a>
            <button
                type="button"
                class="navbar-toggler"
                data-toggle="collapse"
                data-target="#navbarCollapse"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse justify-content-between px-lg-3"
                id="navbarCollapse"
            >
                <div class="navbar-nav mx-auto py-0">
                    <a href="<?= BASE_URL ?>" class="nav-item nav-link active">Home</a>

                    <div class="nav-item dropdown">
                        <a
                            href="#"
                            class="nav-link dropdown-toggle"
                            data-toggle="dropdown"
                        >Study In The UK</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= BASE_URL ?>universities" class="dropdown-item">Find A University</a>
                            <a href="<?= BASE_URL ?>scholarship" class="dropdown-item">Scholarship</a>
                            <a href="<?= BASE_URL ?>help-supports" class="dropdown-item">Help & Supports</a>
                            <a href="<?= BASE_URL ?>top-ranked-in-uk" class="dropdown-item">Top Ranked Universities</a>
                            <a href="<?= BASE_URL ?>application-process" class="dropdown-item">Application Process</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a
                            href="#"
                            class="nav-link dropdown-toggle"
                            data-toggle="dropdown"
                        >Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= BASE_URL ?>student-admission-services" class="dropdown-item">Student Admission Services</a>
                            <a href="<?= BASE_URL ?>partner-university-services" class="dropdown-item">Partner University Services</a>
                            <a href="<?= BASE_URL ?>advice-for-parents" class="dropdown-item">Advice For Parents</a>
                            <a href="<?= BASE_URL ?>application-process" class="dropdown-item">Application Process</a>
                        </div>
                    </div>

                    <a href="<?= BASE_URL ?>about-us" class="nav-item nav-link">About Us</a>
                    <a href="<?= BASE_URL ?>branches" class="nav-item nav-link">Branches</a>
                </div>
                <!-- Updated to direct to contactUs matching your exact file case schema -->
                <a href="<?= BASE_URL ?>contactUs" class="btn btn-primary py-2 px-4">APPLY NOW</a>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->