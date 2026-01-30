 <!-- Main Content -->
<div class="w-full max-w-2xl lg:max-w-5xl xl:max-w-6xl 
                bg-white rounded-lg rounded-t-none shadow-2xl 
                p-8 md:p-12 
                mx-auto -mt-[1px]"> 
        <h2 class="font-palatino new roman sm:text-xl md:text-2xl lg:text-3xl font-bold text-[#850038] mb-6 text-center">
                Undertakings
        </h2>
        <div class="px-6 sm:px-8 py-8 sm:py-12">
            <form action="">
                @csrf
            <!-- Confirmation Checkbox -->
            <div class="mb-6 flex flex-col gap-2">
                <label for="confirmation" class="font-semibold text-black-800 text-sm sm:text-base cursor-pointer">
                    Confirmation
                    <span class="text-red-600">*</span>
                </label>
                <div class="flex items-start gap-4">
                    <input 
                        type="checkbox" 
                        id="confirmation" 
                        class="mt-1 w-5 h-5 accent-[#0E6021] rounded cursor-pointer flex-shrink-0">
                    <label for="confirmation" class="text-gray-700 text-sm sm:text-base cursor-pointer leading-relaxed">
                        I confirm that all the information I provided in this form is true and correct.
                    </label>
                </div>
            </div>

            <!-- Data Privacy Checkbox -->
            <div class="mb-6 flex flex-col gap-2">
                <label for="data-privacy" class="font-semibold text-black-800 text-sm sm:text-base cursor-pointer">
                    Data Privacy
                    <span class="text-red-600">*</span>
                </label>
                <div class="flex items-start gap-4">
                    <input 
                        type="checkbox" 
                        id="data-privacy" 
                        class="mt-1 w-5 h-5 accent-[#0E6021] rounded cursor-pointer flex-shrink-0">
                    <label for="data-privacy" class="text-gray-700 text-sm sm:text-base cursor-pointer leading-relaxed text-justify">
                        I have read and understood UP’s Privacy Notice. I understand that UP Cebu needs 
                        to process my personal information to manage my student records.
                    </label>
                </div>
                <div class="flex items-start gap-4">
                     <label class="text-black-700 text-sm sm:text-base text-justify mt-4">
                        I hereby certify, by affixing my signature, that I grant my consent
                        to and recognize the authority of the University to process my personal and sensitive
                        personal information pursuant to the abovementioned Privacy Notice and other applicable laws.
                        <span class="text-red-600">*</span>
                    </label>
                </div>

                <!-- Signature Canvas -->
                <div class="flex flex-col items-center mt-4 space-y-2">
                    <canvas 
                        id="signatureCanvas" 
                        class="border-2 border-gray-400 rounded w-full sm:w-80 h-40 bg-white"
                    ></canvas>

                    <div class="flex space-x-2">
                        <button id="clearBtn" class="px-4 py-2 bg-[#980E0E] text-white rounded hover:bg-red-600">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.793 2.293a1 1 0 0 1 1.414 0l3 3a1 1 0 0 1 0 1.414l-3 3a1 1 0 0 1-1.414-1.414L14.086 
                                7H12.5C8.952 7 6 9.952 6 13.5S8.952 20 12.5 20s6.5-2.952 6.5-6.5a1 1 0 1 1 2 0c0 4.652-3.848
                                8.5-8.5 8.5S4 18.152 4 13.5 7.848 5 12.5 5h1.586l-1.293-1.293a1 1 0 0 1 0-1.414z"
                                fill="#FFFFFF"/>
                            </svg>
                        </button>
                        <button id="saveBtn" class="px-4 py-2 bg-[#0E6021] text-white rounded hover:bg-green-600">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Check">
                                <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"></rect>
                                <circle id="Oval" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" cx="12" cy="12" r="9">
                                </circle>
                                <path d="M8.5,12.5 L10.151,14.5638 C10.3372,14.7965 10.6843,14.8157 10.895,14.605 L15.5,10" id="Path" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round">
                                </path>
                                </g>
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
        </div>
            @include('layouts.buttonsubmit')
        </form>
    </div>
</div>
<script>
const canvas = document.getElementById('signatureCanvas');
const ctx = canvas.getContext('2d');

let drawing = false;

// Store last position for smooth lines
let lastX = 0;
let lastY = 0;

// Mouse Events
canvas.addEventListener('mousedown', (e) => {
    drawing = true;
    const rect = canvas.getBoundingClientRect();
    lastX = e.clientX - rect.left;
    lastY = e.clientY - rect.top;
});
canvas.addEventListener('mouseup', () => drawing = false);
canvas.addEventListener('mouseleave', () => drawing = false);
canvas.addEventListener('mousemove', draw);

// Touch Events for mobile
canvas.addEventListener('touchstart', (e) => {
    e.preventDefault();
    drawing = true;
    const rect = canvas.getBoundingClientRect();
    const touch = e.touches[0];
    lastX = touch.clientX - rect.left;
    lastY = touch.clientY - rect.top;
});
canvas.addEventListener('touchend', () => drawing = false);
canvas.addEventListener('touchmove', (e) => {
    e.preventDefault();
    if (!drawing) return;
    const rect = canvas.getBoundingClientRect();
    const touch = e.touches[0];
    const x = touch.clientX - rect.left;
    const y = touch.clientY - rect.top;
    ctx.beginPath();
    ctx.moveTo(lastX, lastY);
    ctx.lineTo(x, y);
    ctx.strokeStyle = 'black';
    ctx.lineWidth = 2;
    ctx.lineCap = 'round';
    ctx.stroke();
    lastX = x;
    lastY = y;
});

// Draw function for mouse
function draw(e) {
    if (!drawing) return;
    const rect = canvas.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    ctx.beginPath();
    ctx.moveTo(lastX, lastY);
    ctx.lineTo(x, y);
    ctx.strokeStyle = 'black';
    ctx.lineWidth = 2;
    ctx.lineCap = 'round';
    ctx.stroke();
    lastX = x;
    lastY = y;
}

// Clear button
document.getElementById('clearBtn').addEventListener('click', () => {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
});

// Save button
document.getElementById('saveBtn').addEventListener('click', () => {
    const dataURL = canvas.toDataURL();
    const link = document.createElement('a');
    link.href = dataURL;
    link.download = 'signature.png';
    link.click();
});
</script>
            
