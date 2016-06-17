
<div class="container" >
    <div class="row">
        <h2>
            Recently Modified Articles
        </h2>
        <?php if (count($recent_articles)): ?>
            <ul>
                <?php foreach ($recent_articles as $article): ?>
                    <li>
                        <?php echo anchor('admin/article/edit/' . $article->id, e($article->title)); ?> - 
                        <?php echo date('Y-m-d', strtotime(e($article->modified))); ?>
                    </li>

                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>

