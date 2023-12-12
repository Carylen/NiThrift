@extends('landingPage')

@section('highlight')
    <div class="higlight-container">
        <div class="mySlides fade">
            <img class= "himage" src="{{ asset('/SourceIMG/Travis Scott x McDonalds Live From Utopia T-Shirt Black.png') }}" style="width: 100%;" alt="">
            <figcaption class="test"></figcaption>
        </div>
        <div class="mySlides fade">
            <img class= "himage" src="{{ asset('/SourceIMG/Travis Scott Black Bing - Washed Tee.png') }}"  style="width: 100%;" alt="">
            <figcaption class="test"></figcaption>
        </div>
        <div class="mySlides fade">
            <img class= "himage" src="{{ asset('/SourceIMG/Cry Over Me - Washed Tee.png') }}" style="width: 100%;" alt="">
            <figcaption class="test"></figcaption>
        </div>
        <div class="mySlides fade">
            <img class= "himage" src="{{ asset('/SourceIMG/AirForce1-2.png') }}" style="width: 100%;" alt="">
            <figcaption class="test"></figcaption>
        </div>
        <!-- ini untuk button next/prev -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- Bagian Trending  -->
    <h3 class="" style="padding:2% 0% 0% 15%">Trending</h3>
    <div class="forYou">
        {{-- ini untuk nampilin product di landingPage --}}
        @foreach ($product as $item)
        <div class="card test">
            <a href="{{ route('detailProduct', $item->id) }}">
                <div class="caption">{{ $item->name }}</div>
                <img class="catalog" src = "{{ asset($item->image) }}" ></a>
                <div class="caption price">Rp. {{ $item->price }}</div>
            </a>
        </div>
        @endforeach
    </div>

    <!-- Bagian Women -->
    <h3 id="women" style="padding:10% 0% 2% 15%">Women</h3>
    <div class="women-container">
        @foreach ($product as $item)
            @if ($item->category == 'women'||$item->category == 'Women')
                <div class="card test">
                    <a href="{{ route('detailProduct', $item->id) }}">
                        <div class="caption">{{ $item->name }}</div>
                        <img class="catalog" src = "{{ asset($item->image) }}" ></a>
                        <div class="caption price">Rp. {{ $item->price }}</div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>

    <!-- Bagian Men  -->
    <h3 id="men" style="padding:10% 0% 2% 15%">Men</h3>
    <div class="men-container">
        {{-- nampilin product based on category --}}
        @foreach ($product as $item)
            @if ($item->category == 'Men'||$item->category == 'men')
                <div class="card test">
                    <a href="{{ route('detailProduct', $item->id) }}">
                        <div class="caption">{{ $item->name }}</div>
                        <img class="catalog" src = "{{ asset($item->image) }}" ></a>
                        <div class="caption price">Rp. {{ $item->price }}</div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>
@endsection