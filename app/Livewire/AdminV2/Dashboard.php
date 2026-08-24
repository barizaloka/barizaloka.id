<?php

namespace App\Livewire\AdminV2;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Media;
use App\Models\PackageJasaWebsite;
use App\Models\Partner;
use App\Models\Popup;
use App\Models\Post;
use App\Models\Project;
use App\Models\Tag;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Dashboard extends Component
{
    public function render()
    {
        $stats = [
            'total_posts' => Post::count(),
            'published_posts' => Post::published()->count(),
            'total_views' => Post::sum('views_count'),
            'total_categories' => Category::count(),
            'total_tags' => Tag::count(),
            'total_projects' => Project::count(),
            'featured_projects' => Project::featured()->count(),
            'active_partners' => Partner::active()->count(),
            'total_packages' => PackageJasaWebsite::count(),
            'active_popups' => Popup::active()->count(),
            'total_faqs' => Faq::count(),
            'total_media' => Media::count(),
        ];

        $recentPosts = Post::with(['category', 'author'])->latest()->take(5)->get();
        $recentProjects = Project::latest()->take(5)->get();

        return view('livewire.admin-v2.dashboard', [
            'stats' => $stats,
            'recentPosts' => $recentPosts,
            'recentProjects' => $recentProjects,
        ]);
    }
}
