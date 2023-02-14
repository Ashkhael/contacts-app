<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="contact-phones-table">
            <thead>
            <tr>
                <th>Phone Id</th>
                <th>Contact Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contactPhones as $contactPhone)
                <tr>
                    <td>{{ $contactPhone->phone_id }}</td>
                    <td>{{ $contactPhone->contact_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['contactPhones.destroy', $contactPhone->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('contactPhones.show', [$contactPhone->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('contactPhones.edit', [$contactPhone->id]) }}"
                               class='btn btn-default btn-xs'>
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

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $contactPhones])
        </div>
    </div>
</div>
