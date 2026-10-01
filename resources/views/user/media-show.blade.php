@extends('user.layout')
@section('content')
<section class="spad" style="padding-top:130px;background:#0b0b0b;color:#fff;min-height:75vh;"><div class="container">
@if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
<div class="row"><div class="col-lg-5"><img src="{{ $item->thumbnail_url ?: asset('users/img/large-item.jpg') }}" style="width:100%;border-radius:8px;"></div><div class="col-lg-7"><h1>{{ $item->title }}</h1><p>{{ $item->artist }} · {{ $item->album }} · {{ $item->year }}</p><p>{{ $item->description }}</p>
@if($item->type==='music')<audio controls style="width:100%;" src="{{ $item->file_url }}"></audio>@else<video controls style="width:100%;max-height:420px;" src="{{ $item->file_url }}"></video>@endif
<div class="mt-4"><strong>Average Rating:</strong> {{ $averageRating ? number_format($averageRating,1) : 'Not rated yet' }}/5</div>
@auth
<form method="POST" action="{{ route('media.rate',$item) }}" class="mt-3">@csrf <label>Rate</label><select name="rating" class="form-control" style="max-width:160px;display:inline-block"><option value="">Choose</option>@for($i=1;$i<=5;$i++)<option value="{{ $i }}">{{ $i }}/5</option>@endfor</select><button class="btn btn-light">Save Rating</button></form>
<form method="POST" action="{{ route('media.review',$item) }}" class="mt-4"><div class="form-group"><label>Your Review</label><textarea name="review" class="form-control" rows="4" required>{{ old('review') }}</textarea></div><button class="btn btn-light">Add / Modify Review</button></form>
@else<p class="mt-4"><a href="{{ route('login') }}" class="text-white">Login</a> to rate and review.</p>@endauth
</div></div>
<div class="mt-5"><h3>Reviews</h3>@forelse($reviews as $review)<div style="background:#151515;padding:15px;border-radius:6px;margin-bottom:10px;"><strong>{{ $review->user->name }}</strong><small class="text-muted"> · {{ $review->updated_at->format('d M Y') }}</small><p class="mb-0 mt-2">{{ $review->review }}</p></div>@empty<p>No reviews yet.</p>@endforelse</div>
</div></section>
@endsection
