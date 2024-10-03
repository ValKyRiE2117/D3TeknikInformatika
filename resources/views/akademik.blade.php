<x-layout>
    
    <section class="">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700 ">Matakuliah</h2>
                <p class="font-light text-gray-500 sm:text-xl"></p>
            </div> 
            <div class="">
                <table id="search-table">
                    <thead>
                        <tr>
                            <th>
                                <span class="flex items-center">
                                    Kode Matakuliah
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Nama Matakuliah
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Teori/Praktek
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    SKS
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Semester
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="font-medium text-gray-900 whitespace-nowrap">
                            <td>A22.53209</td>
                            <td>PENGANTAR SISTEM OPERASI DAN JARINGAN KOMPUTER</td>
                            <td>Teori</td>
                            <td>3</td>
                            <td>1</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>  
        </div>
    </section>
    <section class="">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-12 mb-6">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700 ">Kalender Akademik</h2>
                <p class="font-light text-gray-500 sm:text-xl">Universitas Dian Nuswantoro 2024/2025</p>
            </div> 
            <div class="">
            
                <img class="max-w-3xl rounded-lg mx-auto shadow-lg" src="{{asset('img/kalender.jpeg')}}" alt="image description">
            </div>  
        </div>
    </section>
</x-layout>

