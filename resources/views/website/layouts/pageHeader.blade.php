<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{ $brede['title'] ?? 'null' }}</h2>
            </div>
            <div class="col-12">
                <a href="/">Home</a>
                <a href="{{ url('/') }}/{{ $brede['link'] ?? '' }}">{{ $brede['title'] ?? 'null' }}</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
