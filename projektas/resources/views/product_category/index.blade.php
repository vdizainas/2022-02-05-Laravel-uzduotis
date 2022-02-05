@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <table class="table table-striped">
            <thead>
              <tr>
                <th class="col-auto">#</th>
                <th class="col-2">Title</th>
                <th class="col-6">Description</th>
                <th class="col-1">Products count</th>
                <th class="col-2">Edit</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($product_categories as $product_category)
                <tr>
                  <th>{{$product_category->id}}</td>
                  <td>{{$product_category->title}}</td>
                  <td>{{$product_category->description}}</td>
                  <td>{{count($product_category->CategoryProducts)}}</td>          
                  <td>
                    <div class="d-flex">
                      <a class="btn btn-secondary btn-sm me-2" href="{{route('productCategory.edit', [$product_category])}}">Edit</a>
                      <a class="btn btn-outline-secondary btn-sm me-2" href="{{route('productCategory.show', [$product_category])}}">Preview</a>
                      <form method="post" action="{{route('productCategory.destroy', [$product_category])}}" >
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        @csrf
                      </form>             
                    </div>     
                  </td>
                </tr>                  
              @endforeach            
             
            </tbody>
          </table>
        </div>
    </div>
</div>
@endsection
