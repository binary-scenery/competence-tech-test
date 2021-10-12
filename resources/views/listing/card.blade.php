<div class="p-3 mb-3 shadow bg-white rounded-sm border-gray-200">
    <h3 class="font-bold mb-3">{{ $listing->title }}</h3>
    <h4 class="float-left mr-4 mb-3"><i class="fa-solid fa-location-dot text-green-600 mr-3"></i> {{ $listing->location}}</h4>
    <h4><i class="fa-solid fa-sterling-sign text-green-600 mr-3"></i> {{ number_format($listing->lower_range) }} - {{ number_format($listing->upper_range) }}</h4>
    <p class="clear-both mb-3">{{ $listing->description }}</p>
    <a href="#" class="bg-gray-400 text-white rounded-sm px-3">More Details</a>
    <a href="#" class="bg-green-600 text-white rounded-sm px-3">Apply</a>
</div>