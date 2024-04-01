@extends('dashboard.layouts.main')

@section('container')
<h1 class="mt-4">Character</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard/Character</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-10 ">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="col-sm-2">
                <a href="/dashboard/character/create" class="btn btn-primary col-12"><i class="fas fa-plus-circle"></i>
                    Add Data</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>icon</th>
                    <th>Name</th>
                    <th>Element</th>
                    <th>Path</th>
                    <th>Rarity</th>
                    <th>Affiliation</th>
                    <th>Gender</th>
                    <th>Release Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>
                        Selee
                    </td>
                    <td>
                        <img src="{{asset('storage/elements/quantum.png')}}" class="bg-dark rounded img-fluid"
                            width="25" alt="">
                        Quantum
                    </td>
                    <td>
                        <img src="{{asset('storage/paths/Path_hunt.png')}}" class="bg-dark rounded img-fluid" width="25"
                            alt="">
                        Hunt
                    </td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="/dashboard/character/" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>Selee</td>
                    <td>Quantum</td>
                    <td>Hunt</td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>Selee</td>
                    <td>Quantum</td>
                    <td>Hunt</td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>Selee</td>
                    <td>Quantum</td>
                    <td>Hunt</td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>Selee</td>
                    <td>Quantum</td>
                    <td>Hunt</td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>Selee</td>
                    <td>Quantum</td>
                    <td>Hunt</td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>Selee</td>
                    <td>Quantum</td>
                    <td>Hunt</td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>Selee</td>
                    <td>Quantum</td>
                    <td>Hunt</td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>Selee</td>
                    <td>Quantum</td>
                    <td>Hunt</td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>Selee</td>
                    <td>Quantum</td>
                    <td>Hunt</td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>Selee</td>
                    <td>Quantum</td>
                    <td>Hunt</td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>Selee</td>
                    <td>Quantum</td>
                    <td>Hunt</td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>Selee</td>
                    <td>Quantum</td>
                    <td>Hunt</td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>Selee</td>
                    <td>Quantum</td>
                    <td>Hunt</td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>Selee</td>
                    <td>Quantum</td>
                    <td>Hunt</td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>Selee</td>
                    <td>Quantum</td>
                    <td>Hunt</td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>Selee</td>
                    <td>Quantum</td>
                    <td>Hunt</td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="{{asset('storage/characters/selee/Character_Seele_Icon.webp')}}" class="img-fluid"
                            width="50" alt="">
                    </td>
                    <td>Selee</td>
                    <td>Quantum</td>
                    <td>Hunt</td>
                    <td>5<i class="fas fa-star"></i></td>
                    <td>Belobog</td>
                    <td>Female</td>
                    <td>April 26th, 2023</td>
                    <td>
                        <a href="" class="badge p-2 bg-info"><i class="fas fa-eye"></i></a>
                        <a href="" class="badge p-2 bg-warning"><i class="fas fa-edit"></i></a>
                        <a href="" class="badge p-2 bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>



            </tbody>
        </table>
    </div>
</div>

@endsection
