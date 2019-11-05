 @extends('mater')
 @section('main-content')
 <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Thêm Lĩnh Vực</h4>

                                <form action="{{ route('ds_linhvuc.ds_linhvuc.xl-them-moi-linh-vuc') }}" method="POST">
                                   
                                	@csrf
                                    <div class="form-group">
                                        <label for="ten_linh_vuc">Tên lĩnh vực </label>
                                        <input type="text" class="form-control" id="ten_linh_vuc" name="ten_linh_vuc" >
                                       
                                    </div>
                                  
                                    <button name="submit"  type="submit" class="btn btn-primary waves-effect waves-light">Thêm lĩnh vực</button>
                                </form>
                                @if(session('error'))
                                <div style="display: flex;">
                                 @php
                                     echo"<p style='color: #ff3600;font-style:bold; margin-top: 2em; font-size:30px; '>Vui lòng không bỏ trống</p>";
                                 @endphp
                                 <i style='color: #ff3600;font-style:bold; margin-top: 2em; font-size:30px; padding-left: 0.2em;' class="mdi mdi-emoticon-dead"></i>
                                </div>
                               
                               
                                @endif
                                @if (session('success'))
                                  @php
                                  echo"<script>alert('Thêm thành công')</script>";
                                  @endphp
                              @endif
                           
                                
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    
 @endsection