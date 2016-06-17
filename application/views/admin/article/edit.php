
<h3 class="modal-title">
    <?php echo empty($article->id) ? 'Add a new article' : 'Edit article ' . $article->title; ?>
</h3>
<?php
$error1 = $this->session->flashdata('error');
if (isset($error1)) {
    echo $this->session->flashdata('error');
}
?>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<div class="table">

    <div class="form-group">

        <label for="pubdate">Publication date:</label>

        <?php
        $data = array(
            'name' => 'pubdate',
            'id' => 'pubdate',
            'value' => set_value('pubdate', $article->pubdate),
            'class' => 'form-control datepicker'
        );

        echo form_input($data);
        ?>
    </div>   

    <div class="form-group">

        <label for="title">Title:</label>

        <?php
        $data = array(
            'name' => 'title',
            'id' => 'title',
            'value' => set_value('title', $article->title),
            'class' => 'form-control'
        );

        echo form_input($data);
        ?>
    </div>
    <div class="form-group">

        <label for="slug">Slug</label>

        <?php
        $data = array(
            'name' => 'slug',
            'id' => 'slug',
            'value' => set_value('slug', $article->slug),
            'class' => 'form-control'
        );

        echo form_input($data);
        ?>
    </div>
    <div class="form-group">

        <label for="body">Body</label>

        <?php
        $data = array(
            'name' => 'body',
            'id' => 'body',
            'value' => set_value('body', $article->body),
            'class' => 'form-control tinymce'
        );

        echo form_textarea($data);
        ?>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-12">
                <?php echo form_submit('submit', 'Save', 'class="pull-right btn btn-primary"'); ?>
            </div>
        </div>
    </div>


    <?php echo form_close(); ?>
</div>


<script>
$(function(){
    $('.datepicker').datepicker({ format: 'yyyy-mm-dd' })
});
</script>
    
