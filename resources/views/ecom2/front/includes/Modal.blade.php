<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <h2>Habiiib</h2>
  
          @php
          $cartProducts = Cart::content();
          @endphp
          
          @foreach($cartProducts as $cartProduct)
          <h2>{{$cartProduct->name}}</h2>
          
            @endforeach
            <button type="submit">Submit</button>
      </div>
    </div>
  </div>



  <script>
    //{{--  wish list counter  --}}
    var count = 0;

      //{{--  add to wish lisht  --}}

      function cart(val){
        count++;
        var sess = $('#sessionID').html();

        if(sess==0){
          $('#signIn').trigger('click')
        }else{

          
          

          $.ajax({
            type:"post",
            url:"add-wish-list",
            data:{
              product_id:val,
              _token:$('#csrftoken').val(),
            },
            dataType: "html",
            success: function(response){
              $('#wlist').html(count)
              alert(response);
            }
          })


        }

      }




</script>