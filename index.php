<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Registrasi</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="wrapper">
    <div class="title">
        Form Registrasi
    </div>
    <div class="form">
      <form action="" method="POST">
        <div class="inputfield">
            <input type="text" name="id" autofocus placeholder="masukan id anda..." class="input">
        </div>
        <div class="inputfield">
           <button type="submit" name="search" class="btn">cari</button>
        </div><br>
      </form> 
      <?php
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,'db_new');

             if(isset($_POST['search'])){
                 $id = $_POST['id'];
                 $query = "SELECT * FROM tb_tes001 where id = '$id' ";
                 $query_run = mysqli_query($connection,$query); 

                 if(mysqli_num_rows($query_run)){

                 while($row = mysqli_fetch_array($query_run))
                 {
            ?>
    <form action="" method="POST">
      <div class="form">
        <div class="inputfield">
          <label>ID</label> 
          <input type="text" name="id" class="input" readonly value="<?php echo $row['id']?>" style="background-color: #dfdfdf;"/>
        </div>
      <div class="inputfield">
        <label> Name</label>
        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="input">
       </div>   
       <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" name ="no_hp" value="<?php echo $row['no_hp']?>" class="input">
       </div>    
        <div class="inputfield">
          <label>Jenis rumah</label>
          <div class="custom_select">
            <select name='j_rumah' value="<?php echo $row['j_rumah']?>">
              <option value="1001">1001</option>
              <option value="1002">1002</option>
              <option value="1003">1003</option>
            </select>
          </div>
       </div> 
      <div class="inputfield">
        <label>Patokan rumah</label>
        <input type="text" name ="p_rumah" value="<?php echo $row['p_rumah']?>" class="input">
      </div> 
      <div class="inputfield">
          <label>Alamat lengkap</label>
          <textarea type="text" name="alamat" class="textarea" placeholder="Contoh:
Kota/kebupaten :
Kecamatan :
Desa :
RT/RW :
Nama jalan :
No rumah : " ><?php echo $row['alamat']?></textarea>
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Menyetujui syarat dan ketentuan</p>
       </div> 
      <div class="inputfield">
        <input type="submit" name=update value="Register" class="btn">
      </div>
    </div>
</div>	            
   <?php
          }
        }else
        echo "<script>alert('ID tidak ditemukan...Silahkan masukan ID yang benar!');</script>";                      
      }
    ?>       
</body>
</html>
<?php
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,'db_new');

 if(isset($_POST['update'])){
     $id = $_POST['id'];
     $nama = $_POST['nama'];
     $no_hp = $_POST['no_hp'];
     $p_rumah = $_POST['p_rumah'];
     $j_rumah = $_POST['j_rumah'];
     $alamat = $_POST['alamat'];
    
     $query = "UPDATE tb_tes001 SET nama='$nama', no_hp='$no_hp',p_rumah='$p_rumah',j_rumah='$j_rumah', alamat='$alamat' WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);

     if($query_run)
     {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
     }
     else
     {
        echo"<script>alert('data gagal ditambahkan!');history.go(-1);</script>";
     }
 }
?>
