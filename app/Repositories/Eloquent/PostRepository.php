<?php

namespace App\Repositories\Eloquent;

use App\Models\Post;
use App\Repositories\Contracts\IPostRepository;
use \Illuminate\Database\Eloquent\Collection;

class PostRepository implements IPostRepository
{
    protected Post $post;

    public function __construct(Post $post){
        $this->post = $post;
    }

    public function findAll(): Collection
    {
        return $this->post->all();
    }

    public function findById(int $id)
    {
        return $this->post->find($id);
    }

    public function create(array $data)
    {
        return $this->post->create($data);
    }

    public function update($id, array $data)
    {
        $post = $this->findById($id);
        if ($post) {
            $post->update($data);
            return $post;
        }
        return null;
    }

    public function delete($id)
    {
        $post = $this->findById($id);
        if ($post) {
            return $post->delete();
        }
        return false;
    }
}
