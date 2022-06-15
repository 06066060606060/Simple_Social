<div x-data="{ modelOpen: false }">

    <button @click="modelOpen =!modelOpen">
    <i class="px-1 py-2 text-gray-700 fa-solid fa-comment-dots" onclick="CacherComm()"></i>
</button>

    <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
        role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"></div>

            <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-12 overflow-hidden transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                <section class="bg-gray-50">  
                  
                  </section>

            </div>
        </div>
    </div>
</div>
<script>
    function CacherComm() {
        console.log("ok");
        var updateElement = document.getElementById("comx");
        updateElement.classList.toggle("active");
    }
</script>