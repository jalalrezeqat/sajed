@extends('admin.layouts.app')
@section('content')
    <?php
    
    $month = date('m');
    $day = date('d');
    $year = date('Y');
    
    $today = $year . '-' . $month . '-' . $day;
    ?>
    <a href="{{ route('admin.codegenaret') }}"><button class="btnaboutadd btn btn-dark">رجوع</button> </a>
    <div class="formaddm">
        <form action="{{ url('admin/codegenaret/save') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="inputtitelmistion">انشاء كود</label>
                <input type="text" class="form-control" name='code' id="code" value="{{ $code }}" required>
            </div>

            <div class="form-group">
                <label for="inputtitelmistion">الدورة</label>
                <select class="form-control" name="courses" id="cboOptions" onchange="showDiv('div',this)">
                    @foreach ($courses as $courses)
                        <option value="{{ $courses->id }}">{{ $courses->name }}</option>
                    @endforeach
                    <option value="جميع الدورات">جميع الدورات</option>

                </select>
            </div>
            {{-- <div class="form-group">
                <label for="inputtitelmistion">الفرع</label>
                <select class="form-control"id="div2" style="display:none;">
                    @foreach ($branches as $branches)
                        <option value="{{ $branches->id }}">{{ $branches->name }}</option>
                    @endforeach
                </select>
            </div> --}}

            <div class="form-group">
                <label for="inputtitelmistion">تاريخ البداية </label>
                <input type="date" value="<?php echo $today; ?>" class="form-control" name='startcode' id="startcode"
                    required>
            </div>
            <div class="form-group">
                <label for="inputtitelmistion">تاريخ النهاية </label>
                <input type="date" class="form-control" name='endcode' id="endcode" required>
            </div>
            <button type="submit" class="btn btn-info">انشاء</button>
        </form>
    </div>
@endsection

{{-- <script>
    function showDiv(prefix, chooser) {
        var selectedOption = (chooser.options[chooser.selectedIndex].value);
        if (selectedOption == "جميع الدورات") {
            var div = document.getElementById(prefix + "2");
            div.style.display = 'block';
        } else {
            var div = document.getElementById(prefix + "2");
            div.style.display = 'None';
        }
    }
</script> --}}
