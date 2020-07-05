<html>
    <!-- Main content -->
    <style>
        .button5 {border-radius: 50%;
                  border-color:white}
        body{
            font-size: 16px;
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <section class="content">

<body>
    <div>
    <nav class="navbar " style="color:#2699FB;border-bottom:solid #2699FB 1px">
        <!-- Navbar content -->
        <div class="container"> <div class="container"> <div class="container"> <div class="container" style="border-left:solid #2699FB 1px"> Menu <div style="float:right"><i class="fa fa-user"></i> Username</div></div></div></div></div>

      </nav>
    </div>
    <br/>
  <div class="container">
  <div class="box-header">

  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>

    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div  >

      {{--}}    <div id="insurance">

      </div>--}}
      <div id="testrotate">

      </div>
          <script src="{{ asset ("/js/app.js") }}" type="text/javascript"></script>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>

          <div style="background-color:blue"></div>

    </div>
  </div>
  <!-- /.box-body -->

</div>
    </section>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <script type="text/javascript">

          $(".name").select2({
                placeholder: "Select",
                //allowClear: true
            });
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('change','.country',function(){
            //  console.log("hmm its change");

                var department_id=$(this).val();
                //console.log(department_id);
                var div=$(this).parent();
                var op=" ";
                $.ajax({
                    type:'get',
                    url:'{!!URL::to('findProvince')!!}',
                    data:{'id':department_id},

                    success:function(data){





                      op+='<option value="0" selected disabled>-เลือกจังหวัด-</option>';
                      for(var i=0; i<data.length;i++){
                        op+='<option value="'+data[i].id+'">'+data[i].name_in_thai+'</option>';

                      }
                      $('.pro').html(" ");
                      $('.pro').append(op);

                    },
                    error:function(){

                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('change','.prodis',function(){
            //  console.log("hmm its change");

                var department_id=$(this).val();
                //console.log(department_id);
                var div=$(this).parent();
                var op=" ";
                $.ajax({
                    type:'get',
                    url:'{!!URL::to('findDistrict')!!}',
                    data:{'id':department_id},

                    success:function(data){





                      op+='<option value="0" selected disabled>-เลือกเขต-</option>';
                      for(var i=0; i<data.length;i++){
                        op+='<option value="'+data[i].id+'">'+data[i].name_in_thai+'</option>';

                      }
                      $('.dis').html(" ");
                      $('.dis').append(op);

                    },
                    error:function(){

                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('change','.dissub',function(){
            //  console.log("hmm its change");

                var department_id=$(this).val();
                //console.log(department_id);
                var div=$(this).parent();
                var op=" ";
                var op2=" ";
                $.ajax({
                    type:'get',
                    url:'{!!URL::to('findSubdistrict')!!}',
                    data:{'id':department_id},

                    success:function(data){





                      op+='<option value="0" selected disabled>-เลือกแขวง-</option>';

                      for(var i=0; i<data.length;i++){
                        op+='<option value="'+data[i].id+'">'+data[i].name_in_thai+'</option>';
                        op2+='<input id="add2_postcode" type="text" class="form-control subdis2" name="add2_postcode" value="'+data[i].zip_code+'"  >';
                      }
                      $('.subdis').html(" ");
                      $('.subdis').append(op);
                      $('.subdis2').html(" ");
                      $('.subdis2').append(op2);

                    },
                    error:function(){

                    }
                });
            });
        });
    </script>


    <!-- /.content -->

    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('change','.country2',function(){
            //  console.log("hmm its change");

                var department_id=$(this).val();
                //console.log(department_id);
                var div=$(this).parent();
                var op=" ";
                $.ajax({
                    type:'get',
                    url:'{!!URL::to('findProvince')!!}',
                    data:{'id':department_id},

                    success:function(data){




                      op+='<option value="0" selected disabled>-เลือกจังหวัด-</option>';
                      for(var i=0; i<data.length;i++){
                        op+='<option value="'+data[i].id+'">'+data[i].name_in_thai+'</option>';

                      }
                      $('.pro2').html(" ");
                      $('.pro2').append(op);

                    },
                    error:function(){

                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('change','.prodis2',function(){
            //  console.log("hmm its change");

                var department_id=$(this).val();
                //console.log(department_id);
                var div=$(this).parent();
                var op=" ";
                $.ajax({
                    type:'get',
                    url:'{!!URL::to('findDistrict')!!}',
                    data:{'id':department_id},
                    success:function(data){
                      op+='<option value="0" selected disabled>-เลือกเขต-</option>';
                      for(var i=0; i<data.length;i++){
                        op+='<option value="'+data[i].id+'">'+data[i].name_in_thai+'</option>';

                      }
                      $('.dis2').html(" ");
                      $('.dis2').append(op);

                    },
                    error:function(){

                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('change','.dissub2',function(){
            //  console.log("hmm its change");

                var department_id=$(this).val();
                //console.log(department_id);
                var div=$(this).parent();
                var op=" ";
                var op2=" ";
                $.ajax({
                    type:'get',
                    url:'{!!URL::to('findSubdistrict')!!}',
                    data:{'id':department_id},

                    success:function(data){





                      op+='<option value="0" selected disabled>-เลือกแขวง-</option>';

                      for(var i=0; i<data.length;i++){
                        op+='<option value="'+data[i].id+'">'+data[i].name_in_thai+'</option>';
                        op2+='<input id="add2_postcode" type="text" class="form-control subdis2" name="add2_postcode" value="'+data[i].zip_code+'"  >';
                      }
                      $('.subdis2').html(" ");
                      $('.subdis2').append(op);
                      $('.subdis3').html(" ");
                      $('.subdis3').append(op2);

                    },
                    error:function(){

                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
      $('.subject-list').on('change', function() {
        $('.subject-list').not(this).prop('checked', false);
    });
    </script>
    <script>
    $(document).ready(function(){
        $('.check').click(function() {
            $('.check').not(this).prop('checked', false);
        });
    });
    </script>
    <script type="text/javascript">

        $(document).ready(function() {

          $(".publicadd").click(function(){
              var html = $(".clonepublic").html();
              $(".incrementpublic").after(html);
          });

          $("body").on("click",".publicremove",function(){
              $(this).parents(".control-grouppublic").remove();
          });

        });

    </script>
    <script type="text/javascript">

        $(document).ready(function() {

          $(".partneradd").click(function(){
              var html = $(".clonepartner").html();
              $(".incrementpartner").after(html);
          });

          $("body").on("click",".partnerremove",function(){
              $(this).parents(".control-grouppartner").remove();
          });

        });

    </script>
    <script type="text/javascript">

        $(document).ready(function() {

          $(".useradd").click(function(){
              var html = $(".cloneuser").html();
              $(".incrementuser").after(html);
          });

          $("body").on("click",".userremove",function(){
              $(this).parents(".control-groupuser").remove();
          });

        });

    </script>
    <script type="text/javascript">

        $(document).ready(function() {

          $(".guildadd").click(function(){
              var html = $(".cloneguild").html();
              $(".incrementguild").after(html);
          });

          $("body").on("click",".guildremove",function(){
              $(this).parents(".control-groupguild").remove();
          });

        });

    </script>
    <script type="text/javascript">

        $(document).ready(function() {

          $(".groupmemadd").click(function(){
              var html = $(".clonegroupmem").html();
              $(".incrementgroupmem").after(html);
          });

          $("body").on("click",".groupmemremove",function(){
              $(this).parents(".control-groupgroupmem").remove();
          });

        });

    </script>
    <script type="text/javascript">

        $(document).ready(function() {

          $(".grouppidadd").click(function(){
              var html = $(".clonegrouppid").html();
              $(".incrementgrouppid").after(html);
          });

          $("body").on("click",".grouppidremove",function(){
              $(this).parents(".control-groupgrouppid").remove();
          });

        });

    </script>
    <script type="text/javascript">

        $(document).ready(function() {

          $(".grouppartadd").click(function(){
              var html = $(".clonegrouppart").html();
              $(".incrementgrouppart").after(html);
          });

          $("body").on("click",".grouppartremove",function(){
              $(this).parents(".control-groupgrouppart").remove();
          });

        });

    </script>
    </body>
</html>
