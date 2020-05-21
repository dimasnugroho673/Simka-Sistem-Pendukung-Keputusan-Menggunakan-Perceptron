<div class="content-wrapper">
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Data Preprocessing <span class="text-primary">(Normalized)</span></h4>

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
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data_normalized as $d) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['nama']; ?></td>
                                        <td><?php echo round($d['data1'], 2); ?></td>
                                        <td><?php echo round($d['data2'], 2); ?></td>
                                        <td><?php echo round($d['data3'], 2); ?></td>
                                        <td><?php echo round($d['data4'], 2); ?></td>
                                        <td><?php echo round($d['data5'], 2); ?></td>
                                        <td><?php echo round($d['data6'], 2); ?></td>
                                        <td><?php echo round($d['data7'], 2); ?></td>
                                        <td><?php echo round($d['data8'], 2); ?></td>
                                        <td><?php echo round($d['data9'], 2); ?></td>
                                        <td><?php echo round($d['data10'], 2); ?></td>
                                        <!-- <td><?php echo $d['data11']; ?></td> -->
                                        <td><?php
                                                if ($d['target'] == 1) {
                                                    echo '<span class="badge btn-inverse-success ">Lulus</span>';
                                                } else {
                                                    echo '<span class="badge btn-inverse-danger ">Tidak lulus</span>';
                                                } ?>
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

<script>
    $(document).ready(function() {
        $('#table-data').DataTable();
    });
</script>