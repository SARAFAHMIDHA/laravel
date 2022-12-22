@extends('layout')

@section('content')
<div class='row' style='margin:20px;'>
<div class='col-12'>
    <h2>join table</h2>
    <table class='table table-bordered table-striped'>
        <thead>
            <tr>
                <th>Name of Student</th>
                <th>Parent Name</th>
                <th>Opted Courses</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parents as $parent)
            <tr>
            <th scope="row">{{ $key->id }}
                    </th>
                    <td>{{ $key->name }}</td>
                    <td>{{ $key->studentname}}</td>
                    <td>{{$key->optedcourse}}</td>
                    <td> <input type="checkbox" class="toggle-class" data-id="{{ $key->id }}" data-toggle="toggle" data-style="slow" data-on="Enabled" data-off="Disabled" {{ $key->status == true ? 'checked' : ''}}></td>
                </tr>
                @endforeach
            
        </tbody>
    </table>

</div>

</div>
@push('scripts')

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Enabled',
      off: 'Disabled'
    });
  })
</script>


<script>
    $('.toggle-class').on('change', function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var user_id = $(this).data('id');
        $.ajax({
            type: 'GET',
            dataType: 'JSON',
            url: '{{ route('changeStatus') }}',
            data: {
                'status': status,
                'user_id': user_id
            },
            success:function(data) {
                $('#notifDiv').fadeIn();
                $('#notifDiv').css('background', 'green');
                $('#notifDiv').text('Status Updated Successfully');
                setTimeout(() => {
                    $('#notifDiv').fadeOut();
                }, 3000);
            }
        });
    });
</script>


@endpush
