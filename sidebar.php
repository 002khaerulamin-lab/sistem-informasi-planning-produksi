<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start(); 
}
?>
<aside class="left-sidebar">
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="/project_amin/index.php" class="text-nowrap logo-img">
        <img style="width: 230px;" src="/project_amin/assets/images/logo_pelangi.png" alt="" />
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        
        <li class="nav-small-cap">
          <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
          <span class="hide-menu">Home</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/project_amin/index.php" aria-expanded="false">
            <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>

        <?php if (isset($_SESSION['level']) && $_SESSION['level'] == '1') : ?>
        <li class="nav-small-cap">
          <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
          <span class="hide-menu">Settings</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/project_amin/add_account.php" aria-expanded="false" style="background-color: #eef2ff; border-radius: 8px;">
            <iconify-icon icon="solar:user-plus-bold-duotone"></iconify-icon>
            <span class="hide-menu">Add Account</span>
          </a>
        </li>
        <?php endif; ?>
        
        <li class="nav-small-cap">
          <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
          <span class="hide-menu">Sales Order</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/project_amin/salesorder/planning.php" aria-expanded="false">
            <iconify-icon icon="solar:diploma-verified-outline"></iconify-icon>
            <span class="hide-menu">Planning</span>
          </a>
        </li>
        
        <li class="nav-small-cap">
          <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
          <span class="hide-menu">Finishing - Webbing</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/project_amin/finishing/webbing/incoming.php" aria-expanded="false">
            <iconify-icon icon="solar:inbox-in-broken"></iconify-icon>
            <span class="hide-menu">Incoming</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/project_amin/finishing/webbing/planning.php" aria-expanded="false">
            <iconify-icon icon="solar:document-add-broken"></iconify-icon>
            <span class="hide-menu">Planning</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/project_amin/finishing/webbing/bukaan.php" aria-expanded="false">
            <iconify-icon icon="solar:box-bold"></iconify-icon>
            <span class="hide-menu">Bukaan</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/project_amin/finishing/webbing/hotcut.php" aria-expanded="false">
            <iconify-icon icon="solar:colour-tuneing-broken"></iconify-icon>
            <span class="hide-menu">Hot Cut</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/project_amin/finishing/webbing/rolltable.php" aria-expanded="false">
            <iconify-icon icon="solar:rolling-pin-broken"></iconify-icon>
            <span class="hide-menu">Roll Table</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/project_amin/finishing/webbing/rollcones.php" aria-expanded="false">
            <iconify-icon icon="solar:rolling-pin-line-duotone"></iconify-icon>
            <span class="hide-menu">Roll Cones</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/project_amin/finishing/webbing/bakaran.php" aria-expanded="false">
            <iconify-icon icon="solar:fire-square-broken"></iconify-icon>
            <span class="hide-menu">Bakaran</span>
          </a>
        </li>

        <?php if (isset($_SESSION['level']) && ($_SESSION['level'] == '1' || $_SESSION['level'] == 'admin_production')) : ?>
        <li class="nav-small-cap">
          <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
          <span class="hide-menu">Analysis Reports</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/project_amin/finishing/webbing/rekap_analyst.php" aria-expanded="false" style="background-color: #fefce8; border: 1px solid #fef08a; border-radius: 8px;">
            <iconify-icon icon="solar:chart-2-bold-duotone" class="text-warning"></iconify-icon>
            <span class="hide-menu fw-bold">Rekap Analyst</span>
          </a>
        </li>
        <?php endif; ?>

      </ul>
    </nav>
  </div>
</aside>