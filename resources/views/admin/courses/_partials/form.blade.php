@include('admin.includes.alerts')

@csrf
<div class="">
    <label class="block text-sm text-gray-600" for="name">Nome *</label>
    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text"  placeholder="Nome" aria-label="Name" value="{{ $courses->name ?? old('name') }}">
</div>
<div class="py-2">
    <label class="block text-sm text-gray-600" for="available">
        <input class="" id="available" name="name" type="checkbox" aria-label="available" value="1" @checked($courses->available ?? false)>
        Disponível
    </label>
</div>
<div class="mt-2">
    <label class=" block text-sm text-gray-600" for="message">Imagem</label>
    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="password" name="image"
        type="file" placeholder="" aria-label="password">
</div>
<div class="mt-6">
    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Salvar</button>
</div>