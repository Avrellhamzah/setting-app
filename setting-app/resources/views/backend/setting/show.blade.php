@extends('layouts.app')

@section('title')
    Settings | Show #ID {{ $setting->id }}
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
@endsection

@section('javascript')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script>
        $(function(){
            $('[data-fancybox]').fancybox();
        });
    </script>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Settings | Show #ID {{ $setting->id }}</div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $setting->id }}</td>
                                </tr>
                                <tr>
                                    <th>Logo Kodein</th>
                                    <td>
                                        <a href="{{ asset('logo/'.$setting->logo_kodein) }}">
                                            <img src="{{ asset('logo/'.$setting->logo_kodein) }}" class="w-25">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Logo Yayasan</th>
                                    <td>
                                        <a href="{{ asset('logo/'.$setting->logo_yayasan) }}">
                                            <img src="{{ asset('logo/'.$setting->logo_yayasan) }}" class="w-25">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Whatsapp</th>
                                    <td>{{ $setting->whatsapp }}</td>
                                </tr>
                                <tr>
                                    <th>Address 1</th>
                                    <td>{!! $setting->address_1 !!}</td>
                                </tr>
                                <tr>
                                    <th>Address 2</th>
                                    <td>{!! $setting->address_2 !!}</td>
                                </tr>
                                <tr>
                                    <th>Facebook Link</th>
                                    <td>{!! $setting->facebook_link !!}</td>
                                </tr>
                                <tr>
                                    <th>Instagram Link</th>
                                    <td>{!! $setting->instagram_link !!}</td>
                                </tr>
                                <tr>
                                    <th>Twitter Link</th>
                                    <td>{!! $setting->twitter_link !!}</td>
                                </tr>
                                <tr>
                                    <th>Youtube Link</th>
                                    <td>{!! $setting->youtube_link !!}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
