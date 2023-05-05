@extends('template.base', ['title' => "$title - Admin"])

@section('content')
    <br>

    <div class="container">
        <form method="GET" action="{{ route('SearchReport') }}">
                @csrf
        <div class="row">
            
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Nasabah">Nasabah</label>
                        <select class="form-control" name="AccountId" id="Nasabah">
                            <option value="" selected>-pilih-</option>
                            @foreach ($nasabah as $dd)
                                <option value="{{ $dd->AccountId }}">{{ $dd->Name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="StartDate">StartDate</label>
                        <input type="date" class="form-control" id="StartDate" name="StartDate"
                            aria-describedby="Masukan StartDate" placeholder="Masukan StartDate">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="EndDate">EndDate</label>
                        <input type="date" class="form-control" id="EndDate" name="EndDate"
                            aria-describedby="Masukan EndDate" placeholder="Masukan EndDate">
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#tambahtransaksi"
                        style="margin-top: 12%;">
                        Cari
                    </button>
                </div>
      
        </div>
      </form>




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
@endsection
