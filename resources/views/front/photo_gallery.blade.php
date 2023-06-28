@extends('front.layout.app')

@section('main_content')
<div class="page-top">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $global_page_data->photo_gallery_heading }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="photo-gallery">
            <div class="row">

                @foreach($photo_all as $item)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="photo-thumb">
                        <img src="{{ asset('uploads/'.$item->photo) }}" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="{{ asset('uploads/'.$item->photo) }}" class="magnific"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="photo-caption">
                        {{ $item->caption }}
                    </div>
                </div>
                @endforeach


                <div class="col-md-12">
                    {{ $photo_all->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection