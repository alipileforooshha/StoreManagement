<div class="container-fluid">
    <div class="row flex-nowrap">
        @include("./includes/sidebar")
        <div class="col border d-flex flex-column justify-content-start p-2 align-items-start">
            <div class="d-flex justify-content-center align-items-center my-2">
                <div>
                    <h3 class="main-color section-color align-self-start p-3 border-bottom rounded border-rounded text-bold shadow">جدول موجودی</h3>
                </div>
                <div class="mx-4">
                    <a href="{{route('categories.create')}}" class="btn btn-success">
                        دسته بندی جدید
                    </a>
                </div>
            </div>
            <table class="table table-bordered shadow section-color rounded">
                <thead>
                    <tr>
                        <td class="text-center p-2">اسم</td>
                        <td class="text-center p-2">تاریخ</td>
                        <td class="text-center p-2">عملیات</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td class="text-center p-2">{{$category->name}}</td>
                            <td class="text-center p-2">{{$category->created_at->format('Y-m-d')}}</td>
                            <td class="d-flex justify-content-around text-center">
                                <form action="{{route('categories.delete',$category->id)}}" method="POST" class="p-0 m-0">
                                    <input type="hidden" name="_method" value="DELETE" hidden>
                                    @csrf
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </form>
                                <a href="{{route('categories.item',$category->id)}}" class="btn btn-primary">
                                    مشاهده
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex shadow">
                {!! $categories->links() !!}
            </div>
        </div>
    </div>
</div>