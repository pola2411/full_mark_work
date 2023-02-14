@extends('layouts.front')
@section('content')
<section class="addservice">
    <div class="container">
        <h3>اضافة خدمة </h3>
        @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
          </div>

        @endif
        <div class="content">
            <form  enctype="multipart/form-data" method="POST" action="{{route('services.store')}}">
                @csrf
                <div class="mb-3">
                  <label class="form-label">عنوان الخدمة </label>
                  <input type="text" name="title" class="form-control" placeholder="عنوان الخدمة">

                  @error('title')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">صورة الخدمة </label>
                    <input type="file" name="image" class="form-control"  placeholder="صورة الخدمة">

                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">وصف الخدمة </label>
                    <textarea class="form-control" name="description" placeholder="وصف الخدمة" rows="7"></textarea>

                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>


                  <br><hr><hr><br>
                  <h3> خدمات اضافية </h3>

                  <div class="mb-3">
                    <label class="form-label">  خدمات اخرى لديك</label>
                    <div class="mb-3">
                        <label class="form-label">عنوان الخدمة الاخرى</label>
                        <input type="text" name="another_title" class="form-control" placeholder="عنوان الخدمة">
                        @error('another_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                      <div class="mb-3">
                          <label class="form-label">صورة الخدمة الاخرى</label>
                          <input type="file" name="another_image" class="form-control"  placeholder="صورة الخدمة">
                          @error('another_image')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                        </div>
                      <div class="mb-3">
                          <label class="form-label">وصف الخدمة الاخرى</label>
                          <textarea class="form-control" name="another_description" placeholder="وصف الخدمة" rows="7"></textarea>

                          @error('another_description')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                        </div>
                      <div class="mb-3">
                          <label class="form-label">سعر الخدمة الاخرى</label>
                          <input type="number" name="another_price" class="form-control" min="1">
                          @error('another_price')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                        </div>

                  </div>

                <button type="submit" class="btn btn-green">اضافة خدمة</button>
              </form>
        </div>
    </div>


</section>
@include('layouts.ex.start_logofooter')
@include('layouts.ex.start_footer')
@include('layouts.ex.start_copyright')


@endsection
