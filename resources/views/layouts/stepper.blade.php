@php
    $steps = [
        ['name' => 'Basic Information', 'status' => 'completed'],
        ['name' => 'Contact Details', 'status' => 'pending'],
        ['name' => 'Academic Matters', 'status' => 'pending'],
        ['name' => 'Education & Employment', 'status' => 'pending'],
        ['name' => 'Other Information', 'status' => 'pending'],
        ['name' => 'Undertakings', 'status' => 'pending'],
    ];
@endphp

<div class="w-full py-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Mobile View (Below 768px) -->
        <div class="md:hidden">
            <div class="space-y-6">
                @foreach($steps as $index => $step)
                    <div class="flex flex-col items-center">
                        <!-- Step Circle and Label Container -->
                        <div class="flex flex-col items-center">
                            <!-- Step Circle -->
                            @if($step['status'] === 'completed')
                                <div class="flex items-center justify-center w-10 h-10 border-2 rounded-full mb-2 relative" style="background-color: #D5F0D9; border-color: #850003;">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" style="color: #0E6021;">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <!-- Connecting line on mobile (vertical) -->
                                    @if($index < count($steps) - 1)
                                        <div class="absolute left-1/2 top-full w-0.5 h-8 -translate-x-1/2 bg-gray-300"></div>
                                    @endif
                                </div>
                            @else
                                <div class="flex items-center justify-center w-10 h-10 bg-white border-2 border-gray-400 rounded-full mb-2 relative">
                                    <!-- Connecting line on mobile (vertical) -->
                                    @if($index < count($steps) - 1)
                                        <div class="absolute left-1/2 top-full w-0.5 h-8 -translate-x-1/2 bg-gray-300"></div>
                                    @endif
                                </div>
                            @endif

                            <!-- Step Label -->
                            <p class="text-center text-sm font-medium text-gray-900 max-w-xs">
                                {{ $step['name'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Tablet and Desktop View (768px and above) -->
        <div class="hidden md:block">
            <div class="w-full">
                <!-- Steps Container with Lines -->
                <div class="flex items-center justify-between mb-6 relative">
                    <!-- Background connecting line -->
                    <div class="absolute left-1/2 top-6 lg:top-8 h-1 lg:h-2 bg-gray-300 -translate-y-1/2 -translate-x-1/2 z-0" 
                         style="width: calc(100% - 6rem);">
                    </div>
                    
                    <!-- Progress line (colored portion for completed steps) -->
                    @php
                        $completedIndex = 0;
                        foreach($steps as $index => $step) {
                            if($step['status'] === 'completed') {
                                $completedIndex = $index + 1;
                            }
                        }
                        // Calculate the progress width based on number of segments
                        // We have 5 segments (6 steps - 1)
                        $totalSegments = count($steps) - 1;
                        $completedSegments = max(0, $completedIndex - 1);
                        $progressWidth = $totalSegments > 0 ? ($completedSegments / $totalSegments) * 100 : 0;
                    @endphp
                    
                    <div class="absolute left-1/2 top-6 lg:top-8 h-1 lg:h-2 bg-amber-500 -translate-y-1/2 -translate-x-1/2 z-0" 
                         style="width: calc((100% - 6rem) * {{ $progressWidth }} / 100); 
                                left: calc(50% - ((100% - 6rem) / 2));">
                    </div>
                    
                    @foreach($steps as $index => $step)
                        <div class="flex flex-col items-center relative z-10">
                            <!-- Step Circle and Label -->
                            <div class="flex flex-col items-center">
                                <!-- Step Circle -->
                                @if($step['status'] === 'completed')
                                    <div class="flex items-center justify-center w-12 h-12 lg:w-16 lg:h-16 border-4 rounded-full shadow-md mb-3" style="background-color: #D5F0D9; border-color: #850003;">
                                        <svg class="w-6 h-6 lg:w-8 lg:h-8" fill="currentColor" viewBox="0 0 20 20" style="color: #0E6021;">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                @else
                                    <div class="flex items-center justify-center w-12 h-12 lg:w-16 lg:h-16 bg-white border-4 border-gray-400 rounded-full shadow-md mb-3">
                                    </div>
                                @endif

                                <!-- Step Label -->
                                <p class="text-center text-xs sm:text-sm lg:text-base font-semibold text-gray-900 text-balance px-2">
                                    {{ $step['name'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Optional: Smooth transitions for future interactions */
    .step-circle {
        transition: all 0.3s ease;
    }

    .step-line {
        transition: background-color 0.3s ease;
    }
</style>