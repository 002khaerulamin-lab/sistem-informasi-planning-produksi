<?php
// Kita panggil koneksi secara langsung di sini untuk memastikan variabel $conn terbaca
require 'koneksi.php';
require 'functions.php';

// Proteksi: Hanya Super Admin (Level 1) yang bisa buka halaman ini
if ($_SESSION['level'] != '1') {
    header('location: index.php');
    exit;
}

body(function () {
    include 'koneksi.php'; 
    
    // Ambil semua data akun
    $get_akun = mysqli_query($conn, "SELECT * FROM akun ORDER BY id DESC");

    // Fungsi bantu untuk menampilkan nama jabatan yang rapi di tabel
    function labelJabatan($level) {
        switch ($level) {
            case '1': return 'Super Admin';
            case 'sales_order': return 'Sales Order';
            case 'finishing_incoming': return 'Finishing Incoming';
            case 'finishing_planning': return 'Finishing Planning';
            case 'admin_production': return 'Admin Production';
            case 'user': return 'User (View Only)';
            default: return $level;
        }
    }
?>
<div class="container-fluid">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Kelola Akun Pengguna</h5>
            <form action="add_account_process.php" method="POST">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Contoh: admin_sales" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Jabatan / Level</label>
                        <select name="level" class="form-select">
                            <option value="user">User Biasa (Lihat Saja)</option>
                            <option value="sales_order">Sales Order</option>
                            <option value="finishing_incoming">Finishing Incoming</option>
                            <option value="finishing_planning">Finishing Planning</option>
                            <option value="admin_production">Admin Production</option> 
                            <option value="1">Super Admin (Level 1)</option>
                        </select>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">
                    <iconify-icon icon="solar:user-plus-bold" class="align-middle me-1"></iconify-icon> Simpan Akun Baru
                </button>
            </form>
        </div>
    </div>

    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Daftar Akun & Aksi</h5>
            <div class="table-responsive">
                <table class="table table-bordered text-nowrap align-middle">
                    <thead class="table-light text-center">
                        <tr>
                            <th width="50">No</th>
                            <th>Username</th>
                            <th>Jabatan / Level</th>
                            <th width="100">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        if($get_akun) {
                            while($row = mysqli_fetch_assoc($get_akun)) : 
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no++; ?></td>
                            <td class="fw-bold"><?php echo $row['username']; ?></td>
                            <td class="text-center">
                                <?php 
                                    $lvl = $row['level'];
                                    $badge_color = ($lvl == '1') ? 'bg-danger' : 'bg-info';
                                    if($lvl == 'user') $badge_color = 'bg-secondary';
                                ?>
                                <span class="badge <?php echo $badge_color; ?>">
                                    <?php echo labelJabatan($lvl); ?>
                                </span>
                            </td>
                            <td class="text-center">
                                <?php if($row['username'] != $_SESSION['username']) : ?>
                                    <a href="add_account_process.php?hapus=<?php echo $row['id']; ?>" 
                                       class="btn btn-outline-danger btn-sm" 
                                       onclick="return confirm('Yakin ingin menghapus akun ini?')">
                                       <iconify-icon icon="solar:trash-bin-trash-bold"></iconify-icon> Hapus
                                    </a>
                                <?php else : ?>
                                    <span class="badge bg-light text-dark border">
                                        <iconify-icon icon="solar:user-check-bold" class="text-success me-1"></iconify-icon> Aktif
                                    </span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php 
                            endwhile; 
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
});

render('Kelola Akun');