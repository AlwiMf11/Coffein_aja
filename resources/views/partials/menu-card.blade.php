<div class="col-md-6 col-lg-4">
    <div class="menu-card h-100">
        <div class="menu-card-image">
            <img src="{{ $item->image ? asset('storage/'.$item->image) : asset('images/menu-placeholder.jpg') }}"
                 alt="{{ $item->name }}" class="img-fluid">
        </div>
        <div class="menu-card-body">
            <h5 class="menu-card-title">{{ $item->name }}</h5>
            <p class="menu-card-text">{{ $item->description }}</p>
            <p class="menu-card-price">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
        </div>
    </div>
</div>
