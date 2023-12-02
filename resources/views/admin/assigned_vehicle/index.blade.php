@extends('layouts.default')
{{-- @dd($assignedVehicules) --}}

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

                <h3 class="block-title">Les vehicules assignés </h3>

                <div class="col-sm-6 col-xl-3">
                    <a href="{{ '/add-assigned_vehicle' }}" class="btn rounded btn-success">Assigner un vehicule</a>
                </div>

            </div>
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">#</th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">Véhicule</th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">Membre de la famille</th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">Attribué à </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assignedVehicules as $assignedVehicule)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="" style="padding-right: -20px !important">{{ $assignedVehicule->carbrand }} -- {{ $assignedVehicule->carmodel }}</td>
                                <td class="" style="padding-right: -20px !important">{{ $assignedVehicule->famname }}</td>
                                <td class="d-none d-sm-table-cell">
                                    {{ $assignedVehicule->usname }}
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
