<div class="content-wrapper">
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Start Decisioning with <span class="text-primary">Perceptron</span></h4>

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

                    <div class="row">
                        <div class="col-md-4">
                            <form action="<?php echo site_url('panel/decision/startdecisioning') ?>" method="post">
                                <div class="form-group">
                                    <label for="">Maximum epoch</label>
                                    <input type="text" class="form-control" placeholder="Max epoch">
                                </div>

                                <div class="form-group">
                                    <label for="">Learning rate</label>
                                    <input type="text" class="form-control" placeholder="Learning rate 0.1 - 1">
                                </div>

                                <div class="form-group">
                                    <label for="">Treshold (bayes)</label>
                                    <input type="text" class="form-control" placeholder="0">
                                </div>

                                <div class="form-group">
                                    <label for="">Bobot (weight)</label>
                                    <input type="text" class="form-control" placeholder="Bobot">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Prediksi</button>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Data 1</label>
                                <input type="text" class="form-control" placeholder="Tendangan">
                            </div>
                        </div>
                        </form>
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