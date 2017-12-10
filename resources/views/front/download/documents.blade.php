<?php
/**
 * Created by PhpStorm.
 * User: fahim foysal kamal
 * Date: 21-Nov-17
 * Time: 10:48 PM
 */
?>

@extends('front.master')

@section('title')
    Documents Download | IQAC-SUST
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-item">
                            <h2 class="welcome-text">Download IQAC Documents</h2>
                            <table class="table table-border table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>File Name</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                @php($i=1)
                                @foreach($files as $file)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $file->file_name }}</td>
                                        <td>{{ date('M d, Y', strtotime( $file->created_at )) }}</td>
                                        <td>
                                            <a href="{{ asset($file->uploaded_file) }}" target="_blank" class="btn btn-primary btn-xs">View / Download</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Upcoming Events</h4>
                    </div>
                    <div class="widget-inner">
                        @foreach($events as $event)
                            <div class="event-small-list clearfix">
                                <div class="calendar-small">
                                    <span class="s-month">{{ date('M', strtotime( $event->event_date )) }}</span>
                                    <span class="s-date">{{ date('d', strtotime( $event->event_date )) }}</span>
                                </div>
                                <div class="event-small-details">
                                    <h5 class="event-small-title"><a href="#">{{ $event->event_title }}</a></h5>
                                    <p class="event-small-meta small-text">{{ $event->event_place.', Time '.date('H:i A', strtotime( $event->event_time )) }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div> <!-- /.widget-inner -->
                </div><!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Our Gallery</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="gallery-small-thumbs clearfix">
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery1.jpg" title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery1.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery2.jpg" title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery3.jpg" title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery3.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery4.jpg" title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery4.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery5.jpg" title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery5.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery6.jpg" title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery6.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery7.jpg" title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery7.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery8.jpg" title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery8.jpg" alt="" />
                                </a>
                            </div>
                        </div> <!-- /.galler-small-thumbs -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div>
        </div>
    </div>
@endsection
