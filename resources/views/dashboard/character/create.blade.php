@extends('dashboard.layouts.main')
@section('container')
<h1 class="mt-4">Character</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard/Character/Create</li>
</ol>
<div class="mb-3">
    <a href="/dashboard/character" class="col-12 btn btn-secondary">Back</a>
</div>
<div class="card mb-3">
    <div class="card-header text-center">
        <h2>Form Character</h2>
    </div>
    <div class="card-body text-center">
        <form action="" method="post">
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="" class=" form-label">Name</label>
                    <input type="text" name="" class=" form-control" id="">
                </div>
                <div class="col-sm-6 mb-3">
                    <label for="" class=" form-label">Slug</label>
                    <input type="text" name="" class=" form-control" id="">
                </div>
                <div class="col-sm-6 col-lg-3 mb-3">
                    <label for="" class="form-label">Element</label>
                    <select name="" id="" class=" form-select">
                        <option value="" hidden>Element Selection</option>
                    </select>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3">
                    <label for="" class="form-label">Path</label>
                    <select name="" id="" class=" form-select">
                        <option value="" hidden>Path Selection</option>
                    </select>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3">
                    <label for="" class="form-label">Rarity</label>
                    <select name="" id="" class=" form-select">
                        <option value="" hidden>Rarity Selection</option>
                        <option value="4">Rarity 4</option>
                        <option value="5">Rarity 5</option>
                    </select>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3">
                    <label for="" class="form-label">Gender</label>
                    <select name="" id="" class=" form-select">
                        <option value="" hidden>Gender Selection</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <label for="" class="form-label">Affiliation</label>
                    <select name="" id="" class=" form-select">
                        <option value="" hidden>Affiliation Selection</option>
                    </select>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <label for="" class="form-label">Release Date</label>
                    <input type="date" name="" class=" form-control" id="">
                </div>
                <div class="col-sm-6 col-lg-4 mb-3">
                    <label for="" class=" form-label">Icon</label>
                    <img class="icon-preview img-fluid mb-3">
                    <input type="file" name="" id="icon" class=" form-control" onchange="previewIcon()">
                </div>
                <div class="col-sm-6 col-lg-4 mb-3">
                    <label for="" class=" form-label">Portrait</label>
                    <img class="portrait-preview img-fluid mb-3">
                    <input type="file" name="" id="portrait" class=" form-control" onchange="previewPortrait()">
                </div>
                <div class="col-sm-6 col-lg-4 mb-3">
                    <label for="" class=" form-label">Splash Art</label>
                    <img class="splash-art-preview img-fluid mb-3">
                    <input type="file" name="" id="splash-art" class=" form-control" onchange="previewSplashArt()">
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
        fetch('/dashboard/characters/checkSlug?name=' + name.value)
            .then(respone => respone.json())
            .then(data => slug.value = data.slug)
    })

</script>
<script>
    // PreviewImage
    function previewIcon() {
        const icon = document.querySelector('#icon');
        const iconPreview = document.querySelector('.icon-preview');

        iconPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(icon.files[0]);

        oFReader.onload = function (oFREvent) {
            iconPreview.src = oFREvent.target.result;
        }
    }

    function previewPortrait() {
        const portrait = document.querySelector('#portrait');
        const portraitPreview = document.querySelector('.portrait-preview');

        portraitPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(portrait.files[0]);

        oFReader.onload = function (oFREvent) {
            portraitPreview.src = oFREvent.target.result;
        }
    }

    function previewSplashArt() {
        const splashArt = document.querySelector('#splash-art');
        const splashArtPreview = document.querySelector('.splash-art-preview');

        splashArtPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(splashArt.files[0]);

        oFReader.onload = function (oFREvent) {
            splashArtPreview.src = oFREvent.target.result;
        }
    }

</script>
@endsection
