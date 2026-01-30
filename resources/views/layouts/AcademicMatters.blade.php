 <!-- Main Content -->
<div class="w-full max-w-2xl lg:max-w-5xl xl:max-w-6xl 
                bg-white rounded-lg rounded-t-none shadow-2xl 
                p-8 md:p-12 
                mx-auto -mt-[1px]"> 
        <h2 class="font-palatino new roman sm:text-xl md:text-2xl lg:text-3xl font-bold text-[#850038] mb-6 text-center">
                Other Academic Matters
        </h2>
            <!-- Form Content -->
    <form class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
        @csrf
        <!-- Senior High School Attended -->
        <div class="relative w-full">
            <input required id="seniorhighschoolattended" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
            <label for="seniorhighschoolattended" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                Senior High School Attended <span class="text-red-500 ml-1">*</span>
            </label>
        </div>

        <!-- Location Of High School -->
        <div class="relative w-full">
            <input required id="locationofhighschool" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
            <label for="locationofhighschool" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                Location of High School  <span class="text-red-500 ml-1">*</span>
            </label>
        </div>

       <div class="relative w-full">
            <label for="honorsreceived" class="font-medium">Honors received in Senior High School <span class="text-red-500 ml-1">*</span></label>
            <select id="honorsreceived" name="sexatbirth" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                <option disabled selected>Please Select</option>
                <option value="none">None</option>
                <option value="honor">with Honors</option>
                <option value="highhonor">with High Honors</option>
                <option value="highesthonor">with Highest Honors</option>
            </select>
        </div>

        <!-- Article 370 Info + Preferred Name -->
       <div class="relative w-full">
            <label for="scholorship" class="font-medium">
                Are you on a scholarship other than <span class="font-semibold">RA 10931</span>
                <span class="text-red-500 ml-1">*</span>
            </label>
            <select id="honorsreceived" name="sexatbirth" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                <option disabled selected>Please Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
             <p class="text-[12px] text-black-500 mt-1">(e.g. from government agencies or private institutions)?</p>
        </div>
            <!-- Specify Scholarship -->
        <div class="col-span-1 md:col-span-2">
            <div class="relative w-full">
                <input required id="specifyscholarship" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
                    <label for="specifyscholarship" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                        Please specify the scholarship. <span class="text-red-500 ml-1">*</span>
                    </label>
            </div>
        </div>
        @include('layouts.button')
    </form>
</div>
            
