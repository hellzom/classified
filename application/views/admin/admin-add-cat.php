<?= form_open_multipart('A/cat');?>
<div class="card shadow-sm">
    <div class="card-header">
        <strong>New Category</strong>
    </div>
    <div class="card-body card-block">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Title</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="cat_name" class="form-control form-control-sm">
                  <?= form_error('cat_name');?>
                </div>
            </div>
             <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Logo</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" name="cat_banner" class="form-control form-control-sm">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Status</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="cat_status" id="selectSm" class="form-control form-control-sm">
                        <option value="Active">Active</option>
                        <option value="Not-Active">Not Active</option>
                    </select>
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