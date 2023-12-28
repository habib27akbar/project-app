    @extends('layouts.master')
    
    @section('title','Tahun Akademik')

    @section('css')
        <link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}">
    @endsection

    @section('content')
    
                <div class="page-title">
                    <h3>Tahun Akademik</h3>
                </div>
                
                <section class="section">
                    
                   
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        @include('include.alert')
                                        <a href="{{ route('thn_akademik.create') }}" class="btn btn-primary">Tambah</a>
                                        <br/><br/>
                                         <table class='table table-striped' id="table1">
                                            <thead>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>No</th>
                                                    <th>Kode</th>
                                                    <th>Nama</th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $key => $value)
                                                    <tr>
                                                        <td>
                                                            <div class="btn-group">
                                                                <form method="POST" action="{{ route('thn_akademik.destroy', ['thn_akademik' => $value->id]) }}">
                                                                    <a href="{{ route('thn_akademik.edit',$value->id) }}" class="btn btn-warning">Edit</a>
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button onclick="confirm('apakah anda yakin ?')" class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                        <td>{{ $key+1 }}</td>
                                                        <td>
                                                           {{ $value->kode }}
                                                        </td>
                                                        <td>
                                                           {{ ThnHelper::get_thnakad($value->kode) }}
                                                        </td>
                                                        
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                   
                </section>
               
    @endsection

    @section('js')
        <script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ asset('assets/js/vendors.js') }}"></script>
    @endsection

