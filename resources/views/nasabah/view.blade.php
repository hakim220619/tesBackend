@extends('template.base', ['title' => "$title - Admin"])

@section('content')
    <br>

    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahnasabah"
            style="margin-left: 90%; margin-bottom: 1%;">
            Tambah
        </button>

        <div class="card">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">AccountId</th>
                        <th scope="col">Nama</th>
                      
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nasabah as $i => $do)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $do->AccountId  }}</td>
                            <td>{{ $do->Name }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="tambahnasabah" tabindex="-1" role="dialog" aria-labelledby="tambahnasabahLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahnasabahLabel">Tambah Nasabah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('addNasabah') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="Nama">Name</label>
                            <input type="text" class="form-control" id="Nama" name="name"
                                aria-describedby="Masukan Nama" placeholder="Masukan Nama">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
