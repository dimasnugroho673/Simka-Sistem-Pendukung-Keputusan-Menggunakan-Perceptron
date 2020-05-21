<style>
    .btn-normalize-now {
        box-shadow: 1px 1px 10px 5px rgba(255, 98, 88, .4);
    }

    .btn-normalize-now:hover {
        box-shadow: 1px 1px 10px 5px rgba(255, 98, 88, .4);
    }
</style>

<div class="content-wrapper">
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Data Preprocessing <span class="text-muted">(Unnormalize)</span></h4>

            </div>
        </div>
        <div class="col-md-12">
            <div class="page-header-toolbar">
                <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-left"></i></button>
                    <button type="button" class="btn btn-secondary">03/02/2019 - 20/08/2019</button>
                    <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-right"></i></button>
                </div>
                <div class="filter-wrapper">
                    <div class="dropdown toolbar-item">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Day</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                            <a class="dropdown-item" href="#">Last Day</a>
                            <a class="dropdown-item" href="#">Last Month</a>
                            <a class="dropdown-item" href="#">Last Year</a>
                        </div>
                    </div>
                    <a href="#" class="advanced-link toolbar-item">Advanced Options</a>
                </div>
                <div class="sort-wrapper">
                    <button type="button" class="btn btn-primary toolbar-item">New</button>
                    <div class="dropdown ml-lg-auto ml-3 toolbar-item">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownexport">
                            <a class="dropdown-item" href="#">Export as PDF</a>
                            <a class="dropdown-item" href="#">Export as DOCX</a>
                            <a class="dropdown-item" href="#">Export as CDR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <div class="row mb-4">
                        <div class="col-md-12">
                            <?php echo $this->session->flashdata('message'); ?>
                            <?php if ($count_data_training != $count_data_normalize) { ?>
                                <div class="alert alert-warning" role="alert">
                                    <h4 class="alert-heading">Peringatan!</h4>
                                    <p>Jumlah data pada tabel data latih (unnormalize) dengan tabel data latih yang telah dinormalisasi berbeda. Silahkan klik tombol <strong>normalize now</strong> agar hasil keputusan lebih akurat.</p>
                                    <!-- <hr>
                                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p> -->
                                </div>
                            <?php } ?>
                        </div>
                    </div>


                    <div class="row mb-4">
                        <div class="col-md-12">
                            <?php if ($count_data_training != $count_data_normalize) { ?>
                                <a href="<?php echo site_url('panel/data/normalize_process'); ?>" class="btn btn-danger btn-normalize-now float-right ">Normalize now!</a>
                            <?php } else { ?>
                                <a href="<?php echo site_url('panel/data/normalize_process'); ?>" class="btn btn-outline-primary float-right ">Normalize now!</a>
                            <?php } ?>
                            <button type="button" class="btn btn-inverse-primary float-right mr-3" data-toggle="modal" data-target="#exampleModal">
                                Add data
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="table-data" class="table table-stripped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>X1</th>
                                    <th>X2</th>
                                    <th>X3</th>
                                    <th>X4</th>
                                    <th>X5</th>
                                    <th>X6</th>
                                    <th>X7</th>
                                    <th>X8</th>
                                    <th>X9</th>
                                    <th>X10</th>
                                    <!-- <th>X11</th> -->
                                    <th>target</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data_training as $d) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['nama']; ?></td>
                                        <td><?php echo $d['data1']; ?></td>
                                        <td><?php echo $d['data2']; ?></td>
                                        <td><?php echo $d['data3']; ?></td>
                                        <td><?php echo $d['data4']; ?></td>
                                        <td><?php echo $d['data5']; ?></td>
                                        <td><?php echo $d['data6']; ?></td>
                                        <td><?php echo $d['data7']; ?></td>
                                        <td><?php echo $d['data8']; ?></td>
                                        <td><?php echo $d['data9']; ?></td>
                                        <td><?php echo $d['data10']; ?></td>
                                        <!-- <td><?php echo $d['data11']; ?></td> -->
                                        <td><?php
                                                if ($d['target'] == 1) {
                                                    echo '<span class="badge btn-inverse-success ">Lulus</span>';
                                                } else {
                                                    echo '<span class="badge btn-inverse-danger ">Tidak lulus</span>';
                                                } ?>
                                        </td>
                                        <td>
                                            <a onclick="confirm('hapus data?')" href="<?php echo base_url('panel/data/delete_datatraining/' . $d['id']); ?>" class="badge btn-inverse-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data Training</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('panel/data/index'); ?>" method="POST">
                    <div class="form-group">
                        <label for=""><strong class="text-danger">*</strong><span class="font-italic text-muted"> Data yang dimasukkan adalah rentang 1 - 100</span></label>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Pesilat</label>
                        <input name="nama" type="text" class="form-control" placeholder="Nama" value="<?php echo set_value('nama'); ?>">
                        <small class="form-text text-muted text-danger font-weight-bold"><?php echo form_error('nama', '<span class="text-danger">', '</span>'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Pukulan</label>
                        <input name="data1" type="text" class="form-control" placeholder="Pukulan" value="<?php echo set_value('data1'); ?>">
                        <small class="form-text text-muted text-danger font-weight-bold"><?php echo form_error('data1', '<span class="text-danger">', '</span>'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Tendangan</label>
                        <input name="data2" type="text" class="form-control" placeholder="Tendangan" value="<?php echo set_value('data2'); ?>">
                        <small class="form-text text-muted text-danger font-weight-bold"><?php echo form_error('data2', '<span class="text-danger">', '</span>'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Tangkisan</label>
                        <input name="data3" type="text" class="form-control" placeholder="Tangkisan" value="<?php echo set_value('data3'); ?>">
                        <small class="form-text text-muted text-danger font-weight-bold"><?php echo form_error('data3', '<span class="text-danger">', '</span>'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Hindaran</label>
                        <input name="data4" type="text" class="form-control" placeholder="Hindaran" value="<?php echo set_value('data4'); ?>">
                        <small class="form-text text-muted text-danger font-weight-bold"><?php echo form_error('data4', '<span class="text-danger">', '</span>'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Jatuhan</label>
                        <input name="data5" type="text" class="form-control" placeholder="Jatuhan" value="<?php echo set_value('data5'); ?>">
                        <small class="form-text text-muted text-danger font-weight-bold"><?php echo form_error('data5', '<span class="text-danger">', '</span>'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Teknik Bertarung</label>
                        <input name="data6" type="text" class="form-control" placeholder="Teknik bertarung" value="<?php echo set_value('data6'); ?>">
                        <small class="form-text text-muted text-danger font-weight-bold"><?php echo form_error('data6', '<span class="text-danger">', '</span>'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Weijen 1</label>
                        <input name="data7" type="text" class="form-control" placeholder="Weijen 1" value="<?php echo set_value('data7'); ?>">
                        <small class="form-text text-muted text-danger font-weight-bold"><?php echo form_error('data7', '<span class="text-danger">', '</span>'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Weijen 2</label>
                        <input name="data8" type="text" class="form-control" placeholder="Weijen 2" value="<?php echo set_value('data8'); ?>">
                        <small class="form-text text-muted text-danger font-weight-bold"><?php echo form_error('data8', '<span class="text-danger">', '</span>'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Teknik kuda-kuda</label>
                        <input name="data9" type="text" class="form-control" placeholder="Teknik kuda-kuda" value="<?php echo set_value('data9'); ?>">
                        <small class="form-text text-muted text-danger font-weight-bold"><?php echo form_error('data9', '<span class="text-danger">', '</span>'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Teknik Tongkat</label>
                        <input name="data10" type="text" class="form-control" placeholder="Teknik tongkat" value="<?php echo set_value('data10'); ?>">
                        <small class="form-text text-muted text-danger font-weight-bold"><?php echo form_error('data10', '<span class="text-danger">', '</span>'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Target / label </label>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <div class="form-radio">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="target" id="membershipRadios1" value="1">Lulus</label>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-radio">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="target" id="membershipRadios2" value="0">Tidak lulus</label>
                                </div>
                            </div>
                            <small class="form-text text-muted text-danger font-weight-bold"><?php echo form_error('target', '<span class="text-danger">', '</span>'); ?></small>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add data</button>
            </div>

            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#table-data').DataTable();
    });
</script>