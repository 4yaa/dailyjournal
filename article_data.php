<?php
include "koneksi.php";

$json = file_get_contents('php://input');
$data = json_decode($json, true);
$hlm = isset($data['hlm']) ? $data['hlm'] : 1;

$limit = 3; 
$offset = ($hlm - 1) * $limit;

$sql_total = "SELECT COUNT(*) as total FROM article";
$query_total = $conn->query($sql_total);
$total_data = $query_total->fetch_assoc()['total'];
$total_halaman = ceil($total_data / $limit);

$sql = "SELECT * FROM article ORDER BY tanggal DESC LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);
?>

<table class="w-full text-left border-collapse">
    <thead>
        <tr class="bg-blue-900 text-white uppercase text-xs">
            <th class="p-4 border">No</th>
            <th class="p-4 border w-1/4">Judul</th>
            <th class="p-4 border w-1/3">Isi</th>
            <th class="p-4 border text-center">Gambar</th>
            <th class="p-4 border text-center">Aksi</th>
        </tr>
    </thead>
    <tbody class="text-sm text-gray-700">
        <?php
        $no = $offset + 1;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
            <tr class="border-b hover:bg-blue-50 transition">
                <td class="p-4 font-bold"><?php echo $no++; ?></td>
                <td class="p-4">
                    <div class="font-bold text-blue-900"><?php echo $row["judul"]; ?></div>
                    <div class="text-[10px] text-gray-400 italic">pada : <?php echo $row["tanggal"]; ?></div>
                </td>
                <td class="p-4 text-xs">
                    <?php echo (strlen($row["isi"]) > 100) ? substr($row["isi"], 0, 100) . "..." : $row["isi"]; ?>
                </td>
                <td class="p-4 text-center">
                    <?php if ($row["gambar"] != "" && file_exists("img/" . $row["gambar"])): ?>
                        <img src="img/<?php echo $row["gambar"]; ?>" class="w-24 rounded mx-auto">
                    <?php endif; ?>
                </td>
                <td class="p-4 text-center">
                    <div class="flex gap-2 justify-center">
                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $row["id"] ?>">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $row["id"] ?>">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>

            <div class="modal fade" id="modalEdit<?= $row["id"] ?>" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content text-start">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Artikel</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="hidden" name="id" value="<?= $row["id"] ?>">
                                <input type="hidden" name="gambar_lama" value="<?= $row["gambar"] ?>">
                                <div class="mb-3">
                                    <label class="form-label">Judul</label>
                                    <input type="text" name="judul" class="form-control" value="<?= $row["judul"] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Isi</label>
                                    <textarea name="isi" class="form-control" rows="5"><?= $row["isi"] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Ganti Gambar (Opsional)</label>
                                    <input type="file" name="gambar" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="update" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalHapus<?= $row["id"] ?>" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Konfirmasi Hapus</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body text-start">
                            Yakin ingin menghapus artikel "<strong><?= $row["judul"] ?></strong>"?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <a href="admin.php?page=article&aksi=hapus&id=<?= $row["id"] ?>" class="btn btn-danger">Ya, Hapus</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php 
            } 
        } 
        ?>
    </tbody>
</table>

<div class="p-4 flex justify-between items-center bg-gray-50 border-t">
    <div class="text-xs text-gray-500 font-medium">
        Total: <?php echo $total_data; ?> Artikel
    </div>
    <nav>
        <ul class="pagination pagination-sm mb-0">
            <?php if ($hlm > 1): ?>
                <li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="load_data(<?= $hlm - 1 ?>)">&laquo;</a></li>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_halaman; $i++): ?>
                <li class="page-item <?= ($i == $hlm) ? 'active' : '' ?>">
                    <a class="page-link" href="javascript:void(0)" onclick="load_data(<?= $i ?>)"><?= $i ?></a>
                </li>
            <?php endfor; ?>

            <?php if ($hlm < $total_halaman): ?>
                <li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="load_data(<?= $hlm + 1 ?>)">&raquo;</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</div>