@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
   

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('الاسئلة') }}
                </h6>
                <div class="ml-auto">
                    <a href="{{ route('admin.questions.create',$Category->id) }}" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('اضافة سؤال') }}</span>
                    </a>

                </div>
                <a href="{{ url('admin/categories') }}" class="btn btn-primary btn-sm shadow-sm">{{ __('رجوع') }}</a>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-question" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="10">

                                </th>
                                <th></th>
                                <th>الاختبار</th>
                                <th>نص السؤال</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($questions as $question)
                            <tr data-entry-id="{{ $question->id }}">
                                <td>

                                </td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $question->category->name }}</td>
                                <td>{{ $question->question_text }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ url('admin/questionssed/'. $question->id ,$category_id) }}" class="btn btn-info editdelete">
                                           تعديل
                                        </a>
                                        <form onclick="return confirm('are you sure ? ')" class="d-inline" action="{{ route('admin.questions.destroy', $question->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" style="border-top-left-radius: 0;border-bottom-left-radius: 0;">
                                                حذف
                                            </button>
                                        </form>
                                        <a href="{{ route('admin.options.index', $question->id) }}"
                                             class="btn btn-success editdelete">مشاهدة الاجابات</a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">{{ __('Data Empty') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
@endsection

@push('script-alt')
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  let deleteButtonTrans = 'delete selected'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.questions.mass_destroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });
      if (ids.length === 0) {
        alert('zero selected')
        return
      }
      if (confirm('are you sure ?')) {
        $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'asc' ]],
    pageLength: 50,
  });
  $('.datatable-question:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endpush