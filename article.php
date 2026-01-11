<?php
include "koneksi.php"; 

// Logika Simpan
if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal = date("Y-m-d H:i:s");
    $username = $_SESSION['username'];
    $gambar = '';
    $nama_gambar = $_FILES['gambar']['name'];

    if ($nama_gambar != '') {
        $cek_upload = move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/' . $nama_gambar);
        if ($cek_upload) { $gambar = $nama_gambar; }
    }

    $sql_simpan = "INSERT INTO article (judul, isi, gambar, tanggal, username) 
                   VALUES ('$judul', '$isi', '$gambar', '$tanggal', '$username')";
    
    if ($conn->query($sql_simpan)) {
        echo "<script>alert('Simpan data sukses!'); window.location='admin.php?page=article';</script>";
    }
}

// Logika Update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $gambar_lama = $_POST['gambar_lama'];
    $nama_gambar = $_FILES['gambar']['name'];

    if ($nama_gambar != '') {
        move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/' . $nama_gambar);
        $gambar = $nama_gambar;
        if ($gambar_lama != "" && file_exists("img/" . $gambar_lama)) { unlink("img/" . $gambar_lama); }
    } else {
        $gambar = $gambar_lama;
    }

    $sql_update = "UPDATE article SET judul='$judul', isi='$isi', gambar='$gambar' WHERE id='$id'";
    
    if ($conn->query($sql_update)) {
        echo "<script>alert('Update data sukses!'); window.location='admin.php?page=article';</script>";
    }
}

// Logika Hapus
if (isset($_GET['aksi']) && $_GET['aksi'] == 'hapus') {
    $id = $_GET['id'];
    $sql_gambar = "SELECT gambar FROM article WHERE id = '$id'";
    $result_gambar = $conn->query($sql_gambar);
    $data_gambar = $result_gambar->fetch_assoc();

    if ($data_gambar['gambar'] != "" && file_exists("img/" . $data_gambar['gambar'])) {
        unlink("img/" . $data_gambar['gambar']); 
    }

    $sql_hapus = "DELETE FROM article WHERE id = '$id'";
    if ($conn->query($sql_hapus)) {
        echo "<script>alert('Data berhasil dihapus'); window.location='admin.php?page=article';</script>";
    }
}
?>

<div class="max-w-7xl mx-auto p-4">
    <h2 class="text-3xl font-light text-gray-700 mb-8 border-b pb-4">Article</h2>
    
    <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
        <i class="bi bi-plus-lg"></i> Tambah Article
    </button>

    <div id="article_data" class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
        </div>
</div>

<div class="modal fade" id="modalTambah" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-start">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Artikel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Isi</label>
                        <textarea name="isi" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Fungsi load_data dibuat di luar $(document).ready agar bisa dipanggil oleh 
// elemen onclick pada pagination yang ada di dalam article_data.php
function load_data(hlm){
    $.ajax({
        url: "article_data.php",
        method: "POST",
        // Mengirim data hlm dalam format JSON sesuai permintaan
        data: JSON.stringify({ hlm: hlm }),
        contentType: "application/json; charset=utf-8",
        success: function(data){
            // Hasil ditampilkan pada div dengan id article_data
            $('#article_data').html(data);
        },
        error: function() {
            $('#article_data').html('<div class="p-4 text-danger">Gagal memuat data.</div>');
        }
    });
}

$(document).ready(function(){
    // Memanggil data halaman pertama secara otomatis saat halaman pertama kali dibuka
    load_data(1);
});
</script>