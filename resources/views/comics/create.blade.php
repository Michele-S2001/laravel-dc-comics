@extends('layouts.form')

@section('page-title', 'Add')

@section('content')
    <section class="add-form py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="{{route('comics.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Insert title">
                        </div>
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Image thumb</label>
                            <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Insert image Url">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" id="price" placeholder="Insert price">
                        </div>
                        <div class="mb-3">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" class="form-control" name="series" id="series" placeholder="Insert series">
                        </div>
                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Sale date</label>
                            <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="Insert sale_date">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" name="type" id="type" placeholder="Insert type">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                        </div>
                        <input type="submit" class="btn btn-secondary" value="Add comic">
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
