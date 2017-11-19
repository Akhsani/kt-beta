@extends('layouts.app')

@section('content')
	@include('layouts.navbar')

	<div class="main-container">
        <section class="bg--secondary space--sm">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <form  method="POST" id="create" action='/talents' enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="wizard bg--white">
                                
                                <h5>Basic Info</h5>
                                <section>
                                    <h2>Hi, Akhsani!<br>Tell us about your Talent</h2>
                                    <hr class="short">
                                    <div class="container">

                                        <div class="row">

                                            <div class="col-sm-12">
                                                <label>Name :</label>
                                            <input type="text" name="name" placeholder="Input your stage name"/>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Category :</label>
                                                <div class="input-select">
                                                    <select name="category">
                                                        <option selected="" value="Default">Select An Option</option>
                                                        @foreach($categories as $category)

                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Fee starts from :</label>
                                                <input type="number" name="price" placeholder="insert minimum fee (Rp)"/>                                                
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Description :</label>
                                                <textarea name="description" placeholder="Tell a story about your talent" rows="4"></textarea>
                                            </div>

                                        </div>

                                    </div>
                                    
                                </section>

                                <h5>Media</h5>
                                <section>
                                <h2>Show your talent to the world !</h2>
                                <hr class="short">
                                <div class="container">

                                        <div class="row">

                                            <div class="col-sm-12">
                                                <label>Cover Image </label>
                                                <input type="file" id="img_thumb" name="img_thumb" onchange="preview_thumb();"/>
                                                <div id="thumb_preview" style='margin: 20px 0'></div>                                             
                                            </div>                                                
                                            <div class="col-sm-12">
                                                <label>Gallery</label>
                                                <input type="file" id="images" name="images[]" onchange="preview_images();" multiple/>
                                                <div id="image_preview" style='margin: 20px 0'></div>                                             
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Video Link :</label>
                                                <textarea name="video" placeholder="Place embedded video link from Youtube" rows="4"></textarea>
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Audio Link :</label>
                                                <textarea name="audio" placeholder="Place embedded audio link from soundcloud, etc" rows="4"></textarea>
                                            </div>


                                        </div>

                                    </div>
                                    
                                </section>
                                <h5>Contact</h5>
                                <section>
                                    <h2>Where can we reach you?</h2>
                                    <hr class="short">
                                    <div class="container">

                                        <div class="row">

                                            <div class="col-sm-12">
                                                <label>Location :</label>
                                                <input id="address" type="text" name="address" placeholder="Address"/>
                                                <input id="city" type="text" name="city" placeholder="City"/>
                                            </div>
                                            <br>

                                            <div class="col-sm-6">
                                                <label>Website :</label>
                                                <input type="text" name="website"/>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Facebook :</label>
                                                <input type="text" name="facebook"/>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Twitter :</label>
                                                <input type="text" name="twitter"/>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Instagram :</label>
                                                <input type="text" name="instagram"/>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Youtube Channel:</label>
                                                <input type="text" name="youtube"/>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Soundcloud Channel:</label>
                                                <input type="text" name="soundcloud"/>
                                            </div>



                                        </div>

                                    </div>
                                </section>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('layouts.footer')
@endsection

@section('script')

	<script>

	    function preview_images() 
	    {
	     var total_file=document.getElementById("images").files.length;
	     for(var i=0;i<total_file;i++)
	     {
	      $('#image_preview').append(
	        "<div class='col-md-3'><img class='border--round' src='"+URL.createObjectURL(event.target.files[i])+"'></div>"
	        );
	     }
	    }

    </script>


@endsection
