@extends('dashboard.layouts.main')
@section('container')
<h1 class="mt-4">Path</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard/Path/Create</li>
</ol>
<div class="mb-3">
    <a href="/dashboard/path" class="col-12 btn btn-secondary">Back</a>
</div>
<div class="card mb-3">
    <div class="card-header text-center">
        <h2>Form Path</h2>
    </div>
    <div class="card-body text-center">
        <form method="post" action="/dashboard/path/{{$path->slug}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="" class=" form-label @error('name')is-invalid @enderror">Name</label>
                    <input type="text" name="name" class=" form-control" id="name" value="{{ old('name',$path->name) }}">
                    @error('name')
                        <div class=" invalid-feedback">
                            {{ $message }}
                        </div>
                    @endif
                </div>
                <div class="col-sm-6 mb-3">
                    <label for="" class=" form-label @error('slug')is-invalid @enderror">Slug</label>
                    <input type="text" name="slug" readonly class=" form-control" id="slug" value="{{ old('slug',$path->slug) }}">
                    @error('slug')
                        <div class=" invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-12 mb-3">
                    <label for="" class=" form-label">Image</label>
                    <input type="hidden" name="oldImage" value="{{$path->image}}">
                    @if ($path->image)
                    <img class="img-preview img-fluid mb-3 d-block bg-dark" src="{{ asset('storage/'.$path->image)}}">
                    @else
                    <img class="img-preview img-fluid mb-3 bg-dark">
                    @endif
                    <input type="file" name="image" id="image" class=" form-control @error('image')is-invalid @enderror" onchange="previewImage()">
                    @error('image')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                  @enderror
                </div>
                <div class="col-sm-6 my-3">
                    <button type="submit" class="btn btn-success col-12">Submit</button>
                </div>
                <div class="col-sm-6 my-3">
                    <button type="reset" class="btn btn-danger col-12">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    // Slug
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function () {
        fetch('/dashboard/path/checkSlug?name=' + name.value)
            .then(respone => respone.json())
            .then(data => slug.value = data.slug)
    })

</script>
<script>
    // PreviewImage
    function previewImage() {
        const image = document.querySelector('#image');
        const imagePreview = document.querySelector('.image-preview');

        imagePreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imagePreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection
