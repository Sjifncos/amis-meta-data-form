<div class="w-full max-w-2xl lg:max-w-5xl xl:max-w-6xl mx-auto mt-8 relative z-10 pb-10">
    <div class="w-full max-w-2xl lg:max-w-5xl xl:max-w-6xl mx-auto mt-8 relative z-10">
        <div class="overflow-x-auto">
            <ul class="flex text-xs sm:text-sm md:text-base font-medium border-b border-gray-300">
                <!-- Tab 1: Basic Information -->
                <li class="flex-1 min-w-[140px]">
                    <a href="?tab=basic" 
                       class="flex items-center justify-center text-center
                              min-h-[56px] px-3 py-2
                              {{ Request::get('tab', 'basic') == 'basic' ? 'bg-white text-[#850038] font-semibold border-t border-l border-r border-gray-300' : 'bg-gray-100 text-gray-600 border border-gray-300 border-b-0 hover:bg-white hover:text-[#850038]' }}
                              rounded-t-md leading-tight">
                        Basic Information
                    </a>
                </li>
                
                <!-- Tab 2: Contact Details -->
                <li class="flex-1 min-w-[140px]">
                    <a href="?tab=contact" 
                       class="flex items-center justify-center text-center
                              min-h-[56px] px-3 py-2
                              {{ Request::get('tab') == 'contact' ? 'bg-white text-[#850038] font-semibold border-t border-l border-r border-gray-300' : 'bg-gray-100 text-gray-600 border border-gray-300 border-b-0 hover:bg-white hover:text-[#850038]' }}
                              rounded-t-md leading-tight">
                        Contact Details
                    </a>
                </li>

                <!-- Tab 3: Academic Matters -->
                <li class="flex-1 min-w-[140px]">
                    <a href="?tab=academic" 
                       class="flex items-center justify-center text-center
                              min-h-[56px] px-3 py-2
                              {{ Request::get('tab') == 'academic' ? 'bg-white text-[#850038] font-semibold border-t border-l border-r border-gray-300' : 'bg-gray-100 text-gray-600 border border-gray-300 border-b-0 hover:bg-white hover:text-[#850038]' }}
                              rounded-t-md leading-tight">
                        Academic Matters
                    </a>
                </li>

                <!-- Tab 4: Education and Employment -->
                <li class="flex-1 min-w-[160px]">
                    <a href="?tab=education" 
                       class="flex items-center justify-center text-center
                              min-h-[56px] px-3 py-2
                              {{ Request::get('tab') == 'education' ? 'bg-white text-[#850038] font-semibold border-t border-l border-r border-gray-300' : 'bg-gray-100 text-gray-600 border border-gray-300 border-b-0 hover:bg-white hover:text-[#850038]' }}
                              rounded-t-md leading-tight">
                        Education and Employment
                    </a>
                </li>

                <!-- Tab 5: Other Information -->
                <li class="flex-1 min-w-[160px]">
                    <a href="?tab=other" 
                       class="flex items-center justify-center text-center
                              min-h-[56px] px-3 py-2
                              {{ Request::get('tab') == 'other' ? 'bg-white text-[#850038] font-semibold border-t border-l border-r border-gray-300' : 'bg-gray-100 text-gray-600 border border-gray-300 border-b-0 hover:bg-white hover:text-[#850038]' }}
                              rounded-t-md leading-tight">
                        Other Information
                    </a>
                </li>

                <!-- Tab 6: Undertakings -->
                <li class="flex-1 min-w-[160px]">
                    <a href="?tab=undertakings" 
                       class="flex items-center justify-center text-center
                              min-h-[56px] px-3 py-2
                              {{ Request::get('tab') == 'undertakings' ? 'bg-white text-[#850038] font-semibold border-t border-l border-r border-gray-300' : 'bg-gray-100 text-gray-600 border border-gray-300 border-b-0 hover:bg-white hover:text-[#850038]' }}
                              rounded-t-md leading-tight">
                        Undertakings
                    </a>
                </li>
            </ul>
        </div>
        
        <!-- Tab Content Area -->
            @php
                $activeTab = Request::get('tab', 'basic');
            @endphp
            
            @switch($activeTab)
                @case('basic')
                    @include('layouts.BasicInfo')
                    @break
                    
                @case('contact')
                    @include('layouts.ContactDetails')
                    @break
                    
                @case('academic')
                    @include('layouts.AcademicMatters')
                    @break
                    
                @case('education')
                    @include('layouts.Education&Employment')
                    @break
                    
                @case('other')
                    @include('layouts.OtherInformation')
                    @break
                    
                @case('undertakings')
                    @include('layouts.undertakings-form')
                    @break
                    
                @default
                    @include('layouts.BasicInfo')
            @endswitch
    </div>
</div>