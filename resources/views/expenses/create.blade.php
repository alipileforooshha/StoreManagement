<div class="container-fluid">
    <div class="row flex-nowrap">
        @include("./includes/sidebar")
        <div class="col border d-flex flex-column justify-content-center p-2 align-items-center">
            <form method="post" action="{{route('expenses.store')}}" class="d-flex flex-column w-100 justify-content-center align-items-center">
                <div class="d-flex flex-column form-group w-50 my-1">
                    <label for="" class="form-label">عنوان</label>
                    <input type="text" name="title" class="form-control text-center  " />
                    @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="d-flex flex-column form-group w-50 my-1">
                    <label for="" class="form-label">مقدار هزینه</label>
                    <input type="text" name="amount" class="form-control text-center  " />
                    @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('amount') }}</span>
                    @endif
                </div>
                <div class="d-flex flex justify-content-start align-items-center form-group w-50 my-1">
                    <div class="mx-1">
                        <input type="radio" id="html" name="monthly" value="1">
                        <label for="html">ماهانه</label><br>
                    </div>
                    <div class="mx-1">
                        <input type="radio" id="css" name="monthly" value="0">
                        <label for="css">یکباره</label><br>
                    </div>
                    @if ($errors->has('monthly'))
                        <span class="text-danger">{{ $errors->first('monthly') }}</span>
                    @endif
                </div>
                <div class="d-flex flex-column form-group w-50 justify-content-center my-1">
                    @csrf
                    <button type="submit" class="btn btn-success w-100">اضافه کردن</button>
                </div>
            </form>
        </div>
    </div>
</div>