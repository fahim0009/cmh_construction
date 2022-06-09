@extends('admin.layouts.admin')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ul>
        </div>
        <div id="addThisFormContainer">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>New property Image</h3>
                            <div class="ermsg"></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                <div class="tile">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            {!! Form::open(['url' => 'admin/productid/create','id'=>'createThisForm']) !!}
                                            {!! Form::hidden('codeid','', ['id' => 'codeid']) !!}
                                            @csrf


                                            <div>
                                                <input type="hidden" name="property_id" id="property_id" value="{{$property_id}}">

                                            </div>

                                            <div>
                                                <label for="media">Image or Videos (*size 835*467 )</label>
                                                <input id="media" class="form-control" multiple="" accept="image/gif, image/jpeg, image/png, video/mp4" name="media[]" type="file">
                                            </div>

                                        </div>

                                        <div class="col-lg-6" id="colorForm">
                                            <div>
                                                <div class="form-group">
                                                    <div class="preview2"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tile-footer">
                                        <input type="button" id="addBtn" value="Create" class="btn btn-primary">
                                        <input type="button" id="FormCloseBtn" value="Close" class="btn btn-warning">
                                        {!! Form::close() !!}

                                    </div>
                                </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <a href="{{ route('admin.property')}}" id="backBtn" class="btn btn-success">Back</a>
        <button id="newBtn" type="button" class="btn btn-info">Add New</button>
        <hr>

        <div id="contentContainer">


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3> Property Image</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="container">


                                    <table class="table table-bordered table-hover" id="example">
                                        <thead>
                                        <tr>
                                          <th>ID</th>
                                          <th>Property Title</th>
                                          <th>Image</th>
                                          <th>Video</th>
                                          <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($image as $key => $data)
                                              @php
                                                 $allowed = array('gif', 'png', 'jpg', 'jpeg', 'gif', 'svg');
                                                $filename = $data->image;
                                                $ext = pathinfo($filename, PATHINFO_EXTENSION);

                                              @endphp
                                            <tr>
                                              <td>{{$key + 1}}</td>
                                              <td>{{\App\Models\Property::where('id','=',$data->property_id)->first()->title }}</td>


                                              @if (!in_array($ext, $allowed))
                                                <td>
                                                    <video width="320" height="240" controls>
                                                        <source src="{{asset('images/property/'.$data->image)}}" type="video/ogg">.
                                                    </video>
                                                </td>
                                              @else
                                              <td><img src="{{asset('images/property/'.$data->image)}}" height="80px" width="80px" alt=""></td>
                                              @endif







                                              <td>
                                                <a id="deleteBtn" rid="{{$data->id}}"><i class="fa fa-trash-o" style="color: red;font-size:16px;"></i></a>
                                              </td>
                                            </tr>
                                            @endforeach
                                          </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </main>

@endsection
@section('script')
<script>
    $(function() {
      $('.toggle-class').change(function() {
        var url = "{{URL::to('/admin/activeslider')}}";
          var status = $(this).prop('checked') == true ? 1 : 0;
          var id = $(this).data('id');
           console.log(status);
          $.ajax({
              type: "GET",
              dataType: "json",
              url: url,
              data: {'status': status, 'id': id},
              success: function(d){
                // console.log(data.success)
                if (d.status == 303) {
                                $(".ermsg").html(d.message);
                            }else if(d.status == 300){
                                $(".ermsg").html(d.message);
                                // window.setTimeout(function(){location.reload()},2000)
                            }
                        },
                        error: function (d) {
                            console.log(d);
                        }
          });
      })
    })
  </script>


    <script>


