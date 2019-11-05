 @extends('mater')
 @section('main-content')
<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Sửa Tên Câu Hỏi</h4>
                                <form action="{{ route('ds_cauhoi.ds_cauhoi.cs-them-moi-cau-hoi',$cauHoi->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">

                                        <label for="noidung">Nội Dung </label>
                                        <input type="text" class="form-control" id="noidung" name="noidung" placeholder="Ten Linh Vuc" value="{{$cauHoi->noidung}}">
                                        <label for="linh_vuc_id">ID Lĩnh Vực</label>
                                        <input type="text" class="form-control" id="linh_vuc_id" name="linh_vuc_id" placeholder="Ten Linh Vuc" value="{{$cauHoi->linh_vuc_id}}">
                                        <label for="phuong_an_a">Phương án A </label>
                                        <input type="text" class="form-control" id="phuong_an_a" name="phuong_an_a" placeholder="Ten Linh Vuc" value="{{$cauHoi->phuong_an_a}}">
                                        <label for="phuong_an_b">Phương án B </label>
                                        <input type="text" class="form-control" id="phuong_an_b" name="phuong_an_b" placeholder="Ten Linh Vuc" value="{{$cauHoi->phuong_an_b}}">
                                        <label for="phuong_an_c">Phương án C </label>
                                        <input type="text" class="form-control" id="phuong_an_c" name="phuong_an_c" placeholder="Ten Linh Vuc" value="{{$cauHoi->phuong_an_c}}">
                                        <label for="phuong_an_d">Phương án D</label>
                                        <input type="text" class="form-control" id="phuong_an_d" name="phuong_an_d" placeholder="Ten Linh Vuc" value="{{$cauHoi->phuong_an_d}}">
                                        <label for="dap_an">Đáp án </label>
                                        <input type="text" class="form-control" id="dap_an" name="dap_an" placeholder="Ten Linh Vuc" value="{{$cauHoi->dap_an}}">                                       
                                    </div>
                                
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Lưu Câu Hỏi</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    
 @endsection

 