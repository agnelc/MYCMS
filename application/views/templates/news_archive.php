<!-- Blog Entries Column -->
<?php if ($pagination): ?>

    <?php echo $pagination; ?>

<?php endif; ?>
<div class="col-md-8">




    <?php if (count($articles)): foreach ($articles as $article): ?>
            <?php echo get_excerpt($article); ?>

            <hr>

        <?php endforeach;
    endif; ?>


    <!-- Pager -->
    <ul class="pager">
        <li class="previous">
            <a href="#">&larr; Older</a>
        </li>
        <li class="next">
            <a href="#">Newer &rarr;</a>
        </li>
    </ul>

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
