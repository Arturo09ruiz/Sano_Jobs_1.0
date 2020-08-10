
$("#search-mobile").on("click", function() {

    $keyword = $('#search_vacants_mobile').val();
    $category = $('#select_categories-mobile').val();
    $country = $('#country-mobile').val();
    $council = $('#cuncils-mobile').val();
    $city = $('#cities-mobile').val();
    $deadline = $('#deadline-mobile').val();
    $created = $('#created-mobile').val();




    if($keyword == "", $category == "", $country == "", $council == "", $city == "", $deadline == "", $created ==""){
        document.getElementById('info_test').className = 'test_show';
    }else{
        window.location = "/vacantes-de-trabajo/Palabra_clave=" + $keyword + "/" + $country + "/" + $council + "/" + $city + "/" + $deadline + "/" + $created + "/" + $category;
    }




});





$("#cuncils").change(function(e){
  console.log(e);
  var council_id =
  searchCities(e.target.value);
});

function searchCities(council_id){
  $.ajax({
    url: "http://127.0.0.1:8000/cities/getcities",
    type: "POST",
    data:{
      id: council_id,
      _token:'{{ csrf_token() }}'
    },
    cache: false,
    dataType: 'json',
    success: function(dataResult){
      var cities = dataResult.data;
      var bodyData = '';
      if (cities.length === 0 ) {
        bodyData+='<option value="" disabled selected>Selecciona La Ciudad</option>';
        $("#cities").html(bodyData);
      }else{
        $.each(cities,function(index,row){
          bodyData+='<option value="'+row.id+'"  >'+row.name+'</option>';
        })
        $("#cities").html(bodyData);
      }
    }
  });
}
