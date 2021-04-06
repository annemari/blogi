<?php require_once APPROOT . '/views/inc/header.php'; ?>

 <h1><?php echo $data['tags']->name ?></h1>
      <?php foreach ($data['posts'] as $post):?>
            <li class="list-group-item">
                    <div class="card card-body mb-3">
                        <a href="<?php echo URLROOT ?>/posts/show/<?php echo $post['post_id']; ?>" class=""><?php echo $post->title; ?></a>
                        <div class="bg-light p-2 mb-3">Created by <?php echo $post->name; ?> at <?php echo $post->postCreated; ?></div>
                    </div>
            </li>
     <?php endforeach;?>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>