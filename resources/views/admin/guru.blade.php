<x-tamplate-layout>
<div class="rounded-tl-3xl bg-gradient-to-r from-purple-500 to-gray-800 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2">{{$title}}</h3>
        </div>
<main>
<div class="col-span-6 p-4">
        <a href="{{route ('guru.create')}}"><button class="px-4 py-1 text-sm rounded bg-white text-blue-600 font-semibold border border-blue-200 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none">Tambah</button>
       </a>
        <a href="#"><button class="px-4 py-1 text-sm rounded bg-white text-blue-600 font-semibold border border-blue-200 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none">Konfirmasi</button>
        </a>
    </div>
<div class="rounded sm:px-1 sm:px-1 sm:bg-gray-100">
    <table class="min-w-full divide-y">
    <thread class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tandai</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIP</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Option</th>
        </tr>
    </thread>
    <tbody class="divide-y divide-gray-200">
        <?php $no=1;?>
        @foreach ($guru as $guru)
            <tr>
            <td class="px-6 py-4 whitespace-nowrap"><input type="checkbox" name="" id=""></td>
            <td class="px-6 py-4 whitespace-nowrap">{{$guru->nip}}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{$guru->nama}}</td>
            <td class="px-6 py-4 whitespace-nowrap">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
            {{$guru->status}}
            </td>
            <td class="px-6 py-4 whitespace-nowrap">{{$guru->jabatan}}</td>
            <td class="px-6 py-4 whitespace-nowrap" >
            <a href="{{ route('guru.edit',$guru->id )}}"><button class="px-4 py-1 text-sm rounded text-green-600 font-semibold border border-green-200 hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-none">Edit</button></a> | 
            <form action="{{route('guru.destroy',$guru->id)}}" method="POST">
                @csrf
                @method('DELETE')
               <button class="px-4 py-1 text-sm rounded text-red-600 font-semibold border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none">Hapus</button></a>
            </form>
            </td>
            </tr>
    <?php $no++; ?>
    @endforeach
    </tbody>
    </table>
 </div> 
</main>
</x-tamplate-layout>