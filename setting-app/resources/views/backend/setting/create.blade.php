@extends('layouts.app')

@section('title')
    Settings | Create
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('javascript')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(function () {

            $('input[name=logo_yayasan]').change(function(){
                imagePreview(this);
            });

            $('input[name=logo_kodein]').change(function(){
                imagePreview2(this);
            });
        });

        function imagePreview(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e){
                    $("#preview").removeClass("d-none");
                    $("#preview").attr("src",e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function imagePreview2(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e){
                    $("#preview2").removeClass("d-none");
                    $("#preview2").attr("src",e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Settings | Create') }}</div>
                <div class="card-body">
                    <form id="contactForm" action="{{ route('backend.process.create.setting') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12  col-md-12 mb-3">

                                    <div class="mb-3">
                                        <div class="mb-2 @error('logo_kodein') is-invalid fw-bold @enderror">Logo Kodein</div>
                                        <input type="file" class="form-control @error('logo_kodein') is-invalid text-danger @enderror" name="logo_kodein" id="logo_kodein">
                                        <img src="" alt="" class="img-thumbnail mt-3 mb-3 d-none w-50" id="preview">
                                        @error('logo_kodein')
                                            <small class="text-danger">{!! $message !!}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <div class="mb-2 @error('logo_yayasan') is-invalid fw-bold @enderror">Logo Yayasan</div>
                                        <input type="file" class="form-control @error('logo_yayasan') is-invalid text-danger @enderror" name="logo_yayasan" id="logo_yayasan">
                                        <img src="" alt="" class="img-thumbnail mt-3 mb-3 d-none w-50" id="preview2">
                                        @error('logo_yayasan')
                                            <small class="text-danger">{!! $message !!}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="mb-2 @error('whatsapp') text-danger fw-bold @enderror">
                                        Whatsapp :
                                        </div>
                                        <input type="text" name="whatsapp" value="{{ old('whatsapp') }}" placeholder="whatsapp"
                                        class="form-control">
                                        @error('whatsapp')
                                        <div class="text-danger small" >{!! $message !!}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="mb-2 @error('email') text-danger fw-bold @enderror">
                                        Email :
                                        </div>
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="email"
                                        class="form-control">
                                        @error('email')
                                        <div class="text-danger small" >{!! $message !!}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="mb-2 @error('address_1') text-danger fw-bold @enderror">
                                        Address 1:
                                        </div>
                                        <input type="text" name="address_1" value="{{ old('address_1') }}" placeholder="address_1"
                                        class="form-control">
                                        @error('address_1')
                                        <div class="text-danger small" >{!! $message !!}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="mb-2 @error('address_2') text-danger fw-bold @enderror">
                                        Address 2:
                                        </div>
                                        <input type="text" name="address_2" value="{{ old('address_2') }}" placeholder="address_2"
                                        class="form-control">
                                        @error('address_2')
                                        <div class="text-danger small" >{!! $message !!}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="mb-2 @error('facebook_link') text-danger fw-bold @enderror">
                                        Facebook Link :
                                        </div>
                                        <input type="text" name="facebook_link" value="{{ old('facebook_link') }}" placeholder="facebook_link"
                                        class="form-control">
                                        @error('facebook_link')
                                        <div class="text-danger small" >{!! $message !!}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="mb-2 @error('twitter_link') text-danger fw-bold @enderror">
                                        Twitter Link :
                                        </div>
                                        <input type="text" name="twitter_link" value="{{ old('twitter_link') }}" placeholder="twitter_link"
                                        class="form-control">
                                        @error('twitter_link')
                                        <div class="text-danger small" >{!! $message !!}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="mb-2 @error('instagram_link') text-danger fw-bold @enderror">
                                        Instagram Link :
                                        </div>
                                        <input type="text" name="instagram_link" value="{{ old('instagram_link') }}" placeholder="instagram_link"
                                        class="form-control">
                                        @error('instagram_link')
                                        <div class="text-danger small" >{!! $message !!}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="mb-2 @error('youtube_link') text-danger fw-bold @enderror">
                                        Youtube Link :
                                        </div>
                                        <input type="text" name="youtube_link" value="{{ old('youtube_link') }}" placeholder="youtube_link"
                                        class="form-control">
                                        @error('youtube_link')
                                        <div class="text-danger small" >{!! $message !!}</div>
                                        @enderror
                                    </div>

                                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Create</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
