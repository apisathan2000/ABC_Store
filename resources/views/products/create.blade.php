@extends('layouts.app')
@section('content')
    <main class = "container">
        <section>
        <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="titlebar">
                <h1>Add Product</h1>
                <button>Save</button>
            </div>
            <div class="card">
               <div>
                    <label>Name</label>
                    <input type="text" name="name">
                    <label>Description (optional)</label>
                    <textarea cols="10" rows="5" name="description"></textarea>
                    {{-- <label>Add Image</label>
                    <img src="" alt="" class="img-product" />
                    <input type="file" > --}}
                </div>
               <div>
                    <label>Category</label>
                    <select  name="category" id="" >
                        <option value="" >--Choose One --</option>
                            @foreach(json_decode ('{"Smartphone":"Smartphone","Smart TV":"Smart TV","Computer":"Computer"}', true) as $optionKey => $optionValue )
                                <option value="{{$optionKey}}" > {{$optionValue}} </option>
                            @endforeach
                        </select>
                    <hr>
                    <label>Inventory</label>
                    <input type="text" class="input" name="quantity">
                    <hr>
                    <label>Price</label>
                    <input type="text" class="input"  name="price">
               </div>
            </div>
            <div class="titlebar">
                <h1></h1>
                <button>Save</button>
            </div>
        </form>
        </section> 
    </main>
@endsection
