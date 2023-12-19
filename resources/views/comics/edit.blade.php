@extends('layouts.form')

@section('page-title', 'Edit')

@section('content')
    <section class="add-form py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input
                                type="text"
                                class="form-control"
                                name="title"
                                id="title"
                                placeholder="Insert title"
                                value="{{ $comic->title }}"
                            >
                        </div>
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Image thumb</label>
                            <input
                                type="text"
                                class="form-control"
                                name="thumb" id="thumb"
                                placeholder="Insert image Url"
                                value="{{ $comic->thumb }}"
                            >
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input
                                type="text"
                                class="form-control"
                                name="price"
                                id="price"
                                placeholder="Insert price"
                                value="{{ $comic->price }}"
                            >
                        </div>
                        <div class="mb-3">
                            <label for="series" class="form-label">Series</label>
                            <input
                                type="text"
                                class="form-control"
                                name="series"
                                id="series"
                                placeholder="Insert series"
                                value="{{ $comic->series }}"
                            >
                        </div>
                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Sale date</label>
                            <input
                                type="date"
                                class="form-control"
                                name="sale_date"
                                id="sale_date"
                                placeholder="Insert sale_date"
                                value="{{ $comic->sale_date }}"
                            >
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input
                                type="text"
                                class="form-control"
                                name="type"
                                id="type"
                                placeholder="Insert type"
                                value="{{ $comic->type }}"
                                >
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="description" rows="3" name="description">
                                {{ $comic->description }}
                            </textarea>
                        </div>
                        <input type="submit" class="btn btn-secondary" value="Confirm changes">
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
