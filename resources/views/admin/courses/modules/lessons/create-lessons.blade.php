@extends('admin.layouts.app')

@section('title', 'Cadastrar Nova Aula para o módulo {{ $module->name }}')

@section('content')
<h1 class="w-full text-3xl text-black pb-6">
    Adicionar Novo Aula para o Módulo <strong>{{ $module->name }}</strong>
</h1>

<div class="flex flex-wrap">
    <div class="w-full my-6 pr-0 lg:pr-2">
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" action="{{ route('lessons.store', $module->id) }}" method="POST" enctype="multipart/form-data">
                @include('admin.courses.modules.lessons._partials.form')
            </form>
        </div>
    </div>
</div>
@endsection