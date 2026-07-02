<?php
require 'functions.php';

if(isset($_SESSION['username']) && isset($_SESSION['level'])){
  // do nothing
}else{
  header('location: login.php');
}

style(function () {
});

body(function () {
?>
  <div class="row">
    <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-4">
          <div class="card bg-primary-subtle shadow-none w-100">
            <div class="card-body">
              <div class="d-flex mb-10 pb-1 justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-6">
                  <div
                    class="rounded-circle-shape bg-primary px-3 py-2 rounded-pill d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="solar:diploma-verified-outline"
                      class="fs-7 text-white"></iconify-icon>
                  </div>
                  <h6 class="mb-0 fs-4 fw-medium text-muted">
                    Sales Order
                  </h6>
                </div>
              </div>
              <div class="row align-items-end justify-content-between">
                <div class="col-12">
                  <h2 class="mb-6 fs-8">Planning</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card bg-primary-subtle shadow-none w-100">
            <div class="card-body">
              <div class="d-flex mb-10 pb-1 justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-6">
                  <div
                    class="rounded-circle-shape bg-primary px-3 py-2 rounded-pill d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="solar:inbox-in-broken"
                      class="fs-7 text-white"></iconify-icon>
                  </div>
                  <h6 class="mb-0 fs-4 fw-medium text-muted">
                    Finishing - Webbing
                  </h6>
                </div>
              </div>
              <div class="row align-items-end justify-content-between">
                <div class="col-12">
                  <h2 class="mb-6 fs-8">Incoming</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card bg-primary-subtle shadow-none w-100">
            <div class="card-body">
              <div class="d-flex mb-10 pb-1 justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-6">
                  <div
                    class="rounded-circle-shape bg-primary px-3 py-2 rounded-pill d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="solar:document-add-broken"
                      class="fs-7 text-white"></iconify-icon>
                  </div>
                  <h6 class="mb-0 fs-4 fw-medium text-muted">
                    Finishing - Webbing
                  </h6>
                </div>
              </div>
              <div class="row align-items-end justify-content-between">
                <div class="col-12">
                  <h2 class="mb-6 fs-8">Planning</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card bg-primary-subtle shadow-none w-100">
            <div class="card-body">
              <div class="d-flex mb-10 pb-1 justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-6">
                  <div
                    class="rounded-circle-shape bg-primary px-3 py-2 rounded-pill d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="solar:box-bold"
                      class="fs-7 text-white"></iconify-icon>
                  </div>
                  <h6 class="mb-0 fs-4 fw-medium text-muted">
                    Finishing - Webbing
                  </h6>
                </div>
              </div>
              <div class="row align-items-end justify-content-between">
                <div class="col-12">
                  <h2 class="mb-6 fs-8">Bukaan</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card bg-primary-subtle shadow-none w-100">
            <div class="card-body">
              <div class="d-flex mb-10 pb-1 justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-6">
                  <div
                    class="rounded-circle-shape bg-primary px-3 py-2 rounded-pill d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="solar:colour-tuneing-broken"
                      class="fs-7 text-white"></iconify-icon>
                  </div>
                  <h6 class="mb-0 fs-4 fw-medium text-muted">
                    Finishing - Webbing
                  </h6>
                </div>
              </div>
              <div class="row align-items-end justify-content-between">
                <div class="col-12">
                  <h2 class="mb-6 fs-8">Hot Cut</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card bg-primary-subtle shadow-none w-100">
            <div class="card-body">
              <div class="d-flex mb-10 pb-1 justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-6">
                  <div
                    class="rounded-circle-shape bg-primary px-3 py-2 rounded-pill d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="solar:rolling-pin-broken"
                      class="fs-7 text-white"></iconify-icon>
                  </div>
                  <h6 class="mb-0 fs-4 fw-medium text-muted">
                    Finishing - Webbing
                  </h6>
                </div>
              </div>
              <div class="row align-items-end justify-content-between">
                <div class="col-12">
                  <h2 class="mb-6 fs-8">Roll Table</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card bg-primary-subtle shadow-none w-100">
            <div class="card-body">
              <div class="d-flex mb-10 pb-1 justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-6">
                  <div
                    class="rounded-circle-shape bg-primary px-3 py-2 rounded-pill d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="solar:rolling-pin-line-duotone"
                      class="fs-7 text-white"></iconify-icon>
                  </div>
                  <h6 class="mb-0 fs-4 fw-medium text-muted">
                    Finishing - Webbing
                  </h6>
                </div>
              </div>
              <div class="row align-items-end justify-content-between">
                <div class="col-12">
                  <h2 class="mb-6 fs-8">Roll Cones</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card bg-primary-subtle shadow-none w-100">
            <div class="card-body">
              <div class="d-flex mb-10 pb-1 justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-6">
                  <div
                    class="rounded-circle-shape bg-primary px-3 py-2 rounded-pill d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="solar:fire-square-broken"
                      class="fs-7 text-white"></iconify-icon>
                  </div>
                  <h6 class="mb-0 fs-4 fw-medium text-muted">
                    Finishing - Webbing
                  </h6>
                </div>
              </div>
              <div class="row align-items-end justify-content-between">
                <div class="col-12">
                  <h2 class="mb-6 fs-8">Bakaran</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-4">
          <div class="card bg-primary-subtle shadow-none w-100">
            <div class="card-body">
              <div class="d-flex mb-10 pb-1 justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-6">
                  <div
                    class="rounded-circle-shape bg-primary px-3 py-2 rounded-pill d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="solar:round-sort-horizontal-broken"
                      class="fs-7 text-white"></iconify-icon>
                  </div>
                  <h6 class="mb-0 fs-4 fw-medium text-muted">
                    Finishing - Webbing
                  </h6>
                </div>
              </div>
              <div class="row align-items-end justify-content-between">
                <div class="col-12">
                  <h2 class="mb-6 fs-8">Sortir</h2>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
<?php
});

render('UMT - Beranda');