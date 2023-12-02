@extends('layouts.default')
{{-- @dd($carTypes) --}}

@section('content')
    <div class="QA_table ">

        <br>
        <br>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


        <div class="block block-rounded">
            <div class="block-header block-header-default">

                <h3 class="block-title">Les vehicules </h3>

                <div class="col-sm-6 col-xl-3">
                    <a href="{{ '/add-car' }}" class="btn rounded btn-success">Ajouter un vehicule</a>
                </div>

            </div>
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">#</th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">brand</th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">model</th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">year_manufacture</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">serial_number</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Propriétaire</th>
                            <th style="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proprietaires as $proprietaire)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="" style="padding-right: -20px !important">{{ $proprietaire->brand }}</td>
                                <td class="" style="padding-right: -20px !important">{{ $proprietaire->model }}</td>
                                <td class="d-none d-sm-table-cell">
                                    {{ $proprietaire->year_manufacture }}
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    {{ $proprietaire->serial_number }}
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    {{ $proprietaire->pname  }}
                                </td>

                                <td>



                                    <a href="{{ route('cars.show',  $proprietaire->cid) }}" style="color:#fff;"><i
                                            style="color: #ffc107" class="far fa-1x fa-eye"></i></a>

                                    <a href="{{ route('cars.edit', $proprietaire->cid) }}"
                                        style="border-radius: 0px !important"><i style="color: #28a745"
                                            class="fa fa-1x fa-edit"></i></a>

                                    <a type="button" style=" color:white;border-radius: 0px !important" data-toggle="modal"
                                        data-target="#Modal{{ $proprietaire->cid }}">
                                        <i style="color: #dc3545" class="fa fa-1x fa-trash"></i></a>


                                    <div class="modal fade" id="Modal{{ $proprietaire->cid }}" tabindex="-1" role="dialog"
                                        aria-labelledby="ModalLabel{{ $proprietaire->cid }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-weight: bold; text-align:center" class="modal-title"
                                                        id="ModalLabel{{ $proprietaire->cid }}"><span
                                                            class="text-danger">Suppression
                                                            d'élément</span></h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center" style="font-weight: bold">
                                                    <p class="text-center">
                                                        Vous êtes sur le point de supprimer ce élément. <br>
                                                        Cette action est irréversible ! <br>
                                                        Voulez vous continuer quand meme ?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        style="border-radius: 0px !important"
                                                        data-dismiss="modal">Fermer</button>
                                                    <form action="{{ route('cars.destroy', $proprietaire->cid) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" style="border-radius: 0px !important"
                                                            class="btn btn-danger"><i class="fa fa-trash"></i>
                                                            Supprimer</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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
