<div class="col-md-8">

    <!-- Title -->
    <h1><?php echo e($article->title); ?></h1>

    <!-- Author -->
    <p class="lead">
        by <a href="#">Start Bootstrap</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo e($article->pubdate); ?></p>

    <hr>

    <!-- Preview Image -->
    <img class="img-responsive" src="http://placehold.it/900x300" alt="">

    <hr>

    <!-- Post Content -->
    <p><?php echo $article->body; ?></p>
    <hr>



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
