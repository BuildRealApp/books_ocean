<div class="col-xl-4 col-lg-4 col-md-6">

    <div class="category-listing mb-50">

        <div class="single-listing">



            <div class="select-Categories">
                <div class="small-tittle mb-20">
                    <h4>Filter by Category Name</h4>
                </div>

                @foreach($categories as $category)
                    <label class="container">
                        {{ $category->name }}
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                @endforeach

            </div>

        </div>
    </div>

</div>
