@extends('template.base', ['title' => "$title - Admin"])

@section('content')
    <br>

    <div class="container">
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">AccountId</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Total Poin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($poin as $i => $do)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $do->AccountId  }}</td>
                            <td>{{ $do->Name }}</td>
                            <td>{{ $do->Point_pulsa + $do->Point_listrik }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    
@endsection
