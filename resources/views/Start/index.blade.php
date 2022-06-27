@extends('Layout.LayoutMaster')
@section('title')
<title>Início</title>
@endsection
@section('LayoutBody')
<main class="text-violet-50">
    {{-- NEWS --}}
    <div class="grid grid-cols-5 mt-8">
        <div class="col-span-1"></div>
        <div class="col-span-3 border-model">
            @include('Start.news')
        </div>
        <div class="col-span-1"></div>
    </div>
    <div class="grid grid-cols-10  mt-8">
        <div class="col-span-1"></div>
        <div class="col-span-8 border-model">
            <div class="grid grid-cols-2 rounded-lg bg-violet-700">
                <div class="col-span-1 p-4 flex justify-center items-center font-bold hover:bg-violet-900 hover:rounded-lg">LANÇAMENTO</div>
                <div class="col-span-1 p-4 flex justify-center items-center font-bold hover:bg-violet-900 hover:rounded-lg">MEUS LANÇAMENTOS</div>
            </div>
            <div class="grid 2xl:grid-cols-10 grid-cols-5 overflow-y-auto">
                @for ( $i = 0; $i < 20; $i++)
                    @include('model.ModelCard')
                @endfor
            </div>
        </div>
        <div class="col-span-1"></div>
    </div>
</main>
@endsection
