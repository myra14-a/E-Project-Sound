<?php
namespace App\Http\Controllers;
use App\Models\MediaItem;
use App\Models\SiteSetting;
use Illuminate\View\View;
class HomeController extends Controller
{
    public function index(): View
    {
        return view('user.index', [
            'site' => SiteSetting::current(),
            'latestMusic' => MediaItem::where('type','music')->where('is_published',true)->latest()->take(8)->get(),
            'latestVideos' => MediaItem::where('type','video')->where('is_published',true)->latest()->take(8)->get(),
        ]);
    }
}
