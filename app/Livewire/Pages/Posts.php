<?php

namespace App\Livewire\Pages;

use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\URL;
use Livewire\Component;
use Livewire\WithPagination;
use Stichoza\GoogleTranslate\GoogleTranslate;

class Posts extends Component
{
    use WithPagination;

    #[\Livewire\Attributes\Url]
    public  $query = '';

    public function mount()
    {

    }

    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        SEOTools::setTitle(__("Posts")." | ".__("GCORP LLC"));
        SEOTools::setDescription(__("Article Page Description"));
        SEOTools::setCanonical(URL::current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        if (app()->getLocale() == 'fa') $posts = Post::where('title->fa', 'like', '%' . $this->query . '%')->inRandomOrder()->with('user')->paginate(77);
        if (app()->getLocale() == 'en') $posts = Post::where('title->en', 'like', '%' . $this->query . '%')->inRandomOrder()->with('user')->paginate(77);
        if (app()->getLocale() == 'ar') $posts = Post::where('title->ar', 'like', '%' . $this->query . '%')->inRandomOrder()->with('user')->paginate(77);
        if (empty($posts)) $posts = Post::where('title->fa', 'like', '%' . $this->query . '%')->inRandomOrder()->with('user')->paginate(77);
        if (empty($posts)) $posts = Post::where('title->en', 'like', '%' . $this->query . '%')->inRandomOrder()->with('user')->paginate(77);
        if (empty($posts)) $posts = Post::where('title->ar', 'like', '%' . $this->query . '%')->inRandomOrder()->with('user')->paginate(77);

        return view('livewire.pages.posts')->with([
            'posts' => $posts
        ]);
    }
}
