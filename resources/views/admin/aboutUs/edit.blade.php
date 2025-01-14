@extends("admin.layouts.layout")
@section('content')
    <form class="container reservation-form d-flex flex-column justify-content-center " action="{{ route('admin.aboutUs.update', ['aboutU' => $aboutUs->id]) }}" method="post">
        @csrf
        @method('PUT')
            <div class="">
                <div class="form-group mb-4">
                    <label for="inputFullName">Başlık</label>
                    <input type="text" class="form-control" name="title" id="inputFullName" value="{{$aboutUs->title}}">
                </div>
                <div class="form-group mb-4">
                    <label for="text">Alt Başlık</label>
                    <input type="text" class="form-control" name="sub_title" id="inputEmail" value="{{$aboutUs->sub_title}}">
                </div>
                <div class="form-group mb-4">
                    <label for="">Açıklama Metni</label>
                    <input type="text" class="form-control" name="description" id="inputPhoneNumber" value="{{$aboutUs->description}}">
                </div>
                <div class="text-center mt-4 ">
                    <button name="submit" type="submit" class="button-2">Kaydet</button></div>
            </div>
    </form>
@endsection
