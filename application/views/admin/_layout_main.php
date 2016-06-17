<?php $this->load->view('admin/components/page_head'); ?>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('admin/dashboard'); ?>"><?php echo $meta_title; ?></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
                    <li><?php echo anchor('admin/page', 'Page'); ?></li>
                    <li><?php echo anchor('admin/page/order', 'Order Pages'); ?></li>
                    <li><?php echo anchor('admin/article', 'News Article'); ?></li>
                    <li><?php echo anchor('admin/user', 'User'); ?></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section>
                    <?php 
                   $this->load->view($subview);
                    ?>
                </section>

            </div>
            <div class="col-md-3">

                <section>
                    <?php echo anchor('', '<i class = "glyphicon glyphicon-user"></i>joost@codeigniter.tv') ?><br/>
                    <?php echo anchor('admin/user/logout', '<i class = "glyphicon glyphicon-off"></i>logout') ?>
                </section>

            </div>
        </div>
    </div><!-- /.container -->
<?php $this->load->view('admin/components/page_tail'); ?>


