<?php $this->load->view('admin/components/page_head'); ?>
<body>
 
      <!-- Modal -->
  <div class="modal show" id="myModal" role="dialog">
    <div class="modal-dialog">
    
        <?php  $this->load->view($subview);?>
        
        
        <div class="modal-footer">
            <div class="text-left col-md-9">&copy;<?php echo date('Y');?> <?php echo $meta_title;?></div>
            <div class="col-md-3"><button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button></div>
        </div>
      </div>
      
    </div>
  </div>

<?php $this->load->view('admin/components/page_tail'); ?>
