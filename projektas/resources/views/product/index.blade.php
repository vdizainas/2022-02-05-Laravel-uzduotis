@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row justify-content-center">
      <div class="col-md-3 sidebar">
        <form method="GET" action="{{route('product.index')}}">
          @csrf
          <input name="sortBy" type="text" value="category_id" hidden/>
          
          <label class="fw-bold mb-2">Rikiuoti pagal kategorijas</label>
          <select class="form-select mb-2" name="sortOrder">
            <option value="asc" selected>A-Z</option>
            <option value="desc">Z-A</option>
          </select>
          <button class="btn btn-outline-secondary w-100" type="submit">Rikiuoti</button>
        </form>
      </div>

      <div class="col-md-9">
  
        {{-- table unsorted --}}
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Thunbnail</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Category</th>
              <th scope="col">Price</th>
              <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($products as $product)
              <tr>
                <th>{{$product->id}}</td>
                <td><img src="{{$product->image_url}}" style="width: 100px; height: auto;" /></td>
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->ProductProductCategory->title}}</td>
                <td>{{$product->price}}&nbsp;€</td>
                <td>
                  <td>
                    <div class="d-flex">
                      <a class="btn btn-secondary btn-sm me-2" href="{{route('product.edit', [$product])}}">Edit</a>
                      <a class="btn btn-outline-secondary btn-sm me-2" href="{{route('product.show', [$product])}}">Preview</a>
                      <form method="post" action="{{route('product.destroy', [$product])}}" >
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        @csrf
                      </form>             
                    </div>     
                  </td>
                </td>      
              </tr>                  
            @endforeach            
            
          </tbody>
        </table>

      

      </div>
    </div>
</div>
@endsection
