{{-- Button Group Component --}}
<div class="col-span-1 md:col-span-2">
    <div class="flex flex-col sm:flex-row justify-between gap-4 sm:gap-3 mt-6">
        <!-- Left side - Back Button -->
        <button 
            id="backBtn"
            type="button"
            class="w-full sm:w-auto px-8 py-3 border-2 border-gray-400 text-black-700 
                    font-semibold rounded hover:bg-gray-50 transition-colors duration-200"
            onclick="history.back()">
            Back
        </button>
        
        <!-- Right Side - Save and Next Buttons -->
        <!--
<div class="flex flex-col sm:flex-row gap-4 sm:gap-3 justify-end">
            <button 
                id="saveBtn"
                type="submit"
                name="action"
                value="save"
                class="w-full sm:w-auto px-8 py-3 border-2 border-gray-400 text-black-700 
                        font-semibold rounded hover:bg-gray-50 transition-colors duration-200">
                Save
            </button>
-->
            
            <button
                id="nextBtn"
                type="submit"
                name="action"
                value="next"
                class="w-full sm:w-auto px-8 py-3 bg-[#850038] text-white font-semibold rounded hover:bg-[#FFAD0D]
                         transition-colors duration-200">
                Next
            </button>
        </div>
    </div>
</div>