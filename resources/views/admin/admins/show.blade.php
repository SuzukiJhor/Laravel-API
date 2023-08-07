@extends('admin.layouts.app')

@section('title', "Detalhes do Administrador {$admin->name}")

@section('content')
    <h1 class="w-full text-3xl text-black pb-6">
        Detalhes do Usuário {{ $admin->name }}
    </h1>

    <div class="flex flex-wrap">
        <div class="w-full my-6 pr-0 lg:pr-2">
            <div class="leading-loose">
                <form class="p-10 bg-white rounded shadow-xl" action="{{ route('admins.destroy', $admin->id) }}" method="POST">
                    <ul>
                        <li>
                            <div class="flex-shrink-0 w-10 h-10">
                                <img class="w-full h-full rounded-full"
                                    src="{{ $admin->image ? url("storage/{$admin->image}") : url('images/user.png') }}"
                                    alt="{{ $admin->name }}" />
                            </div>
                        </li>
                        <li>{{ $admin->name }}</li>
                        <li>{{ $admin->email }}</li>
                    </ul>
                    @method('DELETE')
                    @csrf
                    <div class="mt-6">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-red-900 rounded" type="submit">
                            Deletar o Administrador {{ $admin->name }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
