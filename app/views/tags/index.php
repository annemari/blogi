<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <div class="row mb-3">
        <div class="col-md-6">
            <h1>Tags</h1>
        </div>
    </div>
    <ul class="list-group">
        <?php foreach ($data['tags'] as $tag): ?>
            <li class="list-group-item">
                <a href="<?php echo URLROOT ?>/tags/show/<?php echo $tag->id; ?>" class=""><?php echo $tag->name; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<h3>Search by tags</h3>
<div class="col-8">
    <a href="<?php echo URLROOT ?>/tags/create/<?php echo $data['tag']->id; ?>" class="btn btn-success">Search by tags</a>
</div>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>
