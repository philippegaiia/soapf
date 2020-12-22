<div>
<!-- Categorie -->
<div class="mt-4">
    <x-label  for="category" :value="__('Catégorie Ingrédient')" />
    <select wire:model="selectedCategory" name="category" class="mt-1 block w-full py-2 px-3 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
    <option value="" selected>Sélectionner une catégorie</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id}}" > {{ $category->name }} </option>
        @endforeach
    </select>
    {{-- <x-input-error for="listing_category_id" class="mt-2" /> --}}
</div>


{{-- Ingrédient link to the selected category --}}

@if (!is_null($selectedCategory))

    <div class="mt-4">
        <x-label for="ingredient_id" :value="__('Catégorie Ingrédient')" />
        <select name="ingredient_id"  class="mt-1 block w-full py-2 px-3 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        <option value="" selected>Sélectionner une catégorie</option>
            @foreach ($ingredients as $ingredient)
                <option value="{{ $ingredient->id}}"> {{ $ingredient->name }} </option>
            @endforeach
        </select>
        <x-input-error for="ingredient_id" class="mt-2" />
    </div>

@endif
</div>
