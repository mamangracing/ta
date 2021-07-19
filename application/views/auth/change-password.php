<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-lg-5">

        <div class="card o-hidden border-0 shadow-lg" style="margin-top: 25%;">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-4">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900">Reset password for</h1>
                                <h6 class="mb-4"><?= $this->session->userdata('reset_email'); ?></h6>
                            </div>
                            <?= $this->session->flashdata('message'); ?>
                            <form class="user" method="post" action="<?= base_url('auth/changepassword'); ?>">
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="password1" name="password1"
                                        placeholder="Enter new password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>');?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="password2" name="password2"
                                        placeholder="Repeat password">
                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>');?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Change Password
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
</div>