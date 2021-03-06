<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }} / {{ $product->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <p>{{ $product->featured_image_url }}</p> --}}
                    <div class="columns-3">
                        <img src="{{ Storage::url($product->product_image_transparent) }}" alt="" class="w-60" />
                        <img src="{{ $product->featured_image_url }}" alt="" class="w-60" />
                        
                        <div class="space-y-2">
                            <div>
                                <h6>Product Name</h6>
                                <p>{{ $product->name }}</p>
                            </div>
                            <div>
                                <h6>Product Description</h6>
                                <p>{{ $product->description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="columns-4 mt-10">
                        <div>
                            <h6>Nutrition Unit</h6>
                            <p>{{ $product->nutrition_unit }}</p>
                        </div>

                        <div>
                            <h6>Nutrition Calories</h6>
                            <p>{{ $product->nutrition_calories }}</p>
                        </div>

                        <div>
                            <h6>Nutrition Total Fat</h6>
                            <p>{{ $product->nutrition_total_fat }}</p>
                        </div>

                        <div>
                            <h6>Nutrition Saturated Fat</h6>
                            <p>{{ $product->nutrition_saturated_fat }}</p>
                        </div>

                        <div>
                            <h6>Nutrition Trans Fat</h6>
                            <p>{{ $product->nutrition_trans_fat }}</p>
                        </div>

                        <div>
                            <h6>Nutrition Cholesterol</h6>
                            <p>{{ $product->nutrition_cholesterol }}</p>
                        </div>

                        <div>
                            <h6>Nutrition Sodium</h6>
                            <p>{{ $product->nutrition_sodium }}</p>
                        </div>

                        <div>
                            <h6>Nutrition Carbohydrates</h6>
                            <p>{{ $product->nutrition_carbohydrates }}</p>
                        </div>

                        <div>
                            <h6>Nutrition Dietary Fiber</h6>
                            <p>{{ $product->nutrition_dietary_fiber }}</p>
                        </div>

                        <div>
                            <h6>Nutrition Sugers</h6>
                            <p>{{ $product->nutrition_sugers }}</p>
                        </div>

                        <div>
                            <h6>Nutrition Protein</h6>
                            <p>{{ $product->nutrition_protein }}</p>
                        </div>

                        <div>
                            <h6>Nutrition Vitamin C</h6>
                            <p>{{ $product->nutrition_vitamin_c }}</p>
                        </div>
                    </div>

                    <h3 class="mt-10">Slider Preview - Web </h3>
                    <div class="flex w-full">
                        <div class="flex-1 bg-center bg-cover bg-no-repeat flex items-center justify-center">
                            <img src="{{ Storage::url($product->picture_one) }}" alt="" class="h-full w-full object-cover" />
                        </div>
                        <div class="flex-1 bg-center bg-cover bg-no-repeat flex items-center justify-center">
                            <img src="{{ Storage::url($product->picture_two) }}" alt="" class="h-full w-full object-cover" />
                        </div>
                        <div class="flex-1 bg-center bg-cover bg-no-repeat flex items-center justify-center">
                            <img src="{{ Storage::url($product->picture_three) }}" alt="" class="h-full w-full object-cover" />
                        </div>
                    </div>

                    <h3 class="mt-10">Slider Preview - Mobile</h3>
                    <div class="inline-block bg-center bg-cover bg-no-repeat" style="background-image: url('{{ Storage::url($product->background_color)  }}')">
                        <img src="{{ Storage::url($product->picture_four) }}" alt="" class="object-cover h-80" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>