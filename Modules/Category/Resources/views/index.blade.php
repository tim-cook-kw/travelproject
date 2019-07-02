@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Category
      <small>Category List</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
      <li class="active">Category</li>
    </ol>
  </section>
@endsection

@section('content')
<section class="content">
   <div class="box box-primary">
        <div class="box-header">
            <a class="btn btn-primary" href="{{route('category.create')}}">Tambah Data</a>
        </div> 

    <div class="box-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kategori as $ktgr)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$ktgr->nama_kategori}}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="{{route('category.edit', ['id' => $ktgr->id_kategori])}}"> Edit </a>

                        <form action="{{route('category.destroy', ['id' => $ktgr->id_kategori])}}" method="post">
                            <input type="hidden" name="_method" value="delete" />
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger btn-sm" type="submit"> Delete </button>
                        </form>
                    </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>


   </div>
</section>
@stop
