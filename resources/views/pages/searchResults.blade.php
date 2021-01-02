@extends('../layouts/master', ['title' => 'Tìm kiếm'])
    @section('body')
    @parent
        <main class="main main-home">
            <div class="container p-6">
               <p>Muốn tìm kiếm tên '{{request() -> input('querySearch')}}'</p>

               @foreach($products as $pro)
               <div>{{ $pro-> proName}}</div>
               <div>{{ $pro-> proId}}</div>
               @endforeach
            </div>
      
    </main>
@stop