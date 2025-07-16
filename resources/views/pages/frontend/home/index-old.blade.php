@extends('layouts.frontend')

@section('content')


<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider d-flex align-items-center slider_bg_1 overlay2"
     style="background-image: url('{{ asset('public/assets/frontend/img/banner/' . $main_slider['banner']) }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slider_text text-center ">
                        <h3>{{ $main_slider['heading'] }}</h3>
                        <p>{{ $main_slider['sub_heading'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->


<!-- music_area  -->
<div class="music_area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-10">
                <div class="row align-items-center">
                            <div class="col-xl-9 col-md-9">
                                <div class="row" id="banner_top_music">
                                    <div class="col-4 col-md-3 align-content-center">
                                        <img src="{{ url('public/assets/frontend/img/music_man/'.$banner_music_tracks->track_image) }}" class="img-fluid"/>
                                    </div>
                                    <div class="col-8 col-md-9">
                                        @php
                                            use Carbon\Carbon;
                                            
                                            // Convert the updated_at timestamp to a Carbon instance
                                            $givenDate = Carbon::parse($banner_music_tracks->updated_at);
                                            
                                            // Format the date to show relative time (e.g., "4 months ago")
                                            $formattedDate = $givenDate->diffForHumans(['parts' => 2]);
                                        @endphp
                                       <div class="wave-path">	
                                            <div class="song_details text-white">
                                                <span>{{ $banner_music_tracks->sub_title }}</span>
                                                <h6>{{ $banner_music_tracks->title }}</h6>
                                            </div>
                                            <div id="waveform_bt"></div>
                                            <div class="wave-mask"></div>
                                            <span class="published_date d-none">{{ $formattedDate }}</span>
                                            <span id="currentTime_bt" class="time_count">0:00</span>
                                            <button id="playPause_bt" class="btn play_btn">
                                               <i class="fa fa-play"></i> <!-- FontAwesome Play Icon -->
                                            </button>
                                       </div>	
                                    </div>
                                  </div>
                            </div>
                            <div class="col-xl-3 col-md-3">
                                <div class="music_btn">
                                        <a href="{{ $banner_music_tracks->link }}" class="boxed-btn p-2" target="_blank">buy track</a>
                                </div>
                            </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- music_area end  -->

    <!-- about_area  -->
    <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12">
                    <div class="about_info pl-0">
                        <h3>King Viking</h3>
                        <p class="pt-0 mb-0">{!! $about_info['sub_description'] !!}</p>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="about_thumb">
                        <img class="img-fluid" src="{{ asset('public/assets/uploads/pages/' . $about_info['feature_image']) }}" alt="About King Viking"/>
                    </div>
                </div>
                <div class="col-xl-7 col-md-6">
                    <div class="about_info">
                        <p class="pt-0 mb-0">{!! $about_info['description'] !!}</p>
                        <p class="pt-0 mb-0">Thank you for stopping by. I hope we can collaborate and make butiful music someday.</p>
                        <!--<div class="signature">
                            <img src="{{ url('public/assets/frontend/img/about/signature.png') }}" alt="">
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ about_area  -->

    <!-- youtube_video_area  -->
    <div class="youtube_video_area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <h3>Music Videos</h3>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                @if ($video_tracks && count($video_tracks) > 0)
                    @foreach ($video_tracks as $video_track)
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single_video">
                                <div class="thumb">
                                    <img src="{{ url('public/assets/frontend/img/video/'.$video_track['track_image']) }}" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="video">
                                        <a class="popup-video" href="{{ $video_track['track'] }}">
                                                <i class="fa fa-play"></i>
                                        </a>
                                    </div>

                                    <div class="hover_inner">
                                        {{-- <span>{{ $video_track['sub_title'] }}</span> --}}
                                        <h3><a href="#">{{ $video_track['title'] }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10 text-center mt-4">
                    <a class="boxed-btn3" href="{{ route('frontend.musicvideos') }}">View All Videos</a>
                </div>
            </div>
        </div>

    </div>
    <!-- / youtube_video_area  -->

    <!-- music_area  -->
    <div class="music_area music_gallery music_area_home mt-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 d-none d-sm-none d-md-block">
                    <div class="section_title text-center mb-65">
                        <h3>Latest Tracks</h3>
                    </div>
                </div>
                <div class="col-xl-6 d-none d-sm-none d-md-block">
                    <div class="section_title text-center mb-65">
                        <h3>BEATS Catalog</h3>
                    </div>
                </div>
            </div>
                <div class="row align-items-start justify-content-center all_music_tracks">
                    <div class="col-xl-5">
                        <div class="row">
                            <div class="col-12 col-md-12 d-block d-sm-none d-md-none">
                                 <div class="section_title text-center mb-65">
                                    <h3>Latest Tracks</h3>
                                </div>
                            </div>    
                        </div>
                    @if($music_tracks && count($music_tracks) > 0)
                        @foreach ($music_tracks as $index10 => $music_track)
                            @if($music_track['order'] != 0)
                                <div class="row align-items-center justify-content-center mb-20">
                                    <div class="col-xl-12">
                                        <div class="row" id="top_music_area">
                                            <div class="col-12 col-md-3 align-content-center">
                                                <img src="{{ url('public/assets/frontend/img/music_man/'.$music_track->track_image) }}" alt="{{ $music_track['title'] }}" class="img-fluid"/>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                @php
                                                    
                                                    // Convert the updated_at timestamp to a Carbon instance
                                                    $givenDate3 = Carbon::parse($music_track->updated_at);
                                                    
                                                    // Format the date to show relative time (e.g., "4 months ago")
                                                    $formattedDate3 = $givenDate3->diffForHumans(['parts' => 2]);
                                                @endphp
                                               <div class="wave-path">	
                                                    <div class="song_details text-white">
                                                        <span>{{ $music_track->sub_title }}</span>
                                                        <h6>{{ $music_track->title }}</h6>
                                                    </div>
                                                    <div id="waveform-mt-{{ $index10 }}"></div>
                                                    <div class="wave-mask"></div>
                                                    <span class="published_date d-none">{{ $formattedDate3 }}</span>
                                                    <span id="currentTime-mt-{{ $index10 }}" class="time_count">0:00</span>
                                                    <div class="music_btn">
                                                        <a href="{{ $music_track->link }}" class="boxed-btn p-2" target="_blank">buy track</a>
                                                    </div>
                                                    <button id="playPause-mt-{{ $index10 }}" class="btn play_btn">
                                                       <i class="fa fa-play"></i> <!-- FontAwesome Play Icon -->
                                                    </button>
                                               </div>	
                                            </div>
                                          </div>
                                        
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif

                    </div>
                    <div class="col-xl-5">
                        <div class="row">
                            <div class="col-12 col-md-12 d-block d-sm-none d-md-none">
                                 <div class="section_title text-center mb-65">
                                    <h3>BEATS Catalog</h3>
                                </div>
                            </div>    
                        </div>
                        @if($music_beats && count($music_beats) > 0)
                            @foreach ($music_beats as $index => $music_beat)
                                <div class="row align-items-center justify-content-center mb-20">
                                    <div class="col-xl-12">
                                        <div class="row">
                                            <div class="col-12 col-md-3 align-content-center">
                                                <img src="{{ url('public/assets/frontend/img/music_man/'.$music_beat->track_image) }}" alt="{{ $music_beat['title'] }}" class="img-fluid"/>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                @php
                                                    
                                                    // Convert the updated_at timestamp to a Carbon instance
                                                    $givenDate2 = Carbon::parse($music_beat->updated_at);
                                                    
                                                    // Format the date to show relative time (e.g., "4 months ago")
                                                    $formattedDate2 = $givenDate2->diffForHumans(['parts' => 2]);
                                                @endphp
                                               <div class="wave-path">	
                                                    <div class="song_details text-white">
                                                        <span>{{ $music_beat->sub_title }}</span>
                                                        <h6>{{ $music_beat->title }}</h6>
                                                    </div>
                                                    <div id="waveform-{{ $index }}"></div>
                                                    <div class="wave-mask"></div>
                                                    <span class="published_date d-none">{{ $formattedDate2 }}</span>
                                                    <span id="currentTime-{{ $index }}" class="time_count">0:00</span>
                                                    <div class="music_btn">
                                                        <a href="{{ $music_beat->link }}" class="boxed-btn p-2" target="_blank">buy track</a>
                                                    </div>
                                                    <button id="playPause-{{ $index }}" class="btn play_btn">
                                                       <i class="fa fa-play"></i> <!-- FontAwesome Play Icon -->
                                                    </button>
                                               </div>	
                                            </div>
                                          </div>
                                        
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
               </div>
               <div class="row align-items-center justify-content-center">
                   <div class="col-xl-10 text-center">
                       <a class="boxed-btn3" href="{{ route('frontend.musictracks') }}">View All Tracks</a>
                   </div>
               </div>
        </div>
    </div>
    <!-- music_area end  -->

    <!-- gallery -->
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <h3>Image Galleries</h3>
                    </div>
                </div>
            </div>
            <div class="row grid">
                @if ($gallery_home)
                    @foreach ($gallery_home as $key => $gallery)
                        @php
                            switch ($gallery->order) {
                                case 1:
                                    $collumns_class = 'col-xl-5 col-lg-5';
                                    break;
                                case 2:
                                    $collumns_class = 'col-xl-7 col-lg-7';
                                    break;
                                case 3:
                                case 4:
                                case 5:
                                    $collumns_class = 'col-xl-4 col-lg-6';
                                    break;
                                default:
                                    $collumns_class = 'col-xl-4 col-lg-4'; // Default class if more cases appear
                                    break;
                            }
                        @endphp
                         <div class="{{ $collumns_class }} grid-item cat1 col-md-6">
                            <div class="single-gallery mb-30">
                                    <div class="portfolio-img">
                                        <img src="{{ url('public/assets/frontend/img/gallery/'.$gallery->image_name) }}" alt="{{ $gallery->title }}" class="img-fluid">
                                    </div>
                                    <div class="gallery_hover">
                                        <a  class="popup-image"  href="{{ url('public/assets/frontend/img/gallery/'.$gallery->image_name) }}" class="hover_inner">
                                            <i class="ti-plus"></i>
                                        </a>
                                    </div>
                            </div>
                        </div>
                        <div class="">
                            {{-- Your content for each gallery item --}}
                        </div>
                    @endforeach
                @endif
                    {{-- <div class="col-xl-5 col-lg-5 grid-item cat1 col-md-6">
                        <div class="single-gallery mb-30">
                                <div class="portfolio-img">
                                    <img src="{{ url('public/assets/frontend/img/gallery/img-gallery-001.jpg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="gallery_hover">
                                    <a  class="popup-image"  href="{{ url('public/assets/frontend/img/gallery/img-gallery-001.jpg') }}" class="hover_inner">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 grid-item cat3 cat4 col-md-6">
                        <div class="single-gallery mb-30">
                                <div class="portfolio-img">
                                        <img src="{{ url('public/assets/frontend/img/gallery/img-gallery-002.jpg') }}" alt="">
                                </div>
                                <div class="gallery_hover">
                                        <a class="popup-image" href="{{ url('public/assets/frontend/img/gallery/img-gallery-002.jpg') }}" class="hover_inner">
                                            <i class="ti-plus"></i>
                                        </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 grid-item cat4 col-md-6">
                        <div class="single-gallery mb-30">
                                <div class="portfolio-img">
                                        <img src="{{ url('public/assets/frontend/img/gallery/img-gallery-003.jpg') }}" alt="">
                                </div>
                                <div class="gallery_hover">
                                        <a class="popup-image" href="{{ url('public/assets/frontend/img/gallery/img-gallery-003.jpg') }}" class="hover_inner">
                                            <i class="ti-plus"></i>
                                        </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 grid-item cat2 col-md-6">
                        <div class="single-gallery mb-30">
                            <div class="portfolio-img">
                                    <img src="{{ url('public/assets/frontend/img/gallery/img-gallery-004.jpg') }}" alt="">
                            </div>
                            <div class="gallery_hover">
                                    <a class="popup-image" href="{{ url('public/assets/frontend/img/gallery/img-gallery-004.jpg') }}" class="hover_inner">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 grid-item cat2 col-md-6">
                        <div class="single-gallery mb-30">
                            <div class="portfolio-img">
                                    <img src="{{ url('public/assets/frontend/img/gallery/img-gallery-005.jpg') }}" alt="">
                            </div>
                            <div class="gallery_hover">
                                    <a class="popup-image" href="{{ url('public/assets/frontend/img/gallery/img-gallery-005.jpg') }}" class="hover_inner">
                                        <i class="ti-plus"></i>
                                    </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
        </div>
    </div>
    <!--/ gallery -->



@endsection

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        img.img-fluid.login-logo{
            width: 120px !important;
        }
        .billing-title {
            color: rgb(81 72 17);
            text-transform: uppercase;
        }
        .music_area {
            position: relative;
            margin-top: -164px;
        }
        .wave-path {
            position: relative;
            height: 130px;
            justify-content: center;
            align-content: end;
            .wave-mask{
                width: 100%;
                height: 24px;
                background: #ffffff70;
                position: absolute;
                bottom: 0px;
                z-index: 2;
            }
            .play_btn{
                position: absolute;
                top: 10px;	
                z-index: 6;
                background-color: #f50;
                border-radius: 30px;
                font-size: 11px;
                color: #fff;
            }
            .time_count{
                position: absolute;
                top: 20px;
                right: 1px;
                background: #0000009e;
                z-index: 6;
                color: #fff;
                padding: 4px;
                font-size: 11px;		
            }
            .song_details{
                position: absolute;
                top: 0px;
                left: 42px;
                span{
                    font-size: 10px;
                }
                h6{
                    font-size: 11px;
                }
            }
            .published_date{
                position: absolute;
                top: 5px;
                right: 0px;
                font-size: 9px;
                color: #fff;
                text-transform: capitalize;
            }
            &:hover #waveform {
                filter: brightness(1.2);
                cursor:pointer;
                opacity:1;
            }
        }
        .about_info p {
            margin-top: 10px !important;
            margin-bottom: 10px !important;
        }
        
        .all_music_tracks{
            .song_details{
                span{
                    color: #000;
                }
                h6{
                    color: #000;
                }
            }
            .music_btn{
                position: absolute;
                right: 50px;
                top: 2px;
                a{
                
                }
            }
        }
    </style>
@endpush
@push('scripts')
    <script src="https://unpkg.com/wavesurfer.js"></script>
    <script>
        $(document).ready(function () {

            function formatTime(seconds) {
                let minutes = Math.floor(seconds / 60);
                let remainingSeconds = seconds % 60;
                return minutes + ":" + (remainingSeconds < 10 ? "0" : "") + remainingSeconds;
            }

            // Check if the banner track container exists before initializing
            if ($('#waveform_bt').length) {
                let wavesurfer_bt = WaveSurfer.create({
                    container: '#waveform_bt',
                    waveColor: 'gray',
                    progressColor: 'orange',
                    barWidth: 3,
                    barGap: 2,
                    barHeight: 2,
                    height: 80,
                    normalize: true,
                    backend: 'WebAudio'
                });

                let trackUrl = '{{ asset("public/assets/frontend/audios/" . $banner_music_tracks["track"]) }}';

                // Check if the track URL is accessible
                fetch(trackUrl, { method: 'HEAD' })
                    .then(response => {
                        if (response.ok) {
                            wavesurfer_bt.load(trackUrl);

                            $('#playPause_bt').click(function () {
                                wavesurfer_bt.playPause();
                                $(this).find('i').toggleClass('fa-play fa-pause');
                            });

                            wavesurfer_bt.on('audioprocess', function () {
                                let time = Math.floor(wavesurfer_bt.getCurrentTime());
                                $('#currentTime_bt').text(formatTime(time));
                            });
                        } else {
                            console.error("Track file not found: " + trackUrl);
                        }
                    })
                    .catch(error => console.error("Error fetching track:", error));
            }

            // Music Tracks
            @foreach ($music_tracks as $index2 => $music_track)
                if ($('#waveform-mt-{{ $index2 }}').length) {
                    let wavesurfer_mt_{{ $index2 }} = WaveSurfer.create({
                        container: '#waveform-mt-{{ $index2 }}',
                        waveColor: 'gray',
                        progressColor: 'orange',
                        barWidth: 3,
                        barGap: 2,
                        barHeight: 2,
                        height: 80,
                        normalize: true,
                        backend: 'WebAudio'
                    });

                    let trackUrlMt = '{{ asset("public/assets/frontend/audios/" . $music_track["track"]) }}';

                    fetch(trackUrlMt, { method: 'HEAD' })
                        .then(response => {
                            if (response.ok) {
                                wavesurfer_mt_{{ $index2 }}.load(trackUrlMt);

                                $('#playPause-mt-{{ $index2 }}').click(function () {
                                    wavesurfer_mt_{{ $index2 }}.playPause();
                                    $(this).find('i').toggleClass('fa-play fa-pause');
                                });

                                wavesurfer_mt_{{ $index2 }}.on('audioprocess', function () {
                                    let time = Math.floor(wavesurfer_mt_{{ $index2 }}.getCurrentTime());
                                    $('#currentTime-mt-{{ $index2 }}').text(formatTime(time));
                                });
                            } else {
                                console.error("Track file not found: " + trackUrlMt);
                            }
                        })
                        .catch(error => console.error("Error fetching track:", error));
                }
            @endforeach
            
            // Music Beats
            @foreach ($music_beats as $index20 => $music_beat)
                if ($('#waveform-{{ $index20 }}').length) {
                    let wavesurfer_{{ $index20 }} = WaveSurfer.create({
                        container: '#waveform-{{ $index20 }}',
                        waveColor: 'gray',
                        progressColor: 'orange',
                        barWidth: 3,
                        barGap: 2,
                        barHeight: 2,
                        height: 80,
                        normalize: true,
                        backend: 'WebAudio'
                    });

                    let trackUrlMb = '{{ asset("public/assets/frontend/audios/" . $music_beat["track"]) }}';

                    fetch(trackUrlMb, { method: 'HEAD' })
                        .then(response => {
                            if (response.ok) {
                                wavesurfer_{{ $index20 }}.load(trackUrlMb);

                                $('#playPause-{{ $index20 }}').click(function () {
                                    wavesurfer_{{ $index20 }}.playPause();
                                    $(this).find('i').toggleClass('fa-play fa-pause');
                                });

                                wavesurfer_{{ $index20 }}.on('audioprocess', function () {
                                    let time = Math.floor(wavesurfer_{{ $index20 }}.getCurrentTime());
                                    $('#currentTime-{{ $index20 }}').text(formatTime(time));
                                });
                            } else {
                                console.error("Track file not found: " + trackUrlMb);
                            }
                        })
                        .catch(error => console.error("Error fetching track:", error));
                }
            @endforeach
        });
    </script>
@endpush
