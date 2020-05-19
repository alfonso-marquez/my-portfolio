@extends('layouts.app')

@section('content')
    <div class="main container">
        <div class="tab-content">
            {{-- <div id="timeline" class="tab-pane fade show active">
                @include('inc.timeline')
            </div> --}}
            <div id="about" class="tab-pane fade show active">
                @include('inc.about')
            </div>
            <div id="projects" class="tab-pane fade">
                @include('inc.projects')
            </div>
            <div id="interests" class="tab-pane fade">
                @include('inc.interests')
            </div>
        </div>
    </div>
@endsection