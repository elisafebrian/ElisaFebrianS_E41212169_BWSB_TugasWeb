
{{-- extends disini menandakan bahwa bagian dashboard disini merupakan dari bagian layout.template --}}

@include('backend/layouts.template')

<main id="main" class="main">



            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tabel Pendidikan</h4>
                  <a href="data"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Tambah +
                  </button>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Id
                          </th>
                          <th>
                            Nama
                          </th>
                          <th>
                            Jabatan
                          </th>
                          <th>
                            Tahun Masuk
                          </th>
                          <th>
                            Tahun Keluar
                          </th>
                          <th>
                            Aksi
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($item as $row)
                          <tr>
                              <td>{{$row->id}}</td> 
                              <td>{{$row->nama}}</td>
                              <td>{{$row->jabatan}}</td>
                              <td>{{$row->tahun_masuk}}</td>
                              <td>{{$row->tahun_keluar}}</td>
                              <td>
                                <a href="/delete{{$row->id}}"class="btn btn-danger">Delete</a>
                                <a href="/tampildata{{$row->id}}" class="btn btn-info">Edit</a>
                              </td>
                            </tr>
                          @endforeach
                      </tbody> 
                    </table>
                  </div>
      

            <!-- Revenue Card -->
            

            
              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

    
        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
