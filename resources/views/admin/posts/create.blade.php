<x-admin-master>
    @section('content')

        <h1>Create</h1>

        <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">

            @csrf

                        <div id="div_id_name" class="form-group required"> 
                            <label for="id_name" class="control-label col-md-4  requiredField"> Title<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="title" name="title" placeholder="Title" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div class="controls col-md-8 ">
                        <div class="custom-file">
                            
                           <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
                           <input type="file" name="post_image" class="custom-file-input" id="inputGroupFile01">
                        </div>
                        </div>
                    
                        <div class="controls col-md-8 ">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea3">Body</label>
                            <textarea class="form-control" name="body" id="body" rows="7"></textarea>
                          </div>
                        </div>
                        {{-- <div class="form-group">
                            <div class="controls col-md-offset-4 col-md-8 ">
                                <div id="div_id_terms" class="checkbox required">
                                    <label for="id_terms" class=" requiredField">
                                         <input class="input-ms checkboxinput" id="id_terms" name="terms" style="margin-bottom: 10px" type="checkbox" />
                                         Agree with the terms and conditions
                                    </label>
                                </div> 
                                    
                            </div>
                        </div>  --}}

                       
                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <button type="submit" class="btn btn-primary btn btn-info">Post</button>
                                {{-- <input type="submit" name="Signup" value="Signup" class="btn btn-primary btn btn-info" id="submit-id-signup" /> --}}
                                {{-- or <input type="button" name="Signup" value="Sign Up with Facebook" class="btn btn btn-primary" id="button-id-signup" /> --}}
                            </div>
                        </div> 
                            
        </form>

           

    @endsection
</x-admin-master>