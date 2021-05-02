<?= form_open_multipart('A/add_biz_gallery/'.$this->uri->segment(3));?>
<?= $this->session->flashdata('success'); ?>
<?= $this->session->flashdata('del_img'); ?>
<?php foreach($biz as $biz): ?>
<div class="card shadow-sm">
    <div class="card-header">
        <strong>Add Gallery to <?= $biz->biz_title;?></strong>
    </div>
    <div class="card-body card-block">
        <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Images</label>
                </div>
                <div class="col-12 col-md-9">
                    <input required type="file" name="biz_image_img[]" class="form-control form-control-sm" multiple>
                </div>
            </div>
        <div class="row">
            <?php foreach($biz_img as $biz_img): ?>

            <div class="col-lg-4 text-center">
                <img src="<?= base_url();?>/assets/bizimg/gallery/<?= $biz_img->biz_image_img;?>" class=" img-fluid" alt="">
                  <a href="<?= base_url('A/del_biz_gal/').$this->uri->segment(3).'/'.$biz_img->biz_image_id;?>" class="badge badge-danger">Remove Image</a>
            </div>
            <?php endforeach;?>
        </div>
             
    </div>
    <div class="card-footer text-center">
        <input type="submit" class="btn btn-primary btn-sm" value="Submit">
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
</div>
<?php endforeach;?>
<?= form_close();?>