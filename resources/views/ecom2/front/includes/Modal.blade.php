<script>
    //{{--  wish list counter  --}}
    var count = 0;

      //{{--  add to wish lisht  --}}

      function cart(val){
        var btnId ='#'+val;
        count++;
        var sess = $('#sessionID').html();
        if(sess==0){
          $('#signIn').trigger('click')
         
        }else{

          
          
          $('#modal'+val).trigger('click')
          $.ajax({
            type:"post",
            url:'http://localhost/ecommerce2/public/add-wish-list',
            data:{
              product_id:val,
              _token:$('#csrftoken').val(),
            },
            dataType: "html",
            success: function(response){
              $('#wlistModal').html(response)
              $('#wlist').html(count)
              $(btnId).html('added')
            }
          })


        }

      }




</script>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <table class="table">
          
           
          <tbody id="wlistModal">
            
              
            
          </tbody>
          <h1><b>Added to wish list</b></h1>
          <a href="{{route('wish-list')}}" class="btn btn-success">Goto Wish List<i class="fa fa-heart-o" aria-hidden="true"></i></a>
        </table>
      </div>
    </div>
  </div>



  