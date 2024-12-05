<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-72 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 "
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white ">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/sistem-monitoring-mahasiswa"
                   class="flex items-center p-2 rounded-lg group 
                   {{ request()->is('sistem-monitoring-mahasiswa') ? 'bg-primary-600 hover:bg-primary-700 text-white' : 'text-gray-900  hover:bg-gray-100' }}">
                    <svg class="w-5 h-5 transition duration-75 {{ request()->is('sistem-monitoring-mahasiswa') ? 'text-white' : 'text-gray-500 group-hover:text-gray-900'}}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <hr class="h-px my-8 bg-gray-200 border-0 ">
            <li>
                <a href="/sistem-monitoring-mahasiswa/daftar-nilai"
                class="flex items-center p-2 rounded-lg group 
                {{ request()->is('sistem-monitoring-mahasiswa/daftar-nilai') ? 'bg-primary-600 hover:bg-primary-700 text-white' : 'text-gray-900  hover:bg-gray-100' }}">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75 {{ request()->is('sistem-monitoring-mahasiswa/daftar-nilai') ? 'text-white' : 'text-gray-500 group-hover:text-gray-900'}}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 22">
                        <path fill="currentColor" d="M18 22a2 2 0 0 0 2-2V8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2zM13 4l5 5h-5zM7 8h3v2H7zm0 4h10v2H7zm0 4h10v2H7z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Daftar Nilai Mahasiswa</span>
                </a>
            </li>
            <li>
                <a href="{{ route('input-nilai.create') }}"
                class="flex items-center p-2 rounded-lg group 
                {{ request()->is('sistem-monitoring-mahasiswa/input-nilai') ? 'bg-primary-600 hover:bg-primary-700 text-white' : 'text-gray-900  hover:bg-gray-100' }}">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75 {{ request()->is('sistem-monitoring-mahasiswa/input-nilai') ? 'text-white' : 'text-gray-500 group-hover:text-gray-900'}}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 22">
                        <path fill="currentColor" fill-rule="evenodd"
                                d="M7.345 4.017a42.3 42.3 0 0 1 9.31 0c1.713.192 3.095 1.541 3.296 3.26a40.7 40.7 0 0 1 0 9.446c-.201 1.719-1.583 3.068-3.296 3.26a42.3 42.3 0 0 1-9.31 0c-1.713-.192-3.095-1.541-3.296-3.26a40.7 40.7 0 0 1 0-9.445a3.734 3.734 0 0 1 3.295-3.26M12 7.007a.75.75 0 0 1 .75.75v3.493h3.493a.75.75 0 1 1 0 1.5H12.75v3.493a.75.75 0 0 1-1.5 0V12.75H7.757a.75.75 0 0 1 0-1.5h3.493V7.757a.75.75 0 0 1 .75-.75"
                                clip-rule="evenodd" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Input Nilai Mahasiswa</span>
                </a>
            </li>
            
            <hr class="h-px my-8 bg-gray-200 border-0 ">
            <li>
                <a href="/sistem-monitoring-mahasiswa/mahasiswa"
                class="flex items-center p-2 rounded-lg group 
                {{ request()->is('sistem-monitoring-mahasiswa/mahasiswa') ? 'bg-primary-600 hover:bg-primary-700 text-white' : 'text-gray-900  hover:bg-gray-100' }}">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75 {{ request()->is('sistem-monitoring-mahasiswa/mahasiswa') ? 'text-white' : 'text-gray-500 group-hover:text-gray-900'}}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 18">
                        <path
                            d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Mahasiswa</span>
                </a>
            </li>
            <li>
                <a href="/sistem-monitoring-mahasiswa/matakuliah"
                class="flex items-center p-2 rounded-lg group 
                {{ request()->is('sistem-monitoring-mahasiswa/matakuliah') ? 'bg-primary-600 hover:bg-primary-700 text-white' : 'text-gray-900  hover:bg-gray-100' }}">
                    <svg class="flex-shrink-0 w-6 h-6 transition duration-75 {{ request()->is('sistem-monitoring-mahasiswa/matakuliah') ? 'text-white' : 'text-gray-500 group-hover:text-gray-900'}}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M11 16H3v3q0 .825.588 1.413T5 21h6zm2 0v5h6q.825 0 1.413-.587T21 19v-3zm-2-2V9H3v5zm2 0h8V9h-8zM3 7h18V5q0-.825-.587-1.412T19 3H5q-.825 0-1.412.588T3 5z" />
                    </svg>
                    <span class="flex-1 ms-2 whitespace-nowrap">Matakuliah</span>

                </a>
            </li>
            <li>
                <a href="/sistem-monitoring-mahasiswa/dosen"
                class="flex items-center p-2 rounded-lg group 
                {{ request()->is('sistem-monitoring-mahasiswa/dosen') ? 'bg-primary-600 hover:bg-primary-700 text-white' : 'text-gray-900  hover:bg-gray-100' }}">
                    <svg class="flex-shrink-0 w-6 h-6 transition duration-75 {{ request()->is('sistem-monitoring-mahasiswa/dosen') ? 'text-white' : 'text-gray-500 group-hover:text-gray-900'}}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 22">
                        <path fill="currentColor" d="M6 17c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1H6m9-9a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3a3 3 0 0 1 3 3M3 5v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2"/>
                    </svg>
                    <span class="flex-1 ms-2 whitespace-nowrap">Dosen</span>
                </a>
            </li>
            {{-- <li>
                <a href="/sistem-monitoring-mahasiswa/tahunajar"
                class="flex items-center p-2 rounded-lg group 
                {{ request()->is('sistem-monitoring-mahasiswa/tahunajar') ? 'bg-primary-600 hover:bg-primary-700 text-white' : 'text-gray-900  hover:bg-gray-100' }}">
                    <svg class="flex-shrink-0 w-6 h-6 transition duration-75 {{ request()->is('sistem-monitoring-mahasiswa/tahunajar') ? 'text-white' : 'text-gray-500 group-hover:text-gray-900'}}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 22">
                        <path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7zm-5-9a1 1 0 0 1 1 1v1h2a2 2 0 0 1 2 2v3H3V7a2 2 0 0 1 2-2h2V4a1 1 0 0 1 2 0v1h6V4a1 1 0 0 1 1-1"/></g>
                    </svg>
                    <span class="flex-1 ms-2 whitespace-nowrap">Tahun Ajaran</span>
                </a>
            </li> --}}
        </ul>
    </div>
</aside>