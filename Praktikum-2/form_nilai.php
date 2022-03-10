<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form ethod="GET" action="form_nilai.php"
method="GET" action="form_nilai.php">
  <div class="form-group row">
    <label class="col-4 col-form-label" for="nama">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Mata Kuliah</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="matkul" id="matkul_0" type="radio" class="custom-control-input" value="pemweb"> 
        <label for="matkul_0" class="custom-control-label">Pemweb</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="matkul" id="matkul_1" type="radio" class="custom-control-input" value="basdat"> 
        <label for="matkul_1" class="custom-control-label">Basis Data</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="matkul" id="matkul_2" type="radio" class="custom-control-input" value="inggris"> 
        <label for="matkul_2" class="custom-control-label">Inggris</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="tugas" name="tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php
error_reporting(0);
$proses = $_GET['proses'];
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['uts'];
$nilai_uas = $_GET['uas'];
$nilai_tugas = $_GET['tugas'];

    echo 'proses : '.$proses;
    echo '<br/>nama : '.$nama;
    echo '<br/>matkul : '.$matkul;
    echo '<br/>nilai_uts : '.$nilai_uts;
    echo '<br/>nilai_uas : '.$nilai_uas;
    echo '<br/>nilai_tugas : '.$nilai_tugas;
?>