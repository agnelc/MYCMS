
<h3 class="modal-title">
    <?php echo empty($page->id) ? 'Add a new page' : 'Edit page ' . $page->title; ?>
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

        <label for="parent_id">Parent ID:</label>

        <?php
        $data = array(
            'name' => 'parent_id',
            'id' => 'parent_id',
            'options' => $pages_no_parents,
            'selected' => $this->input->post('parent_id') ? $this->input->post('parent_id') : $page->parent_id,
            'class' => 'form-control'
        );

        echo form_dropdown($data);
        ?>

    </div>
    <div class="form-group">

        <label for="template">Template:</label>

        <?php
        $data = array(
            'name' => 'template',
            'id' => 'template',
            'options' => array('page' => 'Page', 'news_archive' => 'News archive', 'homepage' => 'Homepage'),
            'selected' => $this->input->post('template') ? $this->input->post('template') : $page->template,
            'class' => 'form-control'
        );

        echo form_dropdown($data);
        ?>

    </div>

    <div class="form-group">

        <label for="title">Title:</label>

        <?php
        $data = array(
            'name' => 'title',
            'id' => 'title',
            'value' => set_value('title', $page->title),
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
            'value' => set_value('slug', $page->slug),
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
            'value' => set_value('body', $page->body),
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



