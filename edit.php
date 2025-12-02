<?php
include("koneksi.php");
$edit = mysqli_query($koneksi, "SELECT * FROM tamu WHERE id = $_GET[id]");
$data = mysqli_fetch_array($edit);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Data Buku Tamu</h2>
    <form method="post" action="">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Komentar</label>
            <textarea name="komentar" class="form-control" rows="5"><?php echo $data['komentar']; ?></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" name="Submit" value="Update" class="btn btn-primary" />
            <input type="reset" value="Reset" name="reset" class="btn btn-secondary">
            <a href="list.php" class="btn btn-warning">Kembali</a>
        </div>
    </form>
</div>

<?php
if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];
    
    $update = mysqli_query($koneksi, "UPDATE tamu SET nama = '$nama', email = '$email', komentar = '$komentar' WHERE id = $_GET[id]");
    
    if ($update) {
        header("Location: list.php");
        exit;
    } else {
        echo "<div class='container alert alert-danger'>Maaf, data gagal diubah: " . mysqli_error($koneksi) . "</div>";
    }
}
?>
</body>
</html>