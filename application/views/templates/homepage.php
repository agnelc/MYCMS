<!-- Blog Entries Column -->
<div class="col-md-8">

        <?php if(isset($articles[0])) {echo get_excerpt($articles[0],70);}?> 
    <hr>

    <div class="row">
        <div class="col-md-6 col-sm-12">
        <?php if(isset($articles[1])) {echo get_excerpt($articles[1],40);}?> 

            <hr>
        </div>
        <div class="col-md-6 col-sm-12">
        <?php if(isset($articles[2])) {echo get_excerpt($articles[2],40);}?> 
            <hr>
        </div>

    </div>
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
                <?php echo anchor($news_archive_link,'+News Archive');?>
              <?php $articles = array_slice($articles,3); ?>
              <?php echo article_links($articles);?>
            </div>
            <!-- /.col-lg-6 -->
           
        </div>
        <!-- /.row -->
    </div>

    

</div>
