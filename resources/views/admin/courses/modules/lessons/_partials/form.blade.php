@include('admin.includes.alerts')

@csrf
<div class="">
    <label class="block text-sm text-gray-600" for="name">Nome *</label>
    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" placeholder="Nome" aria-label="Name" name="name" value="{{ $lesson->name ?? old('name') }}">
</div>
<div class="">
    <label class="block text-sm text-gray-600" for="video">Videos *</label>
    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="video" name="video" type="text" placeholder="Video" aria-label="Video" name="video" value="{{ $lesson->video ?? old('video') }}">
</div>
<div class="">
    <label class="block text-sm text-gray-600" for="name">Descrição *</label>
    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="description" name="description" type="text" placeholder="Description" aria-label="Description" name="description" value="{{ $lesson->description ?? old('description') }}">
</div>

<div class="mt-6">
    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Enviar</button>
</div>