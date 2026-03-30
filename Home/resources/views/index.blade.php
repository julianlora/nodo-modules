<x-applayoutvue::layouts.master>
    <h1>Hello World</h1>

    <p>Module: {!! config('home.name') !!}</p>

    @foreach($products as $product)
    {{ $product->name }}
    @endforeach
</x-applayoutvue::layouts.master>
