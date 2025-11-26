<?php
    include("koneksi.php");
    $query = "select * from tamu";
    $sql = $koneksi->query($query);
    $no = 1;
?>   
<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <table class="table caption-top">
        <caption>List Buku Tamu</caption>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Komentar</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($sql as $row): ?>
                <tr>
                    <td><?php echo $no; ?> </td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['komentar']; ?></td>
                    <td>
                        <a href="hapus.php?id=<?php echo $row ['id'] ?>"><button type="button" name="hapus" class="btn btn-primary" onclick="return confirm('Yakin ingin menghapus data?');">Hapus</button></a> 
                        <a href="edit.php?id=<?php echo $row ['id'] ?>"><button type="button" name="edit" class="btn btn-primary">Edit</button></a></td>
         
                </tr>
            <?php 
            $no++;
            endforeach;
             ?>       
        </tbody>   
    </table>
        
    
    <a href="create.php"><button type="button" name="create" class="btn btn-primary">Tambahkan Data</button></a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>