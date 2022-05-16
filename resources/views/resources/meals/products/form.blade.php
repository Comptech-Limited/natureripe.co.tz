<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meals / '. $meal->name . ' / Products / Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ isset($product) ? route('resources.meals.products.update', ['meal' => $meal, 'product' => $product]) : route('resources.meals.products.store', ['meal' => $meal]) }}" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        @isset($product)
                            @method("patch")
                        @endisset
                        {{-- {{ dd($products->toArray() }} --}}
                        <x-ui.core.select name="product_id" label="Choose Product" :options="$products" value="{{ isset($product) ? $product->id : '' }}" />
                        <x-ui.core.input type="file" name="featured_image" label="Related Meal Image" />

                        <div class="my-2"></div>
                        {{-- <x-ui.core.text-area name="descriptin" label="Description" value="{{ isset($meal) ? $meal->description : '' }}" />
                        <x-ui.core.text-area name="preparation" label="Preparation" value="{{ isset($meal) ? $meal->preparation : '' }}" /> --}}
                        <x-ui.buttons.elevated type="submit" title="Submit" /> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>