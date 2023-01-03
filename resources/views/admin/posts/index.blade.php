<x-admin-master>
    @section('content')

        <h1>All Posts</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Post Id</th>
                      <th>Author</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Created At</th>
                      <th>Updated</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Post Id</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Updated</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>
                                {{ $post->id }} 
                        </td>
                        <td>
                            {{ $post->user->name }} 
                    </td>
                        <td>
                            {{ $post->title }} 
                        </td>
                        <td>
                            <img src="{{ $post->post_image }}" height="40px" alt="">                            
                        </td>
                        <td>
                          {{ $post->created_at->diffForHumans() }} 
                        </td>
                        <td>
                          {{ $post->updated_at ->diffForHumans() }}
                        </td>

                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

    @endsection

    @section('scripts')

          <!-- Page level plugins -->
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/datatables-script.js')}}"></script>

    @endsection

</x-admin-master>