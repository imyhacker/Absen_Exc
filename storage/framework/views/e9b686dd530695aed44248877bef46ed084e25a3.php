<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
<?php if(session('Sukses')): ?>
<script>
Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Data Berhasil Di Kirim',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php endif; ?>

<?php if(session('Hapus')): ?>
<script>
Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Data Berhasil Di Hapus',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php endif; ?>

<?php if(session('Edit')): ?>
<script>
Swal.fire({
  position: 'center',
  icon: 'info',
  title: 'Data Berhail Di Edit',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php endif; ?>

<?php if(session('dokumen')): ?>
<script>
Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Dokumenmu Berhasil Di Upload',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php endif; ?>

<?php if(session('images')): ?>
<script>
Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Gambar Berhasil Di Upload',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php endif; ?>


<?php if(session('Proses')): ?>
<script>
    Swal.fire({
  title: 'Info',
  text: 'Fitur Masih Tahap Pengembangan',
  icon: 'info',
  confirmButtonText: 'Okay'
})
</script>
<?php endif; ?>
        <div class="col"> 
          <button type="button" class="btn btn-secondary" id="mabut"><i class="fa fa-refresh"></i>
</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"> Add Absen</i>
</button>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#images"><i class="fa fa-cloud-upload "> Upload Image</i>


            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#doc"><i class="fa fa-cloud-upload "> Upload Document</i>
</button>
<button type="button" class="btn btn-success"><i class="fa fa-cloud-download "> <a href="/admin/dokumen" style="text-decoration-line: none; color: white">Download Document</a></i>
</button>

<button type="button" class="btn btn-info"><i class="fa fa-eye "> <a href="/admin/lookimages" style="text-decoration-line: none; color: white">Look Image</a></i>
</button>
</div>
</div>
<div class="table-responsive">
        <table id="tabel-data" class="table table-striped table-transparent table-hover" width="100%" cellspacing="10" cellpadding="10">
    <thead>
        <tr>
            <th><font color="white">No</font></th>
            <th><font color="white">Nama</font></th>
            <th><font color="white">Kelas</font></th>
            <th><font color="white">Tanggal</font></th>
            <th><font color="white">Kehadiran</font></th>
            <th><font color="white">Option</font></th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            
            <td><font color="white"><?php echo e($no++); ?></font></td>
            <td><font color="white"><?php echo e($absen->nama); ?></font></td>
            <td><font color="white"><?php echo e($absen->kelas); ?></font></td>
            <td><font color="white"><?php echo e($absen->tanggal); ?> <?php echo e($absen->bulan); ?> <?php echo e($absen->tahun); ?></font></td>
            <td><font color="white"><?php echo e($absen->kehadiran); ?></font></td>
            <td>

        <a href="admin/<?php echo e($absen->id); ?>/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
        <a href="admin/<?php echo e($absen->id); ?>/hapus" class="btn btn-danger"><i class="fa fa-trash"></i></a> 
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</div>
    </div>
</div>
</div>


<div class="modal fade" id="images" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><font color="black">Add Images</font></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <font color="red" size="3">Nb. Kudu File [JPG/PNG]</font>
          <form method="post" action="admin/images" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="exampleFormControlFile1"><font color="black">Document</font></label>
                <input type="file" name="FileUpload" accept="image/*" class="form-control-file" id="exampleFormControlFile1">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      </div>
    </div>
  </div>
<!-- modal -->

<div class="modal fade" id="doc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><font color="black">Add Document</font></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <font color="red" size="3">Nb. Kudu File [Pdf,Doc,Docx,Ppt,Txt,Xls]</font>
          <form method="post" action="admin/doc" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="exampleFormControlFile1"><font color="black">Document</font></label>
                <input type="file" name="FileUpload" accept=
"application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
text/plain, application/pdf, image/*" class="form-control-file" id="exampleFormControlFile1">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><font color="black">Tambah Absen</font></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <form method="post" action="/admin/tambah">
            <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="exampleFormControlInput1"><font color="black">Nama</font></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="nama" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Kelas</font></label>
    <select class="form-control" id="exampleFormControlSelect1" name="kelas">
      <option value="XA">XA</option>
      <option value="XB">XB</option>
      <option value="XC">XC</option>
      <option value="XD">XD</option>
      <option>--</option>
      <option value="XIA">XIA</option>
      <option value="XIB">XIB</option>
      <option value="XIC">XIC</option>
      <option value="XID">XID</option>
      <option>--</option>
      <option value="XIIA">XIIA</option>
      <option value="XIIB">XIIB</option>
      <option value="XIIC">XIIC</option>
      <option value="XIID">XIID</option>
    </select>
  </div>

 <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Tanggal</font></label>
    <select class="form-control" id="exampleFormControlSelect1" name="tanggal">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
  </div>



 <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Bulan</font></label>
    <select class="form-control" id="exampleFormControlSelect1" name="bulan">
      <option value="Januari">Januari</option>
      <option value="Februari">Februari</option>
      <option value="Maret">Maret</option>
      <option value="April">April</option>
      <option value="Mei">Mei</option>
      <option value="Juni">Juni</option>
      <option value="Juli">Juli</option>
      <option value="Agustus">Agustus</option>
      <option value="September">September</option>
      <option value="Oktober">Oktober</option>
      <option value="November">November</option>
      <option value="Desember">Desember</option>
    </select>
  </div>



 <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Tahun</font></label>
    <select class="form-control" id="exampleFormControlSelect1" name="tahun">
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
    </select>
  </div>

 <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Alasan</font></label>
    <select class="form-control" id="exampleFormControlSelect1" name="kehadiran">
      <option value="Alfa">Alfa</option>
      <option value="Izin">Izin</option>
      <option value="Sakit">Sakit</option>
      <option value="Masuk">Masuk</option>
    </select>
  </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mylat\resources\views/admin/index.blade.php ENDPATH**/ ?>