 @extends('mater')
 @section('main-content')
 <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Sửa Lĩnh Vực</h4>

                                <form action="{{ route('ds_linhvuc.ds_linhvuc.xac-nhan-xu-li-sua-linh-vuc',$linhvuc->id) }}" method="POST">
                                   
                                    @csrf
                                    <div class="form-group">
                                        <label for="ten_linh_vuc" >Tên cần đổi </label>
                                        <input type="text" class="form-control" id="ten_linh_vuc" name="ten_linh_vuc" placeholder="Ten Linh Vuc" value="{{ $linhvuc->ten_linh_vuc }}" readonly="readonly">
                                        <label for="ten_linh_vuc">Tên muốn đổi </label>
                                        <input type="text" class="form-control" id="ten_linh_vuc" name="ten_linh_vuc" placeholder="Ten Linh Vuc">

                                       
                                    </div>
                                  
                                    <button name="submit"  type="submit" class="btn btn-primary waves-effect waves-light">Sửa Linh Vuc</button>
                                </form>
                                @if (session('success'))
                                  @php
                                  echo"<script>alert('Sửa thành công')</script>";
                                  @endphp
                              @endif
                           
                                
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    
 @endsection