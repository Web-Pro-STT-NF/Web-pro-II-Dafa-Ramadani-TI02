<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="belanja.php">
 
<div class="container mt-5">
  <div class="row">
<div class="col-8">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="name" name="name" placeholder="Customer Name" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="produk_1" class="custom-control-label">Mobil</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci"> 
        <label for="produk_2" class="custom-control-label">Motor</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah Item" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input type="submit" value="simpan" name="proses"/>
    </div>
  </div>
  </div>

    <div class="col-3" style="margin-left: 3em;">
  <table class="table  table-bordered border-primary table-striped">
    <thead>
      <tr>
        <th scope="col">Harga Barang</th>
        </tr>
        <tbody>
          <tr>
            <th scope="row">TV 4.200.000</th>
          </tr>
            <tr>
              <th scope="row">Mobil 3.100.000</th>
            </tr> 
            <tr>
              <th scope="row">Motor 3.100.000</th>
            </tr> 
            </div>
          </div>
        </form>

  <?php
  error_reporting(0);
  if(isset($_POST['proses'])){
  $name= $_POST['name'];
  $produk = $_POST['produk'];
  $jumlah = $_POST['jumlah'];
    
  echo 'Nama Produk : '.$name;
  echo '<br/>Produk : '.$produk;
  echo '<br/>Jumlah : '.$jumlah;
  $tv = 4200000 * intval($jumlah);
  $mobil = 3100000 * intval($jumlah);
  $motor = 3800000 * intval($jumlah);
                          
      switch($produk){
      case 'TV':
      echo "<br>" . "Total Belanja : " . number_format($TV,0,',','.');
      break;
      
      case 'KULKAS':
      echo "<br>" . "Total Belanja : " . number_format($motor,0,',','.');
      break;
    
      default:
      echo "<br>" . "Total Belanja : " . number_format($mobil,0,',','.');
      break;
      }                                
      }

  ?>
