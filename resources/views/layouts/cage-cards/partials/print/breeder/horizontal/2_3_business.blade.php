@extends('layouts.cage-cards.partials.print.layout')

@section('content')
    @php $index = 1; @endphp
    @foreach($entitiesDataMap as $entityDataItem)
        <div class="box-wrapper">
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-4"><img src="{{ public_path('img').'/pedigree_logo.png' }}" style="max-width:100%"></div>
                    <div class="col-xs-8">
                        <h3 style="padding-left: 10px;">
                            @if(isset($entityDataItem['fields'][1]))
                                <small>{!! $entityDataItem['fields'][1]['value'] !!}</small>
                            @endif
                            @if(isset($entityDataItem['fields'][2]))
                                <strong>{!! $entityDataItem['fields'][2]['value'] !!}</strong>
                            @endif
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4"><img style="qr" src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(150)->generate($entityDataItem['url'])) }} "></div>
                    <div class="col-xs-8">
                        @if(isset($entityDataItem['fields'][3]))
                            <strong> {!! $entityDataItem['fields'][3]['name'] !!}</strong>
                            {!! $entityDataItem['fields'][3]['value'] !!}
                            <br />
                        @endif
                        @if(isset($entityDataItem['fields'][4]))
                            <strong> {!! $entityDataItem['fields'][4]['name'] !!}</strong>
                            {!! $entityDataItem['fields'][4]['value'] !!}
                            <br />
                        @endif
                        @if(isset($entityDataItem['fields'][5]))
                            <strong> {!! $entityDataItem['fields'][5]['name'] !!}</strong>
                            {!! $entityDataItem['fields'][5]['value'] !!}
                            <br />
                        @endif
                        @if(isset($entityDataItem['fields'][6]))
                            <strong> {!! $entityDataItem['fields'][6]['name'] !!}</strong>
                            {!! $entityDataItem['fields'][6]['value'] !!}
                            <br />
                        @endif
                        @if(isset($entityDataItem['fields'][7]))
                            <strong> {!! $entityDataItem['fields'][7]['name'] !!}</strong>
                            {!! $entityDataItem['fields'][7]['value'] !!}
                            <br />
                        @endif
                        @if(isset($entityDataItem['fields'][8]))
                            <strong> {!! $entityDataItem['fields'][8]['name'] !!}</strong>
                            {!! $entityDataItem['fields'][8]['value'] !!}
                            <br />
                        @endif
                        @if(isset($entityDataItem['fields'][9]))
                            <strong> {!! $entityDataItem['fields'][9]['name'] !!}</strong>
                            {!! $entityDataItem['fields'][9]['value'] !!}
                            <br />
                        @endif
                        @if(isset($entityDataItem['fields'][10]))
                            <strong> {!! $entityDataItem['fields'][10]['name'] !!}</strong>
                            {!! $entityDataItem['fields'][10]['value'] !!}
                            <br />
                        @endif
                        @if(isset($entityDataItem['fields'][11]))
                            <strong> {!! $entityDataItem['fields'][11]['name'] !!}</strong>
                            {!! $entityDataItem['fields'][11]['value'] !!}
                            <br />
                        @endif
                    </div><!-- /.col-xs-7 -->
                </div><!-- /.row -->
            </div><!-- /.box-body -->
        </div><!-- /.box-wrapper -->
        @if($index < count($entitiesDataMap))
            <div class="page-break"></div>
        @endif
        @php $index++; @endphp
    @endforeach
@endsection

