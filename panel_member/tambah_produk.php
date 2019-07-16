<?php
include 'header.php';
?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>

                <small>Taken from <a href="https://jqueryvalidation.org/" target="_blank">jqueryvalidation.org</a></small>
            </h2>
        </div>

        <!-- Advanced Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>TAMBAH DATA</h2>

                    </div>
                    <div class="body">
                        <form id="form_advanced_validation" method="POST">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label >Kode Produk</label>
                                    <input type="text" class="form-control" name="kodeproduk" maxlength="50" minlength="3" placeholder="HL00021" required>
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>


                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label >Nama Produk</label>
                                    <input type="text" class="form-control" name="namaproduk" maxlength="50" minlength="3"  placeholder="Herbalife Milk" required>
                                    <div class="help-info">Min. Kerakter: 3, Max. Kerakter: 50</div>
                                </div>


                            </div>
                            <div class="form-group form-float">
                                <div class="body">
                                    <div class="row clearfix">
<label>KATEGORI</label>
                                            <select class="form-control show-tick">
                                                <option value="">-- Please select --</option>
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                            </select>

                            </div>
                                </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="minmaxvalue" min="10" max="200" required>
                                    <label class="form-label">Min/Max Value</label>
                                </div>
                                <div class="help-info">Min. Value: 10, Max. Value: 200</div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="url" class="form-control" name="url" required>
                                    <label class="form-label">Url</label>
                                </div>
                                <div class="help-info">Starts with http://, https://, ftp:// etc</div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="date" required>
                                    <label class="form-label">Date</label>
                                </div>
                                <div class="help-info">YYYY-MM-DD format</div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" class="form-control" name="number" required>
                                    <label class="form-label">Number</label>
                                </div>
                                <div class="help-info">Numbers only</div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="creditcard" pattern="[0-9]{13,16}" required>
                                    <label class="form-label">Credit Card</label>
                                </div>
                                <div class="help-info">Ex: 1234-5678-9012-3456</div>
                            </div>
                            <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Advanced Validation -->

    </div>
</section>
<?php
include 'footer.php';
?>
</body>

</html>
