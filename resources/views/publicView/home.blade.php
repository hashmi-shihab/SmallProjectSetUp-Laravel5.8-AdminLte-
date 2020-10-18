@extends('publicView.master')

@section('content')


<section class="hero-section">
        <div class="hero-items owl-carousel">
            @foreach($sliders as $slider)
                <div class="single-hero-item set-bg" data-setbg="{{asset('images/coverImages/'.$slider->image)}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="hero-text">
                                    <p class="room-location"><i class="icon_pin"></i>Road 2/1, Block #L, House #4, Silver Spring, (1st Floor), Banani, Dhaka 1216, Bangladesh</p>
                                    <h2>Dream Door Realty Service</h2>
                                    <a href="{{route('property.index')}}" class="col-md-3 site-btn">Buy Property</a>
                                    <a href="{{route('publicSellPosts.create')}}" class="col-md-3 site-btn sellBtn">Sell Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="thumbnail-pic" style="display: none">
            <div class="thumbs owl-carousel">
                <div class="item">
                    <img src="" alt="">
                </div>
                <div class="item">
                    <img src="" alt="">
                </div>
                <div class="item">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section Begin -->
    <section class="feature-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Listing From Our Agents</span>
                        <h2>Featured Properties</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="feature-carousel owl-carousel">
                    @foreach($sellPosts as $sellPost)
                    <div class="col-lg-4">
                        <div class="feature-item">
                            <div class="fi-pic set-bg" style="background-size: 360px 220px;" data-setbg="{{ asset('images/sellPost/'.$sellPost->image) }}">
                                <div class="pic-tag">
                                    <div class="f-text">Feauture</div>
                                    <div class="s-text"><a href="{{route('property.show',$sellPost->id)}}" style="color: black !important">Details</a></div>
                                </div>
                                <div class="feature-author">
                                    <div class="fa-text">
                                        <span><i class="fa fa-arrows" style="color: #2CBDB8"></i>&nbsp{{$sellPost->area}}&nbsp sqft</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fi-text">
                                <div class="inside-text">
                                    <h4><i class="fa fa-tag" style="color: #2CBDB8"></i>&nbsp{{$sellPost->category[0]->c_name}}</h4>
                                        <p style="margin-bottom:0px;font-size: 12px!important"><i class="fa fa-map-marker" style="color: #2CBDB8"></i>&nbsp{{$sellPost->address}},</p>
                                        <p style="margin-bottom: 0px">{{$sellPost->sub_location[0]->sl_name}},{{$sellPost->location[0]->l_name}}.</p>
                                    <h5 class="price"><span style="color: #2CBDB8;font-size: 20px">৳&nbsp</span><span><b>{{$sellPost->price}}</b></span></h5>
                                </div>
                                <ul class="room-features">
                                    @if(count($sellPost->sell_post_feature->where('featured',1)->toArray()) == 0)
                                        <br>
                                    @else
                                        @foreach($sellPost->sell_post_feature->where('featured',1) as $sellPostsFeature)

                                            <li>
                                                <p>@if($loop->first)
                                                        <i class="{{$sellPostsFeature->fontAwesome}}"></i>
                                                        @php echo (!empty($sellPostsFeature->number)  && isset($viewsArray[$sellPostsFeature->number])) ? $viewsArray[$sellPostsFeature->number] : '' @endphp
                                                    @else

                                                        @if($sellPostsFeature->number == 0)

                                                        @else
                                                            <i class="{{$sellPostsFeature->fontAwesome}}"></i>
                                                            {{$sellPostsFeature->number}}&nbsp
                                                        @endif
                                                @endif
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->
    <style>
        .lslhov:hover{
            color: #2cbdb8 !important;
        }
    </style>
    <!-- Property Section Begin -->
    <section class="howit-works spad">
        <div class="container">
            <div class="section-title">
                <span>Property</span>
                <h2>Find Your Property</h2>
            </div>
            <div class="row">
                @foreach($locations as $location)
                    <div class="col-lg-4" style="margin-bottom: 20px">
                        <ul class = "list-unstyled">
                            <li style="text-align: center">
                                <form method="POST" action="{{route('propertySearch')}}">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" name="location_id" value="{{$location['id']}}">
                                    <button type="submit" class="btn-sm lslhov" style="border: 2px solid #D5F2F1;background-color: #d5f2f1"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp{{$location['l_name']}}</button>
                                    <hr>
                                </form>
                            </li>
                            @if(isset($subLocations[$location['id']]))
                                @foreach($subLocations[$location['id']] as $subLocation)
                                    <li style="text-align: center;margin-bottom: 5px">
                                        <form method="POST" action="{{route('propertySearch')}}">
                                            @csrf
                                            @method('POST')
                                            <input type="hidden" name="location_id" value="{{$subLocation->id}}">
                                            <button type="submit" class="btn-sm lslhov" style="border: 2px solid #D5F2F1;"><i class="fa fa-location-arrow" aria-hidden="true"></i>&nbsp{{$subLocation->sl_name}}</button>
                                        </form>
                                    </li>
                                @endforeach
                                @else
                                    <p style="text-align: center">Sub-Location Dosen't Exist</p>
                            @endif
                        </ul>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


    @endsection

