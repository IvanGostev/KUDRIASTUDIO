<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Queue\CallQueuedClosure;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostAdminController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $dataReq = $request->all();
        $dataReq['slug'] = Str::slug($dataReq['title'], '-');
        if (isset($dataReq['img'])) {
            $dataReq['img'] = Storage::disk('public')->put('/images', $dataReq['img']);
        }

        $content = $request->input('content');
        $content = preg_replace('#<h([1-6]).*?class="(.*?)".*?>(.*?)<\/h[1-6]>#si', '<p class="heading-${1} ${2}">${3}</p>', $content);
        $content = mb_convert_encoding($content, 'html-entities', 'utf-8');
        $dom = new \DomDocument('1.0', 'utf-8');
        @$dom->loadHtml($content);
        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/uploads/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $content = $dom->saveHTML();
        $dataReq['content'] = $content;
        unset($dataReq['files']);
        Post::create($dataReq);
        return redirect()->route('admin.post.index');
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $dataReq = $request->all();

        if (isset($dataReq['img'])) {
            $dataReq['img'] = Storage::disk('public')->put('/images', $dataReq['img']);
        }

        $content = $request->input('content');
        $content = preg_replace('#<h([1-6]).*?class="(.*?)".*?>(.*?)<\/h[1-6]>#si', '<p class="heading-${1} ${2}">${3}</p>', $content);
        $content = mb_convert_encoding($content, 'html-entities', 'utf-8');
        $dom = new \DomDocument('1.0', 'utf-8');
        @$dom->loadHtml($content);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {

            if (strpos($img->getAttribute('src'),'data:image/') === 0) {

                $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
                $image_name = "/uploads/" . time(). $key.'.png';
                file_put_contents(public_path().$image_name,$data);

                $img->removeAttribute('src');
                $img->setAttribute('src',$image_name);
            }

        }

        $content = $dom->saveHTML();
        $dataReq['content'] = $content;
        unset($dataReq['files']);
        $post->update($dataReq);
        return redirect()->route('admin.post.index');

    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
