@foreach($datas as $data)
<tr>
    <td>
        {{ $data->title }}
    </td>
    <td>
        {{ $data->category->name }}
    </td>
    <td>
        {{ $data->details }}
    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-md " href="{{ route('back.faq.edit',$data->id) }}">
                <i class="fa fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-md " data-toggle="modal" data-target="#confirm-delete" href="javascript:;"
                data-href="{{ route('back.faq.destroy',$data->id) }}">
                <i class="fa fa-trash"></i>
            </a>
        </div>
    </td>
</tr>
@endforeach