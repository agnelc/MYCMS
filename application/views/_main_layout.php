<?php $this->load->view('components/page_head'); ?>

<body>

    <div class="container">
        <section>
            <h1 class="page-header">
                <?php echo anchor('', strtoupper(config_item('site_name'))); ?>
            </h1>
        </section>
        <!-- Static navbar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <?php echo get_menu($menu) ?>

                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
    </div>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
<?php $this->load->view('templates/' . $subview); ?> 
      
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->


    <?php $this->load->view('components/page_tail'); ?>