var storedFiles2 = [];


        $(document).ready(function () {

            $("#addThisFormContainer").hide();
            $("#newBtn").click(function(){
                clearform();
                $("#newBtn").hide(100);
                $("#backBtn").hide(100);
                $("#addThisFormContainer").show(300);

            });
            $("#FormCloseBtn").click(function(){
                $("#addThisFormContainer").hide(200);
                $("#newBtn").show(100);
                $("#backBtn").show(100);
                clearform();
            });


            //header for csrf-token is must in laravel
            $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
            //

            var url = "{{URL::to('/admin/property-image')}}";
            var dlturl = "{{URL::to('/admin/property-image-delete')}}";
            // console.log(url);
            $("#addBtn").click(function(){
            //   alert("#addBtn");
                if($(this).val() == 'Create') {

                    var form_data = new FormData();
                    for(var i=0, len=storedFiles2.length; i<len; i++) {
                        form_data.append('media[]', storedFiles2[i]);
                    }
                    form_data.append("property_id", $("#property_id").val());


                    var name= $("#property_id").val();
                    console.log(name);
                    $.ajax({
                      url: url,
                      method: "POST",
                      contentType: false,
                      processData: false,
                      data:form_data,
                      success: function (d) {
                          if (d.status == 303) {
                              $(".ermsg").html(d.message);
                          }else if(d.status == 300){
                            success("Data Insert Successfully!!");
                                window.setTimeout(function(){location.reload()},2000)
                          }
                      },
                      error: function (d) {
                          console.log(d);
                      }
                  });
                }
                //create  end
                //Update
                if($(this).val() == 'Update'){
                // alert('update btn work');
                for ( instance in CKEDITOR.instances ) {
                CKEDITOR.instances[instance].updateElement();
                }
                  var file_data = $('#image').prop('files')[0];
                  if(typeof file_data === 'undefined'){
                    file_data = 'null';
                  }
                  var form_data = new FormData();
                  form_data.append("title", $("#title").val());
                  form_data.append("category", $("#category").val());
                  form_data.append('image', file_data);
                  form_data.append("description", $("#description").val());
                  form_data.append("location", $("#location").val());

                  var title = $("#title").val();
                  var slug = title.toLowerCase().replace(/[^\w-]+/g, '-');
                  form_data.append('_method', 'put');

                    // console.log(image);
                    $.ajax({
                        url:url+'/'+$("#codeid").val(),
                        type: "POST",
                        dataType: 'json',
                        contentType: false,
                        processData: false,
                        data:form_data,
                        success: function(d){
                            console.log(d);
                            if (d.status == 303) {
                                $(".ermsg").html(d.message);
                                pagetop();
                            }else if(d.status == 300){
                                success("Data Update Successfully!!");
                                window.setTimeout(function(){location.reload()},2000)
                            }
                        },
                        error:function(d){
                            console.log(d);
                        }
                    });
                }
                //Update
            });
            //Edit
            $("#contentContainer").on('click','#EditBtn', function(){
                //alert("btn work");
                codeid = $(this).attr('rid');
                //console.log($codeid);
                info_url = url + '/'+codeid+'/edit';
                //console.log($info_url);
                $.get(info_url,{},function(d){
                    populateForm(d);
                    pagetop();
                });
            });
            //Edit  end

            //Delete
            $("#contentContainer").on('click','#deleteBtn', function(){
                if(!confirm('Sure?')) return;
                 masterid = $(this).attr('rid');
                 info_url = dlturl + '/'+masterid;
                console.log(info_url);
                //alert(info_url);
                $.ajax({
                    url:info_url,
                    method: "GET",
                    type: "DELETE",
                    data:{
                    },
                    success: function(d){
                        if(d.success) {
                            alert(d.message);
                            location.reload();
                        }
                    },
                    error:function(d){
                        console.log(d);
                    }
                });
            });
            //Delete




            function populateForm(data){
                for ( instance in CKEDITOR.instances ) {
                    CKEDITOR.instances[instance].updateElement();
                    }
                $("#title").val(data.title);
                $("#description").val(data.description);
                 CKEDITOR.replace( 'description' );
                $("#location").val(data.location);
                $("#category").val(data.category);
                $("#codeid").val(data.id);
                $("#addBtn").val('Update');
                $("#addThisFormContainer").show(300);
                $("#newBtn").hide(100);
            }
            function clearform(){
                $('#createThisForm')[0].reset();
                $("#addBtn").val('Create');
            }
        });

               // gallery images
        /* WHEN YOU UPLOAD ONE OR MULTIPLE FILES */
        $(document).on('change','#media',function(){
            //$('.preview').html("");
            len_files = $("#media").prop("files").length;
            var construc = "<div class='row'>";
            for (var i = 0; i < len_files; i++) {
                var file_data2 = $("#media").prop("files")[i];
                storedFiles2.push(file_data2);
                //console.log(file_data);
                //form_data.append("media[]", file_data);
                //TODO: work on delete image btn in file upload
                construc += '<div class="col-3 singleImage my-3"><span data-file="'+file_data2.name+'" class="btn ' +
                    'btn-sm btn-danger imageremove2">&times;</span><img width="120px" height="auto" src="' +  window.URL.createObjectURL(file_data2) + '" alt="'  +  file_data2.name  + '" /></div>';
            }
            construc += "</div>";
            $('.preview2').append(construc);
        });

        $(".preview2").on('click','span.imageremove2',function(){
            //console.log($(this).next("img"));
            var trash = $(this).data("file");
            for(var i=0;i<storedFiles2.length;i++) {
                if(storedFiles2[i].name === trash) {
                    storedFiles2.splice(i,1);
                    break;
                }
            }
            $(this).parent().remove();

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#property").addClass('active');
        });
    </script>

@endsection
