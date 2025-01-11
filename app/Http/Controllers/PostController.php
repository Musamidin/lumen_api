<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected PostService $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

    public function index(): JsonResponse
    {
        return response()->json($this->service->getAllEntities());
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        return response()->json($this->service->createPost($data));
    }
}
