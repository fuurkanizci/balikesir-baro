@extends("admin.layouts.layout")
@section('content')
    <form id="aboutUsForm" class="container reservation-form d-flex flex-column justify-content-center ">
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
                <div class="col-sm-12 col-md-12">
                    <div class="mb-3">
                        @include('admin.includes._dropzone-single', ['title' => '', 'count' => '-1', 'type' => 'logo', 'mimes' => ['image/jpeg', 'image/jpg', 'image/png', 'image/webp']])
                        @if(!empty($aboutUs->getMedia('logo')) && count($aboutUs->getMedia('logo')) > 0)
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-sm-12 col-md-3 col-lg-2">
                                        <div class="gallery-image mb-3">
                                            <img src="{{ $aboutUs->getFirstMediaUrl('logo') }}"
                                                 alt="Logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="text-center mt-4 ">
                    <button name="submit" type="submit" class="button-2">Kaydet</button></div>
            </div>
    </form>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            let $aboutUsUpdateForm = $("form#aboutUsForm");
            $aboutUsUpdateForm.on("submit", function (e) {
                e.preventDefault();
                $aboutUsUpdateForm.find("button[type=submit]").attr("disabled", "disabled");
                $.ajax({
                    url: '{{ route('admin.aboutUs.update', ['aboutU' => $aboutUs->id]) }}',
                    method: 'PUT',
                    data: $aboutUsUpdateForm.serialize(),
                    success: function () {
                        window.location = "{{ route('admin.aboutUs.index' )  }}";
                    },
                    error: function (e) {
                        $aboutUsUpdateForm.find("button[type=submit]").removeAttr("disabled")
                        ajaxDefaultErrorCallback(e);
                    }
                });
            });
        });
    </script>
@endsection
