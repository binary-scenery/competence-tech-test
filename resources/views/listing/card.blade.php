<div class="p-3 mb-3 shadow bg-white rounded-sm border-gray-200">
    <h3 class="font-bold">{{ $listing->title }}</h3>
    <h4>{{ $listing->location}}</h4>
    <h4>{{ $listing->lower_range}} - {{ $listing->upper_range }}</h4>
    <p>{{ $listing->description }}</p>
</div>