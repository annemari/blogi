<?php


class Tags extends Controller
{

    public function __construct()
    {
        $this->tagsModel = $this->model('Tag');
        $this->postsModel = $this->model('Post');
    }

    public function index(){
        $tags = $this->tagsModel->getTags();
        $data = array(
            'tags'=> $tags
        );
        $this->view('tags/index', $data);
    }

    public function show($id)
    {
        $tags = $this->tagsModel->getPostTags($id);
        $posts = $this->postsModel->getPostByTag($id);

        $data = array(
            'tags' => $tags,
            'post' => $posts
        );
        $this->view('tags/show', $data);
    }

    public function choice($id)
    {
        if (!empty($_POST['otsi'])) {
        $tag = $this->tagsModel->getTagById($id);

        $data = array(
            'tag' => $tag

        );
        $this->view('tags/create', $data);
    }
    }


}
