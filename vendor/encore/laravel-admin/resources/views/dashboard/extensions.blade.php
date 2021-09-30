
<div class="table-content">
    <div >
        <table class="table table-striped">
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Người báo cáo </th>
                <th>Mô tả</th>
{{--                <th>Trạng thái</th>--}}
                <th colspan="2">Thao tác</th>
            </tr>
            @foreach($feedbacks as $key=>$fb)
                <tbody>
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ \App\Models\Product::where('id',$fb->id_product)->get()[0]->title }}</td>
                    <td>{{ \App\User::where('id',$fb->id_user)->get()[0]->username }}</td>
                    <td>{{ $fb->mo_ta }}</td>
{{--                    <td ><span class="badge btn btn-danger bade-danger ">{{ $fb->status }}</span</td>--}}
                    <td ><button class=" btn btn-primary"><a href="/product/detail/{{$fb->id_product}}" target="_blank"><span style="color: whitesmoke">Xem sản phẩm</span></a></button>
                    <button class="btn  alert-success"><a href="/admin/feedback/delete/{{$fb->id}}"><span style="color: whitesmoke">Hoàn thành</span></button></td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
    <!-- /.table-responsive -->
</div>
<!-- /.box-body -->
{{--</div>--}}

{{--<script>--}}
{{--    // $('.dependencies').slimscroll({height:'510px',size:'3px'});--}}
{{--</script>--}}
