@extends("admin.layouts.layout")
@section('content')
<form class="container reservation-form d-flex flex-column justify-content-center "
    action="{{ route('admin.banners.update', ['banner' => $banner->id]) }}"
    method="post">
    @csrf
    @method('PUT')
    <div class="">
        <div class="form-group mb-4">
            <label for="inputFullName">Başlık 1</label>
            <input type="text" class="form-control" name="title" id="inputFullName" value="{{ $banner->title }}">
        </div>
        <div class="form-group mb-4">
            <label for="text">Alt Başlık 1</label>
            <input type="text" class="form-control" name="sub_title" id="inputEmail" value="{{ $banner->sub_title }}">
        </div>
        <div class="form-group mb-4">
            <label for="">Buton 1</label>
            <input type="text" class="form-control" name="description" id="inputPhoneNumber"
                value="{{ $banner->button_1 }}">
        </div>
        <div class="form-group mb-4">
            <label for="">Buton 2</label>
            <input type="text" class="form-control" name="description" id="inputPhoneNumber"
                value="{{ $banner->button_2 }}">
        </div>
        <div class="form-group mb-4">
            <label for="inputFullName">Başlık 1</label>
            <input type="text" class="form-control" name="title" id="inputFullName" value="{{ $banner->title }}">
        </div>
        <div class="form-group mb-4">
            <label for="text">Alt Başlık 1</label>
            <input type="text" class="form-control" name="sub_title" id="inputEmail" value="{{ $banner->sub_title }}">
        </div>
        <div class="form-group mb-4">
            <label for="">Buton 1</label>
            <input type="text" class="form-control" name="description" id="inputPhoneNumber"
                value="{{ $banner->button_1_2 }}">
        </div>
        <div class="form-group mb-4">
            <label for="">Buton 2</label>
            <input type="text" class="form-control" name="description" id="inputPhoneNumber"
                value="{{ $banner->button_2_2 }}">
        </div>
        <div class="text-center mt-4 ">
            <button name="submit" type="submit" class="button-2">Kaydet</button></div>
    </div>
</form>
@endsection
