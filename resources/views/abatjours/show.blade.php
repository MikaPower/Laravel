@extends('layout')
@section('content')




<div class="row">
    <div class="col 6">

        @if($abatjour->imagemodels->count())
        <div class="row">
            <div class="col-md-12">
                <strong>Original Image:</strong>
                <br/>
                <img src="/storage/images/{{$abatjour->imagemodels->filename}}" style="max-width: 100%;max-height:100%; height: auto;" alt="{{ $abatjour->imagemodels->filename  }}" />

            </div>
        </div>
    </div>
    @endif

</div>

@endsection
