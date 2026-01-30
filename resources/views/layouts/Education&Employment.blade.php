 <!-- Main Content -->
<div class="w-full max-w-2xl lg:max-w-5xl xl:max-w-6xl 
                bg-white rounded-lg rounded-t-none shadow-2xl 
                p-8 md:p-12 
                mx-auto -mt-[1px]">     
        <h2 class="font-palatino new roman sm:text-xl md:text-2xl lg:text-3xl font-bold text-[#850038] mb-6 text-center">
                Education and Employment
        </h2>
            <!-- Form Content -->
    <form class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
        @csrf
        <!-- Highest Educational Attainment -->
       <div class="relative w-full">
            <label for="educationalattainment" class="font-medium">What is your highest educational attainment? <span class="text-red-500 ml-1">*</span></label>
            <select id="educationalattainment" name="educationalattainment" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                <option disabled selected>Please Select</option>
                <option value="bachelorsdegree">Bachelor’s degree</option>
                <option value="postbaccalaureate">Post-baccalaureate diploma / certificate</option>
                <option value="mastersdegree">Master’s degree</option>
                <option value="postmasters">Post-master’s diploma / certificate</option>
                <option value="doctoral">Doctoral degree (PhD, EdD, DBA, etc.)</option>
            </select>
        </div>
        <div class="relative w-full">
            <!-- Undergraduate Degree -->
        <div class="relative w-full mt-8">
            <input required id="undergraddegree" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
            <label for="undergraddegree" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                What is your undergraduate degree?<span class="text-red-500 ml-1">*</span>
            </label>
        </div>
        </div>
        <div class="relative w-full">
            <label for="listofdegree" class="font-medium">
               Please list any degrees, diplomas, or certificates you have completed after earning your bachelor’s degree.<span class="text-red-500 ml-1">*</span>
            </label>
             <input required id="listofdegree" type="text" 
            class="peer w-full px-4 py-3 text-base bg-white outline-none
                    border-2 border-gray-300 rounded-md
                    focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                    transition-colors mt-2"/>
            <p class="text-[12px] text-black-500 mt-1">Separate multiple entries with a comma.</p>
        </div>
        <div class="relative w-full">
            <div class="relative w-full mt-14">
                <input required id="lastschoolattended" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
                <label for="lastschoolattended" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                    What was the last school you attended?<span class="text-red-500 ml-1">*</span>
                </label>
            </div>
        </div>
             <!-- Primary Source Income -->
       <div class="relative w-full">
            <label for="income" class="font-medium">Primary Source of Income <span class="text-red-500 ml-1">*</span></label>
            <select id="income" name="income" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                <option disabled selected>Please Select</option>
                <option value="employeed">Employed (salary from an employer)</option>
                <option value="self-employeed">Self-employed / Freelance / Professional practice</option>
                <option value="combination">Combination of employment and self-employment</option>
                <option value="passiveincome">Passive income (e.g., investments, rental, family trust)</option>
                <option value="notearning">Not currently earning income</option>
            </select>
        </div>
         <div class="relative w-full mt-7">
                <input required id="nameofemployer" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
                <label for="nameofemployer" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                    Name of Employer<span class="text-red-500 ml-1">*</span>
                </label>
        </div>
        <div class="relative w-full mt-7">
                <input required id="natureofwork" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
                <label for="natureofwork" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                    Nature of Work or Profession<span class="text-red-500 ml-1">*</span>
                </label>
        </div>
        <div class="relative w-full mt-[-2]"> 
             <div class="relative w-full">
            <label for="income" class="font-medium">Monthly Gross Earnings (before taxes) <span class="text-red-500 ml-1">*</span></label>
            <select id="income" name="income" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                <option disabled selected>Please Select</option>
                <option value="below20k">Below ₱20,000</option>
                <option value="39k">₱20,000 - ₱39,999</option>
                <option value="59k">₱40,000 - ₱59,999</option>
                <option value="79k">₱60,000 - ₱79,999</option>
                <option value="99k">₱80,000 - ₱99,999</option>
                <option value="149k">₱100,000 - ₱149,999</option>
                <option value="150kup">₱150,000 or higher</option>
            </select>
        </div>
        </div>
        <div class="relative w-full">
            <div class="max-w-md space-y-3">
        <p class="font-medium">
            Primary Source(s) of Funding for Your Graduate Studies<br> (select all that apply)
            <span class="text-red-500">*</span>
        </p>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Personal income from employment or self-employment</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Savings / personal funds</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Family support</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>UP scholarship or fellowship</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Government scholarship (non-UP)</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Private scholarship or fellowship</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Graduate assistantship</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Employer sponsorship/study leave with pay</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Educational loan</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Passive income</span>
        </label>

        <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4">
            <span>Other (Please Specify)</span>
        </label>
    </div>
    <div class="relative w-full mt-6"> 
        <div class="relative w-full">
            <input required id="specifyscholarship" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
                <label for="specifyscholarship" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                    Please specify the scholarship.<span class="text-red-500 ml-1">*</span>
                </label>
        </div>
    </div>
    </div>
       
        @include('layouts.button')
    </form>
</div>
            
