<form method="POST" action="<?php echo site_url('Mahasiswa/ucapan'); ?>">
    <input type="text" name="nama"/>
    <input type="submit" name="kirim" value="KIRIM"/>
</form>

Selamat Malam ,<b> <?php echo $n;?>  </b>

<?php
    echo date("d-m-Y")."<br>";
    echo base_url()."<br>";
    echo site_url()."<br>";
    echo site_url('Mahasiswa/ucapan');


?>