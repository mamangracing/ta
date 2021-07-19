                <!-- Begin Page Content -->
                <div class="container-fluid">

                    
                    <div class="row">
                        <div class="card shadow-sm px-4 pt-4 mx-auto col-lg-6">
                            <!-- Page Heading -->
                            <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
                            <?php echo form_open_multipart('admin/editprofile');?>
                                <div class="form-group row">
                                    <div class="col-sm-3">Picture</div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image" name="image">
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
                                    </div>
                                </div>
                                <div class="form-group my-4 text-center">
                                    <button type="reset" class="btn btn-outline-secondary mr-2">Reset</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->