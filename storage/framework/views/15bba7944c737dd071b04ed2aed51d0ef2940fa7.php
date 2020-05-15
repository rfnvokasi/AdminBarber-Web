

<?php $__env->startSection('content'); ?>


    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="col-lg-6">
              <h4 class="card-title">Menu Booking</h4>
            </div>
              <div class="col-lg-12">
                <button type="button" class="btn btn-lg btn-success float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
            </div>
            </div>
           
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" style="margin-top: 10dp;">
                  <thead class="text-primary">
                    <tr>
                      <th>NAMA</th>
                      <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('tgl'));?></th>
                      <th>JAM</th>
                      <th>LAYANAN</th>
                      <th>AKSI</th>
                  </tr>
                  </thead>
                  <?php if($data_booking->count()): ?>
                  <?php $__currentLoopData = $data_booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <td><?php echo e($booking->nama); ?></td>
                      <td><?php echo e($booking->tgl); ?></td>
                      <td><?php echo e($booking->jam); ?></td>
                      <td><?php echo e($booking->layanan); ?></td>
                      <td>
                          <a href="/Adminbarber/<?php echo e($booking->id); ?>/delete" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this??')">Delete</a>
                      </td>
                  </tr>    
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                   </tbody>
                </table>
                <?php echo $data_booking->appends(\Request::except('page'))->render(); ?>

            </div>
          </div>
        </div>


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/Adminbarber/create" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input name="nama" type="text" class="form-control" placeholder="Nama" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal</label>
                  <input name="tgl" class="date form-control" placeholder="Tanggal" type="text">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Jam</label>
                    <input placeholder="Jam" name="jam" id="demo-input" class="form-control" />
                  </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih Layanan</label>
                    <select name="layanan" class="form-control" id="exampleFormControlSelect1">
                      <option>Cukur Biasa - Rp. 30,000</option>
                      <option>Paket 1 - Rp. 50,000</option>
                      <option>Paket 2 - Rp. 75,000</option>
                    </select>
                  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-md btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-md btn-success">Tambah</button>
        </form>
        </div>
      </div>
    </div>

    
    <?php $__env->stopSection(); ?>


   
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AdminBarber\resources\views/Admin/index.blade.php ENDPATH**/ ?>