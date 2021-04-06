<?php require_once APPROOT . '/views/inc/header.php'; ?>

<h2>Search posts by tags</h2>

<form action="<?php echo URLROOT ?>/tags/create/" method="post">
<select class="form-select" aria-label="Default select example">
    <?php foreach ($data['tags'] as $tag): ?>
        <option value=""><?php echo $data['tags']->name; ?></option>
    <?php endforeach; ?>
    Otsing <input type="text" name="otsi">
    <input type="submit" value="otsi...">
</select>
</form>


<?php require_once APPROOT . '/views/inc/footer.php'; ?>