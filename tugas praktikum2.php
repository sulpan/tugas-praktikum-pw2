<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="GET"action="from_nilai.php">
  <div class="form-group row">
    <label for="NAMA_LENGKAP" class="col-4 col-form-label">NAMA LENGKAP</label> 
    <div class="col-8">
      <input id="NAMA_LENGKAP" name="NAMA_LENGKAP" placeholder="NAMA LENGKAP" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="MATKUL" class="col-4 col-form-label">MATA KULIAH</label> 
    <div class="col-8">
      <select id="MATKUL" name="MATKUL" class="custom-select">
        <option value="DDP">DASAR-DASAR PEMROGRAMAN</option>
        <option value="BDI">BASIS DATA</option>
        <option value="WEB1">PEMOGRAMAN WEB</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="NILAI_UTS" class="col-4 col-form-label">NILAI UTS</label> 
    <div class="col-8">
      <input id="NILAI_UTS" name="NILAI_UTS" placeholder="NILAI UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="NILAI_UAS" class="col-4 col-form-label">NILAI UAS</label> 
    <div class="col-8">
      <input id="NILAI_UAS" name="NILAI_UAS" placeholder="NILAI UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="NILAI_TUGAS" class="col-4 col-form-label">NILAI TUGAS</label> 
    <div class="col-8">
      <input id="NILAI_TUGAS" name="NILAI_TUGAS" placeholder="NILAI TUGAS" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php
    $NAMA_LENGKAP= isset ($_GET['NAMA_LENGKAP']) ? $_GET['NAMA_LENGKAP']:'';
    $MATKUL = isset ($_GET['MATKUL']) ? $_GET['MATKUL']:'';
    $NILAI_UTS = isset ($_GET['NILAI_UTS']) ? $_GET['NILAI_UTS']:'';
    $NILAI_UAS = isset ($_GET['NILAI_UAS']) ? $_GET['NILAI_UAS']:'';
    $NILAI_TUGAS = isset ($_GET['NILAI_TUGAS']) ? $_GET['NILAI TUGAS']:'';

    IF($NILAI_UTS > 100){
        $NILAI_UTS = 'A';
    }elseif($NILAI_UTS > 80){
        $NILAI_UTS = 'B';
    }elseif($NILAI_UTS > 60){
        $NILAI_UTS = 'C';
    }elseif($NILAI_UTS > 20){
        $NILAI_UTS = 'D';
    }
    
    echo 'NAMA LENGKAP :'.$NAMA_LENGKAP;
    echo '<br/>MATA KULIAH :'.$MATKUL;
    echo '<br/>NILAI UTS :'.$NILAI_UTS;
    echo '<br/>NILAI UAS :'.$NILAI_UAS;
    echo '<br/>NILAI TUGAS :'.$NILAI_TUGAS;