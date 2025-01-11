<?php

namespace App\Services;

use App\Repositories\Contracts\IPostRepository;

class PostService
{
    protected IPostRepository $postRepository;

    public function __construct(IPostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAllEntities()
    {
        return$this->postRepository->findAll();
    }

    public function createPost(array $data)
    {
        return $this->postRepository->create($data);
    }
}
