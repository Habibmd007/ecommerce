<!-- price range -->

 <div class="range">
        <h3 class="agileits-sear-head">Price range</h3>
        <ul class="dropdown-menu6">
            <li>
                <div id="slider-range"></div>
                <input type="hidden" id="hidden_minimum_price" value="0">
                <input type="hidden" id="hidden_maximum_price" value="65000">
                <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
            </li>
        </ul>
    </div>
<!-- //price range -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $(window).load(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [50, 6000],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                $("#hidden_minimum_price").val( ui.values[0] );
                $("#hidden_maximum_price").val( ui.values[1] );

               var min= $("#hidden_minimum_price").val();
               var max= $("#hidden_maximum_price").val();
               
           
               $.ajax({
                dataType:"get",
                url:"",
               
                data:"min="+min+ "& max="+max,
                {{--  data:{
                    'min':min,
                    'min':max,
                },  --}}
                dataType:"html",
                success:function (response) {
                    $('.filter_data').html(response);
                    console.log(response)
                }
            })
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

        


    }); 
}); 



</script>
    
