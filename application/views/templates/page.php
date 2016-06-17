<div class="col-md-8">
    <!-- Title -->
    <h1><?php echo e($page->title); ?></h1>
    </p>
    <hr>
    <!-- Post Content -->
    <p><?php echo $page->body; ?></p>
    <hr>
</div>

<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">
    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Recent</h4>
        <div class="row">
            <div class="col-lg-12">
                <?php $this->load->view('sidebar'); ?>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
</div>
