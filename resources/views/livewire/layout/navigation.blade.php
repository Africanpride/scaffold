<div id="application-sidebar"
    class="soft-scrollbar overflow-x-auto hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 left-0 bottom-0 z-[60] md:w-2/12 bg-white border-r  pt-5 pb-10 overflow-y-auto scrollbar-y lg:block lg:translate-x-0 lg:right-auto lg:bottom-0 dark:scrollbar-y dark:bg-black dark:border-slate-800 scrollbar-thin
    scrollbar-thumb-firefly-800 scrollbar-track-gray-300 overflow-x-hidden overflow-y-scroll">
    <div class="px-4">
        <a class="flex-none text-xl font-semibold dark:text-white" href="{{ url('/') }}"
            aria-label="Brand">{{ config('app.name') }}</a>
    </div>

    <nav class="hs-accordion-group p-4 w-full flex flex-col flex-wrap "
    data-hs-accordion-always-open>
        <ul class="space-y-1.5">

            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-700 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                    href="{{ url('/dashboard') }}">
                    <span class="flex ">
                        <x-heroicon-o-building-office-2 class="w-6 h-6 text-current" />
                    </span>
                    <span class=" capitalize">Dashboard</span>
                </a>
            </li>

            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-700 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                    href="{{ route('staff') }}">
                    <span class="flex ">
                        <x-heroicon-o-user-circle class="w-6 h-6 text-current" />
                    </span>
                    <span class=" capitalize">Staff</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-700 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                    href="{{ url('doctor') }}">
                    <span class="flex ">
                        {{-- <x-lucide-album class="w-6 h-6 text-gray-500"/> --}}

                        <x-lucide-activity class="w-6 h-6 text-current" />

                    </span>
                    <span class=" capitalize">Doctors</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-700 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                    href="{{ url('patients') }}">
                    <span class="flex ">
                        <x-heroicon-o-identification class="w-6 h-6 text-current" />

                    </span>
                    <span class=" capitalize">Patients</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-700 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                    href="{{ url('/invoice') }}">
                    <span class="flex ">
                        <x-heroicon-o-document-check class="w-6 h-6 text-current" />


                    </span>
                    <span class=" capitalize">invoice</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-700 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                    href="{{ route('insurance')  }}">
                    <span class="flex ">
                        <x-heroicon-o-lifebuoy class="w-6 h-6 text-current" />


                    </span>
                    <span class=" capitalize">Insurance</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-700 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                    href="{{ url('manage-appointment') }}">
                    <span class="flex ">
                        <x-lucide-alarm-clock class="w-6 h-6 text-current" />


                    </span>
                    <span class=" capitalize">Appointments</span>
                </a>
            </li>

            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-700 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                    href="{{ url('manage-treatment') }}">
                    <span class="flex ">
                        <x-lucide-cross class="w-6 h-6 text-current" />


                    </span>
                    <span class=" capitalize">Treatments</span>
                </a>
            </li>


        </ul>

        <hr class="my-6 border-firefly-100 dark:border-slate-800" />

        <ul>
            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-700 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                    href="{{ url('manage-roles') }}">
                    <span class="flex ">
                        <x-heroicon-o-document-check class="w-6 h-6 text-current" />


                    </span>
                    <span class=" capitalize">Roles & Permissions</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-700 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                    href="{{ url('logs') }}">
                    <span class="flex ">
                        <x-heroicon-o-finger-print class="w-6 h-6 text-current" />


                    </span>
                    <span class=" capitalize">Authentication Logs</span>
                </a>
            </li>
        </ul>
    </nav>
    {{-- <div class="absolute bottom-2 w-full flex justify-between items-center gap-4 overflow-hidden px-5">
        <livewire:admin.nav-icons />
    </div> --}}
</div>
