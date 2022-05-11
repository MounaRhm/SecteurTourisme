@extends('layouts.admin.master')
@section('content')
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header  card-header--2">

                        <div>
                            <h5>Liste bateaux</h5>
                        </div>
                        <form class="d-inline-flex">
                            <a href="add-new-cars.html" class="btn btn-theme"> <i
                                    data-feather="plus-square"></i>Ajouter un bateau
                            </a>
                        </form>
                    </div>

                    <div class="card-body">
                        <div>
                            <div class=" table-responsive table-desi">
                                <table class="all-cars-table table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Nom du bateau</th>
                                            <th>Max personnes</th>
                                            <th>Prix</th>
                                            <th>Départ</th>
                                            <th>Arrivée</th>

                                            <th>Voir</th>
                                            <th>Modifier</th>
                                            <th>Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span><img src="../assets/images/cars/1.png"
                                                        alt="users"></span>
                                            </td>
                                            <td><a href="#"><span class="  d-block fw-bold ">Motomarine</span></a>
                                            </td>
                                            <td><span class="badge badge-primary"> 6</span></td>
                                            <td>7000 DA</td>
                                            <td>13-02-2022</td>
                                            <td>20-02-2022</td>

                                            <td>
                                                <a href="cars-detail.html"><i class="fa fa-eye"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)"><i
                                                        class="fa fa-pencil-square-o"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)"><i class="fa fa-trash-o"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span><img src="../assets/images/cars/2.png"
                                                        alt="users"></span>
                                            </td>
                                            <td><a href="#"><span
                                                        class="  d-block fw-bold">Yacht</span></a>
                                            </td>
                                            <td><span class="badge badge-primary">3</span></td>
                                            <td>30.000 DA</td>
                                            <td>13-02-2022</td>
                                            <td>23-03-2022</td>

                                            <td>
                                                <a href="cars-detail.html"><i class="fa fa-eye"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)"><i
                                                        class="fa fa-pencil-square-o"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)"><i class="fa fa-trash-o"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span><img src="../assets/images/cars/3.png"
                                                        alt="users"></span>
                                            </td>
                                            <td><a href="#"><span class="  d-block fw-bold"> Catamaran</span></a>
                                            </td>
                                            <td><span class="badge badge-primary">4</span></td>
                                            <td>15000 DA</td>
                                            <td>13-07-2022</td>
                                            <td>14-07-2022</td>

                                            <td>
                                                <a href="cars-detail.html"><i class="fa fa-eye"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)"><i
                                                        class="fa fa-pencil-square-o"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)"><i class="fa fa-trash-o"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span><img src="../assets/images/cars/4.png"
                                                        alt=" users"></span>
                                            </td>
                                            <td><a href="#"><span class="  d-block fw-bold">Voilier</span></a>
                                            </td>
                                            <td><span class="badge badge-secondary"> 3</span></td>
                                            <td>10.000 DA</td>
                                            <td>10-01-2022</td>
                                            <td>13-01-2022</td>

                                            <td>
                                                <a href="cars-detail.html"><i class="fa fa-eye"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)"><i
                                                        class="fa fa-pencil-square-o"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)"><i class="fa fa-trash-o"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class=" pagination-box">
                        <nav class="ms-auto me-auto " aria-label="...">
                            <ul class="pagination pagination-primary">
                                <li class="page-item disabled"><a class="page-link"
                                        href="javascript:void(0)" tabindex="-1">Précédent</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                </li>
                                <li class="page-item active"><a class="page-link"
                                        href="javascript:void(0)">2 <span
                                            class="sr-only">(courant)</span></a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                </li>
                                <li class="page-item"><a class="page-link"
                                        href="javascript:void(0)">Suivant</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->

    <div class="container-fluid">
        <!-- footer start-->
        <footer class="footer">

            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Copyright 2022 Tourisme DZ </p>
                </div>
            </div>

        </footer>
    </div>
</div>

@endsection