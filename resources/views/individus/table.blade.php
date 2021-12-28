<div class="table-responsive">
    <table class="table" id="individus-table">
        <thead>
            <tr>
                <th>Nik</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($individus as $individu)
            <tr>
                <td>{{ $individu->nik }}</td>
            <td>{{ $individu->nama }}</td>
            <td>{{ $individu->alamat }}</td>
            <td>{{ $individu->tanggal_lahir }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['individus.destroy', $individu->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('individus.show', [$individu->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('individus.edit', [$individu->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
