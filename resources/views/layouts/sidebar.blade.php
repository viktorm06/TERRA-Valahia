<div class="col-sm-3 sidebar ">
    <div class="categories">
        <h1 class="hidder">CATEGORII</h1>
        <ul class="categories_list">
            @foreach (App\Category::all() as $category)
                <li><a href={{'/news/category/' . $category->name }}>{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
    
    <h1 class="hidder">PARTENERI</h1>

    <div class="parteneri">
        @foreach (App\Partner::all() as $partner)
            <img src="{{ asset('img/parteneri/' . $partner->id . '.png') }}" alt="{{ $partner->name }}">
        @endforeach
    </div>
</div>