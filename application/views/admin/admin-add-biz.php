<?= form_open_multipart('A/add_biz');?>
<div class="card shadow-sm">
    <div class="card-header">
        <strong>List New Business</strong> <small class="text-muted">[Attributes marked with (<span class="text-danger">*</span>) are required!]</small>
    </div>
    <div class="card-body card-block">
        <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Category <span class="text-danger">*</span></label>
                </div>
                <div class="col-12 col-md-9">
                    <div class="row">
                        <div class="col-md-6 mt-1">
                            <select id="selectmcat" class="form-control form-control-sm" name="biz_mcat">
                                <option selected disabled>--Main Category--</option>
                                <?php foreach($cat as $cat): ?>
                                    <option id="<?= $cat->cat_id;?>" value="<?= $cat->cat_id;?>"><?= $cat->cat_name;?></option>
                                <?php endforeach;?>
                            </select>
                            <?= form_error('biz_mcat'); ?>
                        </div>
                        <div class="col-md-6 mt-1">
                            <select name="biz_cat" id="selectscat" class="form-control form-control-sm">
                                <option selected disabled>--Sub Category--</option>
                                <?php foreach($subcat as $subcat): ?>
                                    <option id="<?= $subcat->cat_parent_id;?>" value="<?= $subcat->cat_slug;?>"><?= $subcat->cat_name;?></option>
                                <?php endforeach;?>
                            </select>
                            <?= form_error('biz_cat'); ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Title <span class="text-danger">*</span></label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="biz_title" value="<?= set_value('biz_title');?>" placeholder="Enter Biz Title" class="form-control form-control-sm">
                    <?= form_error('biz_title'); ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Contact <span class="text-danger">*</span></label>
                </div>
                <div class="col-12 col-md-9">
                    <div class="row">
                        <div class="col-md-6 mt-1">
                            <input type="text" name="biz_contact" value="<?= set_value('biz_contact');?>" placeholder="Primary Contact" class="form-control form-control-sm">
                            <?= form_error('biz_contact'); ?>
                        </div>
                        <div class="col-md-6 mt-1">
                            <input type="text" name="biz_alt_contact" value="<?= set_value('biz_alt_contact');?>" placeholder="Alternate Contact" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Email <span class="text-danger">*</span></label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="biz_email" value="<?= set_value('biz_email');?>" placeholder="Enter Biz Email" class="form-control form-control-sm">
                    <?= form_error('biz_email'); ?>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Website</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="biz_website" value="<?= set_value('biz_website');?>" placeholder="Enter Biz Website" class="form-control form-control-sm">
                    <?= form_error('biz_website'); ?>
                </div>
            </div>


            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Owner <span class="text-danger">*</span></label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="biz_user" value="<?= set_value('biz_user');?>" placeholder="Enter Biz Owner Name" class="form-control form-control-sm">
                    <?= form_error('biz_user'); ?>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Address <span class="text-danger">*</span></label>
                </div>

                <div class="col-12 col-md-9">

                    <div class="row">
                        <div class="col-12 mt-1">
                            <input type="text" name="biz_street" value="<?= set_value('biz_street');?>" placeholder="Enter Street Name" class="form-control form-control-sm">
                            <?= form_error('biz_street'); ?>
                        </div>
                        <div class="col-12 mt-1">
                            <textarea name="biz_address" placeholder="Enter Biz Address" class="form-control form-control-sm" id="" rows="4"><?= set_value('biz_address');?></textarea>
                            <?= form_error('biz_address'); ?>
                        </div>
                        <div class="col-6 mt-1">
                            <select name="biz_state" id="selectstate" class="form-control form-control-sm">
                        <option selected disabled>--State--</option>
                        <?php foreach($states as $states): ?>
                            <option id="<?= $states->state_name;?>" value="<?= $states->state_name;?>"><?= $states->state_name;?></option>
                        <?php endforeach;?>
                    </select>
                    <?= form_error('biz_state'); ?>
                        </div>
                        <div class="col-6 mt-1">
                            <select name="biz_city" id="selectcity" class="form-control form-control-sm">
                        <option selected disabled>--City--</option>
                        <?php foreach($city as $city): ?>
                            <option id="<?= $city->state;?>" value="<?= $city->city_name;?>"><?= $city->city_name;?></option>
                        <?php endforeach;?>
                    </select>
                    <?= form_error('biz_city'); ?>
                        </div>

                    </div>
                    
               
                </div>
                </div>
           
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Description <span class="text-danger">*</span></label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="biz_desc" placeholder="Enter Biz Description" class="form-control form-control-sm" id="" rows="7"><?= set_value('biz_desc');?></textarea>
                    <?= form_error('biz_desc'); ?>
                </div>
            </div>

             <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Image <span class="text-danger">*</span></label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" name="biz_img" value="<?= set_value('biz_img');?>" class="border border-muted form-control form-control-sm p-0">
                    <span><small class='text-muted'>Recommended Ratio - 1:1 | Supported Image types - jpg,jpeg,png</small></span>
                    <?= form_error('biz_img'); ?>
                    <span class="text-danger"><?= $this->session->flashdata('img_error'); ?></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Type <span class="text-danger">*</span></label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="biz_type" id="selectSm" class="form-control form-control-sm">
                        <option selected disabled>--Select Type of Biz--</option>
                        <option value="Free">Free</option>
                        <option value="Paid">Paid</option>
                        <option value="Premium">Premium</option>
                    </select>
                    <?= form_error('biz_type'); ?>
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Tags <span class="text-danger">*</span></label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="biz_tags" value="<?= set_value('biz_tags');?>" placeholder="Seperate each tag by a comma(,)" class="form-control form-control-sm">
                    <?= form_error('biz_tags'); ?>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Status <span class="text-danger">*</span></label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="biz_status" id="selectSm" class="form-control form-control-sm">
                        <option value="Active">Active</option>
                        <option value="Not-Active">Not Active</option>
                    </select>
                    <?= form_error('biz_status'); ?>
                </div>
            </div>

            
         
        
    </div>
    <div class="card-footer text-center">
        <input type="submit" class="btn btn-primary btn-sm" value="Submit">
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
</div>
<?= form_close();?>

