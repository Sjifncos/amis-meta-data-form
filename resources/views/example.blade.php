I'm using the FlyonUI Tailwind CSS component library in my project. Please integrate the following component into my project:

Here are the code snippets for the block component: 

```html
<!-- Stepper -->
<div data-stepper="" class="w-full">
  <!-- Stepper Nav -->
  <ul class="relative flex flex-row gap-x-2">
    <li class="group flex flex-1 shrink basis-0 items-center gap-x-2" data-stepper-nav-item='{ "index": 1,  "isOptional": true }' >
      <span class="min-h-7.5 min-w-7.5 inline-flex items-center align-middle text-sm">
        <span class="stepper-active:text-bg-primary stepper-active:shadow-sm shadow-base-300/20 stepper-success:text-bg-primary stepper-success:shadow-sm stepper-completed:text-bg-success text-bg-soft-neutral flex size-7.5 shrink-0 items-center justify-center rounded-full font-medium" >
          <span class="stepper-success:hidden stepper-completed:hidden">1</span>
          <span class="icon-[tabler--check] stepper-success:block hidden size-4 shrink-0"></span>
        </span>
        <span class="text-base-content ms-2 max-sm:hidden">Step</span>
      </span>
      <div class="stepper-success:bg-primary stepper-completed:bg-success bg-neutral/20 h-px w-full flex-1 group-last:hidden" ></div>
    </li>
    <li class="group flex flex-1 shrink basis-0 items-center gap-x-2" data-stepper-nav-item='{ "index": 2,  "isOptional": true }' >
      <span class="min-h-7.5 min-w-7.5 inline-flex items-center align-middle text-sm">
        <span class="stepper-active:text-bg-primary stepper-active:shadow-sm shadow-base-300/20 stepper-success:text-bg-primary stepper-success:shadow-sm stepper-completed:text-bg-success stepper-error:text-bg-error text-bg-soft-neutral flex size-7.5 shrink-0 items-center justify-center rounded-full font-medium" >
          <span class="stepper-success:hidden stepper-completed:hidden">2</span>
          <span class="icon-[tabler--check] stepper-success:block hidden size-4 shrink-0"></span>
        </span>
        <span class="text-base-content ms-2 max-sm:hidden">Step</span>
      </span>
      <div class="stepper-success:bg-primary stepper-completed:bg-success bg-neutral/20 h-px w-full flex-1 group-last:hidden" ></div>
    </li>
    <li class="group flex flex-1 shrink basis-0 items-center gap-x-2" data-stepper-nav-item='{ "index": 3 }'>
      <span class="min-h-7.5 min-w-7.5 inline-flex items-center align-middle text-sm">
        <span class="stepper-active:text-bg-primary stepper-active:shadow-sm shadow-base-300/20 stepper-success:text-bg-primary stepper-success:shadow-sm stepper-completed:text-bg-success stepper-error:text-bg-error text-bg-soft-neutral flex size-7.5 shrink-0 items-center justify-center rounded-full font-medium" >
          <span class="stepper-success:hidden stepper-completed:hidden">3</span>
          <span class="icon-[tabler--check] stepper-success:block hidden size-4 shrink-0"></span>
        </span>
        <span class="text-base-content ms-2 max-sm:hidden">Step</span>
      </span>
      <div class="stepper-success:bg-primary stepper-completed:bg-success bg-neutral/20 h-px w-full flex-1 group-last:hidden" ></div>
    </li>
    <!-- End Item -->
  </ul>
  <!-- End Stepper Nav -->

  <!-- Stepper Content -->
  <div class="mt-5 sm:mt-8">
    <!-- First Content -->
    <div data-stepper-content-item='{ "index": 1 }'>
      <div class="border-base-content/40 bg-base-200/50 flex h-48 items-center justify-center rounded-xl border border-dashed p-4" >
        <h3 class="text-base-content/50 text-2xl">First content</h3>
      </div>
    </div>
    <!-- End First Content -->
    <!-- Second Content -->
    <div data-stepper-content-item='{ "index": 2 }' style="display: none;">
      <div class="border-base-content/40 bg-base-200/50 flex h-48 items-center justify-center rounded-xl border border-dashed p-4" >
        <h3 class="text-base-content/50 text-2xl">Second content</h3>
      </div>
    </div>
    <!-- End Second Content -->
    <!-- Third Content -->
    <div data-stepper-content-item='{ "index": 3 }' style="display: none;">
      <div class="border-base-content/40 bg-base-200/50 flex h-48 items-center justify-center rounded-xl border border-dashed p-4" >
        <h3 class="text-base-content/50 text-2xl">Third content</h3>
      </div>
    </div>
    <!-- End Third Content -->
    <!-- Final Content -->
    <div data-stepper-content-item='{ "isFinal": true }' style="display: none;">
      <div class="border-base-content/40 bg-base-200/50 flex h-48 items-center justify-center rounded-xl border border-dashed p-4" >
        <h3 class="text-base-content/50 text-2xl">Final content</h3>
      </div>
    </div>
    <!-- End Final Content -->
    <!-- Button Group -->
    <div class="mt-5 flex items-center justify-center sm:justify-between gap-x-2">
      <button type="button" class="btn btn-primary" data-stepper-back-btn="">
        <span class="icon-[tabler--chevron-left] text-primary-content rtl:rotate-180"></span>
        Back
      </button>
      <button type="button" class="btn btn-primary" data-stepper-skip-btn="" style="display: none;"> Skip </button>
      <button type="button" class="btn btn-primary" data-stepper-next-btn="">
        Next
        <span class="icon-[tabler--chevron-right] text-primary-content rtl:rotate-180"></span>
      </button>
      <button type="button" class="btn btn-primary" data-stepper-finish-btn="" style="display: none;"> Finish </button>
      <button type="reset" class="btn btn-primary" data-stepper-reset-btn="" style="display: none;"> Reset </button>
    </div>
    <!-- End Button Group -->
  </div>
  <!-- End Stepper Content -->
</div>
<!-- End Stepper -->
```
