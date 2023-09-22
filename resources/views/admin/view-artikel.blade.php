@extends('admin.nav')

@section('content')

<main role="main" class="main-content">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show ">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>   
    @endif 
    <div class="container-fluid">
        <div class="box">
            <div class="box-header d-flex justify-content-between">
                <div>
                    <h1 class="justify-content-start">View Artikel</h1>
                </div>
                <div class="justify-content-end mb-3">
                    <a href="/admin/create-artikel" class="btn btn-info"><i class="bi bi-cloud-plus"> Create Artikel</i></a>
                </div>
            </div>       
        <div class="box-body">
            <table class="table table-bordered" style="width:100%; overflow-x: auto;">
                <thead style="text-align: center; white-space: nowrap">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Nama Kategori</th>
                        <th>Author</th>
                        {{-- <th>Deskripsi</th> --}}
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artikel as $item)
                    <tr>
                        <td style="text-align: center">{{$loop->iteration}}</td>
                        <td>{{$item->judul}}</td>
                        {{-- @if($item->gambar==null)
                        <td>Gambar Tidak Ada</td>
                        @else --}}
                        <td style="text-align: center"> <button data-bs-target="#exampleModalToggle1{{ $item->id }}" data-bs-toggle="modal" class="btn btn-info fe fe-eye"></button></td>
                         {{-- @endif --}}
                        <td style="text-align: center">{{$item->category->name_category}}</td>
                        <td style="text-align: center">{{$item->author}}</td>
                        {{-- <td>{{$item->deskripsi}}</td> --}}
                        <td style="text-align: center">{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y', 'id') }}</td>
                        <td style="text-align: center">
                            <button data-bs-target="#exampleModalToggle2{{ $item->id }}" data-bs-toggle="modal" class="btn btn-info fe fe-eye"></button>

                            <a href="{{ route('admin.edit-artikel',$item->id) }}" class="btn btn-info fe fe-edit"></a>
    
                            <a href="javascript:void(0)" onclick="$(this).find('form').submit()" class="btn btn-danger fe fe-trash-2">
                                <span class="fa fa-trash"></span>
                                <form action="{{route ('admin.view-artikel', $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination">
                {{ $artikel->appends(request()->except('page'))->links() }}
            </div>        
        </div>

        {{-- modal --}}
        @foreach ($artikel as $item)
        <div class="modal fade" id="exampleModalToggle1{{ $item->id }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('storage/' .  $item->gambar) }}" alt="" width="100%">    
                </div>
                <div class="footer-modal text-center">
                  <a href="{{ asset('storage/' .  $item->gambar) }}" target="blank" class="readMore">Lihat Detail</a>
                </div>
              </div>
            </div>
        </div>
        @endforeach

        @foreach ($artikel as $item)
        <div class="modal fade" id="exampleModalToggle2{{ $item->id }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">{{$item->judul}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('storage/' .  $item->gambar) }}" alt="" width="100%">    
                    <p>{!! $item->body !!}</p>
                    <div class="section-category-dateTime-author">
                        <div class="section-category">
                            <p style="color: #009277">{{$item->category->name_category}}</p>
                        </div>
                        <div class="section-author-dateTime d-flex">
                            <div class="section-dateTime">
                                <p>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y', 'id') }}</p>
                            </div>
                            <div class="section-author px-2">
                                <p>{{$item->author}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-modal text-center">
                  <a href="{{route('detail_artikel', $item->slug)}}" target="blank" class="readMore">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</main>
@endsection