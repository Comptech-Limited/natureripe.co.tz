@extends('layouts.website')

@section('content')
<div class="container mx-auto py-10">
      <h1 class="text-start text-3xl md:text-7xl font-black">{{ $meal->name }}</h1>
</div>
<div class="container mx-auto">
    <div class="grid grid-cols-1">
        <img src="{{ $meal->featured_image_url }}" alt="">
    </div>
</div>

<div class="container mx-auto">
  <div class="grid md:grid-cols-2 py-5 md:py-10">
      <div class="py-10 md:py-2">
          <h1 class="text-start text-3xl font-black pb-5">INGREDIENTS</h1>
          @foreach ($meal->ingridients as $ingridient)
              @isset($ingridient->ingridientable->product)
                <p class="pr-10 md:text-2xl">{{ $ingridient->ingridientable->product->name }}p>
              @endisset
          @endforeach
          
      </div>
      <div class="py-4">
            <h1 class="text-start text-3xl font-black pb-5">PREPARATION</h1>
            {!! $meal->preparation !!}

                    {{-- <ol class="list-decimal text-2xl">
                    <li>Now this is a story all about how, my life got flipped turned upside down</li>
                    <!-- ... -->
                    </ol> --}}
      </div>
  </div>
</div>
@endsection