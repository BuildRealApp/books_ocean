<div class="col-xl-8 col-lg-8 col-md-6">
    <div class="row justify-content-end">
        <div class="col-xl-4">
            <div class="product_page_tittle">
                <div class="short_by">
                    <select name="#" id="product_short_list">
                        <option>Browse by popularity</option>
                        <option>Name</option>
                        <option>NEW</option>
                        <option>Old</option>
                        <option>Price</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="best-selling p-0">
        <div class="row">
           @foreach($books as $book)
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="{{ route('book.index', [$book->slug]) }}">
                                    <img src="{{ asset("assets/img/gallery/$book->image_name") }}" alt="">
                                </a>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3>
                                    <a href="{{ route('book.index', [$book->slug]) }}">{{ $book->name }}</a>
                                </h3>
                                <p>J. R Rain</p>
                                <div class="properties-footer d-flex justify-content-between align-items-center">
                                    <div class="review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <p>
                                            (
                                            <span>120</span>
                                            Review)
                                        </p>
                                    </div>
                                    <div class="price">
                                        <span>{{ $book->price }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            {{ $books->links() }}
        </div>
    </div>
</div>
