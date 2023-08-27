<div id="demo" class="carousel slide" data-bs-ride="carousel">
    {{-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div> --}}
    <div class="carousel-inner">
        @foreach ($banners as $key => $banner)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img src="{{ $banner->photos }}" alt="Los Angeles" class="d-block" style="width: 100%;" />
            </div>
        @endforeach
        {{-- <div class="carousel-item ">
            <img src="{{ URL::to('public/website/assets/images/banner/photo_2023-08-22_10-44-31.jpg') }}" alt="Los Angeles"
                class="d-block" style="width: 100%;" />
        </div>
        <div class="carousel-item ">
            <img src="{{ URL::to('public/website/assets/images/banner/photo_2023-08-22_10-44-35.jpg') }}" alt="Los Angeles"
                class="d-block" style="width: 100%;" />
        </div> --}}
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
