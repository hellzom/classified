<?= $this->session->flashdata('sms_sent'); ?>
<?= form_open_multipart('A/send_sms');?>
<div class="card shadow-sm">
<?php foreach ($sms_balance as $key): ?>
    <div class="card-header">
        <strong>Send SMS</strong>
        <span class="ml-auto float-right badge badge-danger">REMAINING SMS : <b><?= $key->sms_balance_record;?></b></span>

        
    </div>
    <div class="card-body card-block">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Select Business/es :</label>
                </div>
                <div class="col-12 col-md-9">
                    <select id="iSelect" required data-placeholder="Begin typing a name to filter..." multiple class="chosen-select form-control animated slideInRight" name="sms_numbers[]">
                        <option value=""></option>
                      <?php foreach($biz as $biz): ?>
                      <option  value="<?= $biz->biz_contact;?>"><?= $biz->biz_title;?></option>
                      <?php endforeach;?>
                    </select>
                    <button class="select badge badge-success" id="iAll">Select all</button>
                    <a href="<?= base_url('A/send_sms');?>" class="badge badge-danger">Deselect all</a>
                </div>
            </div>
      
          <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Message : </label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="sms_content" class="form-control" required></textarea>
                  <span class="text-muted small">(Only upto 160 chracters will be sent!)</span>
                </div>
            </div>
            
         
        
    </div>
    <div class="card-footer text-center">
        <?php if($key->sms_balance_record <1){ ?>
            <button type="button" disabled class="btn btn-dark btn-sm">
          Recharge to send SMS!
          </button>
        <?php } else{ ?>
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#smsModal">
          Send
          </button>
        <?php } ?>
        
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
</div>
<?php endforeach;?>

<!-- Modal -->
<div class="modal fade" id="smsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content text-danger">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">SMS?</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    Sure to send SMS ? :)
  </div>
  <div class="modal-footer">
    <input type="submit" name="sent_sms" class="btn btn-success" value="Send Now">
    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- modalend -->


<?= form_close();?>