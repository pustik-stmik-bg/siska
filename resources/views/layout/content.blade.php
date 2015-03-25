<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {!! $info['submodName'] !!}
            <small>{!! $info['submodAction'] !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url('/') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>
                <a href="{!! url('/' . $info['moduleSlug']) !!}">{!! $info['moduleName'] !!}</a>
            </li>
            <li class="active">
                <a href="{!! url('/' . $info['moduleSlug'] . '/' . $info['submodSlug']) !!}">{!! $info['submodName'] !!}</a>
            </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @yield('content')
    </section>
</div>
