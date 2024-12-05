<x-monitor-head :tahunAjaranList="$tahunAjaranList">
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 ">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
			<div class="flex items-center justify-between">
				<div class="flex items-center justify-start rtl:justify-end">
				<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
					<span class="sr-only">Open sidebar</span>
					<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
					</svg>
				</button>
				<a href="#" class="flex ms-2 md:me-24">
					<img src="{{asset('img/logonondti.png')}}" class="h-6 me-2 sm:h-10" alt="Flowbite Logo" />
					<span class="self-center text-lg font-bold tracking-tighter text-primary-600 whitespace-nowrap ">Sistem Monitoring Mahasiswa</span>
				</a>
			</div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
					<div>
						<button type="button" class="flex text-sm bg-gray-100 rounded-full focus:ring-4 focus:ring-gray-300 " aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            <svg class="w-6 h-6 text-primary-600 lg:w-8 lg:h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2M8.5 9.5a3.5 3.5 0 1 1 7 0a3.5 3.5 0 0 1-7 0m9.758 7.484A7.99 7.99 0 0 1 12 20a7.99 7.99 0 0 1-6.258-3.016C7.363 15.821 9.575 15 12 15s4.637.821 6.258 1.984"/></g></svg>
                            </button>
					</div>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-200 rounded shadow " id="dropdown-user">
                    <div class="px-4 py-3" role="none">
						<p class="text-sm text-gray-900 font-bold" role="none">
							{{ auth()->user()->nama_dosen }}
						</p>
                    </div>
                    <ul class="py-1" role="none">
						<li>
							<a href="/sistem-monitoring-mahasiswa/profil" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 " role="menuitem">Profile</a>
						</li>
						
						<li>
							<form action="/sistem-monitoring-mahasiswa/logout" method="post">
								@csrf
								<button type="submit" class="w-full block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 text-start" role="menuitem">Sign out</button>
							</form>
						</li>
                    </ul>
                </div>
              </div>
          </div>
        </div>
    </nav>

    <div class="p-4 sm:ml-72 bg-gray-100 min-h-screen">
        <nav class="flex mt-16 mb-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="/sistem-monitoring-mahasiswa/dosen/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-600 ">
                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                </svg>
                Dosen
                </a>
            </li>
            <li>
                <div class="flex items-center">
                  <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2">Tambah Dosen</a>
                </div>
            </li>
            </ol>
        </nav>
        <div class="p-4 bg-white rounded-lg shadow flex justify-between items-start lg:items-center flex-nowrap flex-col lg:flex-row"> 
            <h2 class="text-xl lg:text-2xl tracking-tight font-extrabold text-gray-700">Tambah Dosen</h2>
        </div>
        
        <div class="p-4 bg-white rounded-lg shadow flex justify-between items-start lg:items-center flex-nowrap flex-col lg:flex-row my-4">
            <form class="w-full" method="POST" action="{{ route('dosen.store') }}">
                @csrf
                @method('POST')
                <div class="grid gap-2 md:gap-4 grid-cols-1 lg:grid-cols-12 mb-3">
                    <div class="col-span-12 lg:col-span-6">
                        <label for="nama_dosen" class="block mb-2 text-md font-medium text-gray-900">Nama Lengkap Dosen</label>
                        <input type="text" name="nama_dosen" id="nama_dosen" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="" required />
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <label for="npp" class="block mb-2 text-md font-medium text-gray-900">NPP</label>
                        <input type="text" name="npp" id="npp" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="" required />
                    </div>
                </div>
                <hr class="h-px my-4 bg-gray-200 border-0">
                <div class="grid gap-2 md:gap-4 grid-cols-1 lg:grid-cols-12 mb-3">
                    <div class="col-span-12 lg:col-span-6">
                        <label for="email" class="block mb-2 text-md font-medium text-gray-900">Email Dosen</label>
                        <input type="email" name="email_dosen" id="email_dosen" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="" required />
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <label for="password" class="block mb-2 text-md font-medium text-gray-900">Password Dosen</label>
                        <input type="password" name="password_dosen" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="" required />
                    </div>
                </div>
                <div class="grid gap-1 lg:gap-4  grid-cols-1">
                    <button type="submit" class="text-white bg-primary-600 mt-4 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2 text-center items-center transition">Simpan</button>
                </div>
                
            </form>
        </div>
      
</x-monitor-head>