@extends('layouts.app')

@section('main')
<div class="container-fluid ">
<div class="row" >
    <div class="tab-div" >
        <b-tabs no-body pills card
        active-nav-item-class="nav-item-active"
        active-tab-class="tab-active"
        content-class=""align="center">
            <b-tab active>
                <template slot="title">
                    <b-icon-person class=""></b-icon-person> About
                </template>
                <div class="row">
                    <div class="col-lg-12">
                        @include('inc.about')
                    </div>
                </div>
            </b-tab>
            <b-tab title="Projects">
                <template slot="title">
                    <b-icon-briefcase class=""></b-icon-briefcase> Projects
                </template>
                @include('inc.projects')
            </b-tab>
            <b-tab class="last-tab" title="Interests">
                <template slot="title">
                    <b-icon-lightning class=""></b-icon-lightning> Interests
                </template>
                @include('inc.interests')
            </b-tab>
      </b-tabs>
    </div>
</div>
</div>
@endsection

