<div class="row">
<div class="col-lg-12 col-sm-12">
    <div class="card gradient-1">
        <div class="card-body">
            <h3 class="card-title text-white">Jumlah Akun Pengguna</h3>
            <div class="d-inline-block">
                <h2 class="text-white">
                    <?php
                    $qry = mysqli_query($koneksi,"SELECT COUNT(id_user) as jumlah from user");
                    $data = mysqli_fetch_array($qry);
                    echo $data['jumlah'];
                    ?>
                </h2>
                <p class="text-white mb-0">Akun</p>
            </div>
            <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
        </div>
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <h4 class="card-title">Data Akun Pengguna</h4>
                    </div>
                    <div class="col-lg-6 col-sm-6" style="text-align:right !important;">
                        <a href="?page=user&action=add" class="btn mb-1 btn-primary">
                        <i class="mdi mdi-plus-circle" style="margin-right: 5px;"></i> Tambah Akun
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive-sm table-responsive-md table-responsive-lg">
                        <table id="dataTables-example" class="display expandable-table table-striped" style="width:100%;">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Nama</th>
                              <th>Alamat</th>
                              <th>No. Telepon</th>
                              <th>Tipe Pengguna</th>
                              <th>Visi</th>
                              <th>Misi</th>
                              <th>Pas Photo</th>
                              <th style="width: 80px;"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $query = mysqli_query($koneksi,"SELECT * FROM person ORDER BY id_person DESC");
                            $no = 1;
                            while ($data = @mysqli_fetch_array($query))
                            {
                            ?>
                            <tr>
                            <td><?php echo "$no"; ?></td>
                            <td><?php echo $data['nama'] ;?></td>
                            <td><?php echo $data['alamat'] ;?></td>
                            <td><?php echo $data['no_hp'] ;?></td>
                            <td><?php echo $data['tipe'] ;?></td>
                            <td><?php echo $data['visi'] ;?></td>
                            <td><?php echo $data['misi'] ;?></td>
                            <td><?php echo $data['id_img'] ;?></td>
                            <td>
                              <a href="?page=user&action=detail&id_person=<?php echo $data['id_person']; ?>" class="btn mb-1 btn-info btn-xs" style="margin-right: 3px; margin-left: 3px; margin-bottom: 3px; margin-top: 3px;" data-toggle="tooltip" data-placement="bottom" title="Lihat Data Detail">
                              <i class="mdi mdi-magnify-plus"></i></a>
                              <a href="?page=user&action=edit&id_person=<?php echo $data['id_person']; ?>" class="btn mb-1 btn-warning btn-xs" style="margin-right: 3px; margin-left: 3px; margin-bottom: 3px; margin-top: 3px;" data-toggle="tooltip" data-placement="bottom" title="Ubah Data">
                              <i class="mdi mdi-pencil"></i></a>
                              <a href="#" class="btn mb-1 btn-danger btn-xs" style="margin-right: 3px; margin-left: 3px; margin-bottom: 3px; margin-top: 3px;" data-toggle="tooltip" data-placement="bottom" title="Hapus Data" onclick="hapus_buku('?page=databook&action=delete&id_person=<?php echo $data['id_person']; ?>');">
                              <i class="mdi mdi-delete"></i></a>
                            </td>
                            </tr>
                            <?php
                            $no++;
                            };
                            ?>
                          </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
