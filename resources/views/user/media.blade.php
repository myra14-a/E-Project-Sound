@extends('user.layout')
@section('content')
<section class="spad" style="padding-top:130px;background:#0b0b0b;min-height:70vh;">
<div class="container">
 <div class="section-title text-white"><h2>Music & Videos</h2><p>Search by name, artist, year or album.</p></div>
 <form method="GET" class="row mb-5" style="background:#151515;padding:20px;border-radius:8px;">
  <div class="col-lg-4 mb-2"><input name="search" value="{{ request('search') }}" class="form-control" placeholder="Name / Artist / Album / Year"></div>
  <div class="col-lg-2 mb-2"><select name="type" class="form-control"><option value="">All</option><option value="music" @selected(request('type')==='music')>Music</option><option value="video" @selected(request('type')==='video')>Video</option></select></div>
  <div class="col-lg-2 mb-2"><select name="artist" class="form-control"><option value="">Artist</option>@foreach($artists as $artist)<option @selected(request('artist')===$artist)>{{ $artist }}</option>@endforeach</select></div>
  <div class="col-lg-2 mb-2"><select name="album" class="form-control"><option value="">Album</option>@foreach($albums as $album)<option @selected(request('album')===$album)>{{ $album }}</option>@endforeach</select></div>
  <div class="col-lg-2 mb-2"><select name="year" class="form-control"><option value="">Year</option>@foreach($years as $year)<option @selected((string)request('year')===(string)$year)>{{ $year }}</option>@endforeach</select></div>
  <div class="col-12 mt-2"><button class="btn btn-light">Search</button> <a href="{{ route('media.index') }}" class="btn btn-outline-light">Clear</a></div>
 </form>
 <div class="row">
 @forelse($items as $item)
  <div class="col-lg-3 col-md-6 mb-4"><div style="background:#151515;padding:12px;height:100%;border-radius:8px;position:relative;">
   @if($item->created_at->gte(now()->subDays(7)))<span class="new-flash">NEW</span>@endif
   <a href="{{ route('media.show',$item) }}"><img src="{{ $item->thumbnail_url ?: asset('users/img/large-item.jpg') }}" style="width:100%;height:190px;object-fit:cover;border-radius:6px;"></a>
   <h4 class="text-white mt-3">{{ $item->title }}</h4><p class="text-muted mb-1">{{ $item->artist ?: 'Unknown Artist' }}</p><small class="text-muted">{{ $item->album ?: 'Single' }} @if($item->year) · {{ $item->year }} @endif</small>
  </div></div>
 @empty <div class="col-12 text-white">No results found.</div>@endforelse
 </div>
 <div class="mt-3">{{ $items->links() }}</div>
</div></section>
<style>.new-flash{position:absolute;top:18px;left:18px;background:#ff2b2b;color:#fff;padding:4px 9px;font-size:11px;font-weight:700;border-radius:20px;animation:flashNew .8s infinite alternate}@keyframes flashNew{from{opacity:.35}to{opacity:1}}</style>
@endsection
