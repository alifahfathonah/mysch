<?php if (!empty($this->session->has_userdata('succes'))) { ?>
    <div class="alert-list">
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="fa fa-times"></i>
                </span>
            </button>
            <i class="fa fa-check-circle"></i><?= $this->session->flashdata('succes'); ?>
        </div>
    </div>
<?php } ?>

<?php if (!empty($this->session->has_userdata('error'))) { ?>
    <div class="alert-list">
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="fa fa-times"></i>
                </span>
            </button>
            <i class="fa fa-times-circle"></i><?= $this->session->flashdata('error'); ?>
        </div>
    </div>
<?php } ?>

<?php if (!empty($this->session->has_userdata('warning'))) { ?>
    <div class="alert-list">
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="fa fa-times"></i>
                </span>
            </button>
            <i class="fa fa-info-circle"></i><?= $this->session->flashdata('warning'); ?>
        </div>
    </div>
<?php } ?>

<?php if (!empty($this->session->has_userdata('welcome'))) { ?>
    <div class="alert-list">
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="fa fa-times"></i>
                </span>
            </button>
            <i class="fa fa-check"></i><?= $this->session->flashdata('welcome'); ?>
        </div>
    </div>
<?php } ?>