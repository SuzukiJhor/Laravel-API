@extends('admin.layouts.app')

@section('title', "detalhes do Curso {$course->name}")

@section('content')
    <h1 class="w-full text-3xl text-black pb-6">
        Detalhes do curso {{ $course->name }}
    </h1>
    <div class="flex flex-wrap">
        <div class="w-full my-6 pr-0 lg:pr-2">
            <div class="leading-loose">
                <form class="p-10 bg-white rounded shadow-xl" action="" method="POST">
                    <ul>
                        <li>
                            <div class="flex-shrink-0 w-40 h-40">
                                <img class="w-full h-full rounded-full"
                                    src="{{ $course->image ? url("storage/{$course->image}") : url('images/user.png') }}"
                                    alt="{{ $course->name }}" />
                            </div>
                        </li>
                        <br>
                        <li><strong>Name: </strong>{{ $course->name }}</li>
                        <li><strong>Disponibilidade: </strong>{{ $course->available ? 'Publicado':'Não publicado' }}</li>
                        <li><strong>Descrição: </strong>{{ $course->description ?? 'vazio' }}</li>
                    </ul>
                    @method('DELETE')
                    @csrf
                    <div class="mt-6">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-red-900 rounded" type="submit">
                            Deletar o Curso {{ $course->name }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
