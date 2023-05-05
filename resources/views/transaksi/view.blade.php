@extends('template.base', ['title' => "$title - Admin"])

@section('content')
    <br>

    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahtransaksi"
            style="margin-left: 90%; margin-bottom: 1%;">
            Tambah
        </button>

        <div class="card">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">AccountId</th>
                        <th scope="col">TransactionDate</th>
                        <th scope="col">Description</th>
                        <th scope="col">DebitCreditStatus</th>
                        <th scope="col">Amount</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $i => $do)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $do->AccountId }}</td>
                            <td>{{ $do->TransactionDate }}</td>
                            <td>{{ $do->Description }}</td>
                            <td>{{ $do->DebitCreditStatus }}</td>
                            <td>{{ $do->Amount }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="tambahtransaksi" tabindex="-1" role="dialog" aria-labelledby="tambahtransaksiLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahtransaksiLabel">Tambah transaksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('addtransaksi') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="Nasabah">Nasabah</label>
                            <select class="form-control" name="AccountId" id="Nasabah">
                                <option selected>-pilih-</option>
                                @foreach ($nasabah as $dd)
                                    <option value="{{ $dd->AccountId }}">{{ $dd->Name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input type="text" class="form-control" id="Description" name="Description"
                                aria-describedby="Masukan Description" placeholder="Masukan Description">
                        </div>


                        <div class="form-group">
                            <label for="DebitCreditStatus">DebitCreditStatus</label>
                            <select class="form-control" name="DebitCreditStatus" id="DebitCreditStatus">
                                <option value="D">Debit</option>
                                <option value="C">Kredit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Amount">Amount</label>
                            <input type="int" class="form-control" id="Amount" name="Amount"
                                aria-describedby="Masukan Amount" placeholder="Masukan Amount">
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
