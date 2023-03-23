<?php
require_once 'header.php';
require_once 'sidebar.php';


// Tangkap data lalu simpan ke variabel
$nama = $_POST["nama_lengkap"];
$matkul = $_POST["matkul"];
$nilai_uts = $_POST["nilai_uts"];
$nilai_uas = $_POST["nilai_uas"];
$nilai_tugas = $_POST["nilai_tugas"];

// Buat total nilai
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

// Buat variabel kosong
$grade;
$status;
$predikat;

// Buat logic status
if ($total_nilai > 60) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

// Buat logic grade
if ($total_nilai > 85) {
    $grade = "A";
} elseif ($total_nilai > 70) {
    $grade = "B";
} elseif ($total_nilai > 50) {
    $grade = "C";
} elseif ($total_nilai > 30) {
    $grade = "D";
} else {
    $grade = "E";
}

// Buat logic predikat
switch ($grade) {
    case 'A':
        $predikat = "Sangat Memuaskan";
        break;

    case 'B':
        $predikat = "Memuaskan";
        break;

    case 'C':
        $predikat = "Cukup";
        break;

    case 'D':
        $predikat = "Kurang";
        break;

    case 'E':
        $predikat = "Sangat Kurang";
        break;

    default:
        $predikat = "Tidak Ada";
        break;
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tugas Praktikum</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Praktikum 01</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                        <div class="container">
        <h1>Daftar Nilai Siswa</h1>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Nilai UTS</th>
                    <th scope="col">Nilai UAS</th>
                    <th scope="col">Nilai Tugas</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Predikat</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <?php echo $nama; ?> </td>
                    <td> <?php echo $matkul; ?> </td>
                    <td> <?php echo $nilai_uts; ?> </td>
                    <td> <?php echo $nilai_uas; ?> </td>
                    <td> <?php echo $nilai_tugas; ?> </td>
                    <td> <?php echo $grade; ?> </td>
                    <td> <?php echo $predikat; ?> </td>
                    <td> <?php echo $status; ?> </td>
                </tr>
            </tbody>
        </table>
    </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>