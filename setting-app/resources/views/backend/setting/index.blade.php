@extends('layouts.app')

@section('title')
    Settings
@endsection

@section('javascript')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('table').DataTable({
                "pageLength" : 200
            });
        });
    </script>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header">{{ __('Settings') }}</div>
                <div class="card-body">
                    @if (Session::has('error'))
                        <div class="alert alert-success">
                            {!! Session::get('error') !!}
                        </div>
                    @endif

                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {!! Session::get('success') !!}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <th>No</th>
                                <th>Logo Kodein</th>
                                <th>Logo Yayasan</th>
                                <th>Whatsapp</th>
                                <th>Email</th>
                                <th>Address 1</th>
                                <th>Address 2</th>
                                <th>Facebook Link</th>
                                <th>Twitter Link</th>
                                <th>Instagram Link</th>
                                <th>Youtube Link</th>
                                <th>Action</th>
                            </thead>
                            @foreach ($setting as $key => $value)
                            <tbody>
                                    <th>{{ ++$key }}</th>
                                    <td class="w-30"><img style="max-width= 50px" src="{{ asset('logo/'.$value->logo_kodein)}}" alt="" class="img-thumbnail"></td>
                                    <td class="w-30"><img style="max-width= 50px" src="{{ asset('logo/'.$value->logo_yayasan)}}" alt="" class="img-thumbnail"></td>
                                    <td>{!! $value->whatsapp !!}</td>
                                    <td>{!! $value->email !!}</td>
                                    <td>{!! $value->address_1 !!}</td>
                                    <td>{!! $value->address_2 !!}</td>
                                    <td>{!! $value->facebook_link !!}</td>
                                    <td>{!! $value->twitter_link !!}</td>
                                    <td>{!! $value->instagram_link !!}</td>
                                    <td>{!! $value->youtube_link !!}</td>
                                    <td>
                                        <a href="{{ route('backend.show.setting', $value->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-search pe-1"></i> Show</a>
                                        <a href="{{ route('backend.edit.setting', $value->id) }}" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt pe-1"></i> Edit</a>
                                        <form action="{{ route('backend.delete.setting', $value->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt pe-1"> Destroy</i>
                                            </button>
                                        </form>
                                    </td>
                                </tbody>
                                @endforeach
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
